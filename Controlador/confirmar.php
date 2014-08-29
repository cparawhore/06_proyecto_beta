<?php 
include("../app/CarClass.php");
require_once  '../app/Config.php';

 		$mysqli = new mysqli(Config::$mvc_bd_hostname, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_nombre);
 		var_dump($_SESSION["ocarrito"]->confirmar());
 		$mysqli->autocommit(FALSE);
		$all_query_ok=true;

		$mysqli->query("INSERT INTO cl_compra (cl_user,total,estado,cant) VALUES (".$_SESSION['cloudUser']['pk_cu'].",".$_SESSION["ocarrito"]->getS().",0,".count($_SESSION["ocarrito"]->confirmar()).")") ? null : $all_query_ok=false;
		$id=$mysqli->insert_id;
		for($i=0;$i<count($_SESSION["ocarrito"]->confirmar());$i++){
			if ($_SESSION["ocarrito"]->confirmar()[$i]['id']!='') {
				$mysqli->query("INSERT INTO cl_compras_detalles (id_item,precio,cant,id_compra) VALUES ('"
							.$_SESSION["ocarrito"]->confirmar()[$i]['id']."',"
							.$_SESSION["ocarrito"]->confirmar()[$i]['precio'].","
							.$_SESSION["ocarrito"]->confirmar()[$i]['cant'].","
							.$id.")") ? null : $all_query_ok=false;
			}
		}
		$mysqli->query("UPDATE bcc SET saldo=".($_SESSION['cloudUser']['saldo']-$_SESSION["ocarrito"]->getS())." WHERE pk_cu=".$_SESSION['cloudUser']['pk_cu']) ? null : $all_query_ok=false;
			if($all_query_ok){
				$_SESSION['cloudUser']['saldo']=$_SESSION['cloudUser']['saldo']-$_SESSION["ocarrito"]->getS();
				unset($_SESSION["ocarrito"]);
				$mysqli->commit();
				header('Location: ../exito_compra.php');
			}
				
			else{
				$mysqli->rollback();
				header('Location: ../error_compra.php');
			}
				
			
				$mysqli->close();
 ?>
