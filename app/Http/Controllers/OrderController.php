<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Product;
use App\Models\TemporaryOrder;
use App\Models\Order;
use App\Models\DetailOrder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class OrderController extends Controller
{
    public function order($id)
    {
        $product = Product::where('id', $id)->first();
        return view('order', compact('product'));
    }

    public function orderpost(Request $request, $id)
    {
        // Read data product
        $product = Product::where('id', $id)->first();
        $date = carbon::now()->format('ymd');

        // Validasi stock
        if($request->quantity > $product->product_stock){
            return redirect('order/'.$id)->with('toast_error', 'Stock tidak cukup');
        }
        
        // Cek temporary order statusnya pending atau tidak
        $temporary_order = TemporaryOrder::where('user_id', Auth::user()->id)->where('status', 'pending')->first();

        // Jika tidak ada status pending, maka buat temporary order baru
        if(empty($temporary_order)){
            $temporary_order = new TemporaryOrder;
            $temporary_order->status = 'pending';
            $temporary_order->temporary_quantity = 0;
            $temporary_order->temporary_price = 0;
            $temporary_order->user_id = Auth::user()->id;
            $temporary_order->save();
        }
            // Jika status pending, maka update temporary order
            $temporary_order->temporary_quantity = $temporary_order->temporary_quantity + $request->quantity;
            $temporary_order->temporary_price = $temporary_order->temporary_price + ($product->product_price * $request->quantity);
            $temporary_order->save();

        // Simpan data ke detail order
        $new_temporary_order = TemporaryOrder::where('user_id', Auth::user()->id)->where('status', 'pending')->first();

        // Cek apakah product sudah ada di detail order atau belum
        $cek_detail_order = DetailOrder::where('product_id', $product->id)->where('temporary_order_id', $temporary_order->id)->first();
        // Jika belum ada, maka buat detail order baru
        if(empty($cek_detail_order)){
            $detail_order = new DetailOrder;
            $detail_order->product_id = $product->id;
            $detail_order->temporary_order_id = $new_temporary_order->id;              
            $detail_order->quantity = $request->quantity;
            $detail_order->note = $request->note;
            $detail_order->price = $product->product_price * $request->quantity;
            $detail_order->save();
        }else{
            // Jika sudah ada, maka update detail order
            $detail_order = DetailOrder::where('product_id', $product->id)->where('temporary_order_id', $new_temporary_order->id)->first();
            $detail_order->quantity = $detail_order->quantity + $request->quantity;
            $detail_order->note = $request->note;
            $detail_order->price = $detail_order->price + ($product->product_price * $request->quantity);
            $detail_order->save();
        }

        return redirect('dashboard')->with('success', 'Pesanan berhasil ditambahkan!');
    }

    public function checkout()
    {
        $temporary_order = TemporaryOrder::where('user_id', Auth::user()->id)->where('status', 'pending')->first();
        $detail_orders = DetailOrder::with('products')->where('temporary_order_id', $temporary_order->id)->get();
        $payments = DB::table('payments')->get();

        return view('checkout', compact('temporary_order', 'detail_orders', 'payments'));

    }

    public function checkoutpost(Request $request)
    {
        $temporary_order = TemporaryOrder::where('user_id', Auth::user()->id)->where('status', 'pending')->first();
        $detail_orders = DetailOrder::with('products')->where('temporary_order_id', $temporary_order->id)->get();
        $payments = DB::table('payments')->get();
        $date = carbon::now()->format('ymd');

        $request->validate([
            'payment_id' => 'required',
        ],[
            'payment_id.required' => 'Pilih metode pembayaran terlebih dahulu!',
        ]);

        // Simpan data ke table order
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->temporary_order_id = $temporary_order->id;
        $order->payment_id = $request->payment_id;
        $order->order_total_quantity = $temporary_order->temporary_quantity;
        $order->order_total_price = $temporary_order->temporary_price;
        $order->save();

        // Update status temporary order
        $temporary_order->status = 'checkout';
        $temporary_order->save();

        // Update stock product
        foreach($detail_orders as $detail_order){
            $product = Product::where('id', $detail_order->product_id)->first();
            $product->product_stock = $product->product_stock - $detail_order->quantity;
            $product->save();
        }

        return redirect('dashboard')->with('success', 'Checkout berhasil! Pesanan sedang diproses');
    }

    public function checkoutdelete($id)
    {
        // Hapus data detail order
        $detail_order = DetailOrder::where('id', $id)->first();
        $detail_order->delete();

        // Update temporary order
        $temporary_order = TemporaryOrder::where('status', 'pending')->first(); 
        $temporary_order->temporary_quantity = $temporary_order->temporary_quantity - $detail_order->quantity;
        $temporary_order->temporary_price = $temporary_order->temporary_price - $detail_order->price;
        $temporary_order->save();

        return redirect('checkout')->with('success', 'Pesanan Berhasil Dihapus');
    }

    public function edit($id)
    {
        $detail_order = DetailOrder::find($id);
        return view ('editorder', compact('detail_order'));

        
    }

    public function updatepost(Request $request, $id)
    {
        // Read data untuk validasi temporary order
        $temporary_order = TemporaryOrder::where('user_id', Auth::user()->id)->where('status', 'pending')->first();

        // Read data detail order
        $detail_order = DetailOrder::find($id);

        // Request validasi
        $this->validate($request, [
            'quantity' => 'required|numeric',
        ]);

        // Menyimpan nilai sebelum diupdate
        $old_quantity = $detail_order->quantity;
        $old_price = $detail_order->price;

        // Validasi stock
        if($request->quantity > $detail_order->products->product_stock){
            return redirect('editorder/'.$id)->with('toast_error', 'Stock tidak cukup');
        }

        if($detail_order){
            $price = $detail_order->products->product_price * $request->quantity;
            $detail_order->update([
                'quantity' => $request->quantity,
                'note' => $request->note,
                'price' => $price
            ]);
        }

        // Update temporary order
        $temporary_order = TemporaryOrder::where('status', 'pending')->first();
        if($request->quantity > $old_quantity){
            $temporary_order->temporary_quantity = $temporary_order->temporary_quantity + ($request->quantity - $old_quantity);
            $temporary_order->temporary_price = $temporary_order->temporary_price + ($detail_order->products->product_price * ($request->quantity - $old_quantity));
            $temporary_order->save();
        }else{
            $temporary_order->temporary_quantity = $temporary_order->temporary_quantity - ($old_quantity - $request->quantity);
            $temporary_order->temporary_price = $temporary_order->temporary_price - ($detail_order->products->product_price * ($old_quantity - $request->quantity));
            $temporary_order->save();
        }

        return redirect('checkout')->with('success', 'Pesanan Berhasil Diupdate');
    }
}
