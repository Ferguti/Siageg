
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro exitoso</title>
	<link rel="shorcut icon" type="image/x-icon" href="imagenes/favicon.ico">
</head>
<body>
	
</body>
</html>
<?php 
		//se invoca el arhivo de conexion con la BD
	include ('conexion.php');

	$nombre = $_POST['nombre'];
	$siglas = $_POST['siglas'];
	$fecha  = $_POST['fecha'];
	$descrip= $_POST['descrip'];

		   
	$con = mysql_connect($host, $user, $pw, $db) or die("Error al conectar".mysql_error());
		   mysql_select_db($db, $con) or die("Error al seleccionar la BD".mysql_error());
		   mysql_query("SET NAMES 'utf8'");
		   //se valida si existe el PNF en la BD
	$sql = mysql_query("SELECT * FROM pnf WHERE nom = '".$nombre."'");
		 
		   if(mysql_num_rows($sql) >= 1){

		   	echo "  <meta http-equiv='refresh' content='0 URL= ../regpnf.php'>
			 		<script type=\"text/javascript\">				 			 		
			 		alert(\"¡El PNF ingresado ya está registrado! Verifique e intente registrarlo nuevamente\");
			 		</script>";
		   
		   }else{
		   	$save = mysql_query("INSERT INTO pnf (nom, siglas, fecha, descrip) VALUES ('$nombre', '$siglas', '$fecha', '$descrip')", $con) or die("Problemas al guardar <br/>".mysql_error());
		   	
		   	echo "  <meta http-equiv='refresh' content='0 URL= ../regpnf.php'>
			 		<script type=\"text/javascript\">				 			 		
			 		alert(\"¡Registro exitoso el pnf se guardo con éxito! \");
			 		</script>";
		   }

 ?>