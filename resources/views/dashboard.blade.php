<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginjg.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Dashboard | FoodieHub</title>
</head>
<body>
  
  <section class="fifty" >
    <div class="main-container">
      <nav class="navbar">
        <img src="img/F odie 1.png" style="position:relative; left: 20px">
        <?php
        $notif = App\Models\TemporaryOrder::where('user_id', Auth::user()->id)->where('status', 'pending')->value('temporary_quantity');
        ?>
      <ul>
        <li><a href="{{ url('checkout') }}" class="nav-link" style=" position:relative; top: 6px; left:-90px">
         <button class="btn btn-outline-light"> <i ></i>
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ $notif }}</span>
    </button>
        </a></li>
          <div class="dropdown" style="position:relative; left: -70px; top:8px">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              @auth
              Halo, {{auth()->user()->username}}
              @endauth
            </button>
            <ul class="dropdown-menu">
              <form action="/logout" method="POST"> 
                @csrf
                <li style="margin-left: 10px"><button class="dropdown-item" type="submit">Logout</button></li>
            </ul>
          </div>
    </ul>
    </div>
  </nav>
  <div class="text" style="left: 145px; top: 184px">
  </div>
  </section>
  
    <section class="fiftyfifty" style="background: linear-gradient(180deg, rgba(82, 183, 136, 0.18) 0%, white 100%)">
        <div class="text" style="left: 145px; top: 184px">
        <div style="width: 100%; height: 100%; color: #34835D; font-size: 70px; font-family: League Spartan; font-weight: 700; word-wrap: break-word; position:relative; top: -900px; left: 60px">Selamat Datang,</div>

        <div class="row">
        @foreach($products as $key => $product)
        <div class="card" style="position:relative; top:-880px; left: 120px; width: 25rem; margin-bottom: 50px; margin-right: 20px;">
        <img class="card-img-top" src="{{ url('img') }}/{{ $product->product_image }}" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title" style="position:relative; left: 90px">{{ $product->product_name }}</h2>
            <h5>Stok: {{ number_format($product->product_stock) }}</h5>
            <h4 class="card-text">Rp. {{ number_format($product->product_price) }}</h4>
            <a href="{{ url('order')}}/{{ $product->id }}" class="btn btn-primary" style="position:relative; left: 190px; top: -60px">+</a>
        </div>
        </div>
        @if(($key + 1) % 4 == 0 && $key + 1 < count($products))
            </div><div class="row">
        @endif
        @endforeach
    </div>      
</section>
  
</body>
</html>
