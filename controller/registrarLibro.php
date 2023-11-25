 <?php
   require_once "../models/authLibro.php";

   $nombreLibro = $_POST['nombreLibro']; 
   $nombreAutor = $_POST['autorLibro']; 
   

   $AuthLibro = new authLibro();

   if($AuthLibro->registrar($nombreLibro,$nombreAutor)){
        header("location:../main.php");
   }else{
        echo "No se pudo registrar";
   }