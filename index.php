<?php
include_once 'modelo/user.php';
include_once 'modelo/user_session.php';
$user_Session = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "Existe sesión";
} else if(isset($_POST['usu']) && isset($_POST['contra'])){
    echo "Validación de Login";
} else{
    echo "Login";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Iniciar</h1>    
</body>
</html>