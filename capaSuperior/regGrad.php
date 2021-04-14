<!doctype html>
<html lang="es">  

	
	<head>
		<title>Registro de graduandos</title>	  
		<meta charset="UTF-8">
		<meta name="description" content="Pagina para graduandos de la UPTBAL">
		<meta name="keywords" content="graduandos, uptbal">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">			
	    <link rel="shorcut icon" type="image/x-icon" href="../imagenes/favicon.ico">
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="../css/registrog.css">	   
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
	<div class="menu">
					<a href="#" class="bt-menu">Menu<span class="icon-menu"></span></a>
				</div>

				<nav>
					<ul>
						<li class="submenu">
							<a href="http://localhost/Siageg/index.php"><span class="icon-home"></span>Inicio<span class="caret icon-chevron-small-down"></span></a>
							<ul class="kid">
								<li><a href="http://localhost/Siageg/capaSuperior/regGrad.php">Registrarme<span class="icon-edit"></span></a></li>
								<li><a href="http://localhost/Siageg/capaSuperior/loginG.php">Graduando<span class="icon-graduation-cap"></span></a></li>
								<li><a href="http://localhost/Siageg/capaSuperior/loginSec.php">Secretaría<span class="icon-user"></span></a></li>
								<li><a href="http://localhost/Siageg/capaSuperior/loginCde.php">Control D.E<span class="icon-user"></span></a></li>
							</ul>
						</li>
						<li><a target="_blank" href="https://iub.terna.net/index.php?t=1474394673"><span class="icon-archive"></span>Terna</a></li>
						<li><a href="#"><span class="icon-info"></span>Acerca de</a></li>
					</ul>
				</nav>	

							
	</header>
	
	<section class="main">

		<div class="titulo">
			<div class="container">
				<div class="row">
					<div class="col-xs  center-xs">
						<h4>REGISTRO DE GRADUANDOS</h4>							
					</div>
				</div>
			</div>
		</div>

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
						<h4 class="info">Por favor evite errores en sus datos personales, ya que si el formulario contiene errores los mismos se veran reflejados en su acta de grado. De antemano muchas gracias.</h4>	

		<!-- incio formulario -->
		<form action="../capaIntermedia/registro.php?modo=graduando" name="formulario" method="POST">

		<select class="nacion" name="nacion" id="nacion" title="Indique si es venezolano o extranjero">
			<option>Tipo de documento</option>
			<option>V-</option>
			<option>E-</option>
		</select>			

		<input type="text" id="cedula" name="cedula" placeholder="Cédula" maxlength="8" title="El campo cédula solo puede contener 8 números sin caracteres especiales y sin espacios">			

		<input type="password" id="pw" name="pw" placeholder="Contraseña" maxlength="20" title="La contraseña debe contener al menos 6 caracteres, 20 máximo, puede contener caracteres especiales">

		<input type="password" id="pw2" name="pw2" placeholder="Repita la contraseña" maxlength="20" title="La contraseña debe contener al menos 6 caracteres, 20 máximo, puede contener caracteres especiales">		
			
		<input type="date" name="fecha" id="fn" placeholder="fn" title="Fecha de nacimiento, formato: dd/mm/aaaa">		
		 
		<input type="text" id="nombres" name="nombres" placeholder="Nombres completos" maxlength="30" title="Debe introducir sus nombres completos, sin errores ortográficos">		
		
		<input type="text" id="apellidos" name="apellidos" placeholder="Apellidos completos" maxlength="30" title="Debe escribir sus apellidos completos, sin errores ortográficos">

		<input type="email" id="email" name="email" placeholder="Dir. de correo electrónico" title="Correo electrónico">

		<input type="text" id="telefono" name="telefono" placeholder="Núm. De teléfono" maxlength="11" title="Escribe tu teléfono celular o local incluyendo el código de área">
		
		


		<select name="tipoActo" id="tipo-acto" title="Acto en el que usted desea recibir su título universitario">		
			<option>Tipo de grado</option>
			<option>Solemne</option>
			<option>Secretaría</option>
		</select>
		
		<select name="inst" id="inst" title="Institución de la cual está egresando">
			<option>Institución</option>
		<?php 	
				include('../capaInferior/conexion.php');
				$db = new conexion();
				$siglas =$db->consultar($db,'SELECT siglas FROM institucion ORDER BY siglas ASC;');
				$pnf =$db->consultar($db,'SELECT nom FROM pnf ORDER BY nom ASC;');
				$titulos = $db->consultar($db,'SELECT nom FROM titulos ORDER BY nom ASC;');
				$ciudades = $db->consultar($db,'SELECT ciudad FROM ciudades ORDER BY ciudad ASC;');
				$estados = $db->consultar($db,'SELECT estado FROM estados ORDER BY estado ASC;');
				$periodos = $db->consultar($db,'SELECT nom FROM promocion ORDER BY nom ASC;');
				
				while($reg=mysqli_fetch_array($siglas)){		
				?> 			
				<option> <?php  print ($reg['siglas']); ?></option>
		 		<?php  
				}
				
				?>							
		</select>
	
		
		<select name="pnf" id="pnf" title="Selecciona tu pnf">			
			 <option>P.N.F</option>
			 <?php 		
			 	while($reg=mysqli_fetch_array($pnf)){		
				?> 			
				<option> <?php  print ($reg['nom']); ?></option>
		 		<?php  
				}
				
				?>	
		</select>
		
		
		
		<select name="titulo" id="titulo" title="Título que le sera entragado en el acto">
			<option>Título a obtener</option>
				 <?php 		
			 	while($reg=mysqli_fetch_array($titulos)){		
				?> 			
				<option> <?php  print ($reg['nom']); ?></option>
		 		<?php  
				}
				
				?>
		</select>
		
		<select name="estado" id="estado" title="Estado natal">
			<option>Estado de nacimiento</option>	
			 <?php 		
			 	while($reg=mysqli_fetch_array($estados)){		
				?> 			
				<option> <?php  print ($reg['estado']); ?></option>
		 		<?php  
				}
				
				?>		
		</select>
		
		<select name="ciudad" id="ciudad" title="Ciudad natal">
			<option>Ciudad de nacimiento</option>
			 <?php 		
			 	while($reg=mysqli_fetch_array($ciudades)){		
				?> 			
				<option> <?php  print ($reg['ciudad']); ?></option>
		 		<?php  
				}
				
				?>					
		</select>
		

		<select name="periodo" id="periodo" title="Periodo de graduación">
			<option>Periodo</option>
			 <?php 		
			 	while($reg=mysqli_fetch_array($periodos)){		
				?> 			
				<option> <?php  print ($reg['nom']); ?></option>
		 		<?php  
				}
				
				?>					
		</select>
		
		<label title="Sexo">Sexo:</label>		
		<input type="radio" id="sexo" name="sexo" title="Masculino" value="M">M <input id="sexo" type="radio" name="sexo" title="Femenino" value="F">F 
		

		<label title="Terminos y condiciones que usted acepta para crear su cuenta">Terminos y condiciones:</label>
		<input type="checkbox" id="terminos" name="terminos" id="terminos">
		<input type="hidden" value="1" name="graduando">
		
		<input type="submit" class="submit" name="registrar" id="bt"  value="Registrarme" title="Enviar datos">

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
		<article>
			<p>El sistema "SIAGEG" fue desarrollado para el uso exclusivo de los graduandos y personal autorizado de la "UPTBAL."</p>
			<p class="autor">SIAGEG fue diseñado y desarrollado por Fernando Gutierrez y Yorge Coronil Ingenieros de la "UPTBAL".</p>					
			<p>SIAGEG 2016. Todos los derechos reservados ®</p>	
		</article>				
		
		<nav>
			<p>Contacto</p> 
			<a href="#"title="Ing. Yorge Coronil"><span class="icon-user"></span>yorcormar94@gmail.com</a>
			<a href="#"title="Ing. Fernando Gutiérrez"><span class="icon-user"></span>fernando.guti2030@gmail.com</a>	
		</nav>			
	</footer>


</div>

<script src="../js/registroG.js"></script>

</body>


</html>