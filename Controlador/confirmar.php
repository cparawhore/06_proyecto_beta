<?php 
include("../app/CarClass.php");
require_once  '../app/Config.php';
var_dump($_SESSION["ocarrito"]->confirmar());
 		
 		$mysqli = new mysqli(Config::$mvc_bd_hostname, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_nombre);
 		
 		$mysqli->autocommit(FALSE);
		$all_query_ok=true;

		$mysqli->query("INSERT INTO cl_compra (cl_user,total,estado) VALUES (".$_SESSION['cloudUser']['pk_cu'].",".$_SESSION["ocarrito"]->getS().",0)") ? null : $all_query_ok=false;
		for($i=0;$i<count($_SESSION["ocarrito"]->confirmar());$i++){
			$mysqli->query("INSERT INTO cl_compras_detalles (id_item,precio,cant,id_compra) VALUES ('"
							.$_SESSION["ocarrito"]->confirmar()[$i]['id']."',"
							.$_SESSION["ocarrito"]->confirmar()[$i]['precio'].","
							.$_SESSION["ocarrito"]->confirmar()[$i]['cant'].","
							.$mysqli->insert_id.")") ? null : $all_query_ok=false;
		}
			if($all_query_ok){
				unset($_SESSION["ocarrito"]);
				$mysqli->commit();
			}
				
			else
				$mysqli->rollback();
			
				$mysqli->close();
 ?>
