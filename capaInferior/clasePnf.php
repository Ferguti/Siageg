<?php 
	class pnf {
		private $nom;
		private $siglas;
		private $fecha;
		private $descrip;

		public function __construct(){
			$nom;
			$siglas;
			$fecha;
			$descrip;
		}

		public function regPnf($nom, $siglas, $fecha, $descrip){
			$this->nom = $nom;
			$this->siglas = $siglas;
			$this->fecha = $fecha;
			$this->descrip = $descrip;

			$db = new conexion();
			$resultado = $db->consultar($db,"SELECT * FROM pnf WHERE nom ='".$this->nom."' OR siglas = '".$this->siglas."'");
			if(mysqli_num_rows($resultado) >= 1){
				echo "
	  					<meta http-equiv='refresh' content='0 URL= ../capaSuperior/regPnf.php'>
	  					<script type=\"text/javascript\">			 			 		
			 		   	alert(\"¡El PNF  ó las SIGLAS ingresadas ya estan registradas! Verfique e intente nuevamente\");			 		
			 		 	</script>";
			}else{
				$save = $db->query("INSERT INTO pnf (nom, siglas, fecha, descrip) VALUES ('$this->nom', '$this->siglas', '$this->fecha', '$this->descrip')")
							or die("Error al guardar datos".mysqli_errno($save));
				echo "	<meta http-equiv='refresh' content='0 URL= ../capaSuperior/regPnf.php'>
	  					<script type=\"text/javascript\">			 			 		
			 		   	alert(\"¡El nuevo PNF se registro exitosamente!\");			 		
			 		 	</script>";
			}
		}

	}
 ?>