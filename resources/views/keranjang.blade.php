<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/keranjang.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Keranjang | FoodieHub</title>
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
                <a href="login.html"><img src="image/Panahkiri.svg" style=" position:relative; width: 3.1%; top: -5px"></a>/Pembayaran           
            </div>
            <div style="position:relative; left: 60px">
            <div style="position:relative; left: 100px; top: 60px;width: 80%; height: 100%; border: 3px black solid"></div>
            <div style="position:relative; top: 80px; left: 100px;color: black; font-size: 48px; font-family: League Spartan; font-weight: 600; word-wrap: break-word">Product Detail</div>
            <div style="position:relative; top:7px; left: 600px;color: black; font-size: 48px; font-family: League Spartan; font-weight: 600; word-wrap: break-word">Quantity
            </div>
            <div style="position:relative; top: -65px; left: 1000px;color: black; font-size: 48px; font-family: League Spartan; font-weight: 600; word-wrap: break-word">Price
              <div style=" position: relative; top: -75px;left: 370px; color: black; font-size: 48px; font-family: League Spartan; font-weight: 600; word-wrap: break-word">Action</div>
            </div>
            <div style="position:relative; left: 100px; top: -100px;width: 80%; height: 100%; border: 3px black solid">
                <img style="width: 10%; height: 10%;" src="image/nasi.jpg" />
                <a style="position: relative; font-size: 40px; font-weight: 100; left: 400px">1</a>
                <a style="position: relative; font-size: 40px; font-weight: 100; left: 700px">Rp5000</a>
                <pre > <a style="position:relative; font-weight:600; font-size:large; left: 40px;">Nasi</a></pre>
                <button class="btn btn-secondary btn-lg" type="button" aria-expanded="false" style="background-color: #167918; border-color: #c2f3ff; position:relative; font-weight:600; font-size:large; left: 1250px; top: -160px">
                  Edit
              </button>
              <button class="btn btn-secondary btn-lg" type="button" aria-expanded="false" style="background-color: #167918; border-color: #c2f3ff; position:relative; font-weight:600; font-size:large; left: 1300px; top: -160px">
                Hapus
            </button>
            </div>
            <div style="position:relative; left: 100px; top: -60px;width: 80%; height: 100%; border: 3px black solid"></div>
            <div style="position:relative; left: 100px; top: -10px;width: 80%; height: 100%; border: 3px black solid"></div>
            <div style="position:relative; left: 100px; top: 40px;width: 80%; height: 100%; border: 3px black solid"></div>
        </div>
        <div class="btn-group" style="position:relative; top: 90px; left: 150px">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #167918; border-color: #c2f3ff;">
                Payment Method
               </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Gopay<pre>Rp1000</pre></a></li>
              <li><a class="dropdown-item" href="#">Shopee Pay<pre>Rp1000</pre></a></li>
              <li><a class="dropdown-item" href="#">Dana<pre>Rp1000</pre></a></li>
              <li><a class="dropdown-item" href="#">OVO<pre>Rp1500</pre></a></li>
              <li><a class="dropdown-item" href="#">Cash<pre>Rp0</pre></a></li>
            </ul> 
          </div> 
            <div style="position: relative; left:1460px; top:20px">
                <div style="color: black; font-size: 25px; font-family: League-spartan; font-weight: 200; word-wrap: break-word">Biaya Admin = Rp0
                  <pre style="color: black; font-size: 25px; font-family: League-spartan; font-weight: 200; word-wrap: break-word">Total Harga = Rp5000</pre>
                </div>
                 <button class="btn btn-secondary btn-lg" type="button" aria-expanded="false" style="background-color: #167918; border-color: #c2f3ff;">
                     Check Out
                 </button>
           </div>   
         
         
          </section>
</body>
</html>