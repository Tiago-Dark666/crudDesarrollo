<?php
    require_once "conexion.php";

    class authLibro extends DatabaseConnection {
        public function registrar($nombreLibro, $autorLibro) {
            $conexion = parent::conectar();
            $sql = "INSERT INTO libro (nombreLibro, autorLibro) VALUES (?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ss', $nombreLibro, $autorLibro);
            return $query->execute();
        }
    }
?>