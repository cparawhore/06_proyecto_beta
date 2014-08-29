<!DOCTYPE html>
<html lang="es">
<?php include("app/CarClass.php");
require_once("app/Config.php");
require_once("app/Modelo.php");
if(isset($_GET['p'])){
	$_SESSION['cloudUser']['p_num']=$_REQUEST['p'];
}
else{
	$_SESSION['cloudUser']['p_num']=0;
}
?>
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

				<h2><i class="ico-inbox ico-white"></i>Items</h2>

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
			<?php
				$m = new Model(Config::$mvc_bd_hostname, Config::$mvc_bd_usuario,Config::$mvc_bd_clave, Config::$mvc_bd_nombre);
				$items = $m->listarItems($_SESSION['cloudUser']['p_num']*6,6);
				if (count($items)==0) {
					header('Location: index.php');
				}
				//Esta funcion es solo para los 6 y solucionar algunos errores, si se quiere ampliar la cantidad
				//de items debe hacerse una nueva funcion y cambiar el tamaño de los spans+++++++++++++++++++++++++++
				if (count($items)==6) {
					echo '<div class="row">';
				for ($i=0; $i < count($items)/2 ; $i++) { 
					echo 	'<div class="span4">
								<div class="icons-box">
									<img src="'.$items[$i]['it_limg'].'">
									<div class="title"><h3>'.$items[$i]['it_nombre'].'</h3></div>
									<p>Heroe: '.$items[$i]['it_hero'].'</p>
									<p>Precio: '.$items[$i]['it_precio'].' soles</p>
									<a href="Controlador/add_item_c.php?cci='.$items[$i]['it_id'].'" id="btn_add"><button class="btn btn-default">Añadir al carrito</button></a>
								</div>
							</div>';
				}
				echo '</div>';

				echo '<div class="row">';
				for ($i=count($items)/2; $i < count($items) ; $i++) { 
					echo 	'<div class="span4">
								<div class="icons-box">
									<img src="'.$items[$i]['it_limg'].'">
									<div class="title"><h3>'.$items[$i]['it_nombre'].'</h3></div>
									<p>Heroe: '.$items[$i]['it_hero'].'</p>
									<p>Precio: '.$items[$i]['it_precio'].' soles</p>
									<a href="Controlador/add_item_c.php?cci='.$items[$i]['it_id'].'" id="btn_add"><button class="btn btn-default">Añadir al carrito</button></a>
								</div>
							</div>';
				}
				echo '</div>';
				}
				elseif (3<count($items) && count($items)<=5) {
					echo '<div class="row">';
				for ($i=0; $i < 3 ; $i++) { 
					echo 	'<div class="span4">
								<div class="icons-box">
									<img src="'.$items[$i]['it_limg'].'">
									<div class="title"><h3>'.$items[$i]['it_nombre'].'</h3></div>
									<p>Heroe: '.$items[$i]['it_hero'].'</p>
									<p>Precio: '.$items[$i]['it_precio'].' soles</p>
									<a href="Controlador/add_item_c.php?cci='.$items[$i]['it_id'].'" id="btn_add"><button class="btn btn-default">Añadir al carrito</button></a>
								</div>
							</div>';
				}
				echo '</div>';

				echo '<div class="row">';
				for ($i=3; $i < count($items) ; $i++) { 
					echo 	'<div class="span4">
								<div class="icons-box">
									<img src="'.$items[$i]['it_limg'].'">
									<div class="title"><h3>'.$items[$i]['it_nombre'].'</h3></div>
									<p>Heroe: '.$items[$i]['it_hero'].'</p>
									<p>Precio: '.$items[$i]['it_precio'].' soles</p>
									<a href="Controlador/add_item_c.php?cci='.$items[$i]['it_id'].'" id="btn_add"><button class="btn btn-default">Añadir al carrito</button></a>
								</div>
							</div>';
				}
				echo '</div>';
				}
				elseif (count($items)<=3) {
					echo '<div class="row">';
				for ($i=0; $i < count($items) ; $i++) { 
					echo 	'<div class="span4">
								<div class="icons-box">
									<img src="'.$items[$i]['it_limg'].'">
									<div class="title"><h3>'.$items[$i]['it_nombre'].'</h3></div>
									<p>Heroe: '.$items[$i]['it_hero'].'</p>
									<p>Precio: '.$items[$i]['it_precio'].' soles</p>
									<a href="Controlador/add_item_c.php?cci='.$items[$i]['it_id'].'" id="btn_add"><button class="btn btn-default">Añadir al carrito</button></a>
								</div>
							</div>';
				}
				echo '</div>';
				}
				//++++++++++++++++++++++++++++++++++++++++++++++++++Asta aca es la funcion++++++++++++++++++++++++++++++++
			?>
        		
      		
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
<script src="js/jcloud.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>