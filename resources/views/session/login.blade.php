<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/signin.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Log In | FoodieHub</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="container main">
        <div class="row">
          <div class="col-md-6 side-image">
            <!-------------      image     ------------->
            <img src="img/F odie 1.png" alt="" />
            <div class="text">
              <h2>Welcome Back!</h2>
              <p>To keep connected with us, please sign in with your personal info</p>
            </div>
          </div>

          <div class="col-md-6 right">
            <div class="input-box">
              <header>Log In</header>

              <form action="/postlogin" method="POST">
                @csrf
              <div class="input-field">
                <input name="username" type="text" class="input" id="username" autofocus required value="{{ old ('username')}}" />
                <label for="username">Username</label>
              </div>
              <div class="input-field">
                <input name="password" type="password" class="input" id="password" />
                <label for="password">Password</label>
              </div>
              <div class="input-field">
                <input type="submit" class="submit" value="Log In" />
              </div>

              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session()->get('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              </form>

              <div class="signin">
                <span>Don't have account? <a href="/register">Register here</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
