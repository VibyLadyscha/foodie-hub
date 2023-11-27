<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Edit Order | FoodieHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{ asset('css/orderdetail.css') }}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"/>
      <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  </head>

  <body>
  <section class="fifty" >
    <div class="main-container">
      <nav class="navbar">
        <img src="{{ asset('img/F odie 1.png') }}" style="position:relative; left: 20px">
        <?php
        $notif = App\Models\TemporaryOrder::where('user_id', Auth::user()->id)->where('status', 'pending')->value('temporary_quantity');
        ?>
      <ul>
        <li><a href="{{ url('checkout') }}" class="nav-link" style="position:relative; top: 10px; left:-90px;">
         <button class="btn btn-outline-light"> <i ></i>
         <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ $notif }}</span>
    </button>
        </a></li>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 120px; height: 50px; font-size: 22px; font-family: League Spartan;">
              @auth
              {{auth()->user()->username}}
              @endauth
            </button>
            <ul class="dropdown-menu">
              <form action="/logout" method="POST"> 
                @csrf
                <li style="font-size: 20px; font-family: League Spartan; font-weight: 800;"><button type="submit" class="dropdown-item">Logout</button></li>
            </ul>
            </form>
          </div>
    </ul>
    </div>
  </nav>
  <div class="text" style="left: 145px; top: 184px">
  </div>
  </section>

  <div style=" position:relative; top: 20px; left: 30px; color: #40916c; font-size: 48px; font-family: League Spartan; font-weight: 600; word-wrap: break-word">
  <a href="{{ url('checkout') }}"><img src="{{ asset('img/Panahkiri.svg') }}" style=" position:relative; width: 2%; top: -5px"></a>   Edit Order        
</div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="margin-top: 40px;
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="{{ url('img') }}/{{ $detail_order->products->product_image }}" class="rounded mx-autod-block" width="100%" alt="food" />
                </div>
                <div class="col-md-6">
                  <h2 class="product-title" style="font-size: 48px; font-family: League Spartan; font-weight: 600; word-wrap: break-word; margin-top: 30px;">{{ $detail_order->products->product_name }}</h2>
                  <div class="product-price" style="font-size: 28px; font-family: League Spartan; font-weight: 600; word-wrap: break-word;">
                    <h2 class="price">Harga: <span>Rp. {{ number_format($detail_order->products->product_price) }}</span></h2>
                  </div>
                  <div class="product-detail">
                    <h2>Komposisi:</h2>
                    <p>{{ $detail_order->products->product_composition }}</p>
                  </div>

                  <form action="{{ url('update') }}/{{ $detail_order->id }}" method="POST">
                                            @csrf 
                                            {{ method_field('PUT') }}
<input type="hidden" name="product_id" value="{{ $detail_order->product_id }}">
                                            <input type="hidden" name="user_id" value="{{ $detail_order->user_id }}">
                    <div class="purchase-info">
                      <h2>Jumlah:</h2>
                      <input id="number" type="number" name="quantity" min="1" placeholder="Jumlah" value="{{ $detail_order->quantity }}" required/>
                    </div>
                    <div class="notes">
                      <h2>Catatan:</h2>
                      <textarea name="note" cols="30" rows="5" type="text" placeholder="Catatan">{{ $detail_order->note }}</textarea>
                      <div class="purchase-info">
                        <button type="submit" class="btn">Simpan Perubahan</a></button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>  
        </div>
        </div>
      </div>
  </body>
</html>
