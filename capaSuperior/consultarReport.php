<!DOCTYPE html>
<html lang="es">

<!-- interfaz de control de estudio para consultar documentos existentes en los expedientes, actualizarlos
y verificar estadisticas en la totalización de graduandos -->
<head>
	<title>Consultar graduandos</title>
	<meta charset="UTF-8">	
	<meta name="description" content="Pagina web para graduandos de la UPTBAL">
	<meta name="keywords" content="graduandos, uptbal">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">	
	<script src="http://code.jquery.com/jquery-latest.js"></script>	
	<script src="../js/prefixfree.min.js"></script>		
	<link rel="shorcut icon" type="image/x-icon" href="../imagenes/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/consultasGrad.css">	
	<link rel="stylesheet" href="../css/entypo/fonts.css">	    
	<link rel="stylesheet" href="../css/flexboxgrid.min.css">
	<script src"http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>


	<?php
		include('../capaInferior/claseEstudiante.php');
		session_start();
		$_SESSION['ci'];
		$_SESSION['pnf'];
		$_SESSION['nombres']; 
		$_SESSION['apellidos'];
		$_SESSION['titulo'];	
		$_SESSION['fecha'];
		$_SESSION['folio']; 
		$_SESSION['indice']; 
			
	 ?>		
		<div class="contenedor">
		<header>
			<h3>REPORTES ACTA</h3>	
		</header>

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

		<section class="main">
			<div class="label">			
			
			<form name="formulario" id="formulario" action="../capaIntermedia/registro.php?modo=folio" method="POST">
			<label>PNF: <?php echo $_SESSION['pnf'];?> </label>
			<label>Titulo: <?php echo $_SESSION['titulo'];?></label>
			<div class="tabla" name="ci">
				<table>														
						<tr class = "centro">
							<td>Cedula</td>
							<td>Nombres completos</td>													
							<td>Nro Folio</td>								
							<td>Indice. A</td>
							<td>Fecha Nac</td>
						</tr>
						<tbody>	
						<?php { ?>					
							<tr>
								<td><?php echo $_SESSION['ci']; ?></td>
								<td><?php echo $_SESSION['nombres']." ". $_SESSION['apellidos']; ?></td>															
								<td><?php echo $_SESSION['folio']; ?></td>								
								<td><?php echo $_SESSION['indice']; ?></td>	
								<td><?php echo $_SESSION['fecha']; ?></td>	
							</tr>

							<style>
								table{	
									margin-bottom: 100px;
								}
							</style>
							<?php } ?>
						</tbody>	
				</table>				
			</div>	
 			 		
			<input type="hidden" value="1" name="fol">
			<a href="../reportes/DOMPDFReporte.pdf">GENERAR REPORTE</a>
			</form>
		</section>

		

		<footer>			
			<nav class="bt-salir">
				<ul>
					<li><a href="../capaSuperior/reportes.php"><span class="color6"><i class="icon icon-back"></i></span>VOLVER</a></li>
				</ul>
			</nav>
		</footer>
		
	
	
</div>

<script src="../js/consultarGradfolio.js"></script>
</body>