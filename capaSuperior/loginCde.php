<!doctype html>
<html lang="es">  

	
	<head>
		<title>Inicio de sesión C.D.E</title>			
		<meta charset="UTF-8">
		<meta name="description" content="Pagina para graduandos de la UPTBAL">
		<meta name="keywords" content="graduandos, uptbal">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">					
	    <link rel="shorcut icon" type="image/x-icon" href="../imagenes/favicon.ico">
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="../css/loginCde.css">	    
	    <link rel="stylesheet" href="../css/entypo/fonts.css">	    
	    <link rel="stylesheet" href="../css/flexboxgrid.min.css">		  
	    <script src="../js/main.js"></script>    
		<script src="../js/prefixfree.min.js"></script>  
	    <script src"../js/jquery.slides.min.js"></script>	
	    <script src="http://code.jquery.com/jquery-latest.js"></script>
	    <script src"http://code.jquery.com/jquery-latest.min.js"></script> 
	    <script>
	    // 	$(function(){
	    // 		$("#slideshow").slides();
	    // 	});
	    </script>
	    

	</head>
			
	<body>		
		<div class="contenedor">
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
									<h4>INICIO DE SESIÓN C.D.E</h4>
									<h4 class="siageg">SIAGEG</h4>
								</div>
							</div>
						</div>
					</div>
				
						<div class="logo">
							<div class="container">
								<div class="row center-xs">
									<div class="imagenes col-xs-">
										<div class="thumb">
											<img src="../imagenes/logo.jpg" alt="Logo UPTBAL" tittle="Logo de la UPTBAL">
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
									<form name="formulario" action="../capaIntermedia/login.php?modo=cde" method="POST">
										<div class="cde">
											<label><span class="icon-archive"></span> C.D.E <span class="icon-archive"></label>	
										</div>											
										<input type="text" id="user" name="user" placeholder="Cedula" maxlength="8">
										<input type="password" id="pass" name="pass" placeholder="Contraseña" maxlength="20">
										<input type="submit" id="submit" name="submit" value="Ingresar">										
										<nav class="bt-salir">
											<ul>
												<li><a href="http://localhost/Siageg/capaSuperior/regPer.php"><span class="color7"><i class="icon icon-book"></i></span>Registrarme</a></li>
											</ul>
										</nav>
										<input type="hidden" id="login" name="login" VALUE="1">
									</form>																	
								</article>	
							</div>
						</div>
					</div>				
				</div>

				<section id="slideshow">
					<div class="slides_container">
						<div>
							<a class="img2" href="#"><img src="../imagenes/venezuela.jpg"></a>
						</div>								
					</div>
				</section>
		   </section>
			
				<footer>
					<article>
						<p>El sistema "SIAGEG" fue desarrollado para el uso exclusivo de los graduandos y personal autorizado de la "UPTBAL."</p>
						<p class="autor">SIAGEG fue diseñado y desarrollado por Fernando Gutierrez y Yorge Coronil Ingenieros de la "UPTBAL".</p>					
						<p>SIAGEG 2016. Todos los derechos reservados ®</p>	
					</article>				
		
					<nav>
						<p>Contacto</p> 
						<a href="#"><span class="icon-user"></span>yorcormar94@gmail.com</a>
						<a href="#"><span class="icon-user"></span>fernando.guti2030@gmail.com</a>	
					</nav>			
	            </footer>	

		</div>
		<script src= "../js/sesion.js"></script>
	</body>