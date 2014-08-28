<?php
include("../app/CarClass.php");
		if(isset($_POST["linea"]) && isset($_POST["q"]) ){
			for ($i=0; $i < count($_POST['q']); $i++) { 
				if (ctype_digit($_POST["q"][$i])) {
							$_SESSION["ocarrito"]->actualiza_item($_POST["linea"][$i],$_POST["q"][$i]);
							$_SESSION['error']='noe';
				}
				else{
					$_SESSION['error']='nonum';
				}
			}
		}
		header('Location: ../carrito.php');

?>
