<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Temporary_Order;
use App\Models\Order;

class OrderController extends Controller
{
    function order($id)
    {
        $product = Product::where('id', $id)->first();
        return view('order', compact('product'));
    }

    function orderpost(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        //Simpan ke tabel order
        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->product_id = $product->id;
        $order->order_total_quantity = 0;
        $order->order_total_price = 0;
        $order->created_at = now();
        $order->save();

        //Simpan ke tabel detail_order
        $new_order = Order::where('user_id', auth()->user()->id)->where('order_total_quantity', 0)->first();
        $detail_order = new$detail_Order;
        $detail_order->product_id = $product->id;
        $detail_order->order_id = $new_order->id;
        $detail_order->quantity = $request->quantity;
        $detail_order->note = $request->note;
        $detail_order->price = $product->product_price * $request->quantity;
        $detail_order->save();

        return redirect('dashboard')->with('success', 'Pesanan Berhasil Ditambahkan');
    }
}
