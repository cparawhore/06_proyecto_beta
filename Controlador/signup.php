<?php

require_once '../app/Config.php';
require_once '../app/Modelo.php';

$cu=$_POST['name'];
$cont=md5($_POST['contraseña']);
$sacc=$_POST['steamacc'];

$m = new Model(Config::$mvc_bd_hostname, Config::$mvc_bd_usuario,
                     Config::$mvc_bd_clave, Config::$mvc_bd_nombre);
 
  $m->add_cloud_acc($cu,$cont,$sacc);
  header('Location : index.php');


?>