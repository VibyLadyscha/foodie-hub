<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order | FoodieHub</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ini back</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="foto" class="rounded mx-auto d-block" width="30%" alt="">
                            </div>
                            <div class="col-md-6">
                                <h4>{{ $detail_order->products->product_name }}</h4>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($detail_order->products->product_price) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Stock</td>
                                            <td>:</td>
                                            <td>{{ number_format($detail_order->products->product_stock) }}</td>
                                        </tr>                                       
                                        <form action="{{ url('update') }}/{{ $detail_order->id }}" method="POST">
                                            @csrf 
                                            {{ method_field('PUT') }}
                                            <input type="hidden" name="product_id" value="{{ $detail_order->product_id }}">
                                            <input type="hidden" name="user_id" value="{{ $detail_order->user_id }}">
                                            <div class="form-group">
                                                <label for="quantity">Jumlah Pesan</label>
                                                <input type="text" name="quantity" class="form-control" value="{{ $detail_order->quantity }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="note">Note</label>
                                                <input type="text" name="note" class="form-control" value="{{ $detail_order->note }}">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
