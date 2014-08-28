<?php 
include("../app/CarClass.php");

var_dump($_SESSION["ocarrito"]->confirmar());
var_dump($_SESSION["ocarrito"]->num_items);
var_dump($_SESSION["ocarrito"]->getS());
 ?>
