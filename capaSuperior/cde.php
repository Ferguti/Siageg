<!DOCTYPE html>
<html lang="es">

<!-- interfaz de control de estudio para consultar documentos existentes en los expedientes, actualizarlos
y verificar estadisticas en la totalización de graduandos -->
<head>
	<title>Control de estudio</title>
	<meta charset="UTF-8">	
	<meta name="description" content="Pagina web para graduandos de la UPTBAL">
	<meta name="keywords" content="graduandos, uptbal">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">	
	<script src="http://code.jquery.com/jquery-latest.js"></script>				
	<script src="../js/prefixfree.min.js"></script>
	<link rel="shorcut icon" type="image/x-icon" href="../imagenes/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/control_de_estudio_p.css">	
	<link rel="stylesheet" href="../css/entypo/fonts.css">	    
	<link rel="stylesheet" href="../css/flexboxgrid.min.css">
	<script src"http://code.jquery.com/jquery-latest.min.js"></script>
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
			header('location: loginCde.php');
		}
	 ?>
	<div class="contenedor">
		<header>
			<h3>BIENVENIDO <?php echo($_SESSION['nom']); ?></h3>
		</header>

		<section class="main">
			<form name="formulario" id="formulario" action="../capaIntermedia/consultar.php?modo=expediente" method="POST">
				<label for="cedula">Buscar graduando:</label>
				<input type="text" name="cedula" id="cedula" placeholder="Cédula graduando" maxlength="8"> 
				<input type ="submit" name="buscar" id="buscar" value="Buscar"> 
				<input type="hidden" value="1" name="expediente" >		
			</form>	
		

			<form name="form" action="../capaInferior/pcgCde.php?modo=periodo&tipo=cde" method="POST">
				<label> Buscar por periodo:</label>
				<select name="periodo" id="periodo" title="Periodo de graduación">
					<option>Periodo</option>
			 		<?php 		
			 			include('../capaInferior/conexion.php');
						$db = new conexion();
			 			$periodos = $db->consultar($db,'SELECT nom FROM promocion ORDER BY nom ASC;');
			 			while($reg=mysqli_fetch_array($periodos)){		
					?> 			
					<option> <?php  print ($reg['nom']); ?></option>
		 			<?php  
					}				
					?>						
					<input type="submit" name="buscarPeriodo" id="buscarPeriodo" value="BUSCAR">			
				</select>
			</form>	

			<label>Nro. Estudiantes registrados:
				<?php
					$per = $db->consultar($db, "SELECT nom FROM promocion ORDER BY nom ASC");	
					while($filas = mysqli_fetch_array($per)){
						   $p = $filas['nom'];
					}	
					$con = $db->consultar($db, "SELECT * FROM estudiante WHERE periodo ='".$p."';");
					$contador = mysqli_num_rows($con);
					echo $contador;
				?>
			</label>		
		</section>

		<footer>		
			<nav class="menu-con">
				<ul>
					<!-- Menu busqueda por nivel de instrucción -->
					<li><a href="#"><span class="color1"><i class="icon icon-archive"></i></span>Graduandos por Institución</a>
						<ul>						
						<li><a href="../capaInferior/pcgCde.php?modo=UPTBAL&tipo=cde">UPTBAL</a></li>
						<li><a href="../capaInferior/pcgCde.php?modo=I.U.B&tipo=cde">I.U.B</a></li>
						<li><a href="../capaInferior/pcgCde.php?modo=MISIÓN&tipo=cde">Misión</a></li>

					</ul>
					</li>
					
					<!-- menu de busqueda por carrera Ing y Lic -->
					<li><a href="#"><span class="color2
						"><i class="icon icon-briefcase"></i></span>Ing y Lic</a>
						<ul><li><a href="../capaInferior/pcgCde.php?modo=Lic. Administración&tipo=cde">Lic. Administración</a></li>
							<li><a href="../capaInferior/pcgCde.php?modo=Ing. Agroalimentaria&tipo=cde">Ing. Agroalimentaria</a></li>							
							<li><a href="../capaInferior/pcgCde.php?modo=Ing. Construcción Civil&tipo=cde">Ing. Civil</a></li>
							<li><a href="../capaInferior/pcgCde.php?modo=Ing. Informática&tipo=cde">Ing. Informática</a></li>
							<li><a href="../capaInferior/pcgCde.php?modo=Lic. Turismo&tipo=cde">Lic. Turismo</a></li>
						</ul>
					</li>
					
					<!-- menu de busqueda por T.S.U -->
					<li><a href="#"><span class="color3
						"><i class="icon icon-box"></i></span>T.S.U</a>
						<ul>
							<li><a href="../capaInferior/pcgCde.php?modo=TSU. Administración&tipo=cde">Administración</a></li>
							<li><a href="../capaInferior/pcgCde.php?modo=TSU. Agroalimentaria&tipo=cde">Agroalimentaria</a></li>							
							<li><a href="../capaInferior/pcgCde.php?modo=TSU. Construcción Civil&tipo=cde">Construcción Civil</a></li>
							<li><a href="../capaInferior/pcgCde.php?modo=TSU. Informática&tipo=cde">Informática</a></li>
							<li><a href="../capaInferior/pcgCde.php?modo=TSU. Turismo&tipo=cde">Turismo</a></li>
						</ul>
					</li>

					<!-- Menu de busqueda por total de hombres -->
					<li><a href="#"><span class="color4
						"><i class="icon icon-clipboard"></i></span>Hombres</a>
						<ul>
							<li><a href="../capaInferior/pcg.php?modo=Hombres&tipo=cde">Total hombres</a></li>
							<li><a href="../capaInferior/pcg.php?modo=Ingenieros&tipo=cde">Ingenieros</a></li>
							<li><a href="../capaInferior/pcg.php?modo=Licenciados&tipo=cde">Licenciados</a></li>
							<li><a href="../capaInferior/pcg.php?modo=TSU(M)&tipo=cde">T.S.U</a></li>
						</ul>
					</li>

					<!-- menu de busqueda por total de mujeres -->
					<li><a href="#"><span class="color5"><i class="icon icon-folder"></i></span>Mujeres</a>
						<ul>
							<li><a href="../capaInferior/pcgCde.php?modo=Mujeres&tipo=cde">Total mujeres</a></li>
							<li><a href="../capaInferior/pcgCde.php?modo=Ingenieras&tipo=cde">Ingenieras</a></li>
							<li><a href="../capaInferior/pcgCde.php?modo=Licenciadas&tipo=cde">Licenciadas</a></li>
							<li><a href="../capaInferior/pcgCde.php?modo=TSU(F)&tipo=cde">T.S.U</a></li>
						</ul>
					</li>

					<!-- busca por tipo de acto -->
					<li><a href="#"><span class="color3"><i class="icon icon-folder"></i></span>Tipo de acto</a>
						<ul>
							<li><a href="../capaInferior/pcgCde.php?modo=Secretaría&tipo=cde">Secretaría</a></li>
							<li><a href="../capaInferior/pcgCde.php?modo=solemne&tipo=cde">Solemne</a></li>							
						</ul>
					</li>
				</ul>
			</nav>
			
			<nav class="bt-salir">
				<ul>
					<li><a href="http://localhost/Siageg/capaSuperior/loginCde.php"><span class="color6"><i class="icon icon-back"></i></span>Salir</a></li>
				</ul>
			</nav>
		</footer>
		
	</div>

	<script src="../js/cde.js"></script> 
</body>