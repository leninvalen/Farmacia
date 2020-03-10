
<?php
//incluye la clase Libro y CrudLibro
require_once('crudProducto.php');
require_once('producto.php');
$crud= new CrudProducto();
$producto= new Producto();

	if (isset($_POST['insertar'])) 
	{
		$producto->setCodProducto($_POST['cod_producto']);
		$producto->setNomProducto($_POST['nom_producto']);
		$producto->setNomGenerico($_POST['nom_generico']);
		$producto->setMarca($_POST['marca']);
		$producto->setPresentacion($_POST['presentacion']);
		$producto->setPeso($_POST['peso']);
		$producto->setLaboratorio($_POST['laboratorio']);
		$producto->setUniMedida($_POST['uni_medida']);
		$producto->setPrecio($_POST['precio']);
		$producto->setColor($_POST['color']);
		$producto->setStockProducto($_POST['stock']);
		$crud->insertar($producto);

	}
	elseif(isset($_POST['actualizar']))
	{
		$producto->setCodProducto($_POST['cod_producto']);
		$producto->setNomProducto($_POST['nom_producto']);
		$producto->setNomGenerico($_POST['nom_generico']);
		$producto->setMarca($_POST['marca']);
		$producto->setPresentacion($_POST['presentacion']);
		$producto->setPeso($_POST['peso']);
		$producto->setUniMedida($_POST['uni_medida']);
		$producto->setPrecio($_POST['precio']);
		$producto->setLaboratorio($_POST['laboratorio']);
		$producto->setColor($_POST['color']);
		$producto->setColor($_POST['stock']);
		$crud->actualizar($producto);
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina 
	}


	elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['nomProducto'] ,  $_GET['id']);		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
	
?>