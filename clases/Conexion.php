<?php 
	class conectar{
		private $servidor="localhost";
		private $usuario="root";
		private $passwords="";
		private $bd="ventas";
		private $port="3308";
		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->passwords,
									 $this->bd,
									 $this->port);
			return $conexion;
		}
	}

 ?>