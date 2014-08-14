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

	<!-- start: Meta -->
	<meta http-equiv="Content-type" content="text/html" charset="utf-8">
	<title>GotYA FREE BOOTSTRAP THEME by BootstrapMaster</title> 
	<meta name="description" content="GotYa Free Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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
					header('Location: items.php');
				}

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