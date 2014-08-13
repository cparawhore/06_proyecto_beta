<?php
include("../app/CarClass.php");
$_SESSION["ocarrito"]->elimina_item($_GET["linea"]);
header('Location: ../carrito.php')
?>
