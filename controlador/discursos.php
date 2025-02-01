<?php
require '../modelo/Conexion.php';


$tit = $_POST['tit'];
$ref = $_POST['ref'];

$insertar = "INSERT INTO discurso VALUES  ('', '$tit', '$ref')";

$query =mysqli_query($conectar, $insertar);

if($query){
echo "<script> alert ('Agregado Correcto');
      location.href= '../vistas/discursos_alta.html'; 
    </script>";
} else {
    echo "<script> alert ('Incorrecto');
    location.href= '../vistas/discursos_alta.html'; 
  </script>";
}
?>