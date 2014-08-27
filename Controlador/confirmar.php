<?php 

session_start();

$cantidad = $_POST['cantidad'];
$pizza = $_POST['pizzas'];
if($_POST['mesa']!="delivery")
{$mesa = $_POST['mesa'];
$tipo = 0;}
else
{$tipo = 1;$mesa=99;}
$id_sucursal = $_SESSION['usuario']['suc'];
$fecha = time();
$e=0;

//require_once  '../Controlador/app/Config.php';
//require_once  '../Controlador/app/Modelo.php';

//$m = new Model( Config::$mvc_bd_hostname, Config::$mvc_bd_usuario,
  //                   Config::$mvc_bd_clave,Config::$mvc_bd_nombre);
 
 
 $mysqli = new mysqli("localhost", "root", "", "sistemanp");
 
 
        $sql = "select variable from variable where id_var=1";
		$result = $mysqli->query($sql);
		$var = array();
        while ($row = mysqli_fetch_assoc($result))
         {
             $var = $row;
         }

     
 
	 
	 
	//$var_temp = variable($mysqli)['variable'];
	
			$mysqli->autocommit(FALSE);
			$all_query_ok=true;
   
			for($i=0;$i<count($cantidad);$i++)
				{
					$mysqli->query("INSERT INTO pedido (id_pedido,id_estadop,id_mesa,fecha,id_sucursal) VALUES (".$var['variable'].",1,$mesa,$fecha,13)") ? null : $all_query_ok=false;
					$mysqli->query("INSERT INTO pedido_detalle (id_pedido,id_pizza,cantidad,tipo_pedido,precio) VALUES (".$var['variable'].",".$pizza[$i].",".$cantidad[$i].",$tipo,23)") ? null : $all_query_ok=false;
				}
				
			$n_var = $var['variable'] + 1;
			$mysqli->query("update variable set variable = $n_var where id_var=1");
			
			if($all_query_ok)
			$mysqli->commit();
			else
			$mysqli->rollback();
			
			$mysqli->close();
		
		 
	 
var_dump($var);
  //$m->añadirPedido($arreglo);
 //header('Location: ../admin');
 ?>
