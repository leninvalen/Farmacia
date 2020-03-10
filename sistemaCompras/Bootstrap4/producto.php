
<?php

	class Producto{
		private $codProducto;
		private $nomProducto;
		private $nomGenerico;
		private $marca;
		private $presentacion;
		private $peso;
		private $uniMedida;
		private $precio;
		private $laboratorio;
		private $color;
 		private $stockProducto;
 		//Transaccion
 		private $cantidadProducto;
		function __construct(){}

 		public function getCodProducto(){
			return $this->codProducto;
		}
 
		public function setCodProducto($codProducto){
			$this->codProducto = $codProducto;
		}

		public function getStockProducto(){
			return $this->stockProducto;
		}
 
		public function setStockProducto($stockProducto){
			$this->stockProducto = $stockProducto;
		}
		public function getNomProducto(){
		return $this->nomProducto;
		}
 
		public function setNomProducto($nomProducto){
			$this->nomProducto = $nomProducto;
		}

		public function getNomGenerico(){
		return $this->nomGenerico;
		}
 
		public function setNomGenerico($nomGenerico){
			$this->nomGenerico = $nomGenerico;
		}

		public function getMarca(){
			return $this->marca;
		}
 
		public function setMarca($marca){
			$this->marca= $marca;
		}
 		

		public function getPresentacion(){
			return $this->presentacion;
		}
 
		public function setPresentacion($presentacion){
			$this->presentacion= $presentacion;
		}
		
		public function getPeso(){
			return $this->peso;
		}
 
		public function setPeso($peso){
			$this->peso= $peso;
		}
		public function getUniMedida(){
		return $this->uniMedida;
		}
 
		public function setUniMedida($uniMedida){
			$this->uniMedida = $uniMedida;
		}
		public function getPrecio(){
		return $this->precio;
		}
 
		public function setPrecio($precio){
			$this->precio = $precio;
		}
		public function getLaboratorio(){
		return $this->laboratorio;
		}
 
		public function setLaboratorio($laboratorio){
			$this->laboratorio = $laboratorio;
		}
		public function getColor(){
		return $this->color;
		}
 
		public function setColor($color){
			$this->color= $color;
		}
	}
?>