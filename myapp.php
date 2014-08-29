<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include "head.php";
		?>	

</head>
<body>
	
	<!--start: Header -->
	<header>
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="index.php"><img src="img/logo.png" alt="Logo"></a>
						
				</div>
				<div class="span9">
				</div>
				</div>
				</div>	
	</header>
	<!--end: Header-->

	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-justify  ico-white"></i>Ingresar</h2>

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
				<div class="span12">
					<div class="title"><h3>Datos de cuenta</h3></div>

					<!-- start: Contact Form -->
					<div id="contact-form">

						<form method="post" action="Controlador/login_adm.php">

							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Nombre de Usuario:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="" autocomplete="off">
									</div>
								</div>

								<div class="clearfix">
									<label for="contraseña"><span>Contraseña:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="contraseña" name="contraseña" type="password" value="" class="input-xlarge">
									</div>
								</div>
								

								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-succes btn-large">Ingresar</button>
								</div>
							</fieldset>
						</form>

					</div>

					
					<!-- end: Contact Form -->

				</div>
				<!-- end: Contact Form -->
					
			
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
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>