<?php
include("../app/CarClass.php");
$_SESSION["ocarrito"]->introduce_item($_GET["cci"], 'nombre', 'precio' );
echo $_SESSION["ocarrito"]->introduce_item($_GET["cci"], 'nombre', 'precio' );
?>

<html>
<head>
	<title>Introduce Producto</title>
</head>

<body>

Producto introducido.
<br>
<br>
<a href="../items.php">- Volver</a>
<br>
<br>
<a href="../carrito.php">- Ver carrito</a>

</body>
</html>
