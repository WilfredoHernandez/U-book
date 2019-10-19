<?php 
	class conectar{
		private $servidor="remotemysql.com";
		private $usuario="mANqYSyeyP";
		private $password="8aitBK3zje";
		private $bd="mANqYSyeyP";
		private $port="3306";
		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd,
									 $this->port);
			return $conexion;
		}

	}

 ?>