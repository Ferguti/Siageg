	<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>LoginController</title>
</head>
<body>

	<?php

	include('../capaInferior/conexion.php');


		// condicional para validar que la variable modo esta definida
	$modo = isset($_GET['modo']) ? $_GET['modo']  : 'default';

		//se valida el valor de la variable modo para decir que accion realizar
	switch ($modo) {

			//controlador para loguear graduandos
	  	case 'login':

	  		if(isset($_POST['login'])){
	  			if(!empty($_POST['user']) and !empty($_POST['pass'])){
	  				include('../capaInferior/claseAcceso.php');
	  				$login = new acceso($_POST['user'], $_POST['pass']);
	  				$login->loginGra();
	  			}else{
	  				header('location: ../capaSuperior/loginG.php?error=campos-vacios');
		  		}
	  		}

	  	break;

	  		//controlador para clave perdida
	  	case 'claveperdida':
	  		echo 'capture clave perdida';

	  	break;

	  		//controlador para loguear personal de secretaría
		case 'secretaria':

			if(isset($_POST['secretaria'])){
				if(!empty($_POST['user']) and !empty($_POST['pass'])){
					include('../capaInferior/claseAcceso.php');
					$login = new acceso($_POST['user'], $_POST['pass']);
					$login->loginSec();
				}else{
					echo " <meta http-equiv='refresh' content='0 URL=../vista/loginSec.php'>
	  				   		<script type=\"text/javascript\">
			 		   		alert(\"¡Los campos no pueden estar vacíos!\");
			 				 </script>";
				}
			}

	  	break;

	  	case 'cde':

	  		if(!empty($_POST['user']) and !empty($_POST['pass'])){
	  			include('../capaInferior/claseAcceso.php');
	  			$login = new acceso($_POST['user'], $_POST['pass']);
	  			$login->loginCde();
	  		}


	  	default:

	  			// se validan campos vacios para evitar entradas no autorizadas
	  		if(isset($_GET['error']) and $_GET['error'] == 'campos-vacios'){
	  			echo " <meta http-equiv='refresh' content='0 URL=../vista/loginG.php'>
	  				   <script type=\"text/javascript\">
			 		   alert(\"¡Los campos no pueden estar vacíos!\");
			 		 </script>";

			 	// se valida que los datos de incio de sesion sean validos
	  		}else if(isset($_GET['error']) and $_GET['error'] == 'datos-invalidos'){
	  			echo "
	  				<meta http-equiv='refresh' content='0 URL= ../vista/loginG.php'>
			 		<script type=\"text/javascript\">
			 		alert(\"¡Usuario o contraseña no validos!\");
			 		</script>

					";

			 		//se valida que el inicio de sesion sea valido
	  		}else if(isset($_GET['error']) and $_GET['error'] == 'acceso-invalido'){
	  			" <meta http-equiv='refresh' content='0 URL= ../vista/loginG.php'>

			 		<script type=\"text/javascript\">

			 		alert(\"¡Usuario o contraseña no validos!\");
			 		</script>";

	  		}

	  	break;
	  }
 ?>

</body>
</html>
