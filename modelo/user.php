<?php 
include_once 'database.php';

class Existe extends Database{
  private $nombre;
  private $username;

  public function userExist($user, $pass){
   $md5pass =  md5($pass);
                    //Conectar BD, comparar usuario y contraseña correcta
   $query = $this->connect()->prepare('SELECT * from usuarios WHERE usuario = : user AND contra = :pass');
   $query ->execute(['user'=>$user, 'pass'=> $md5pass]);   //bandear o unir los valores dados 

   if($query ->rowCount()){   //Validar que el login es correcto, sabiendo el número de filas,  
    return true;
   } else{
    return false;
   }

  } 
  public function setUser($user){ //Función verifica si hay usuario y llena valores de acuerdo a nombre de usuario
    $query = $this->connect()->prepare('SELECT * from usuarios where usuario =:user');
    $query->execute(['user' =>$user]);

    foreach($query as $currentUser){
      $this-> nombre = $currentUser['usuario'];
    }
  }
  public function getNombre(){
    return $this->nombre;
  }

}
?>