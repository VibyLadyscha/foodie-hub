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

    //logout
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</body>
</html>