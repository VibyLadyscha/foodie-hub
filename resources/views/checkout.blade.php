<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/keranjang.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Your Webpage Title</title>
</head>
<body>
    <section class="fifty" >
        <div class="main-container">
            <nav class="navbar">
                <img src="img/F odie 1.png" style="position:relative; left: 20px">
                
              <ul>
                <li><a href="#" class="nav-link" style=" position:relative; top: 6px; left:-90px">
                 <button  class="btn btn-outline-light"> <i ></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <p id="makanan">0</p>
                <span class="visually-hidden">unread messages</span>
            </span>
        </button>
                </a></li>
                <script>
                  function tambahMakanan() {
                    var makanan = parseInt(document.getElementById('makanan').innerText);
                    makanan++;
                    document.getElementById('makanan').innerText = makanan;
                  }
               </script>
                  <div class="dropdown" style="position:relative; left: -70px; top:8px">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Hallo, User
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="landing.html">Logout</a></li>
                
                    </ul>
                  </div>
            </ul>
            </div>
          </nav>
          <section>
            <div style=" position:relative; top: 40px; left: 30px; color: black; font-size: 48px; font-family: League Spartan; font-weight: 600; word-wrap: break-word">
                <a href="{{ url('dashboard') }}"><img src="img/Panahkiri.svg" style=" position:relative; width: 2%; top: -5px"></a>   Checkout        
            </div>
            
            <div style="position:relative; left: 80px; color: black; font-size: 30px; font-family: League Spartan; word-wrap: break-wor">
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
                        <a href="{{ url('editorder') }}/{{ $detail_order->id }}" class="btn btn-warning btn-sm" style="font-size: 30px; font-family: League Spartan;">edit</a>
                          <form action="{{ url('checkout') }}/{{ $detail_order->id }}" method="POST">
                              @csrf
                              {{ method_field('DELETE') }}
                              <button class="btn btn-danger btn-sm" style="font-size: 30px; font-family: League Spartan;">hapus</button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
                  <tr>
                      <td colspan="3"><strong>Total Price</strong></td>
                      <td colspan="3">Rp. {{ number_format($temporary_order->temporary_price) }}</strong></td>
                  </tr>
              </tbody>
          </table>
        </div>

        <div class="btn-group" style="position:relative; top: 90px; left: 150px">
        <label> Metode Pembayaran</label>
        <select name="payment_id" class="btn-group" style="width: 300px; height: 50px; font-size: 30px; font-family: League Spartan; font-weight: 200; word-wrap: break-word; background-color: #167918;">
            <option value="">-- Pilih --</option>
            @foreach($payments as $payment)
            <option value="{{ $payment->id }}">{{ $payment->payment_method }}</option>
            @endforeach
        </select>
          </div> 
            <div style="position: relative; left:1350px;">
                <div style="color: black; font-size: 25px; font-family: League-spartan; font-weight: 200; word-wrap: break-word"><strong>Biaya Admin</strong>  Rp0
                  <pre style="color: black; font-size: 25px; font-family: League-spartan; font-weight: 200; word-wrap: break-word"><strong>Total Price</strong>     Rp5000</pre>
                </div>

           </div>   
           <button class="btn btn-secondary btn-lg" type="button" aria-expanded="false" style="background-color: #167918; border-color: #c2f3ff; float: right; margin-right: 10%; font-size: 30px;"> Check Out</button>
         
          </section>
</body>
</html>