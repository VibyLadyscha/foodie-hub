<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | FoodieHub</title>
</head>
<body>
    @auth
    <h3>hello, {{auth()->user()->username}}</h3>
    @endauth

    <!-- logout -->
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    @foreach($products as $product)
        <!-- card -->
        <div class="col-mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('img') }}/{{ $product->product_image }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                    <p class="card-text">
                        <strong>Stock : </strong> {{ number_format($product->product_stock) }} <br>
                        <strong>Harga : </strong> Rp. {{ number_format($product->product_price) }} <br>
                    </p>
                    <a href="{{ url('order')}}/{{ $product->id }}" class="btn btn-primary">pesan</a>
                </div>
            </div>
        </div>

    @endforeach
</body>
</html>