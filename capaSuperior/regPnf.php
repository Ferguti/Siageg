<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Registro P.N.F</title>
		<meta charset="UTF-8">
		<meta name="description" content="Sistema para graduandos de la UPTBAL">
		<meta name="keywords" content="PNF registro, uptbal">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">			
	    <link rel="shorcut icon" type="image/x-icon" href="../imagenes/favicon.ico">
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic' rel='stylesheet' type='text/css'>
	    <script src="http://code.jquery.com/jquery-latest.js"></script>	            		
	    <script src"http://code.jquery.com/jquery-latest.min.js"></script>
	    <link rel="stylesheet" href="../css/regpnf.css">	   
	    <link rel="stylesheet" href="../css/entypo/fonts.css">	    
	    <link rel="stylesheet" href="../css/flexboxgrid.min.css">	
	    <script src="../js/main.js"></script> 
</head>
<body>

	<?php 
		include('../capaInferior/conexion.php');
		$db = new conexion();
		$resultado = $db->consultar($db,"SELECT * FROM pnf;");

	 ?>

	<div class="contenedor">
		<header>
			<h4>REGISTRO DE P.N.F</h4>
		</header>

		<section class="main">
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
									<form name="formulario" action="../capaIntermedia/registro.php?modo=pnf" method="POST">
									<input type="text" name="nombre" id="nombre" placeholder="Nombre del P.N.F" maxlength="30" title="Campo nombre del P.N.F">
									<input type="text" name="siglas" id="siglas" placeholder="Siglas del P.N.F" maxlength="20" title="Campo siglas del P.N.F">
									<input type="date" name="fecha" id="fecha" placeholder="Fecha de creación" title="Campo fecha de creación">
									<textarea name="descrip" id="descrip" placeholder="Descripción del P.N.F" maxlength="80" title="Campo descripción del P.N.F"></textarea>	
									<input type="hidden" name="pnf" value="1">
									<input type="submit" id="submit" name="submit" value="Guardar" title="Boton guardar datos">						
									</article>
								</div>
							</div>
						</div>				
					</div>

					<div class="tabla">
						<label>P.N.F Registrados</label>
				<table>														
						<tr class = "centro">
							<td>P.N.F</td>
							<td>Siglas</td>
							
						</tr>
						<tbody>	
						<?php while($row= $resultado->fetch_assoc()){ ?>					
							<tr>
								<td><?php echo $row['nom'] ?></td>
								<td><?php echo $row['siglas'];?></td>
								
							</tr>

							<style>
								.table table{	
									margin-bottom: 100px;
								}
							</style>
							<?php } ?>
						</tbody>	
				</table>				
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
			<nav class="bt-salir">
				<ul>
					<li><a href="http://localhost/Siageg/capaSuperior/sesionSec.php"><span class="color6"><i class="icon icon-back"></i></span>VOLVER</a></li>
				</ul>
			</nav>
		</footer>
	</div>
	<script src="../js/regpnf.js"></script>
</body>
</html>