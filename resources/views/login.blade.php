<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('login.css') }}">
</head>
  <body>
    <body>
        <div class="container">

          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                @if (session()->has('login_error'))
                <div class="alert alert-warning my-3 alert-dismissible fade show" role="alert">
                   {{ session('login_error')  }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
              <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                  <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                  <form action="/login" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Username" required autofocus>
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>


                    <div class="d-grid">
                      <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                        in</button>
                    </div>
                    <hr class="my-4">
                    

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
