<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
	<title>registroController</title>
</head>
<body>


	<?php 
		
	include('../capaInferior/conexion.php');

	
	
		// condicional para validar que la variable modo esta definida
	$modo = isset($_GET['modo']) ? $_GET['modo']  : 'default';
	

		//se valida el valor de la variable modo para aplicar una condicion 
	switch ($modo) {

			//controlador para registro de graduandos
	  	case 'graduando':

	  		if(isset($_POST['graduando'])){
	  			if(!empty($_POST['nacion']) and !empty($_POST['cedula']) 
	  				and !empty($_POST['pw']) and !empty($_POST['fecha']) 
	  				and !empty($_POST['nombres']) and !empty($_POST['apellidos'])
	  				and !empty($_POST['email']) and !empty($_POST['telefono'])
	  				and !empty($_POST['tipoActo']) and !empty($_POST['inst'])
	  				and !empty($_POST['pnf']) and !empty($_POST['titulo'])
	  				and !empty($_POST['estado']) and !empty($_POST['ciudad'])
	  			    and !empty($_POST['periodo']) and !empty($_POST['sexo']))
	  				
	  					
	  				include('../capaInferior/claseEstudiante.php');
	  				$estudiante = new estudiante();
	  				$estudiante->set($_POST['nacion'], $_POST['cedula'], 
	  				$_POST['pw'], $_POST['fecha'], $_POST['nombres'],$_POST['apellidos'],
	  				$_POST['email'], $_POST['telefono'], $_POST['tipoActo'], $_POST['inst'],
	  				$_POST['pnf'], $_POST['titulo'], $_POST['estado'], 
	  				$_POST['ciudad'], $_POST['periodo'], $_POST['sexo']);	
	  				$estudiante->regGra();  			
	  			}else{
	  				echo "
	  					<meta http-equiv='refresh' content='0 URL= ../capaSuperior/regGrad.php'>
	  					<script type=\"text/javascript\">			 			 		
			 		   	alert(\"¡Los campos no pueden estar vacíos!\");			 		
			 		 	</script>";	  		
		  			}	  		

	  	break;		

	  		//controlador para registro de personal
	  	case 'personal':
			if(isset($_POST['personal'])){
				if(!empty($_POST['cedula']) and !empty($_POST['pw'])
					and !empty($_POST['nombres']) and !empty($_POST['apellidos'])
					and !empty($_POST['email']) and !empty($_POST['telefono'])
					and !empty($_POST['usuario']) and !empty($_POST['ct'])){

					include('../capaInferior/clasePersonal.php');
					$personal = new personal();
					$personal->regPer($_POST['cedula'], $_POST['pw'], 
							  $_POST['nombres'], $_POST['apellidos'],
						      $_POST['telefono'], $_POST['email'], 
						      $_POST['usuario'], $_POST['ct']);	
				}
			}
			else{
	  				echo "
	  					<meta http-equiv='refresh' content='0 URL= ../capaSuperior/regPer.php'>
	  					<script type=\"text/javascript\">			 			 		
			 		   	alert(\"¡Los campos no pueden estar vacíos!\");			 		
			 		 	</script>";	  		
		  			}	 
	  	break;

	  		//controlador para registro de pnf
	  	case 'pnf':
	  		if(isset($_POST['pnf'])){
	  			if(!empty($_POST['nombre']) and !empty($_POST['siglas'])
	  				and !empty($_POST['fecha']) and !empty($_POST['descrip'])){
	  			include('../capaInferior/clasePnf.php');
	  			$pnf = new pnf();
	  			$pnf->regPnf($_POST['nombre'], $_POST['siglas'],
	  						$_POST['fecha'], $_POST['descrip']);
				}
	  		}

	  	break;

	  
	  	case 'institucion':
	  		if(isset($_POST['institucion'])){
	  			if(!empty($_POST['nombre']) and !empty($_POST['siglas'])
	  				and !empty($_POST['director']) and !empty($_POST['descrip'])){
	  			include('../capaInferior/claseInstitucion.php');
	  			$pnf = new institucion();
	  			$pnf->regIns($_POST['nombre'], $_POST['siglas'],
	  						$_POST['director'], $_POST['descrip']);
				}
	  		}

	  	break;	  	

	 

	  		//registro de estados
	  	case 'estado':
	  		if(isset($_POST['estado'])){
	  			if(!empty($_POST['estado']))
				{
	  			include('../capaInferior/claseEst_Ciu.php');
	  			$eyc = new est_ciu();
	  			$eyc->regE($_POST['estado']);
				}
	  		}

	  	break;

	  		//registro de ciduades
	  	case 'ciudad':
	  		if(isset($_POST['ciudad'])){
	  			if(!empty($_POST['ciudad']))
				{
	  			include('../capaInferior/claseEst_Ciu.php');
	  			$eyc = new est_ciu();
	  			$eyc->regC($_POST['ciudad']);
				}
	  		}

	  	break;

	  	case 'expediente':
	  		if(isset($_POST['expediente'])){	  		
	  			session_start();
	  			$_SESSION['ci'];
	  			if( !empty($_POST['fotos']) and 
	  			!empty($_POST['fn']) and !empty($_POST['nc']) and
	  			!empty($_POST['cc']) and!empty($_POST['pn']) and 
	  			!empty($_POST['sa']))
				{
	  			include('../capaInferior/claseExpediente.php');
	  			$eyc = new expediente();
	  			$eyc->regExp($_SESSION['ci'], $_POST['fotos'], $_POST['fn'], $_POST['nc'],
	  				$_POST['cc'], $_POST['pn'], $_POST['sa']);
				}
	  		}

	  	break;

	  	 case 'perAdmin':
	  		if(isset($_POST['perAdmin'])){  		
	  			
	  			if( !empty($_POST['cedula']) and 
	  			!empty($_POST['pw']) and !empty($_POST['nombres']) and
	  			!empty($_POST['apellidos']) and!empty($_POST['tipo']) and 
	  			!empty($_POST['usuario']))
				{
	  			include('../capaInferior/clasePersonal.php');
	  			$sec = new personal();
	  			$sec->regPerAdmin($_POST['cedula'], $_POST['pw'], $_POST['nombres'], 
	  				$_POST['apellidos'], $_POST['tipo'], $_POST['usuario']);
				}
	  		}

	  	break;

	  	case 'periodo':
	  		if(isset($_POST['periodo'])){  		
	  			
	  			if(!empty($_POST['per']) and 
	  			!empty($_POST['fecha']))
				{
	  			include('../capaInferior/clasePromocion.php');
	  			$sec = new promocion();
	  			$sec->regPeriodo($_POST['per'], $_POST['fecha']);
				}
	  		}

	  	break;

	  	case 'folio':
	  		if(isset($_POST['fol'])){  		
	  			
	  			if(!empty($_POST['folio']) and 	  			
	  			!empty($_POST['indice']))		
	  			{				
					
				session_start();
				include('../capaInferior/claseEstudiante.php');
				$a = $_SESSION['ci'];	  			
	  			$sec = new estudiante();
	  			$sec->regFolio($a, $_POST['folio'], $_POST['folio'], $_POST['indice'] );
				}
	  		}

	  	break;

	  	case 'pergra':
	  		if(isset($_POST['pergra'])){  		
	  			

	  			if(!empty($_POST['periodo']))		
	  			{				
					
				session_start();
				include('../capaInferior/claseEstudiante.php');			
	  			
	  			$a = $_SESSION['user'];	
	  					
	  			$sec = new estudiante();
	  			$sec->actPer($a, $_POST['periodo']);
				}
	  		}

	  	break;
	  		
	  	default:

	  			// se validan campos vacios para evitar entradas no autorizadas
	  		if(isset($_GET['error']) and $_GET['error'] == 'campos-vacios'){
	  			echo " <meta http-equiv='refresh' content='0 URL=../index.php'>
	  				   <script type=\"text/javascript\">			 			 		
			 		   alert(\"¡Los campos no pueden estar vacíos!\");			 		
			 		 </script>";

			 	// se valida que los datos de incio de sesion sean validos		
	  		}else if(isset($_GET['error']) and $_GET['error'] == 'datos-invalidos'){
	  			echo "
	  				<meta http-equiv='refresh' content='0 URL= ../index.php'>
			 		<script type=\"text/javascript\">				 			 		
			 		alert(\"¡Usuario o contraseña no validos!\");
			 		c

					";

			 		//se valida que el inicio de sesion sea valido
	  		}else if(isset($_GET['error']) and $_GET['error'] == 'acceso-invalido'){
	  			" <meta http-equiv='refresh' content='0 URL= ../index.php'>

			 		<script type=\"text/javascript\">	
			 			 		
			 		alert(\"¡Usuario o contraseña no validos!\");			 		
			 		</script>";

	  		}
	  			
	  	break;
	  }  
 ?>
	
</body>
</html>

