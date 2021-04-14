<!doctype html>
<html lang="es">  

	
	<head>
		<title>Reg_Per_Secretaría</title>	  
		<meta charset="UTF-8">
		<meta name="description" content="Pagina para graduandos de la UPTBAL">
		<meta name="keywords" content="graduandos, uptbal">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">			
	    <link rel="shorcut icon" type="image/x-icon" href="../imagenes/favicon.ico">
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="../css/regPerSec.css">	   
	    <link rel="stylesheet" href="../css/entypo/fonts.css">	    
	    <link rel="stylesheet" href="../css/flexboxgrid.min.css">	    
	    <script src="../js/main.js"></script> 
		<script src="../js/prefixfree.min.js"></script>
	    <script src"../js/jquery.slides.min.js"></script>
	    <script src="http://code.jquery.com/jquery-latest.js"></script>	            		
	    <script src"http://code.jquery.com/jquery-latest.min.js"></script>
	    	  <script>
	    // // 	$(function(){
	    // // 		$("#slideshow").slides();
	    // // 	});
	         </script>

	</head>
	
<body>



<div  class="contenedor">	
	<header>
		<h4>REGISTRO PERSONAL DE SECRETARÍA</h4>			
	</header>
	
	<section class="main">

		<nav>
			<ul>
				<li class="submenu">
					<a href=""><span class="icon-home"></span>Menu<span class="caret icon-chevron-small-down"></span></a>
					<ul class="kid">						
						<li><a href="#">Consultar. Per<span class="icon-edit"></span></a></li>			
						<li><a href="http://localhost/Siageg/capaSuperior/sesionSec.php">Volver<span class="icon-edit"></span></a></li>				
					</ul>
				</li>
			</nav>		

		<div class="logo">
			<div class="container">
				<div class="row center-xs">
					<div class="imagenes col-xs-">
						<div class="thumb">
							<img src="../imagenes/logo.jpg" alt="Logo UPTBAL" title="Logo de la UPTBAL">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="contenido">
			<div class="container">
				<div class="row center-xs">
					<div class="articulos col-xs">								
						<h4>Todos los campos son obligatorios</h4>
							

		<!-- incio formulario -->
		<form action="../capaIntermedia/registro.php?modo=perAdmin" name="formulario" method="POST">

		<input type="text" id="cedula" name="cedula" placeholder="Cédula" maxlength="8" title="El campo cédula solo puede contener 8 números sin caracteres especiales y sin espacios">			

		<input type="password" id="pw" name="pw" placeholder="Asignar clave" maxlength="20" title="La contraseña debe contener al menos 6 caracteres, 20 máximo, puede contener caracteres especiales">

		<input type="password" id="pw2" name="pw2" placeholder="Repita la clave asignada" maxlength="20" title="La contraseña debe contener al menos 6 caracteres, 20 máximo, puede contener caracteres especiales">		
			
		<input type="text" id="nombres" name="nombres" placeholder="Nombres completos" maxlength="30" title="Debe introducir sus nombres completos, sin errores ortográficos">		
		
		<input type="text" id="apellidos" name="apellidos" placeholder="Apellidos completos" maxlength="30" title="Debe escribir sus apellidos completos, sin errores ortográficos">	

		<select class="nacion" name="tipo" id="tipo" title="Indique si es venezolano o extranjero">
			<option>Tipo de usuario</option>
			<option>Administrador</option>
			<option>Asistente</option>
		</select>	
		<input type="hidden" name="usuario" id="usuario" value="Secretaría">	

		<input type="hidden" value="1" name="perAdmin">
		
		<input type="submit" class="submit" name="registrar" id="bt"  value="COMPLETAR REGISTRO" title="Enviar datos">

		

	</form>
	<!-- fin formulario -->
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- <div class="logo2">
			<div class="container">
				<div class="row center-xs">
					<div class="imagenes col-xs-"> -->
						<section id="slideshow">
							<div class="slides_container">
								<div>
									<a class="img2" href="#"><img src="../imagenes/venezuela.jpg" title="Bandera de la República Bolivariana de Venezuela"></a>
								</div>								
						   	</div>
						</section>
					<!-- </div>
				</div>
			</div>
		</div>-->

	<!-- </div>	 -->

	<footer>
		
	</footer>


</div>

<script src="../js/regPerSec.js"></script>

</body>


</html>