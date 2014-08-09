<?php
include("../app/CarClass.php");
$_SESSION["ocarrito"]->elimina_item($_GET["linea"]);
?>

<html>
<head>
	<title>Introduce Producto</title>
</head>

<body>

Producto eliminado.
<br>
<br>
<br>
<a href="index.php">- Volver</a>
<br>
<br>
<a href="../carrito.php">- Ver carrito</a>

</body>
</html>
