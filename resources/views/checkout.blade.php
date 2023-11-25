<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Check Out | FoodieHub</title>
</head>
<body>
    <h4>Checkout</h4>
    <a href="{{ url('dashboard') }}">Kembali</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Note</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach($detail_orders as $detail_order)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $detail_order->products->product_name }}</td>
                <td>{{ number_format($detail_order->quantity) }}</td>
                <td>Rp. {{ number_format($detail_order->price) }}</td>
                <td>{{ $detail_order->note }}</td>
                <td>
                    <form action="{{ url('checkout') }}/{{ $detail_order->id }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger btn-sm">hapus</button>
                    </form>
                    <a href="{{ url('editorder') }}/{{ $detail_order->id }}" class="btn btn-warning btn-sm">edit</a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3"><strong>Total Price</strong></td>
                <td colspan="3">Rp. {{ number_format($temporary_order->temporary_price) }}</strong></td>
            </tr>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>