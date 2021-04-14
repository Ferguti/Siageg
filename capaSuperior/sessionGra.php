<!DOCTYPE html>
<html lang="es">
<head>
	<title> Graduandos cuentas </title>	
	<meta charset="UTF-8">
	<title>Cuentas Graduandos</title>
	<meta name="description" content="Pagina para graduandos de la UPTBAL">
	<meta name="keywords" content="graduandos, uptbal">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src"http://code.jquery.com/jquery-latest.min.js"></script>	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic' rel='stylesheet' type='text/css'>		
	<script src="../js/main.js"></script>		
	<script src="../js/prefixfree.min.js"></script>
	<link rel="shorcut icon" type="image/x-icon" href="../imagenes/favicon.ico">
	<link rel="stylesheet" href="../css/graduandoscuentas.css">
	<link rel="stylesheet" href="../css/iconfree/fonts.css">	
	<link rel="stylesheet" href="../css/entypo/fonts.css">	    
	<link rel="stylesheet" href="../css/flexboxgrid.min.css">
	
</head>

<body>
<?php 
	
	include('../capaInferior/claseAcceso.php');	
	include('../capaInferior/conexion.php');
	$db = new conexion();
	$periodos = $db->consultar($db,'SELECT nom FROM promocion ORDER BY nom ASC;');		
	session_start();
		//se valida si la variable usuario esta definida
	if(isset($_SESSION['user'])){		   	
			$_SESSION['nombres'];
			$_SESSION['apellidos'];
			$_SESSION['pnf'];
			$_SESSION['tipogrado'];
			$_SESSION['fn'];		
			$_SESSION['titulo']; 
			$_SESSION['tit'];	
			$_SESSION['nc']; 
			$_SESSION['cc']; 
			$_SESSION['pn']; 
			$_SESSION['sa']; 
			$_SESSION['fotos'];
			$pe = $db->consultar($db,'SELECT periodo FROM estudiante WHERE ci = "'.$_SESSION['user'].'";');	
			 while($filas = mysqli_fetch_assoc($pe)){
			 	$per = $filas['periodo'];
			 }
		
	}else{
		session_start();
		session_destroy();
		header('location: loginG.php?error=acceso-invalido');
	}
   ?>

	<div class="contenedor">
		<header>
			
			<h3 class="bienvenida">Bienvenido <?php echo($_SESSION['nombres']); ?> </h3>
		
			
		</header>
			

		<section class="main">

			<form name="formulario" action="../capaIntermedia/registro.php?modo=pergra" method="POST">
				<div class="datos">					
					<h3 class="subtitulo">Datos personales</h3>
					<label>Nombres: <?php echo($_SESSION['nombres']); ?></label> 				
					<label>Apellidos: <?php echo($_SESSION['apellidos']); ?></label>								
					<label>PNF: <?php echo($_SESSION['pnf']); ?></label>					
					<label>Tipo de acto: <?php echo($_SESSION['tipogrado']); ?></label>
					<label>Título a obtener: <?php echo($_SESSION['titulo']); ?></label>
					<label>Periodo de grado: <?php echo $per; ?></label>
					<select name="periodo" id="periodo" title="Periodo de graduación">
					<option>Cambiar periodo</option>
					 <?php 		
					 	
					 	while($reg=mysqli_fetch_array($periodos)){		
						?> 			
						<option> <?php  print ($reg['nom']); ?></option>
		 				<?php  
						}
				
						?>					
					</select>
					<input type="hidden" name="pergra">
					<input type="submit" value="GUARDAR PERIODO">				
			    </div>
			</form>
		
			<h3>Documentos del expediente</h3>
			<div class="tabla">
				<!-- tabla documentos expediente -->
				<table>
					<!-- fila1 -->
					<tr>
						<td>Fotos</td>	
						<td>Fondo negro</td>	
						<td>Notas certificadas</td>		
						<td>Copia C.I</td>
						<td>Partida de nacimiento</td>
						<td>Solvencia académica</td>
					</tr>	

					<!-- fila2 -->
					<tr>
						<td> <?php echo($_SESSION['fotos']); ?> </td>	
						<td> <?php echo($_SESSION['fn']); ?> </td>	
						<td> <?php echo($_SESSION['nc']); ?> </td>		
						<td> <?php echo($_SESSION['cc']); ?> </td>
						<td> <?php echo($_SESSION['pn']); ?> </td>
						<td> <?php echo($_SESSION['sa']); ?> </td>
					</tr>				
				</table>
			</div>
		</section>

		<footer>
			<h3 class="sub-footer">Leyenda de los valores en la tabla</h3>
			<p class="negativo">"NO" debe consignar documentos en control de estudio lo antes posible</p>
			<p class="positivo">"SI" los documentos	se encuentran en su expediente</p>
			<h3 class="sub-info">Información importante</h3>
			<p class="informacion">¡Recuerde que tiene un tiempo limite para consignar los documentos faltantes en control de estudio. De no ser consignados a tiempo deberá  esperar hasta el próximo acto de grado para obtener su título universitario!</p>
			<h2 class="felicitar"><span class="icon-graduation-cap"></span>¡FELICITACIONES!<span class="icon-graduation-cap"></span></h2>
			<nav>
				<ul>
					<!-- boton salir datos... animacion ccs3 avanzada -->
					<li><a href="http://localhost/Siageg/capaSuperior/loginG.php"><span class="color2"><i class="icon icon-back"></i></span>Salir</a></li>
				</ul>
			</nav>		
		</footer>
	</div>
</body>
<script src="../js/actPerGra.js"></script>
</html>
