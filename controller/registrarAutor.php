<?php
   require_once "../models/auth.php";

   $nombre = $_POST['nombre']; 
   $apellido = $_POST['apellido']; 
   $direccion = $_POST['direccion']; 
   $telefono = $_POST['telefono']; 
   $email = $_POST['email']; 
   $ciudad = $_POST['ciudad']; 

   $Auth = new auth();

   if($Auth->registrar($nombre,$apellido,$direccion,$telefono,$email,$ciudad)){
        header("location:../main.php");
   }else{
        echo "No se pudo registrar";
   }