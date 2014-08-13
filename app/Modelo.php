<?php

 class Model
 {
     protected $conexion;
     public function __construct($dbhost,$dbuser,$dbpass,$dbname)
     {
       $mvc_bd_conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	   
	   
       if ($mvc_bd_conexion->connect_error) {
           die('No ha sido posible realizar la conexión con la base de datos: ' . $mvc_bd_conexion->connect_errno);
       }
       //mysql_select_db($dbname, $mvc_bd_conexion);

	   
       //mysql_set_charset('utf8');

       $this->conexion = $mvc_bd_conexion;
     }
	
     public function conectar_usuarios($cu, $pass) {
		
		$sql = "select cloud_user,enc_pass,ste_acc from cloud_users where cloud_user='".$cu."' and enc_pass='".$pass."'";
         $result = mysqli_query($this->conexion,$sql);

         $datos = array();
		 
         while ($row = mysqli_fetch_assoc($result))
         {
             $datos = $row;
         }

         return $datos;

	}
	
	public function add_cloud_acc($cu,$enc_pass,$ste_acc){
		$sql = "insert into cloud_users (cloud_user,enc_pass, ste_acc) values ('".$cu."','".$enc_pass."','".$ste_acc."')";
		$result = mysqli_query($this->conexion, $sql);
        return $sql;
	}
	
	 
     public function listarItems()
     {
         $sql = "select it_nombre,it_stock,it_precio,it_aspecto,it_hero,it_id,it_limg from items_cloud_d";

         $result = mysqli_query($this->conexion, $sql);

         $items = array();
         while ($row = mysqli_fetch_assoc($result))
         {
             $items[] = $row;
         }

         return $items;
     }
 }
 ?>