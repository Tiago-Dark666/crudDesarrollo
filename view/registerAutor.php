<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
<?php include("templates/header.php")?>

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
            <form action="../controller/registrarAutor.php" method="post">

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="myusername" required autofocus>
                <label for="nombre">Nombre</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="name@example.com">
                <label for="apellido">Apellido</label>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="cra94example">
                <label for="direccion">Direccion</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="1234567">
                <label for="telefono">Telefono</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="email">Email</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Confirm Password">
                <label for="ciudad">ciudad</label>
              </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
              </div>

              <a class="d-block text-center mt-2 small" href="#">Have an account? Sign In</a>

              <hr class="my-4">

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-google me-2"></i> Sign up with Google
                </button>
              </div>

              <div class="d-grid">
                <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
        <a href="../main.php">Volver</a>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>