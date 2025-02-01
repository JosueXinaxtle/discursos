<?php
require '../clases/Conexion.php';

$fe_salida = $_POST['fecha'];
$nom = $_POST['nom'];
$ap1 = $_POST['ap1'];
$ap2 = $_POST['ap2'];
$tit = $_POST['titulo'];
$can = $_POST['cancion'];
$congre = $_POST['congre'];
$dia = $_POST['dia'];
$contac = $_POST['contac'];
$tel = $_POST['tel'];
$insertar = "INSERT INTO disc_salida VALUES  ('', '$fe_salida', '$nom', '$ape1', '$ape2', '$tit', '$can', '$congre', '$dia', '$contac', '$tel' )";

$query =mysqli_query($conectar, $insertar);

if($query){
echo "<script> alert ('Agregado Correcto');
      location.href= '../vistas/salida.html'; 
    </script>";
} else {
    echo "<script> alert ('Incorrecto');
    location.href= '../vistas/salida.html'; 
  </script>";
}
?>