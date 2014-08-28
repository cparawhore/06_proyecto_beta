<?php
session_start();
require_once '../app/Config.php';
require_once '../app/Modelo.php';

$cu=$_POST['name'];
$cont=md5($_POST['contraseña']);
$sacc=$_POST['steamacc'];
		if ($sacc!='' && $cu!='' && $cont!='') {
			if (isset($_POST['captcha'])) {
				if (base64_decode(str_rot13($_SESSION['clavecap'])) == $_POST['captcha']) {
					$m = new Model(Config::$mvc_bd_hostname, Config::$mvc_bd_usuario,
				                     Config::$mvc_bd_clave, Config::$mvc_bd_nombre);
				 
				  $m->add_cloud_acc($cu,$cont,$sacc);
 				 header('Location : index.php');
				}
				else{
					header('Location: ../signUp.php?ref=e');
					$_SESSION['te']='ca';
				}
			}
		}
		
		if ($sacc=='' || $cu=='' || $cont=='') {
			header('Location: ../signUp.php?ref=e');
			$_SESSION['te']='da';
		}

?>