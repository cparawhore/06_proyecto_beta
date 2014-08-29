<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="../index.php"><img src="img/logo.png" alt="Logo"></a>
						
				</div>
				<!--end: Logo -->
					<?php 

					

						if(!isset($_SESSION['cloudAdmin']['cnick']))	
							{	print('<div class="span9">
									<a class="pull-right a-head" href="signUp.php"><button tabindex="3" class="btn btn-succes btn-large">Registrarse</button></a>
									<a class="pull-right a-head" href="logIn.php"><button tabindex="3" class="btn btn-succes btn-large">Ingresar</button></a>
			    				</div>'
			    					
								);
							}
						else
						print('<div class="span9">'.$_SESSION['cloudAdmin']['cnick'].'</div>');
					?>
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->	