<?php
include 'modelo/database.php';

session_start();
if(isset($_GET['cerrar_sesion'])){
    session_unset();

    session_destroy();
}

if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1:
            header('location: admin.php');
        break;

        case 2:
            header('location: colaborador.php');
        break;
        default:
    }
}
if(isset($_POST['usu']) && isset($_POST['contra'])){
   
    $usu = $_POST['usu'];
    $contra = $_POST['contra'];

    $db = new Database();
    $query = $db->connect()->prepare('SELECT * from usuarios Where usuario =:usu AND contra =:contra ');
    $query->execute(['usu'=>$usu, 'contra'=>$contra ]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if($row == true){
                       //Validar rol
    } else{
        echo "El usuario o contraseña son incorrectos";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<br><h2>Ingresar</h2>
<form method="post" action="#" class="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario:</label>
    <input type="email" name="usu" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Escribe usuario</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
    <input type="password" name="contra" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Confirmar</label>
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>