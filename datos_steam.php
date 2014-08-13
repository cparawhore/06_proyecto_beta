<?php
require_once("app/SteamUserCS.php");
require_once("app/SteamGame.php");

$id_st = $_REQUEST['steamacc'];
$user = new SteamUser($id_st,'5C0B43D4E3936F5288A311A55FCCFC0F');
	if ($user->getProfileData()['datosCuenta']['steamID'] != 'undefined' && $user->getProfileData()['datosCuenta']['stateMessage'] != 'undefined') {
		echo '<p><b>'.$user->getProfileData()['datosCuenta']['steamID']."</b></p>";
		echo '<div class="image"><img src="'.$user->getProfileData()['datosCuenta']['avatarFull'].'"></div>';
		echo '</br><p>'.$user->getProfileData()['datosCuenta']['stateMessage']."</p>";
		echo '<div class="alert alert-success">
                    <strong>Bien Hecho!</strong> Cuenta Valida de Steam la entrega de items se realizara a esta cuenta.
                </div>';
	}		
	else{
		echo '<div class="alert alert-danger">
                    <strong>Sh*t!</strong> Copia un link de steam valido por favor.
                </div>';
	}
?>