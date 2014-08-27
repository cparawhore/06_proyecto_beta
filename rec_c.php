<!DOCTYPE html>
<html lang="es">
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
		include("app/CarClass.php");
		include "header.php";
		?>		
	</header>
	<!--end: Header-->

	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-retweet-2 ico-white"></i>Recarga</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	
	
	<!-- start: Wrapper -->	
	<div id="wrapper">		

		<!-- start: Container -->	
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">
			
				<!-- start: Contact Info -->
				
				<!-- end: Contact Info -->		

				<!-- start: Contact Form -->
				<div class="span4">
					<div class="title"><h3>Formulario de Recarga</h3></div>

					<!-- start: Contact Form -->
					<div id="contact-form">

						<form method="post" action="Controlador/proceso.php" name="form1" id="form1">

							<fieldset>
								<div class="clearfix">
									<label for="fecha"><span>Fecha:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="fecha" name="fecha" type="text" value="" autocomplete="off">
									</div>
								</div>

								<div class="clearfix">
									<label for="hora"><span>Hora:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="hora" name="hora" type="text" value="" autocomplete="off">
									</div>
								</div>

								<div class="clearfix">
									<label for="codigo"><span>Codigo Transacción:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="codigo" name="codigo" type="text" value="" class="input-xlarge">
									</div>
									<input type="hidden" value="r" name="p">
								</div>
								<div class="actions">
									<button id="steam_ver" tabindex="3" type="submit" class="btn btn-succes btn-large">Enviar</button>
								</div></fieldset>
						</form>

					</div>

					
					<!-- end: Contact Form -->

				</div>
				<!-- end: Contact Form -->
					
						
					
				<div class="span8">
						<div id="divtest">
						<div class="alert alert-info">
						<strong>Aviso</strong> 	</br>
                    <strong>Atención!</strong> Asegurate de verificar e introducir bien los datos, solo tendras 3 intentos por día.
                		</div>
                	</div>
				</div>
			
			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container -->
				
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
<script def src="js/custom.js"></script>
<script def src="js/jcloud.js"></script>
<!-- end: Java Script -->
</body>
</html>