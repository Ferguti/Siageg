<?php 
	class promocion {

		private $periodo;
		private $fecha;

		public function __construct(){
			$periodo;
			$fecha;
		}

		public function regPeriodo($periodo, $fecha){
			$this->periodo = $periodo;
			$this->fecha = $fecha;			
			$db = new conexion();
			$validar = $db->consultar($db,"SELECT * FROM promocion WHERE nom = '".$this->periodo."'");
			if(mysqli_num_rows($validar) >= 1){
				echo " <meta http-equiv='refresh' content='0 URL=../capaSuperior/regEstado.php'>
	  				   <script type=\"text/javascript\">			 			 		
			 		   alert(\"¡El periodo ya está registrado verifique e intente nuevamente!\");			 		
			 		   </script>";
			}else{
				$save = $db->query("INSERT INTO promocion (nom, fecha) VALUES ('$this->periodo', '$this->fecha')") 
									or die("Error al guardar registro".mysql_errno($save));

				echo "	<meta http-equiv='refresh' content='0 URL= ../capaSuperior/regPeriodo.php'>
	  					<script type=\"text/javascript\">			 			 		
			 		   	alert(\"¡Registro exitoso!\");			 		
			 		 	</script>";


			}
		}
		
	}
 ?>