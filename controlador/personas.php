<?php
include '../modelo/Conexion.php';

$nom = $_POST['nom'];
$ap1 = $_POST['ap1'];
$ap2 = $_POST['ap2'];
$sex = $_POST['sexo'];
$tel = $_POST['tel'];
$dir = $_POST['dir'];

$insertar = "INSERT INTO persona VALUES  ('', '$nom', '$ap1', '$ap2', '$sex', '$tel', '$dir' )";
$query = mysqli_query($conectar, $insertar);

if($query){
echo "<script> alert ('Agregado Correcto');
      location.href= '../vistas/discursante.html'; 
    </script>";
} else {
    echo "<script> alert ('Incorrecto');
    location.href= '../vistas/discursante.html'; 
  </script>";
}
?>