<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail | FoodieHub</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $product->product_name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('img') }}/{{ $product->product_image }}" class="rounded mx-auto d-block" width="30%" alt="">
                            </div>
                            <div class="col-md-6">
                                <h4>{{ $product->product_name}}</h4>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($product->product_price) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Stock</td>
                                            <td>:</td>
                                            <td>{{ number_format($product->product_stock) }}</td>
                                        </tr>
                                        <form action="{{ url('order') }}/{{ $product->id }}" method="POST">
                                        @csrf                                        
                                        <tr>
                                            <td>Jumlah Pesan</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="quantity" class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Note</td>
                                            <td>:</td>
                                            <td>

                                                    <input type="text" name="note" class="form-control">
                                                    <button type="submit" class="btn btn-primary mt-3">Keranjang</button>
                                        </form>
                                    </tbody
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