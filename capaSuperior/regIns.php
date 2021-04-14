<!doctype html>
<html lang="es">  

	
	<head>
		<title>Gestionar instituciones</title>	  
		<meta charset="UTF-8">
		<meta name="description" content="Pagina para graduandos de la UPTBAL">
		<meta name="keywords" content="graduandos, uptbal">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">			
	    <link rel="shorcut icon" type="image/x-icon" href="../imagenes/favicon.ico">
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="../css/regIns.css">	   
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
		<div class="titulo">
			<div class="container">
				<div class="row">	
					<div class="col-xs  center-xs">
						<h4>REGISTRO DE INSTITUCIÓN</h4>							
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<section class="main">

		

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
					<article>		

		<!-- incio formulario -->
		<form action="../capaIntermedia/registro.php?modo=institucion" name="formulario" method="POST">	

		<input type="text" id="nombre" name="nombre" placeholder="Nombre de la institución" maxlength="80" title="Campo nombre de la institución">			

		<input type="text" id="siglas" name="siglas" placeholder="Siglas" maxlength="20" title="Campo siglas de la institución">

		<input type="text" id="director" name="director" placeholder="Nombre del Director/Rector" maxlength="50" title="Campo director de la institución">		
			
		<textarea name="descrip" id="descrip" placeholder="Descripción de la institución" maxlength="200"></textarea>			

		<input type="hidden" value="1" name="institucion">
		
		<input type="submit" class="submit" name="registrar" id="bt"  value="Guardar" title="Enviar datos">

	</form>
	</article>
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
			<nav class="bt-salir">
				<ul>
					<li><a href="http://localhost/Siageg/capaSuperior/sesionSec.php"><span class="color6"><i class="icon icon-back"></i></span>VOLVER</a></li>
				</ul>
			</nav>
		</footer>	


</div>

<script src="../js/regIns.js"></script>

</body>


</html>