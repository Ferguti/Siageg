<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestion de folio</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="../js/main.js"></script>			
	<script src="../js/prefixfree.min.js"></script>
	<link rel="shorcut icon" type="image/x-icon" href="../imagenes/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/sessionSec.css">
	<link rel="stylesheet" href="../css/iconfree/fonts.css">
	<link rel="stylesheet" href="../css/entypo/fonts.css">	    
	<link rel="stylesheet" href="../css/flexboxgrid.min.css">
	<script src"http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>

	
	 <div class="contenedor">
		<header>
			<h4>Gestión de folios y Nro de graduandos</h4>
		</header>
			

		<section class="main">

			<div class="buscar">
				<form name="formulario" id="formulario" action="../capaIntermedia/consultar.php?modo=folio" method="POST">
					<label for="cedula">Buscar graduando:</label>
					<input type="text" name="cedula" id="cedula" placeholder="Cedula graduando" maxlength="8"> 
					<input type="hidden" name="fol" value="1">
					<input type ="submit" name="buscar" id="buscar" value="BUSCAR">
				</form>
			 </div> 					
			
		</section>

		<footer>
				
			
			<nav class="bt-salir">
				<ul>
					<li><a href="http://localhost/Siageg/capaSuperior/sesionSec.php"><span class="color6"><i class="icon icon-back"></i></span>Salir</a></li>
				</ul>
			</nav>
		</footer>
		
	</div>

	<script src="../js/sesionSec.js"></script>
</body>
</html>