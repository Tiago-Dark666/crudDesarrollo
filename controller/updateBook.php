<?php
require_once "models/conexion.php";

if (isset($_POST["bottonUpdateBook"])) {
    $id_libro = $_GET['id'];
    $nombreLibro = $_POST['nombreLibro']; 
    $autorLibro = $_POST['autorLibro']; 

    if (!empty($nombreLibro) && !empty($autorLibro)) {
        $conexion = new DatabaseConnection();
        $db = $conexion->conectar();
        
        $sql = "UPDATE libro SET nombreLibro=?, autorLibro=? WHERE id_libro=?";
        $query = $db->prepare($sql);
        $query->bind_param('ssi', $nombreLibro, $autorLibro, $id_libro);

        if ($query->execute()) {
           
            header("Location: main.php");
            exit();
        } else {
            echo "Error al actualizar los datos: " . $query->error;
        }
    } else {
        echo "Campos vacíos";
    }
}
?>
