<?php
//incluye la clase Libro y CrudLibro
require_once('crudProducto.php');
require_once('transaccion.php');
$crud= new CrudProducto();
$transaccion = new Transaccion();

//obtiene todos los libros con el método mostrar de la clase crud
$listaTransacciones=$crud->mostrarTransaccion();
?>
 
<html>
<head>
	<title>Mostrar Producto</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Código de la transacción</td>
			<td>Código del producto</td>
			<td>Comentario</td>
			<td>Fecha</td>
			<td>Hora</td>
			<td>Cantidad</td>
			<td>Precio</td>
			<td>Total</td>
		</head>
		<body>
			<?php foreach ($listaTransacciones as $transaccion) {?>
			<tr>
				<td><?php echo $transaccion->getCodTransaccion() ?></td>
				<td><?php echo $transaccion->getCodProducto() ?></td>
				<td><?php echo $transaccion->getComentario()	?> </td>
				<td><?php echo $transaccion->getFecha()	?> </td>
				<td><?php echo $transaccion->getHora()	?> </td>
				<td><?php echo $transaccion->getCanProducto()	?> </td>
				<td><?php echo $transaccion->getPrecio()	?> </td>
				<td><?php echo $transaccion->getTotal()	?> </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.html">Volver</a>
</body>
</html>