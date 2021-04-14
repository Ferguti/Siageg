<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consultar_control</title>
</head>
<body>
	
	<?php 
		
	include('../capaInferior/conexion.php');
	
	
		// condicional para validar que la variable modo esta definida
	$modo = isset($_GET['modo']) ? $_GET['modo']  : 'default';

		//se valida el valor de la variable modo para decir que accion realizar 
	switch ($modo) {

			//controlador para consultar expediente de graduandos
	  	case 'expediente':

	  		if(isset($_POST['expediente'])){	  				
	  				if(!empty($_POST['cedula'])){	
	  				include('../capaInferior/claseEstudiante.php');		  					
	  				$consulta = new estudiante();  				
	  				$consulta->consultar($_POST['cedula']);	  			
	  			}else{
	  				header('location: ../index.php?MENSAJE=**ERROR**ACCESO DENEGADO');
		  		}	

	  		}

	  	break;	

	  	case 'folio':
	  		if(isset($_POST['fol'])){  		
	  			
	  			if(!empty($_POST['cedula']))
				{							
					include('../capaInferior/claseEstudiante.php');					
	  				$consulta = new estudiante();  				
	  				$consulta->consultarFol($_POST['cedula']);	 
				}
	  		}

	  	break;

	  	case 'reporte':
	  		if(isset($_POST['rep'])){ 
	  		echo $_POST['rep'];
	  			
	  			if(!empty($_POST['cedula']))
				{							
					include('../capaInferior/claseEstudiante.php');					
	  				$consulta = new estudiante();  				
	  				$consulta->consultarRep($_POST['cedula']);	 
				}
	  		}

	  	break;
	  		
	  	default:
	  		header('location: ../index.php?error=ACCESO DENEGADO');
	  	
	  			
	  	break;
	  }  
 ?>

</body>
</html>
