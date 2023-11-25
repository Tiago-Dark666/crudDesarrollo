<?php include("templates/header.php")?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/37cc17c93d.js" crossorigin="anonymous"></script>
<div class="col-8 p-4">
<table class="table table-dark table-striped">
  <thead >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">EMAIL</th>
      <th scope="col">Ciudad</th>
    </tr>
  </thead>
  <tbody>
    <?php include "../models/conexion.php";
    

    // Crear una instancia de conexión a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'cruddesarrollo');

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Realizar la consulta SQL
    $sql = $conexion->query("SELECT * FROM autor");

    if ($sql) {
        while ($datos = $sql->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $datos->id_autor . "</td>";
            echo "<td>" . $datos->nombre . "</td>";
            echo "<td>" . $datos->apellido . "</td>";
            echo "<td>" . $datos->direccion . "</td>";
            echo "<td>" . $datos->telefono . "</td>";
            echo "<td>" . $datos->email . "</td>";
            echo "<td>" . $datos->ciudad . "</td>";
            echo "<td><a href='../controller/borrarRegistro.php?id=" . $datos->id_autor ."'><i class='fa-solid fa-trash'></i></a>";
            echo "<td><a href='../controller/update.php?id=" . $datos->id_autor . "'><i class='fa-solid fa-user-pen'></i></a></td>";
            echo "</tr>"; // Cierra la etiqueta <tr> para cada fila de datos
            echo "</tr>";
        }
    } else {
        echo "Error en la consulta: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
?>

  </tbody>
</table>
    
</div>

    
    
        
    