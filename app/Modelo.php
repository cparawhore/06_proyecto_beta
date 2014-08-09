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
		
		$sql = "select * from cloud_users where cloud_user='".$cu."' and enc_pass='".$pass."'";
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
	
	 
     public function listarMesas()
     {
         $sql = "select id_mesa from mesa";

         $result = mysqli_query($this->conexion, $sql);

         $mesa = array();
         while ($row = mysqli_fetch_assoc($result))
         {
             $mesa[] = $row;
         }

         return $mesa;
     }
	 
	 public function variable()
     {
         $sql = "select variable from variable where id_var=1";

         $result = mysqli_query($this->conexion, $sql);

         $var = array();
         while ($row = mysqli_fetch_assoc($result))
         {
             $var[] = $row;
         }

         return $var[0];
     }
	 
	 public function listarPizzas()
     {
         $sql = "select id_pizza,nombre_pizza,precio_pizza from pizza";

         $result = mysqli_query($this->conexion, $sql);

         $pizza = array();
         while ($row = mysqli_fetch_assoc($result))
         {
             $pizza[] = $row;
         }

         return $pizza;
     }
	
	public function listar_det()
     {	 
         $sql = "select id_pedido,id_pizza,cantidad,tipo_pedido,precio,id_recibo,cancelado from pedido_detalle group by id_pedido";

         $result = mysqli_query($this->conexion, $sql);

         $detalle = array();
         while ($row = mysqli_fetch_assoc($result))
         {
             $detalle[] = $row;
         }

         return $detalle;
     }
	 
	 public function editar_det($cod)
     {	 $cod=$cod;
         $sql = "select id_pedido,id_pizza,cantidad,tipo_pedido,precio,id_recibo,cancelado from pedido_detalle where id_pedido=$cod";

         $result = mysqli_query($this->conexion, $sql);

         $detalle = array();
         while ($row = mysqli_fetch_assoc($result))
         {
             $detalle[] = $row;
         }

         return $detalle;
     }
	 
	 public function contar()
     {	 
         $sql = "select id_pedido,id_pizza,cantidad,tipo_pedido,precio,id_recibo,cancelado from pedido_detalle group by id_pedido";

         $result = mysqli_query($this->conexion, $sql);

         $detalle = array();
         while ($row = mysqli_fetch_assoc($result))
         {
             $detalle[] = $row;
         }

         return count($detalle);
     }
	 
	 public function get_tipo($tipo)
	 {
		if($tipo==0)
		return 'Local';
		else
		return 'Delivery';
	}
	 
	 public function get_suc($suc)
	 {
		if($suc==0)
		return 'Barranca';
		else
		return 'Paramonga';
	}
	
	 public function get_nompizza($set_id)
     {		$id = $set_id;
         $sql = "select nombre_pizza,precio_pizza from pizza where id_pizza=$id";

         $result = mysqli_query($this->conexion, $sql);

         $nombre = array();
         while ($row = mysqli_fetch_assoc($result))
         {
             $nombre[] = $row;
         }
         return $nombre;
     }
     
	  public function get_numesa($ped)
     {		$id = $ped;
         $sql = "select id_mesa from pedido where id_pedido=$id";

         $result = mysqli_query($this->conexion, $sql);

         $mesa = array();
         while ($row = mysqli_fetch_assoc($result))
         {
             $mesa[] = $row;
         }
         return $mesa;
     }

 }
 ?>