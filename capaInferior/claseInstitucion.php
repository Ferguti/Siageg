<?php 
	class institucion {
		private $nom;
		private $siglas;
		private $director;
		private $descrip;

		public function __construct(){
			$nom;
			$siglas;
			$director;
			$descrip;
		}

		public function regIns($nom, $siglas, $director, $descrip){
			$this->nom = $nom;
			$this->siglas = $siglas;
			$this->director = $director;
			$this->descrip = $descrip;

			$db = new conexion();
			$resultado = $db->consultar($db,"SELECT * FROM institucion WHERE nom ='".$this->nom."' OR siglas = '".$this->siglas."'");
			if(mysqli_num_rows($resultado) >= 1){
				echo "
	  					<meta http-equiv='refresh' content='0 URL= ../capaSuperior/regIns.php'>
	  					<script type=\"text/javascript\">			 			 		
			 		   	alert(\"¡La INSTITUCIÓN  ó las SIGLAS ingresadas ya estan registradas! Verfique e intente nuevamente\");			 		
			 		 	</script>";
			}else{
				$save = $db->query("INSERT INTO institucion (nom, siglas, dir, descrip) VALUES ('$this->nom', '$this->siglas', '$this->director', '$this->descrip')")
				or die("Error al guardar datos".mysqli_errno($save));
				echo "	<meta http-equiv='refresh' content='0 URL= ../capaSuperior/regIns.php'>
	  					<script type=\"text/javascript\">			 			 		
			 		   	alert(\"¡La nueva institución se registro exitosamente!\");			 		
			 		 	</script>";
			}
		}

	}
 ?>