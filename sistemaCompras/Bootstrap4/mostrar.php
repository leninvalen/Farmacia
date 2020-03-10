<?php
//incluye la clase Libro y CrudLibro
require_once('crudProducto.php');
require_once('producto.php');
$crud=new crudProducto();
$producto= new Producto();
//obtiene todos los libros con el método mostrar de la clase crud
$listaProductos=$crud->mostrar();
?>
 
<html>
<head>
	<title>Mostrar Producto</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Codigo del producto</td>
			<td>Nombre del producto</td>
			<td>Nombre genérico del producto</td>
			<td>Marca del producto</td>
			<td>Presentación del producto</td>
			<td>Peso del producto</td>
			<td>Unidad de medida del producto</td>
			<td>Precio del producto</td>
			<td>Laboratorio</td>
			<td>Color del producto</td>		
			<td>Stock del producto</td>			
			<td>Actualizar</td>
			<td>Comprar</td>
		</head>
		<body>
			<?php foreach ($listaProductos as $producto) {?>
			<tr>
				<td><?php echo $producto->getCodProducto() ?></td>
				<td><?php echo $producto->getNomProducto() ?></td>
				<td><?php echo $producto->getNomGenerico()	?> </td>
				<td><?php echo $producto->getMarca()	?> </td>
				<td><?php echo $producto->getPresentacion()	?> </td>
				<td><?php echo $producto->getPeso()	?> </td>
				<td><?php echo $producto->getUniMedida()	?> </td>
				<td><?php echo $producto->getPrecio()	?> </td>
				<td><?php echo $producto->getLaboratorio()	?> </td>
				<td><?php echo $producto->getColor()	?> </td>
				<td><?php echo $producto->getStockProducto()	?> </td>
				<td><a href="actualizar.php?id=<?php echo $producto->getCodProducto()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrarProducto.php?&nomProducto=<?php echo $producto->getNomProducto()?>&id=<?php echo $producto->getCodProducto()?>&accion=e">Comprar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.html">Volver</a>
</body>
</html>