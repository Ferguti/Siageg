	<?php

	class conexion extends mysqli{

		public function __construct(){
			parent:: __construct('localhost', 'root', '', 'siageg');
			$this->query("SET NAMES 'utf8';");
			$this->connect_errno ? die('Error al conectar con la base de datos') : $x = 'conectado';
			// echo $x;
			//unset ($x);
		}
		
		public function travel($i){
			return mysqli_fetch_array($i);
		}

		public function consultar($conexion,$sql){
			$resultado = mysqli_query($conexion,$sql);
			return $resultado; 
		}

		

	}



?>
	

