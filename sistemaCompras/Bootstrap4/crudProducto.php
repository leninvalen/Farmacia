
<?php

// incluye la clase Db
require_once('conexion.php');
	class CrudProducto{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo carro
		public function insertar($producto){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO producto values(:cod_producto,:nom_producto,:nom_generico,:marca,:presentacion,:peso,:uni_medida,:precio,:laboratorio,:color,:stock)');
			$insert->bindValue('cod_producto',$producto->getCodProducto());
			$insert->bindValue('nom_producto',$producto->getNomProducto());
			$insert->bindValue('nom_generico',$producto->getNomGenerico());
			$insert->bindValue('marca',$producto->getMarca());
			$insert->bindValue('presentacion',$producto->getPresentacion());
			$insert->bindValue('peso',$producto->getPeso());
			$insert->bindValue('uni_medida',$producto->getUniMedida());
			$insert->bindValue('precio',$producto->getPrecio());			
			$insert->bindValue('laboratorio',$producto->getLaboratorio());
			$insert->bindValue('color',$producto->getColor());		
			$insert->bindValue('stock',$producto->getStockProducto());						
			$insert->execute();
			echo "Datos ingresados correctamente";
			
		}
 
		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaProductos=[];
			$select=$db->query('SELECT * FROM producto');
 
			foreach($select->fetchAll() as $productos){
				$myproducto= new Producto();
				$myproducto->setCodProducto($productos['cod_producto']);
				$myproducto->setNomProducto($productos['nom_producto']);
				$myproducto->setNomGenerico($productos['nom_generico']);
				$myproducto->setMarca($productos['marca']);
				$myproducto->setPresentacion($productos['presentacion']);
				$myproducto->setPeso($productos['peso']);
				$myproducto->setUniMedida($productos['uni_medida']);
				$myproducto->setPrecio($productos['precio']);
				$myproducto->setLaboratorio($productos['laboratorio']);
				$myproducto->setColor($productos['color']);
				$myproducto->setStockProducto($productos['stock']);
				$listaProductos[]=$myproducto;
		
				
			}
			return $listaProductos;
		}
 		
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($nomProducto, $id){

			
			$eliminar=$db->prepare('DELETE FROM producto WHERE cod_producto=:cod_producto');
			$eliminar->bindValue('cod_producto',$id);
			$eliminar->execute();	
		}

		public function comprar($transaccion){
			$fecha= date("Y")."-".date("m"."-".date("d"));
			date_default_timezone_set('America/Guayaquil');
			$hora=date('H:i:s');

			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM producto WHERE cod_producto=:id');
			$select->bindValue('id', $transaccion->getCodProducto());
			$select->execute();
			$transacciones=$select->fetch();
			$asignar= new Transaccion();
			$asignar->setComentario($transacciones['nom_producto']);
			$asignar->setPrecio($transacciones['precio']);

			$eliminar=$db->prepare('UPDATE producto SET stock=stock-'.$transaccion->getCanProducto().' WHERE cod_producto=:id');
			$eliminar->bindValue('id',$transaccion->getCodProducto());
			$eliminar->execute();
			$insert=$db->prepare('INSERT INTO transaccion values(NULL,:cod_producto,:comentario,:fecha,:hora,:cantidad,:precio,:total)');
			$insert->bindValue('cod_producto',$transaccion->getCodProducto());
			$insert->bindValue('comentario',$transacciones['nom_producto']);
			$insert->bindValue('fecha',$fecha);
			$insert->bindValue('hora',$hora);
			$insert->bindValue('cantidad',$transaccion->getCanProducto());
			$insert->bindValue('precio',$transacciones['precio']);
			$insert->bindValue('total',$transacciones['precio']*$transaccion->getCanProducto());
			$insert->execute();
			echo "Compra exitosa";
			echo "<br><a href='transacciones.php'>Regresar</a>";
		}
		
		public function mostrarTransaccion()
		{
			$db=Db::conectar();
			$listaTransacciones=[];
			$select=$db->query('SELECT * FROM transaccion');
 
			foreach($select->fetchAll() as $transacciones){
				$myTransaccion= new Transaccion();
				$myTransaccion->setCodTransaccion($transacciones['cod_transaccion']);
				$myTransaccion->setCodProducto($transacciones['cod_producto']);
				$myTransaccion->setComentario($transacciones['comentario']);
				$myTransaccion->setFecha($transacciones['fecha']);
				$myTransaccion->setHora($transacciones['hora']);
				$myTransaccion->setCanProducto($transacciones['cantidad']);
				$myTransaccion->setPrecio($transacciones['precio']);
				$myTransaccion->setTotal($transacciones['total']);
				$listaTransacciones[]=$myTransaccion;
			}
			return $listaTransacciones;
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerCarro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM carros WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$carro=$select->fetch();
			$myCar= new Carro();
			$myCar->setId($carro['id']);
			$myCar->setMarca($carro['marca']);
			$myCar->setProducto($carro['producto']);
			$myCar->setUnidadMedida($carro['unidad_medida']);
			$myCar->setPrecio($carro['precio']);
			return $myCar;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($producto){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE carros SET marca=:marca, producto=:producto,unidad_medida=:unidad_medida, precio=:precio  WHERE ID=:id');
			$actualizar->bindValue('id',$carro->getId());
			$actualizar->bindValue('marca',$carro->getMarca());
			$actualizar->bindValue('producto',$carro->getProducto());
			$actualizar->bindValue('unidad_medida',$carro->getUnidadMedida());
			$actualizar->bindValue('precio',$carro->getPrecio());
			
			$actualizar->execute();
		}
	}
?>