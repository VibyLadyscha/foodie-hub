<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Order Detail | FoodieHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/orderdetail.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div style=" position:relative; top: 40px; left: 30px; color: black; font-size: 48px; font-family: League Spartan; font-weight: 600; word-wrap: break-word">
      <a href="{{/dashboard}}"><img src="img/Panahkiri.svg" style=" position:relative; width: 3.1%; top: -5px"></a>        
  </div>
    <div class="card-wrapper">
      <div class="card">
        <!-- card left -->
        <div class="product-imgs">
          <div class="img-display">
            <div class="img-showcase">
              <img src="{{ url('img') }}/{{ $product->product_image }}" alt="food" />
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class="product-content">
          <h2 class="product-title">{{ $product->product_name }}</h2>

          <div class="product-price">
            <p class="price">Harga: <span>Rp. {{ number_format($product->product_price) }}</span></p>
          </div>

          <div class="product-detail">
            <h2>Komposisi:</h2>
            <p>Telur, Cabai, Bawang Merah, Bawang Putih, Kemiri, Gula, Garam, Daun Jeruk</p>
          </div>

          <form action="{{ url('order') }}/{{ $product->id }}" method="POST">
            @csrf 
            <div class="purchase-info">
            <h2>Jumlah:</h2>
            <input id="number" type="text" name="quantity" placeholder="Jumlah" required>
            <!-- <input /> -->
            </div>
            
            <div class="notes">
            <h2>Catatan:</h2>
            <textarea name="note" cols="30" rows="5" placeholder="Catatan" type="text"></textarea>
            <div class="purchase-info">
              <button type="submit" class="btn">Tambah Keranjang<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
