<!DOCTYPE html>
<?php include("app/CarClass.php");

?>
<html lang="es">
<head>
<?php
		include "head.php";
		?>	

</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<?php
		include 'header.php';
		?>
			
	</header>
	<!--end: Header-->
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-shopping-cart ico-white"></i>Carrito</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Row -->
      		<div class="row">
			<!-- Seria bueno crear un nombre clave del producto por ejemplo 3 primeras letras de la 3ra palabra y 3 de la primera si falta alguna rellenar con 0-->
           		<div class="span12">
           				
          			<?php
          			if ($_SESSION['ocarrito']->getS()>0) {
          				echo '<div class="alert alert-warning">
           						<strong>Atencion</strong> <br>
								Si cambias la cantidad de alguno de tus pedidos, presiona el boton de Actualizar
							</div>';
						if (isset($_SESSION['error']) && $_SESSION['error']=='nonum') {
							echo '<div class="alert alert-error">
           						<strong>Error</strong> <br>
								Que tratas de hacer bro? Presiona Actualizar
							</div>';
						}
          				$_SESSION['ocarrito']->imprime_carrito();
          			}
          			else{
          				echo '<div class="alert alert-error">
           						<strong>Error mi amigo!</strong> <br>
								El carrito esta vacío, llenalo <a href="items.php">aquí</a>
							</div>';
          			}
          			?>
        		</div>

      		</div>
			<!-- end: Row -->
      	
		</div>
		<!--end: Container-->
				
	</div>
	<!-- end: Wrapper  -->			

    
<?php
include 'footer.php';
?>

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>