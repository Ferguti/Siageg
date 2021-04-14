<?php

	class acceso {
		protected $user;
		protected $pass;
		public    $nom;

		public function __construct($usuario, $password) {
			$this->user = $usuario;
			$this->pass = $password;
		}



		public function loginGra() {
			$db  = new conexion();
			$sql = $db->query("SELECT ci, pw FROM estudiante WHERE ci='$this->user' and pw='$this->pass';");
			$estudiante =  $db->consultar($db, "SELECT *  FROM estudiante WHERE ci='$this->user';");
			$expediente = $db->consultar($db, "SELECT * FROM expediente WHERE ci='$this->user';");

				//se valida el usuario
			if(mysqli_num_rows($sql) > 0 ){

				while($filas = mysqli_fetch_assoc($expediente)){
				$fn = $filas['fn'];
				$fotos = $filas['fotos'];
				$nc = $filas['nc'];
				$cc = $filas['cc'];
				$pn = $filas['pn'];
				$sa = $filas['sa'];
				}

					//se guarda el nombre del usuario
				while($row = mysqli_fetch_assoc($estudiante)){
				$ced = $row['ci'];
				$nom = $row['nombres'];
				$ape = $row['apellidos'];
				$pnf = $row['pnf'];
				$tipo = $row['tipogrado'];
				$titulo = $row['titulo'];
				}


					// incia sesión
				session_start();
				$_SESSION['ci'] = $ced;
				$_SESSION['fn'] = $fn;
				$_SESSION['fotos'] = $fotos;
				$_SESSION['titulo'] = $titulo;
				$_SESSION['nc'] = $nc;
				$_SESSION['cc'] = $cc;
				$_SESSION['pn'] = $pn;
				$_SESSION['sa'] = $sa;
				$_SESSION['tipogrado'] = $tipo;
				$_SESSION['pnf'] = $pnf;
				$_SESSION['apellidos'] = $ape;
				$_SESSION['nombres'] = $nom;
				$_SESSION['user'] = $this->user;
				header('location: ../capaSuperior/sessionGra.php');
			} else{
					echo "
	  				<meta http-equiv='refresh' content='0 URL= ../capaSuperior/loginG.php'>
			 		<script type=\"text/javascript\">
			 		alert(\"¡Usuario o contraseña no validos!\");
			 		</script>
					";
			}
		}


		public function loginSec() {
			$db  = new conexion();
			$sql = $db->consultar($db,"SELECT * FROM personal WHERE ci='$this->user' and pw='$this->pass';");

			if(mysqli_num_rows($sql) > 0 ){
					//se guarda el nombre del usuario
				while($row = mysqli_fetch_assoc($sql)){
				$rol = $row['rol'];
				$nom = $row['nom'];
				$ape = $row['apell'];
				}

				if($rol == 'Secretaría'){

				session_start();
				$_SESSION['rol'] = $rol;
				$_SESSION['nom'] = $nom;
				$_SESSION['apell'] = $ape;
				$_SESSION['user'] = $this->user;
				header('location: ../capaSuperior/sesionSec.php');
			}else{
					echo "
	  				<meta http-equiv='refresh' content='0 URL= ../capaSuperior/loginSec.php'>
			 		<script type=\"text/javascript\">
			 		alert(\"¡No tiene acceso a al módulo de secretaría!\");
			 		</script>
					";
			}
		}else{
					echo "
	  				<meta http-equiv='refresh' content='0 URL= ../capaSuperior/loginSec.php'>
			 		<script type=\"text/javascript\">
			 		alert(\"¡Usuario o contraseña no validos!\");
			 		</script>
					";
				}

	}


		public function loginCde(){
			$db  = new conexion();
			$sql = $db->consultar($db,"SELECT * FROM personal WHERE ci='$this->user' and pw='$this->pass';");

			if(mysqli_num_rows($sql) > 0 ){
					//se guarda el nombre del usuario
				while($row = mysqli_fetch_assoc($sql)){
				$rol = $row['rol'];
				$nom = $row['nom'];
				$ape = $row['apell'];
				}

				if($rol == 'CDE'){

				session_start();
				$_SESSION['rol'] = $rol;
				$_SESSION['nom'] = $nom;
				$_SESSION['apell'] = $ape;
				$_SESSION['user'] = $this->user;
				header('location: ../capaSuperior/cde.php');
			}else{
					echo "
	  				<meta http-equiv='refresh' content='0 URL= ../capaSuperior/loginCde.php'>
			 		<script type=\"text/javascript\">
			 		alert(\"¡No tiene acceso a al módulo de CDE!\");
			 		</script>
					";
			}
		}else{
					echo "
	  				<meta http-equiv='refresh' content='0 URL= ../capaSuperior/loginCde.php'>
			 		<script type=\"text/javascript\">
			 		alert(\"¡Usuario o contraseña no validos!\");
			 		</script>
					";
				}

		}

		public function clavelost() {

		}
	}

 ?>
