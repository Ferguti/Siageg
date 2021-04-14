<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
	<?php

			// se invoca el archivo conexion de la BD
		include("conexion.php"); 
		$db = new conexion();

			// se almacenan valores de los inputs en variables
		$cedula = $_POST['cedula'];
		$nacionalidad = $_POST['nacionalidad'];
		$pwu = $_POST['pw'];
		$fecha = $_POST['fecha'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];		
		$tipoacto = $_POST['tipoacto'];
		$inst = $_POST['inst'];
		$profesion = $_POST['profesion'];
		$titulo = $_POST['titulo'];
		$estado = $_POST['estado'];
		$ciudad = $_POST['ciudad'];
		$estcivil = $_POST['estcivil'];
		$sexo = $_POST['sexo'];

			// se encripta contraseña en formato md5
		$pwu = md5($pwu); 


			// se selecciona la BD, se valida la conexion y se guardan datos en la tabla estudiantes

		// $con = mysqli_connect($host, $user, $pw, $db) or die("Problemas en la seleccion de BD </br>" .mysql_error());
		// mysql_select_db($db, $con) or die("Problemas en la seleccion de la BD </br>". mysql_error());

			// se estable condificacion para caracteres especiales
		// mysqli_query("SET NAMES 'utf8'");

	 		// se valida que el usuario no este registrado
		 $resultado= $db->consultar($db,"SELECT * FROM estudiante WHERE ci = '".$cedula."' OR correo ='".$email."'");
		 
		 if( mysqli_num_rows($resultado) >= 1){

		 	echo " <meta http-equiv='refresh' content='0 URL= ../vista/formRegGrad.php'>

			 		<script type=\"text/javascript\">	
			 			 		
			 		alert(\"¡El número de cedula ó el email ingresado ya está registrado! Verifique e intente registrarse nuevamente\");
			 		</script>";
		 	

		 }else{
		 	$save = $db->query("INSERT INTO estudiante (ci, nacionalidad, pw, fecha_nac, nombres, apellidos, correo, tlfn, tipogrado, inst, profesion, titulo, estado, ciudad, estcivil, sexo) 
		    			VALUES ('$cedula', '$nacionalidad', '$pwu', '$fecha', '$nombres', '$apellidos', '$email', '$telefono', 
		   	 			 '$tipoacto', '$inst', '$profesion', '$titulo', '$estado', '$ciudad', '$estcivil', '$sexo')")
						or die("Problemas al guardar </br>".mysqli_errno($save)); 

		    		    echo " <meta http-equiv='refresh' content='0 URL= ../vista/formRegGra.php'>
			 					<script type=\"text/javascript\">				 			 		
						 		alert(\"¡Registro exitoso! Ingresa a tu cuenta para verificar tu expediente\");		
						 		</script>";
		 	
		 }
	 
?>
</body>
</html>




	



	



