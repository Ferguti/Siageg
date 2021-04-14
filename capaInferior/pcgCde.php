<!DOCTYPE html>
<html lang="es">


<head>
	<meta charset="UTF-8">
	<title>pcg</title>
	
</head>

<body>


	<?php
		include('../capaInferior/conexion.php');		
		$db = new conexion();

				
			$modo = isset($_GET['modo']) ? $_GET['modo']  : 'default';

			$tipo = $_GET['tipo'];

			switch ($modo) {

				case 'T.S.U':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' ;");
					
					
					if(  mysqli_num_rows($solvencia) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=T.S.U&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=T.S.U&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'INGENIEROS':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' ;");
					
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=INGENIEROS&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=INGENIEROS&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'LICENCIADOS':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Licenciado(a)' ;");
				
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=LICENCIADOS&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=LICENCIADOS&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'I.U.B':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE inst = 'I.U.B' ;");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=I.U.Btipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=I.U.B&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'UPTBAL':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE inst = 'UPTBAL' ;");
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=UPTBAL&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=UPTBAL&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'MISIÓN':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE inst = 'MISIÓN' ;");
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=MISIÓN&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=MISIÓN&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Ing. Agroalimentaria':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' AND pnf = 'Agroalimentaria' ");

					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Ing. Agroalimentaria&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Ing. Agroalimentaria&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Lic. Administración':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Licenciado(a)' AND pnf = 'Administración' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Lic. Administración&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Lic. Administración&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Ing. Construcción Civil':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' AND pnf = 'Construcción Civil' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Ing. Construcción Civil&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Ing. Construcción Civil&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Ing. Informática':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' AND pnf = 'Informática' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Ing. Informática&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Ing. Informática&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");				 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Lic. Turismo':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Licenciado(a)' AND pnf = 'Turismo'");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Lic. Turismo&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Lic. Turismo&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'TSU. Administración':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND pnf = 'Administración' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU. Administración&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU. Administración&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'TSU. Agroalimentaria':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND pnf = 'Agroalimentaria' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU. Agroalimentaria&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU. Agroalimentaria&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'TSU. Construcción Civil':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND pnf = 'Construcción Civil' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU. Construcción Civil&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU. Construcción Civil&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				

				case 'TSU. Informática':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND pnf = 'Informática' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU. Informática&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU. Informática&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'TSU. Turismo':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND pnf = 'Turismo' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU. Turismo&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU. Turismo&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Hombres':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE sexo = 'M' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Hombres&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Hombres&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Ingenieros':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' AND sexo = 'M' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Ingenieros&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Ingenieros&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Licenciados':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Licenciado(a)' AND sexo = 'M' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Licenciados&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Licenciados&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'TSU(M)':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND sexo = 'M'");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU(M)&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU(M)&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Mujeres':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE sexo = 'F' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Mujeres&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Mujeres&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Ingenieras':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' AND sexo = 'F' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Ingenieras&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Ingenieras&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Licenciadas':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Licenciado(a)' AND sexo = 'F' ");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Licenciadas&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Licenciadas&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'TSU(F)':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND sexo = 'F' ");

					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU(F)&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=TSU(F)&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'POR CEDULA':
					$cedula = $_POST['cedula'];
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE ci = '".$cedula."' ;");
					
					if(mysqli_num_rows($resultado) > 0 ){	
							while($filas = mysqli_fetch_assoc($resultado)){
								$c = $filas['ci'];
							}
							session_start();
							$_SESSION['ci'] = $c;
						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=POR CEDULA&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=POR CEDULA&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'Secretaría':
					
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE tipogrado = 'Secretaría' ;");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=Secretaría&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=Secretaría&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'solemne':
					
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE tipogrado = 'Solemne';");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=solemne&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=solemne&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'periodo':
					
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE periodo = '".$_POST['periodo']."';");
					
					if(mysqli_num_rows($resultado) > 0 ){	

						session_start();						
						$_SESSION['periodo'] = $_POST['periodo'];
						if($tipo == 'secretaria'){
							header("location: ../capaSuperior/consultarGcde.php?modo=periodo&tipo=http://localhost/Siageg/capaSuperior/sesionSec.php");
						}else{
							header("location: ../capaSuperior/consultarGcde.php?modo=periodo&tipo=http://localhost/Siageg/capaSuperior/cde.php");
						}
					

					}else if($tipo == 'secretaria'){
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/sesionSec.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=../capaSuperior/cde.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;



				default:
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
	  				   			<script type=\"text/javascript\">			 			 		
			 		   			alert(\"¡NO EXISTEN REGISTROS!\");			 		
			 				 	</script>";
				}
			
	 ?>		
		
</body>