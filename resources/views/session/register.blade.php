<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/signup.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Register | FoodieHub</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="container main">
        <div class="row">
          <div class="col-md-6 side-image">
            <!-------------      image     ------------->
            <img src="img/F odie 1.png" alt="" />
            <div class="text">
              <h2>Hello!</h2>
              <p>Please enter your personal details and start the journey with us</p>
            </div>
          </div>

          <div class="col-md-6 right">
            <div class="input-box">
              <header>Register</header>
          
              <form action="/postregister" method="POST">
                @csrf
                <div class="input-field">
                  <input name="username" type="text" class="input" id="username" autocomplete="off" />
                  <label for="username">Username</label>
                </div>
                <div class="input-field">
                  <input name="name" type="text" class="input" id="name" autocomplete="off" />
                  <label for="name">Name</label>
                </div>
                <div class="input-field">
                  <input name="email" type="email" class="input" id="email" autocomplete="off" />
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input name="password" type="password" class="input" id="password" />
                  <label for="password">Password</label>
                </div>              
                <div class="input-field">
                  <input name="phone_number" type="text" class="input" id="number" autocomplete="off" />
                  <label for="number">Phone Number</label>
                </div>
                <div class="input-field">
                <input type="submit" class="submit" value="Register" />
              </div>
              <div class="input-field">
                <p>Already have an account? <a href="/login">Login</a></p>
              </div>
              
              <!-- @if(session()->has('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session()->get('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif -->
              
              </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>

