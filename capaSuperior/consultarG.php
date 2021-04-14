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
	<script src="prefixfree.min.js" type="text/javascript" href="../js/prefixfree.min.js"></script>		
	<script src="../js/prefixfree.min"></script>
	<link rel="shorcut icon" type="image/x-icon" href="../imagenes/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,600italic,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/consultasGrad.css">	
	<link rel="stylesheet" href="../css/entypo/fonts.css">	    
	<link rel="stylesheet" href="../css/flexboxgrid.min.css">
	<script src"http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>


	<?php
		include('../capaInferior/conexion.php');
		
		
		$db = new conexion();
		

				
			$modo = isset($_GET['modo']) ? $_GET['modo']  : 'default';

			$tipo = $_GET['tipo'];

			switch ($modo) {

				case 'T.S.U':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND sa = 'SI';");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}
				break;

				case 'INGENIEROS':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' AND sa = 'SI';");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				 </script>";
					}	
				break;

				case 'LICENCIADOS':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Licenciado(a)' AND sa = 'SI';");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'I.U.B':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE inst = 'I.U.B' AND sa = 'SI';");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'UPTBAL':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE inst = 'UPTBAL' AND sa = 'SI';");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'MISIÓN':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE inst = 'MISIÓN' AND sa = 'SI';");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Ing. Agroalimentaria':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' AND pnf = 'Agroalimentaria' AND sa = 'SI' ");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Lic. Administración':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Licenciado(a)' AND pnf = 'Administración' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Ing. Construcción Civil':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' AND pnf = 'Construcción Civil' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Ing. Informática':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' AND pnf = 'Informática' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Lic. Turismo':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Licenciado(a)' AND pnf = 'Turismo' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'TSU. Administración':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND pnf = 'Administración' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'TSU. Agroalimentaria':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND pnf = 'Agroalimentaria' AND sa = 'SI'; ");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'TSU. Construcción Civil':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND pnf = 'Construcción Civil' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				

				case 'TSU. Informática':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND pnf = 'Informática' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'TSU. Turismo':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND pnf = 'Turismo' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Hombres':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE sexo = 'M' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Ingenieros':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' AND sexo = 'M' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Licenciados':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Licenciado(a)' AND sexo = 'M' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'TSU(M)':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND sexo = 'M' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Mujeres':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE sexo = 'F' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Ingenieras':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Ingeniero(a)' AND sexo = 'F' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Licenciadas':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'Licenciado(a)' AND sexo = 'F' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'TSU(F)':
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE titulo = 'T.S.U' AND sexo = 'F' AND sa = 'SI'");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'POR CEDULA':
					
					session_start();
					$cedula = $_SESSION['ci'];
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE ci = '".$cedula."' AND sa = 'SI';");
					$r = $db->consultar($db,"SELECT titulo FROM estudiante WHERE ci = '".$cedula."' AND sa = 'SI';");

					while($filas = mysqli_fetch_assoc($r)){
							$t = $filas['titulo'];
						}
					if(mysqli_num_rows($resultado) > 0 ){

						
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'Secretaría':
					
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE tipogrado = 'Secretaría' AND sa = 'SI';");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;

				case 'solemne':
					
					$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE tipogrado = 'solemne' AND sa = 'SI';");
					
					if(mysqli_num_rows($resultado) > 0 ){
						$contador = mysqli_num_rows($resultado);
					}else{
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
		  				   		<script type=\"text/javascript\">			 			 		
				 		   		alert(\"¡NO EXISTEN REGISTROS!\");			 		
				 				</script>";
					}
				break;


				default:
						echo " 	<meta http-equiv='refresh' content='0 URL=http://localhost/Siageg/index.php'>
	  				   			<script type=\"text/javascript\">			 			 		
			 		   			alert(\"¡**ERROR ACCESO NO AUTORIZADO**!\");			 		
			 				 	</script>";
				}
			
	 ?>		
		<div class="contenedor">
		<header>
			<h3>CONSULTA DE GRADUANDOS</h3>
	
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
			<label>Total graduandos <?php echo $_GET['modo'] ?>: <?php echo $contador; ?></label>
			<?php  if($_GET['modo'] == 'POR CEDULA'){ ?>
					<label> <?php echo 'Titulo a obtener:'." ".$t;  ?></label>
				    
			<?php	}	?>
			</div>
			
				
			<!-- tabla 1 para consultar documentos existentes en el expediente del graduando -->
			<div class="tabla">
				<table>														
						<tr class = "centro">
							<td>Cedula</td>
							<td>Nombres completos</td>
							<td>sexo</td>
							<td>Fecha de nacimiento</td>
							<td>Lugar de nacimiento</td>
							<td>Estado de nacimiento</td>
							<td>Programa</td>
						</tr>
						<tbody>	
						<?php while($row= $resultado->fetch_assoc()){ ?>					
							<tr>
								<td><?php echo $row['ci'] ?></td>
								<td><?php echo $row['nombres']." ". $row['apellidos'] ?></td>
								<td><?php echo $row['sexo'] ?></td>
								<td><?php echo $row['fecha'] ?></td>
								<td><?php echo $row['ciudad'] ?></td>
								<td><?php echo $row['estado'] ?></td>
								<td><?php echo $row['pnf'] ?></td>
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
		</section>

		

		<footer>			
			<nav class="bt-salir">
				<ul>
					<li><a href="<?php echo $_GET['tipo']; ?>"><span class="color6"><i class="icon icon-back"></i></span>Volver</a></li>
				</ul>
			</nav>
		</footer>
		
	
	
</div>
</body>