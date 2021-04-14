<?php 

	class personal {
		private $cedula;
		private $pw;	
		private $nom;
		private $apell;
		private $telf;
		private $email;
		private $rol;
		private $ct;
		private $tipo;

		public function __construct(){
			$cedula;
			$pw;			
			$nom;
			$apell;
			$telf;
			$email;
			$rol;
			$ct;
			$tipo;
		}

			//metodo para registrar personal
		public function regPer($cedula, $pw, $nom, $apell, $telf, $email, $rol, $ct){
			$this->cedula=$cedula;
			$this->pw=$pw;
			$this->nom=$nom;
			$this->apell=$apell;
			$this->telf=$telf;
			$this->email=$email;
			$this->rol=$rol;
			$this->ct=$ct;

			$db = new conexion();
			$r = $db->consultar($db,"SELECT * FROM personal WHERE ci='".$this->cedula."' OR email='".$this->email."'");
			if(mysqli_num_rows($r) >= 1){
				echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/regPer.php'>
			 					<script type=\"text/javascript\">				 			 		
						 		alert(\"¡El número de cedula ó el email ingresado ya está registrado! Verifique e intente registrarse nuevamente\");		
						 		</script>";
			}else{

			$resultado = $db->consultar($db,"SELECT * FROM admin WHERE ci = '".$this->cedula."' AND rol = '".$this->rol."' AND ct = '".$this->ct."'");		
			if(mysqli_num_rows($resultado) >= 1){
				$save = $db->query("INSERT INTO personal (ci, pw, nom, apell, telf, email, rol)
					VALUES ('$this->cedula', '$this->pw', '$this->nom', '$this->apell', '$this->telf', '$this->email', '$this->rol')") 
					 or die("problemas al guardar </br>".mysqli_errno($save));
					 if($this->rol == 'CDE'){
					 	echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/loginCde.php'>
			 					<script type=\"text/javascript\">				 			 		
						 		alert(\"¡Registro exitoso! Ya puedes ingresar a tu cuenta para gestionar Feliz día\");		
						 		</script>";
					 }else{
					 	echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/loginSec.php'>
			 					<script type=\"text/javascript\">				 			 		
						 		alert(\"¡Registro exitoso! Ya puedes ingresar a tu cuenta para gestionar Feliz día\");		
						 		</script>";
					 }
					 
			}else{
				 		echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/regPer.php'>
			 					<script type=\"text/javascript\">				 			 		
						 		alert(\"¡No tiene acceso permitido al registro! Contacte al administrador del sistema\");		
						 		</script>";
			}
		} 
	}

		public function regPerAdmin($cedula, $pw, $nom, $apell, $tipo, $rol){
			$this->cedula=$cedula;
			$this->pw=$pw;
			$this->nom=$nom;
			$this->apell=$apell;
			$this->tipo=$tipo;		
			$this->rol=$rol;
		

			$db = new conexion();
			$r = $db->consultar($db,"SELECT * FROM admin WHERE ci='".$this->cedula."'");
			if(mysqli_num_rows($r) >= 1){

				if($this->rol == 'CDE'){
					echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/regPerCde.php'>
			 					<script type=\"text/javascript\">				 			 		
						 		alert(\"¡EL usuario que intenta registrar ya existe! **Verifique e intente de nuevo**\");		
						 		</script>";
						 	}else{
						 		echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/regPerSec.php'>
			 					<script type=\"text/javascript\">				 			 		
						 		alert(\"¡EL usuario que intenta registrar ya existe! **Verifique e intente de nuevo**\");		
						 		</script>";
						 	}
				
			}else{			
			
				$save = $db->query("INSERT INTO admin (ci, nom, ape, rol, ct, tipo)
					VALUES ('$this->cedula', '$this->nom', '$this->apell', '$this->rol', '$this->pw', '$this->tipo')") 
					 or die("problemas al guardar </br>".mysqli_errno($save)); 
					 
					 if($this->rol == 'CDE'){
					 	echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/regPerCde.php'>
			 					<script type=\"text/javascript\">				 			 		
						 		alert(\"¡Registro exitoso! Ya le puede indicar al empleado que complete su registro\");		
						 		</script>";
					 }else{
					 	echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/regPerSec.php'>
			 					<script type=\"text/javascript\">				 			 		
						 		alert(\"¡Registro exitoso! YA le puede indicar al empleado que complete su registro\");		
						 		</script>";
					 }					 
			
			} 
		}
}
 ?>