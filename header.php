<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="index.php"><img src="img/logo.png" alt="Logo"></a>
						
				</div>
				<!--end: Logo -->
					<?php 

					

						if(!isset($_SESSION['cloudUser']['cnick']))	
							{	print('<div class="span9">
									<a class="pull-right a-head" href="signUp.php"><button tabindex="3" class="btn btn-succes btn-large">Registrarse</button></a>
									<a class="pull-right a-head" href="logIn.php"><button tabindex="3" class="btn btn-succes btn-large">Ingresar</button></a>
			    				</div>'	
								);
							}
						else
						print('<div class="span9">
						<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			        		<div class="container">
			          			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			          			</a>
			          			<div class="nav-collapse collapse">
			            			<ul class="nav">
			              				<li><a href="index.php">Inicio</a></li>
										<li><a href="items.php">Items</a></li>
			              				<li><a href="carrito.php">Carrito ('.$_SESSION['ocarrito']->getItem().')</a></li>
			              				<li><a href="carrito.php">Saldo: <b>'.$_SESSION['cloudUser']['pk_cu'].'</b></a></li>
			              				<li class="dropdown">
			                				<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$_SESSION['cloudUser']['cnick'].'<b class="caret"></b></a>
			                				<ul class="dropdown-menu">
			                  					<li><a href="edit_acc.php">Editar mi cuenta</a></li>
			                  					<li><a href="rec_c.php">Hacer recarga</a></li>
			                  					<li class="divider"></li>
			                  					<li class="nav-header"></li>
			                  					<li><a href="Controlador/logout.php">Cerrar Sesión</a></li>
			                				</ul>
			              				</li>
			            			</ul><div class="circle_ol"></div><img class="avatarIcon_m" align="left" src="'.$_SESSION['cloudUser']['avatarIcon'].'">
			          			</div>
			        		</div>
			      		</div>
			    	</div>
			    </div>');
					?>
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->	