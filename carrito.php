<?php
include("app/CarClass.php");
?>

<html>
<head>
	<title>Introduce Producto</title>
</head>

<body>

<?php
$_SESSION['ocarrito']->imprime_carrito();
?>
<br>
<br>
<a href="items.php">Volver</a>


</body>
</html>
