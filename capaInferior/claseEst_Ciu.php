<?php 
	class est_ciu {
		private $estado;
		private $ciudad;
		public function __construct(){
			$estado;
			$ciudad;
		}

		public function regE($estado){
			$this->estado = $estado;			
			$db = new conexion();
			$validar = $db->consultar($db,"SELECT * FROM estados WHERE estado = '".$this->estado."'");
			if(mysqli_num_rows($validar) >= 1){
				echo " <meta http-equiv='refresh' content='0 URL=../capaSuperior/regEstado.php'>
	  				   <script type=\"text/javascript\">			 			 		
			 		   alert(\"¡El estado ya está registrado verifique e intente nuevamente!\");			 		
			 		 </script>";
			}else{
				$save = $db->query("INSERT INTO estados (estado) VALUES ('$this->estado')") 
									or die("Error al guardar registro".mysql_errno($save));

				echo "	<meta http-equiv='refresh' content='0 URL= ../capaSuperior/regEstado.php'>
	  					<script type=\"text/javascript\">			 			 		
			 		   	alert(\"¡Registro exitoso!\");			 		
			 		 	</script>";
			}
		}

		public function regC($ciudad){

			$this->ciudad = $ciudad;			
			$db = new conexion();
			$validar = $db->consultar($db,"SELECT * FROM ciudades WHERE ciudad = '".$this->ciudad."'");
			if(mysqli_num_rows($validar) >= 1){
				echo " <meta http-equiv='refresh' content='0 URL=../capaSuperior/regCiudad.php'>
	  				   <script type=\"text/javascript\">			 			 		
			 		   alert(\"¡La ciudad ya está registrada verifique e intente nuevamente!\");			 		
			 		 </script>";
			}else{
				$save = $db->query("INSERT INTO ciudades (ciudad) VALUES ('$this->ciudad')") 
									or die("Error al guardar registro".mysql_errno($save));

				echo "	<meta http-equiv='refresh' content='0 URL= ../capaSuperior/regCiudad.php'>
	  					<script type=\"text/javascript\">			 			 		
			 		   	alert(\"¡Registro exitoso!\");			 		
			 		 	</script>";
			}

		}
	}
 ?>