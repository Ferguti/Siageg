<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Registro de Ciudades</title>
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
		$resultado = $db->consultar($db,"SELECT * FROM ciudades ORDER BY  ciudad ASC;");

	 ?>
	<div class="contenedor">
		<header>
			<h4>REGISTRO DE CIUDADES</h4>
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
									<form name="formulario" action="../capaIntermedia/registro.php?modo=ciudad" method="POST">
									<input type="text" name="ciudad" id="ciudad" placeholder="Nombre de la ciudad" maxlength="15" title="Campo Nombre del estado">																			
									<input type="hidden" name="city" value="">
									<input type="submit" id="submit" name="submit" value="Guardar" title="Boton guardar datos">						
									</article>
								</div>
							</div>
						</div>				
					</div>

					<div class="tabla">
						<label>Ciudades registradas</label>
				<table>														
						<tr class = "centro">
							<td>ID</td>
							<td>Ciudad</td>
							
						</tr>
						<tbody>	
						<?php while($row= $resultado->fetch_assoc()){ ?>					
							<tr>
								<td><?php echo $row['id'] ?></td>
								<td><?php echo $row['ciudad'];?></td>
								
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
	<script src="../js/regCiudad.js"></script>
</body>
</html>