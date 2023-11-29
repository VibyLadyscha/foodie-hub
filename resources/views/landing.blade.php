<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/landing.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>FoodieHub</title>
</head>

<body>
    <section class="hero">
        <nav class="navbar">
            <img src="img/F odie 1.png">
            <ul>
                <li><a href="#" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">About Us</a></li>
                <li><a href="#" class="nav-link">Contact Us</a></li>
                <li><a href="#" class="nav-link">Favorite</a></li>
            </ul>
        </nav>
        <div class="images">
            <img src="img/LandingBalado.png" alt="Image 1" class="rotated1">
            <img src="img/LandingAyam.png" alt="Image 2" class="rotated2">
            <img src="img/LandingKepiting.png" alt="Image 3" class="rotated">
        </div>
        <div class="text-content">
            <h2 class="sub-heading1">Whipping Up</h2>
            <h1 class="heading">Happiness</h1>
            <h2 class="sub-heading">on Every Plate!</h2>
            <button class="cta-button"><a href="{{ url('login') }}">Pesan Sekarang!</a></button>
        </div>
        <div class="recipe-text">
            Keep it easy with these simple yet <br/> delicious recipes. From make-ahead lunches <br/> and midweek meals to fuss-free sides.
        </div>
    </section>
    <section class="heroho">
        <div class="about-us">
            <span class="about-text">About </span>
            <span class="us-text">Us</span>
        </div>
        <div class="healthy-text">
            Keep healthy food readily available. When you get hungry.<br/>
            You're likely to eat the first thing you see on the counter.<br/>
            Keep healthy food readily available. When you get hungry.<br/>
            You're more likely to eat the first thing you see on the counter.<br/>
            Keep healthy food readily available.
        </div>
        <div class="button-container"></div>
        <div class="hal2">
            <img src="img/DaunLanding.png" class="daun">
            <img src="img/tktk.png" class="tektek">
            <img src="img/Landingesjeruk.png" class="esjeruk">
        </div>   
    </section>
    <section class="herohoho">
        <div class="title">
            <span class="black-text">Most </span>
            <span class="green-text">Popular</span>
            <span class="black-text"> Food</span>
        </div>
        <div class="box" style="left: 235px; top: 281px;"></div>
        <div class="box" style="left: 736px; top: 437px; border: 1px rgba(149, 213, 178, 0.74) solid;"></div>
        <div class="box" style="left: 1237px; top: 279px; border: 3px #95D5B2 solid;"></div>
        <div class="imag"></div>
        <img class="food-image" src="img/Landing22.png" alt="Food Image" style="left: 235px; top: 283px;">
        <img class="food-image" src="img/Landnig25.png" alt="Food Image" style="left: 736px; top: 437px;">
        <img class="food-image" src="img/Landningtektek.png" alt="Food Image" style="left: 1237px; top: 281px;">
        <div class="food-name" style="left: 286px; top: 639px;">Ayam Serundeng
            <div style="color: #33815B; font-size: 32px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Rp9000</div>
            <div style="text-align: center; color: black; font-size: 36px; font-family: League Spartan; font-weight: 600; word-wrap: break-word; position:relative; left: 500px; top: 50px">Tongkol
                <div style="color: #33815B; font-size: 32px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Rp4000</div>
                <div style="text-align: center; color: black; font-size: 36px; font-family: League Spartan; font-weight: 600; word-wrap: break-word; position:relative; left: 520px; top: -260px">Mie Tektek
                    <div style="color: #33815B; font-size: 32px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Rp8000</div>
                </div>
            </div>
        </div>
    </section>
    <section class="opening-hours">
        <img class="background-image" src="img/telorfooter.png" alt="Background Image">
        <img class="logo-image" src="img/logoitem.png" alt="Logo Image">
        <div class="contact-us-text">Contact Us:</div>
        <div style="width: 100%; height: 100%; position: relative">
            <img src="img/FB.svg" style="  left: 1145px; top: 320px; position: absolute">
            <img src="img/IG.svg" style="position:relative; left: 1225px; top: 313px;">
            <img src="img/X.svg" style="position:relative; left: 1235px; top: 325px;">
        </div>
    </section>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>