<?php //Usando PDO es una extensión de PHP que permite acceder a bases de dato
$ped = new PDO('mysql:host=localhost;db:discursos','root', '');

$comando = $ped ->prepare("insert into reuniones values(:id_reu, :hora_inicio, :fecha, :dia, :tipo, :dir)");

$id_reu = '100';
$hora_inni = '18:00';
$fecha = '2025-01-16';
?>