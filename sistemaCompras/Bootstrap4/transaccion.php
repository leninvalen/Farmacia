
<?php

	class Transaccion{

		private $canProducto;
		private $codProducto;
		private $comentario;
		private $precio;
		private $codTransaccion;
		private $fecha;
		private $hora;
		private $total;

		function __construct(){}

		public function getCodTransaccion(){
			return $this->codTransaccion;
		}
 
		public function setCodTransaccion($codTransaccion){
			$this->codTransaccion = $codTransaccion;
		}

		public function getHora(){
			return $this->hora;
		}
 
		public function setHora($hora){
			$this->hora = $hora;
		}

		public function getTotal(){
		return $this->total;
		}
 
		public function setTotal($total){
			$this->total = $total;
		}

		public function getFecha(){
			return $this->fecha;
		}
 
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

 		public function getCodProducto(){
			return $this->codProducto;
		}
 
		public function setCodProducto($codProducto){
			$this->codProducto = $codProducto;
		}

 		public function getCanProducto(){
			return $this->canProducto;
		}
 
		public function setCanProducto($canProducto){
			$this->canProducto = $canProducto;
		}
		public function getComentario(){
			return $this->comentario;
		}
 
		public function setComentario($comentario){
			$this->comentario = $comentario;
		}

 		public function getPrecio(){
			return $this->precio;
		}
 
		public function setPrecio($precio){
			$this->precio = $precio;
		}

	}
?>