<!DOCTYPE html>
<?php session_start();
?>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
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
      		<div class="row">
			<!-- Seria bueno crear un nombre clave del producto por ejemplo 3 primeras letras de la 3ra palabra y 3 de la primera si falta alguna rellenar con 0-->
        		<div class="span4">
          			<div class="icons-box">
						<i class="ico-iphone ico-color circle-color big"></i>
						<div class="title"><h3>Set los Utensilios de Mordor</h3></div>
						<p>Heroe: Pudge</p>
						<p>Precio: 24.00 soles</p>
						<a href="Controlador/add_item_c.php?cci=UTESET001"><button class="btn btn-default">Añadir al carrito</button></a>
						<div class="clear"></div>
					</div>
        		</div>

        		<div class="span4">
          			<div class="icons-box">
						<i class="ico-imac circle big"></i>
						<div class="title"><h3>Web</h3></div>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						</p>
						<div class="clear"></div>
					</div>
        		</div>

        		<div class="span4">
          			<div class="icons-box">
						<i class="ico-embed-close ico-color circle-color big"></i>
						<div class="title"><h3>HTML5 & CSS3</h3></div>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						</p>
						<div class="clear"></div>
					</div>
        		</div>

        		<div class="span4">
          			<div class="icons-box">
						<i class="ico-shopping-cart circle big"></i>
						<div class="title"><h3>e-commerce</h3></div>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						</p>
						<div class="clear"></div>
					</div>
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