<!DOCTYPE html>
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
		include("app/CarClass.php");
		include "header.php";
		?>		
	</header>
	<!--end: Header-->

	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-user-add ico-white"></i>Registrate</h2>

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
					<div class="title"><h3>Formulario de Registro</h3></div>

					<!-- start: Contact Form -->
					<div id="contact-form">

						<form method="post" action="Controlador/signup.php" name="form1" id="form1">

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

								<div class="clearfix">
									<label for="steamacc"><span>Link Cuenta de Steam:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="steamacc" name="steamacc" type="text" value="" class="input-xlarge" autocomplete="off">
									</div>
									<button class="btn btn-success" onclick="cargar('#divtest', 'datos_steam.php')">Verificar Cuenta Steam</button></br></br>
								</div>

								<div class="actions">
									<button id="steam_ver" tabindex="3" type="submit" class="btn btn-succes btn-large">Registrarme</button>
								</div></fieldset>
						</form>

					</div>

					
					<!-- end: Contact Form -->

				</div>
				<!-- end: Contact Form -->
					
						
					
				<div class="span8">
						<div id="divtest">
						<div class="alert alert-info">
						<strong>Steam Account</strong> 	</br>
                    <strong>Atención!</strong> Asegurate de verificar tu cuenta de Steam con el boton verde.
                		</div>
                	</div>
                	<div class="well">
						Cuenta Cloud &copy; diferente a la de Steam por motivos de seguridad.</br>
						Las contraseñas son encriptadas al momento de guardarse.</br>
						Aparte de la cuenta primaria de Steam solo se podra añadir otra por Cuenta Cloud de darse el caso de no poder tradear (u otros casos) con la cuenta primaria.</br>
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