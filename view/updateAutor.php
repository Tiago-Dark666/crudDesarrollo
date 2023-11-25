
<body>
<?php include("templates/header.php")?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
              <div class="card-img-left d-none d-md-flex">
                <!-- Background image for card set in CSS! -->
              </div>
    <?php
        require_once "../models/conexion.php"; // Incluye el archivo de conexión
        $dbConnection = new DatabaseConnection();
        $conexion = $dbConnection->conectar();

        // Verifica si se ha enviado el formulario
        if (isset($_POST["bottonUpdate"])) {
            include "../controller/update.php"; // Incluye el controlador de actualización
        }
        
        $id_autor = $_GET['id'];
        $sql = $conexion->query("SELECT * FROM autor WHERE id_autor = $id_autor");
        $datos = $sql->fetch_object();
    ?>
    <div class="card-body p-4 p-sm-5">
              <form  class="col-4 p-3 m-auto" method="post">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Modificar autor</h5>
                <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos->nombre; ?>">
                        <label for="nombre">Nombre</label>
                      </div>
        
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="apellido" name="apellido"  value="<?php echo $datos->apellido; ?>">
                        <label for="apellido">Apellido</label>
                      </div>
        
                      <hr>
        
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="direccion" name="direccion"  value="<?php echo $datos->direccion; ?>">
                        <label for="direccion">Direccion</label>
                      </div>
        
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="telefono" name="telefono"  value="<?php echo $datos->telefono; ?>">
                        <label for="telefono">Telefono</label>
                      </div>
        
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="email" name="email"  value="<?php echo $datos->email; ?>">
                        <label for="email">Email</label>
                      </div>
        
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="ciudad" name="ciudad"  value="<?php echo $datos->ciudad; ?>">
                        <label for="ciudad">ciudad</label>
                      </div>
        
                      <div class="">
                        <button class="btn btn-primary" name="bottonUpdate" type="submit">Actualizar</button>
                      </div>
        
                    </form>
                  </div>
                </div>
                </body>
    <!-- Aquí va el resto de tu código HTML y el formulario -->
    <!-- Similar a lo que tenías antes, solo con el valor de los campos obtenido de $datos -->

    
    </div>
            <a href="main.php">Volver</a>
    </div>
    <?php
        // Cierre de la conexión a la base de datos
        $conexion->close();
    ?>
