<?php
require_once "../models/conexion.php";

if (isset($_POST["bottonUpdate"])) {
    $id_autor = $_GET['id'];  
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $ciudad = $_POST["ciudad"];

    if (!empty($nombre) && !empty($apellido) && !empty($direccion) && !empty($telefono) && !empty($email) && !empty($ciudad)) {
        $conexion = new DatabaseConnection();
        $db = $conexion->conectar();
        
        $sql = "UPDATE autor SET nombre=?, apellido=?, direccion=?, telefono=?, email=?, ciudad=? WHERE id_autor=?";
        $query = $db->prepare($sql);
        $query->bind_param('ssssssi', $nombre, $apellido, $direccion, $telefono, $email, $ciudad, $id_autor);

        if ($query->execute()) {
           
            header("location: main.php");
            exit();
        } else {
            echo "Error al actualizar los datos: " . $query->error;
        }
    } else {
        echo "Campos vacíos";
    }
}
?>
