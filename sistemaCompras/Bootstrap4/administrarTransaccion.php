
<?php
//incluye la clase Libro y CrudLibro
require_once('crudProducto.php');
require_once('transaccion.php');

$crud= new CrudProducto();
$transaccion = new Transaccion();

	if(isset($_POST['comprar']))
	{

		$transaccion->setCodProducto($_POST['codProducto']);
		$transaccion->setCanProducto($_POST['canProducto']);
		$crud->comprar($transaccion);
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina 
	}
	
?>