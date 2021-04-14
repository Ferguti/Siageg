<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesión Secretaría</title>
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
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>

	<?php
		include('../capaInferior/claseAcceso.php');
		session_start();

		$_SESSION['rol'];
		if(isset($_SESSION['user']) && isset($_SESSION['rol'])){			 
			$_SESSION['nom']; 			
			$_SESSION['apell']; 
			$_SESSION['rol'];
			 
			 
		}else{
			session_start();
			session_destroy();
			header('location: ../capaSuperior/loginSec.php');
		}
	 ?>
	
	 <div class="contenedor">
		<header>
			<div class="menu">
					<a href="#" class="bt-menu">Men	u<span class="icon-menu"></span></a>
			</div>
			<h3 class="bienvenida">Bienvenido <?php echo($_SESSION['nom']. " " . $_SESSION['apell']); ?> </h3>	
				<nav>
						<ul>
							<li class="submenu">
								<a href="#"><span class="icon-home"></span>Menu<span class="caret icon-chevron-small-down"></span></a>
								<ul class="kid">
								<li><a href="http://localhost/Siageg/capaSuperior/reportes.php">Reporte<span class="icon-edit"></span></a></li>
								<li><a href="http://localhost/Siageg/capaSuperior/regPeriodo.php">Reg. periodo<span class="icon-edit"></span></a></li>
								<li><a href="http://localhost/Siageg/capaSuperior/regPnf.php">Reg. PNF<span class="icon-graduation-cap"></span></a></li>
								<li><a href="http://localhost/Siageg/capaSuperior/folioSec.php">Gestionar Folio<span class="icon-user"></span></a></li>
								<li><a href="http://localhost/Siageg/capaSuperior/regEstado.php">Reg. Estados<span class="icon-user"></span></a></li>
								<li><a href="http://localhost/Siageg/capaSuperior/regCiudad.php">Reg. Ciudades<span class="icon-user"></span></a></li>
								<li><a href="http://localhost/Siageg/capaSuperior/regIns.php">Reg. Institución<span class="icon-user"></span></a></li>
								<li><a href="http://localhost/Siageg/capaSuperior/regPerSec.php">Reg. Personal<span class="icon-user"></span></a></li>
							</ul>
						</li>
				</nav>		
			
		</header>
			

		<section class="main">


			<div class="h3">
					<h3 class="bienvenida">Bienvenido <?php echo($_SESSION['nom']. " " . $_SESSION['apell']); ?> </h3>	
			</div>	
			<form action="" method="post">
				<div class="datos">					
					<h3 class="subtitulo">Datos personales</h3>
					<label>Nombres: <?php echo($_SESSION['nom']);?></label> 				
					<label>Apellidos: <?php echo($_SESSION['apell']); ?></label>	
					<label>Rol: <?php echo($_SESSION['rol']); ?></label>			
					
			</form>

			<div class="buscar">
				<form name="formulario" id="formulario" action="../capaInferior/pcg.php?modo=POR CEDULA&tipo=secretaria" method="post">
					<label for="cedula">Buscar graduando:</label>
					<input type="text" name="cedula" id="cedula" placeholder="Cedula graduando" maxlength="8" > 
					<input type ="submit" name="buscar" id="buscar" value="Buscar">
				</form>
			 </div> 
		</section>

		<footer>
			<nav class="menu-con">
				<ul>
					<!-- Menu busqueda por nivel de instrucción -->
					<li><a href="#"><span class="color1"><i class="icon icon-archive"></i></span>Graduandos por Institución</a>
						<ul>		
					
							<li><a href="../capaInferior/pcg.php?modo=UPTBAL&tipo=secretaria">UPTBAL</a></li>
							<li><a href="../capaInferior/pcg.php?modo=I.U.B&tipo=secretaria">I.U.B</a></li>
							<li><a href="../capaInferior/pcg.php?modo=MISIÓN&tipo=secretaria">Misión</a></li>

						</ul>
					</li>
					
					<!-- menu de busqueda por carrera Ing y Lic -->
					<li><a href="#"><span class="color2
						"><i class="icon icon-briefcase"></i></span>Ing y Lic</a>
						<ul><li><a href="../capaInferior/pcg.php?modo=Lic. Administración&tipo=secretaria">Lic. Administración</a></li>
							<li><a href="../capaInferior/pcg.php?modo=Ing. Agroalimentaria&tipo=secretaria">Ing. Agroalimentaria</a></li>							
							<li><a href="../capaInferior/pcg.php?modo=Ing. Construcción Civil&tipo=secretaria">Ing. Civil</a></li>
							<li><a href="../capaInferior/pcg.php?modo=Ing. Informática&tipo=secretaria">Ing. Informática</a></li>
							<li><a href="../capaInferior/pcg.php?modo=Lic. Turismo&tipo=secretaria">Lic. Turismo</a></li>
						</ul>
					</li>
					
					<!-- menu de busqueda por T.S.U -->
					<li><a href="#"><span class="color3
						"><i class="icon icon-box"></i></span>T.S.U</a>
						<ul>
							<li><a href="../capaInferior/pcg.php?modo=TSU. Administración&tipo=secretaria">Administración</a></li>
							<li><a href="../capaInferior/pcg.php?modo=TSU. Agroalimentaria&tipo=secretaria">Agroalimentaria</a></li>							
							<li><a href="../capaInferior/pcg.php?modo=TSU. Construcción Civil&tipo=secretaria">Construcción Civil</a></li>
							<li><a href="../capaInferior/pcg.php?modo=TSU. Informática&tipo=secretaria">Informática</a></li>
							<li><a href="../capaInferior/pcg.php?modo=TSU. Turismo&tipo=secretaria">Turismo</a></li>
						</ul>
					</li>

					<!-- Menu de busqueda por total de hombres -->
					<li><a href="#"><span class="color4
						"><i class="icon icon-clipboard"></i></span>Hombres</a>
						<ul>
							<li><a href="../capaInferior/pcg.php?modo=Hombres&tipo=secretaria">Total hombres</a></li>
							<li><a href="../capaInferior/pcg.php?modo=Ingenieros&tipo=secretaria">Ingenieros</a></li>
							<li><a href="../capaInferior/pcg.php?modo=Licenciados&tipo=secretaria">Licenciados</a></li>
							<li><a href="../capaInferior/pcg.php?modo=TSU(M)&tipo=secretaria">T.S.U</a></li>
						</ul>
					</li>

					<!-- menu de busqueda por total de mujeres -->
					<li><a href="#"><span class="color5"><i class="icon icon-folder"></i></span>Mujeres</a>
						<ul>
							<li><a href="../capaInferior/pcg.php?modo=Mujeres&tipo=secretaria">Total mujeres</a></li>
							<li><a href="../capaInferior/pcg.php?modo=Ingenieras&tipo=secretaria">Ingenieras</a></li>
							<li><a href="../capaInferior/pcg.php?modo=Licenciadas&tipo=secretaria">Licenciadas</a></li>
							<li><a href="../capaInferior/pcg.php?modo=TSU(F)&tipo=secretaria">T.S.U</a></li>
						</ul>
					</li>

					<!-- busca por tipo de acto -->
					<li><a href="#"><span class="color3"><i class="icon icon-folder"></i></span>Tipo de acto</a>
						<ul>
							<li><a href="../capaInferior/pcg.php?modo=Secretaría&tipo=secretaria">Secretaría</a></li>
							<li><a href="../capaInferior/pcg.php?modo=solemne&tipo=secretaria">Solemne</a></li>							
						</ul>
					</li>
				</ul>
			</nav>
			
			<nav class="bt-salir">
				<ul>
					<li><a href="http://localhost/Siageg/capaSuperior/loginSec.php"><span class="color6"><i class="icon icon-back"></i></span>Salir</a></li>
				</ul>
			</nav>
		</footer>
		
	</div>

	<script src="../js/sesionSec.js"></script>
</body>
</html>