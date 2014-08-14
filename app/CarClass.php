<?php
 class carrito {
	//atributos de la clase
   	var $num_items;
   	var $array_id_item;
   	var $array_nombre_item;
   	var $array_precio_item;
   	var $array_cant_item;

	//constructor. Realiza las tareas de inicializar los objetos cuando se instancian
	//inicializa el numero de productos a 0
	function carrito () {
   		$this->num_items=0;
	}

	function getItem () {
		$cant = 0;
		for ($i=0;$i<$this->num_items;$i++){
			if($this->array_id_item[$i]!=null)
			{ 
				$cant++;
			}
		}	
   		return $cant;		
	}
	
	//Introduce un producto en el carrito. Recibe los datos del producto
	//Se encarga de introducir los datos en los arrays del objeto carrito
	//luego aumenta en 1 el numero de productos
	function introduce_item($id_item,$nombre_item,$precio_item,$cant_item){
		$cant_flag = false;
		$id = 0;
		for ($i=0;$i<$this->num_items;$i++){
			if ($this->array_id_item[$i] == $id_item) {
				$cant_flag = true;
				$id = $i;
			}
		}
		if(!$cant_flag){
			$this->array_id_item[$this->num_items]=$id_item;
			$this->array_nombre_item[$this->num_items]=$nombre_item;
			$this->array_precio_item[$this->num_items]=$precio_item;
			$this->array_cant_item[$this->num_items]=$cant_item;
			$this->num_items++;
		}
		else{
			$this->array_cant_item[$id]++;
		}
		
	}

	//Muestra el contenido del carrito de la compra
	//ademas pone los enlaces para eliminar un producto del carrito
	function imprime_carrito(){
		$suma = 0;
		echo '<form action="Controlador/upd_car.php" method="post">
		<table class="table table-hover" cellpadding="3">
				<thead>
			  <tr>
				<th><b>Nombre producto</b></th>
				<th><b>Precio</b></th>
				<th><b>Cantidad</b></th>
				<th>&nbsp;</th>
			  </tr></thead>';
		for ($i=0;$i<$this->num_items;$i++){
			if($this->array_id_item[$i]!=null){
				echo '<tr>';
				echo "<td>" . $this->array_nombre_item[$i] . "</td>";
				echo "<td>" . $this->array_precio_item[$i] . "</td>";
				echo "<td><input type='text' value='" . $this->array_cant_item[$i] . "' class='item-cantidad' name='q[]'>
							<input type='hidden' value='$i' name='linea[]'></td>";
				echo "<td><a href='Controlador/delete_item_c.php?linea=$i'>Eliminar</td>";
				echo '</tr>';
				$suma += $this->array_precio_item[$i] * $this->array_cant_item[$i];
			}
		}
		//muestro el total
		echo "<tr><td></td><td><b>TOTAL:</b></td><td> <b>$suma</b></td><td><input id='update-b' class='btn btn-success' type='submit' value='Actualizar'></td></tr>";
		echo "</table>
				</form>";
	}
	

	//elimina un producto del carrito. recibe la linea del carrito que debe eliminar
	//no lo elimina realmente, simplemente pone a cero el id, para saber que esta en estado retirado
	function elimina_item($linea){
		$this->array_id_item[$linea]=null;
	}

	function actualiza_item($linea,$q){
		$this->array_cant_item[$linea]=$q;
	}


} 
session_start();
//si no esta creado el objeto carrito en la sesion, lo creo
if (!isset($_SESSION["ocarrito"])){
	$_SESSION["ocarrito"] = new carrito();
}
?>