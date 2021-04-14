	<?php 
	class expediente {
		private $cedula;
		private $fn;
		private $fotos;
		private $nc;
		private $cc;
		private $pn;
		private $sa;

		public function __construct(){
			$cedula;
			$fn;
			$fotos;
			$nc;
			$cc;
			$pn;
			$sa;
		}

		public function regExp($cedula, $fotos, $fn, $nc, $cc, $pn, $sa){

			include("claseEstudiante.php");
			$this->cedula = $cedula;
			$this->fotos = $fotos;
			$this->fn = $fn;
			$this->nc = $nc;
			$this->cc = $cc;
			$this->pn = $pn;
			$this->sa = $sa;
			$db = new conexion();			
			$updateExp = $db->query("UPDATE expediente SET fn = '$this->fn', fotos = '$this->fotos', nc = '$this->nc', cc = '$this->cc', pn = '$this->pn', sa = '$this->sa' WHERE ci = '$this->cedula'") 
									or die("Error al actualizar el expediente".mysqli_errno($updateExp));

			$updateSa = $db->query("UPDATE estudiante SET sa = '$this->sa' WHERE ci = '$this->cedula'") 
									or die("Error al actualizar el expediente".mysqli_errno($updateSa));


			echo "	<meta http-equiv='refresh' content='0 URL= ../capaSuperior/conGradExp.php'>
	  				<script type=\"text/javascript\">			 			 		
			 		alert(\"¡Actualizacion de expediente exitosa!\");			 		
			 		</script>";

					
					$con = new estudiante();
					$con->consultar($this->cedula);
			}
		}
	
 ?>