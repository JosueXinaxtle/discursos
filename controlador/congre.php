<?php
require '../modelo/Conexion.php';

$nom = $_POST['nom'];
$dir = $_POST['dir'];
$edo = $_POST['edo'];
$muni = $_POST['muni'];
$pais = $_POST['pais'];

$insertar = "INSERT INTO congre VALUES  ('', '$nom', '$dir','$edo', '$muni', '$pais')";

$query =mysqli_query($conectar, $insertar);

if($query){
echo "<script> alert ('Agregado Correcto');
      location.href= '../vistas/congre_alta.html'; 
    </script>";
} else {
    echo "<script> alert ('Incorrecto');
    location.href= '../vistas/congre_alta.html'; 
  </script>";
}
?>