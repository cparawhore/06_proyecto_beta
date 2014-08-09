<?php
 class carrito {
	//atributos de la clase
   	var $num_items;
   	var $array_id_item;
   	var $array_nombre_item;
   	var $array_precio_item;

	//constructor. Realiza las tareas de inicializar los objetos cuando se instancian
	//inicializa el numero de productos a 0
	function carrito () {
   		$this->num_items=0;
	}
	
	//Introduce un producto en el carrito. Recibe los datos del producto
	//Se encarga de introducir los datos en los arrays del objeto carrito
	//luego aumenta en 1 el numero de productos
	function introduce_item($id_item,$nombre_item,$precio_item){
		$this->array_id_item[$this->num_items]=$id_item;
		$this->array_nombre_item[$this->num_items]=$nombre_item;
		$this->array_precio_item[$this->num_items]=$precio_item;
		$this->num_items++;
		return $this->array_id_item[1];
	}

	//Muestra el contenido del carrito de la compra
	//ademas pone los enlaces para eliminar un producto del carrito
	function imprime_carrito(){
		$suma = 0;
		echo '<table border=1 cellpadding="3">
			  <tr>
				<td><b>Nombre producto</b></td>
				<td><b>Precio</b></td>
				<td>&nbsp;</td>
			  </tr>';
		for ($i=0;$i<$this->num_items;$i++){
			if($this->array_id_item[$i]!=null){
				echo '<tr>';
				echo "<td>" . $this->array_nombre_item[$i] . "</td>";
				echo "<td>" . $this->array_precio_item[$i] . "</td>";
				echo "<td><a href='Controlador/delete_item_c.php?linea=$i'>Eliminar producto</td>";
				echo '</tr>';
				$suma += $this->array_precio_item[$i];
			}
		}
		//muestro el total
		echo "<tr><td><b>TOTAL:</b></td><td> <b>$suma</b></td><td>&nbsp;</td></tr>";
		//total más IVA
		echo "<tr><td><b>IVA (16%):</b></td><td> <b>" . $suma * 1.16 . "</b></td><td>&nbsp;</td></tr>";
		echo "</table>";
	}
	
	//elimina un producto del carrito. recibe la linea del carrito que debe eliminar
	//no lo elimina realmente, simplemente pone a cero el id, para saber que esta en estado retirado
	function elimina_item($linea){
		$this->array_id_item[$linea]=null;
	}
} 
session_start();
//si no esta creado el objeto carrito en la sesion, lo creo
if (!isset($_SESSION["ocarrito"])){
	$_SESSION["ocarrito"] = new carrito();
}
?>