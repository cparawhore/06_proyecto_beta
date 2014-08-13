<!DOCTYPE html>
<html lang="es">
<?php include("app/CarClass.php");
?>
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Cloud Store</title> 
	<meta name="description" content="Cloud Store"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Christian Avalos"/>
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
		include "header.php";
		?>		
			
	</header>
	<!--end: Header-->
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Twitter Bootstrap</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/twitter.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Responsive Design</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/responsive.png" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>HTML5</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/html5.png" alt="image03" /></div>
			</div>
			<div class="da-slide">
				<h2>CSS3</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/css3.png" alt="image04" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
      		<!-- start: Row -->
      		<div class="row">
	
        		<div class="span4">
          			<div class="icons-box">
						<i class="ico-ok circle big"></i>
						<div class="title"><h3>Easy to use</h3></div>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						</p>
						<div class="clear"></div>
					</div>
        		</div>

        		<div class="span4">
          			<div class="icons-box">
						<i class="ico-ipad circle big"></i>
						<div class="title"><h3>Responsive</h3></div>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						</p>
						<div class="clear"></div>
					</div>
        		</div>

      		</div>
			<!-- end: Row -->
      		
			<hr>
		
			<!-- start Clients List -->	
			<div class="clients-carousel">
		
				<ul class="slides clients">
					<li><img src="img/logos/1.png" alt=""/></li>
					<li><img src="img/logos/2.png" alt=""/></li>	
					<li><img src="img/logos/3.png" alt=""/></li>
					<li><img src="img/logos/4.png" alt=""/></li>
					<li><img src="img/logos/5.png" alt=""/></li>
					<li><img src="img/logos/6.png" alt=""/></li>
					<li><img src="img/logos/7.png" alt=""/></li>
					<li><img src="img/logos/8.png" alt=""/></li>
					<li><img src="img/logos/9.png" alt=""/></li>
					<li><img src="img/logos/10.png" alt=""/></li>		
				</ul>
		
			</div>
			<!-- end Clients List -->
		
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			


	<?php
	include "footer.php";
	?>

	

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>