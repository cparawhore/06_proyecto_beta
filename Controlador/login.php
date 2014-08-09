<?php
session_start();
require_once '../app/Config.php';
require_once '../app/Modelo.php';
$cu = $_POST['name'];
$pass = md5($_POST['contraseña']);
$m = new Model(Config::$mvc_bd_hostname, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_nombre);
 
  if(count($m->conectar_usuarios($cu,$pass))!=0) 
  {
  	header('Location: ../index.php');
    $_SESSION['cloudUser']['cnick']=$m->conectar_usuarios($cu,$pass)['cloud_user'];
    $_SESSION['cloudUser']['ste_acc']=$m->conectar_usuarios($cu,$pass)['ste_acc'];
    $_SESSION['cloudUser']['ste_acc_1']=$m->conectar_usuarios($cu,$pass)['ste_acc_1'];
  }
  else
  {
  	header('Location: error.php');
  }

  var_dump($m->conectar_usuarios($cu,$pass))
?>