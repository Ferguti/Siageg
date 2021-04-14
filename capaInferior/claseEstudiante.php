<?php 
	
	class estudiante {
		private $cedula;
		private $documento;
		private $contraseña;
		private $fn;
		private $nombres;
		private $apellidos;
		private $email;
		private $telefono;
		private $tipoGrado;
		private $institucion;
		private $pnf;
		private $titulo;
		private $en;
		private $cn;	
		private $periodo;		
		private $sexo;

		public function __construct(){

		 $cedula;
		 $documento;
		 $contraseña;
		 $fn;
		 $nombres;
		 $apellidos;
		 $email;
		 $telefono;
		 $tipoGrado;
		 $institucion;
		 $pnf;
		 $titulo;
		 $en;
		 $cn;	
		 $periodo;	
		 $sexo;
		 $folio;
		 $numero;
		 $indice;	 
		}

		public function set($doc, $ci, $pw, 
			$fecha, $nom, $ape, $correo, $tel, 
			$tipo, $inst, $profesion, $tit, $estadoN, $ciudadN, $periodo, $sex){

			 $this->documento = $doc;
			 $this->cedula = $ci;			
			 $this->contraseña = $pw;
			 $this->fn = $fecha;
			 $this->nombres = $nom;
			 $this->apellidos = $ape;
			 $this->email = $correo;
			 $this->telefono = $tel;
			 $this->tipoGrado = $tipo;
			 $this->institucion = $inst;
			 $this->pnf = $profesion;
			 $this->titulo = $tit;
			 $this->en = $estadoN;
		 	 $this->cn = $ciudadN;	
		 	 $this->periodo = $periodo;		 
			 $this->sexo = $sex;
		}

		public function regGra(){
			$db = new conexion();
			$resultado = $db->consultar($db,"SELECT * FROM estudiante WHERE ci = '".$this->cedula."' OR correo ='".$this->email."'");
			 
			if( mysqli_num_rows($resultado) >= 1){

			 	echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/regGrad.php'>

				 		<script type=\"text/javascript\">	
				 			 		
				 		alert(\"¡El número de cedula ó el email ingresado ya está registrado! Verifique e intente registrarse nuevamente\");
				 		</script>";
			 	

			}else{
			 	$save = $db->query("INSERT INTO estudiante (ci, nacionalidad, pw, fecha, nombres, apellidos, correo, tlfn, tipogrado, inst, pnf, titulo, estado, ciudad, periodo, sexo) 
			    			VALUES ('$this->cedula', '$this->documento', '$this->contraseña', '$this->fn', '$this->nombres', '$this->apellidos', '$this->email', '$this->telefono', 
			   	 			 '$this->tipoGrado', '$this->institucion', '$this->pnf', '$this->titulo', '$this->en', '$this->cn', '$this->periodo', '$this->sexo')")
							or die("Problemas al guardar </br>".mysqli_errno($save)); 

				$exp =	$db->query("INSERT INTO expediente (ci) VALUES ('$this->cedula')") or die("Problemas al guardar </br>".mysqli_errno($exp)); 		

			    		    echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/loginG.php'>
				 					<script type=\"text/javascript\">				 			 		
							 		alert(\"¡Registro exitoso! Ingresa a tu cuenta para verificar tu expediente\");		
							 		</script>";			 	
			}	
		}

		
		public function consultar($ced){

			$db = new conexion();		
			$this->ced = $ced;

					
				$estudiante = $db->consultar($db, "SELECT ci, nombres, apellidos, titulo, pnf FROM estudiante WHERE ci = '".$this->ced."'; ");
				$expediente = $db->consultar($db,"SELECT * FROM expediente WHERE ci = '".$this->ced."';");

			

				if(mysqli_num_rows($estudiante) > 0 and mysqli_num_rows($expediente) > 0){
					if(mysqli_num_rows($estudiante) > 0){
						while($filas = mysqli_fetch_assoc($estudiante)){
							$ced = $filas['ci'];
							$nombres = $filas['nombres'];
							$apellidos = $filas['apellidos'];
							$titulo = $filas['titulo'];	
							$pnf =	$filas['pnf'];			
						}
					}

					if(mysqli_num_rows($expediente) > 0){
						while($filas = mysqli_fetch_assoc($expediente)){
							$ci = $filas['ci'];
							$fn = $filas['fn'];
							$tit = $filas['fotos'];
							$nc = $filas['nc'];
							$cc = $filas['cc'];
							$pn = $filas['pn'];
							$sa = $filas['sa'];
						}
							session_start();
							$_SESSION['ci'] = $this->ced;
							$_SESSION['pnf'] = $pnf;
							$_SESSION['nombres'] = $nombres; 
							$_SESSION['apellidos'] = $apellidos;
							$_SESSION['titulo'] = $titulo;
							$_SESSION['fn'] = $fn;
							$_SESSION['fotos'] = $tit;
							$_SESSION['nc'] = $nc;
							$_SESSION['pn'] = $pn;
							$_SESSION['cc'] = $pn;
							$_SESSION['sa'] = $sa;
							header('location: ../capaSuperior/conGradExp.php');	
							break;
							exit();
					}	
				}else{

			    		    echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/cde.php'>
				 					<script type=\"text/javascript\">				 			 		
							 		alert(\"¡EL graduando no esta registrado!\");		
							 		</script>";	
				}
		    }

		    public function consultarFol($ced){

			$db = new conexion();		
			$this->ced = $ced;

					
				$estudiante = $db->consultar($db, "SELECT ci, nombres, apellidos, titulo, pnf, fecha FROM estudiante WHERE ci = '".$this->ced."'; ");
			

			

				if(mysqli_num_rows($estudiante) > 0 ){
					if(mysqli_num_rows($estudiante) > 0){
						while($filas = mysqli_fetch_assoc($estudiante)){
							$ced = $filas['ci'];
							$nombres = $filas['nombres'];
							$apellidos = $filas['apellidos'];
							$titulo = $filas['titulo'];	
							$pnf =	$filas['pnf'];
							$fn = $filas['fecha'];			
						}
					}
					
							session_start();
							$_SESSION['ci'] = $this->ced;
							$_SESSION['pnf'] = $pnf;
							$_SESSION['nombres'] = $nombres; 
							$_SESSION['apellidos'] = $apellidos;
							$_SESSION['titulo'] = $titulo;	
							$_SESSION['titulo'] = $fn;							
							header('location: ../capaSuperior/consultarGfolio.php');	
							break;
							exit();
						
				}else{

			    		    echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/folioSec.php'>
				 					<script type=\"text/javascript\">				 			 		
							 		alert(\"¡EL graduando no esta registrado!\");		
							 		</script>";	
				}
		    }

		    public function consultarRep($ced){

			$db = new conexion();		
			$this->ced = $ced;

					
				$estudiante = $db->consultar($db, "SELECT ci, nombres, apellidos, titulo, pnf, fecha, folio, ia FROM estudiante WHERE ci = '".$this->ced."'; ");
			

			

				if(mysqli_num_rows($estudiante) > 0 ){
					if(mysqli_num_rows($estudiante) > 0){
						while($filas = mysqli_fetch_assoc($estudiante)){
							$ced = $filas['ci'];
							$nombres = $filas['nombres'];
							$apellidos = $filas['apellidos'];
							$titulo = $filas['titulo'];	
							$pnf =	$filas['pnf'];
							$fn = $filas['fecha'];	
							$folio = $filas['folio']; 
							$indice = $filas['ia']; 		
						}
					}
					
							session_start();
							$_SESSION['ci'] = $this->ced;
							$_SESSION['pnf'] = $pnf;
							$_SESSION['nombres'] = $nombres; 
							$_SESSION['apellidos'] = $apellidos;
							$_SESSION['titulo'] = $titulo;	
							$_SESSION['fecha'] = $fn;
							$_SESSION['folio'] = $folio;
							$_SESSION['indice'] = $indice;
							header('location: ../capaSuperior/consultarReport.php');	
							break;
							exit();
						
				}else{

			    		    echo " <meta http-equiv='refresh' content='0 URL= ../capaSuperior/reportes.php'>
				 					<script type=\"text/javascript\">				 			 		
							 		alert(\"¡EL graduando no esta registrado!\");		
							 		</script>";	
				}
		    }

		    public function regFolio($ced, $folio, $numero, $indice){

		    	$this->ced = $ced;
		    	$this->numero = $numero;
		    	$this->folio = $folio;
		    	$this->indice = $indice;			


		    	$db = new conexion();
		    	$update = $db->query("UPDATE estudiante SET folio = '$this->folio', numero = '$this->numero', ia = '$this->indice' WHERE ci = '$this->ced'") 
									or die("Error al guardar".mysqli_errno($update));

					echo "	<meta http-equiv='refresh' content='0 URL= ../capaSuperior/folioSec.php'>
	  				<script type=\"text/javascript\">			 			 		
			 		alert(\"¡Registro exitoso!\");			 		
			 		</script>";

		    }


		    public function actPer($ced, $periodo){

		    	$this->ced = $ced;
		    	$this->periodo = $periodo;
		    				


		    	$db = new conexion();
		    	$update = $db->query("UPDATE estudiante SET periodo = '$this->periodo' WHERE ci = '$this->ced'") 
									or die("Error al guardar".mysqli_errno($update));

					echo "	<meta http-equiv='refresh' content='0 URL= ../capaSuperior/sessionGra.php'>
	  				<script type=\"text/javascript\">			 			 		
			 		alert(\"¡Cambio de periodo exitoso!\");			 		
			 		</script>";

		    }

	}	


 ?>