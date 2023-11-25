<?php
    require_once "conexion.php";

    class auth extends DatabaseConnection{
        public function registrar($nombre,$apellido,$direccion,$telefono,$email,$ciudad){
            $conexion = parent::conectar();
            $sql = "INSERT INTO autor (nombre, apellido, direccion, telefono, email, ciudad) VALUES (?, ?, ?, ?, ?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ssssss',$nombre,$apellido,$direccion,$telefono,$email,$ciudad);
            return $query->execute();
        }
    }