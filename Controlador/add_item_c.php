<?php
include("../app/CarClass.php");
require_once("../app/Config.php");
require_once("../app/Modelo.php");
$m = new Model(Config::$mvc_bd_hostname, Config::$mvc_bd_usuario,Config::$mvc_bd_clave, Config::$mvc_bd_nombre);
$data = $m->getDataItem($_GET["cci"]);
if ($data[0]['it_nombre']!=null) {
	$_SESSION["ocarrito"]->introduce_item($_GET["cci"], $data[0]['it_nombre'] , $data[0]['it_precio'] ,1);
	if (isset($_SESSION['cloudUser']['p_num'])) {
		if($_SESSION['cloudUser']['p_num']!=0){
			header('Location: ../items.php?p='.$_SESSION['cloudUser']['p_num']);
		}		
		else 	{
			header('Location: ../items.php');
		}
	}
}
else{
	header('Location: ../intento_mal.php');
}

?>