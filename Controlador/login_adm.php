<?php
session_start();
require_once("../app/SteamUserCS.php");
require_once '../app/Config.php';
require_once '../app/Modelo.php';
$cu = $_POST['name'];
$pass = md5($_POST['contraseña']);
$m = new Model(Config::$mvc_bd_hostname, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_nombre);
 
  if(count($m->conectar_admins($cu,$pass))!=0) 
  {
  	
    #$_SESSION['cloudUser']['ste_acc']=$m->conectar_usuarios($cu,$pass)['ste_acc'];
    #$ste_id = explode('/', $_SESSION['cloudUser']['ste_acc']);
    #$user = new SteamUser($ste_id[4],'5C0B43D4E3936F5288A311A55FCCFC0F');
    $_SESSION['cloudAdmin']['pk_cu']=$m->conectar_admins($cu,$pass)['pk_cu'];
    #$_SESSION['cloudUser']['saldo']=$m->consultar_saldo($_SESSION['cloudUser']['pk_cu'])['saldo'];
    $_SESSION['cloudAdmin']['cnick']=$m->conectar_admins($cu,$pass)['cloud_user'];;#$user->getProfileData()['datosCuenta']['steamID'];
    #$_SESSION['cloudUser']['avatarIcon']=$user->getProfileData()['datosCuenta']['avatarMedium'];
    #$_SESSION['cloudUser']['ste_acc_1']=$m->conectar_usuarios($cu,$pass)['ste_acc_1'];
    header('Location: ../dashboard.php');
  }
  else
  {
  	header('Location: error.php');
  }

?>