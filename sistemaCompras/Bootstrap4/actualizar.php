<html>
<link rel="stylesheet" type="text/css" href="css/estilos.css">

</html>
<?php

//incluye la clase Libro y CrudLibro
	require_once('crudProducto.php');
	require_once('producto.php');
	$crud= new crudProducto();
	$carro=new Carro();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerCarro($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Carro</title>
</head>
<body>
	<form action='administrar_carro.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $producto->getId()?>'>
			<td>Marca del carro:</td>
			<td> <input type='text' name='marca' value='<?php echo $carro->getMarca()?>'></td>
		</tr>
		<tr>
			<td>Tipo de vehiculo:</td>
			<td><input type='text' name='producto' value='<?php echo $carro->getProducto()?>' ></td>
		</tr>
		<tr>
			<td>Dimensiones del vehiculo:</td>
			<td><input type='text' name='unidad_medida' value='<?php echo $carro->getUnidadMedida() ?>'></td>
		</tr>
		<tr>
			<td>Precio:</td>
			<td><input type='text' name='precio' value='<?php echo $carro->getPrecio() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>