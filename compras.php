<!DOCTYPE html>
<?php include("app/CarClass.php");
require_once 'app/Config.php';
require_once 'app/Modelo.php';
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

				<h2><i class="ico-shopping-cart ico-white"></i>Mis Compras</h2>

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
           				<div class="alert alert-info">
           						<strong>Mis compras</strong> <br>
								Aca se muestra la cantidad y el total a pagar, el total son los items diferentes comprados, mas no la cantidad (duplicados, etc)
							</div>
							<?php
							$m = new Model(Config::$mvc_bd_hostname, Config::$mvc_bd_usuario,
                     						Config::$mvc_bd_clave, Config::$mvc_bd_nombre);
							$pku = $_SESSION['cloudUser']['pk_cu'];
							
								echo '<table class="table table-hover" cellpadding="2">
								<thead>
			  						<tr>
										<th><b>Cantidad de Items</b></th>
										<th><b>Total</b></th>
										<th><b>Estado</b></th>
										<!--th>&nbsp;</th-->
			  						</tr></thead>';
			  							for ($i=0; $i < count($m->getMisCompras($pku)) ; $i++) { 
			  								echo '<tr><td>'.$m->getMisCompras($pku)[$i]['cant'].'</td>
			  											<td>'.$m->getMisCompras($pku)[$i]['total'].'</td>';
			  											if ($m->getMisCompras($pku)[$i]['estado']==0) {
			  												echo '<td>Falta entrega</td></tr>';
			  											}
			  											elseif ($m->getMisCompras($pku)[$i]['estado']==1) {
			  												echo '<td>Entregado</td></tr>';
			  											}
			  											#echo '<td>Ver detalles</td></tr>';
			  							}
								echo '</table>';
							
							
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