<?php

			include('conexion.php');
			$db  = new conexion();
			$sql = $db->consultar($db,"SELECT ci, pw, nom, apell FROM personal WHERE ci='20309826' and pw='siageg';");
			

			if(mysqli_num_rows($sql) > 0 ){
					//se guarda el nombre del usuario
				while($row = mysqli_fetch_assoc($sql)){				
				$nom = $row['nom'];
				$ape = $row['apell'];				
				$pw = $row['pw'];	
				$usuario = $row['ci'];				
				}					

				echo 'numero de filas = '. $row;
				

				session_start();		
				$_SESSION['nom'] = $nom;	
				$_SESSION['apell'] = $ape;
				$_SESSION['pw'] = $pw;
				$_SESSION['ci'] = $usuario; 
				
				echo $_SESSION['ci'];
				echo $_SESSION['apell'];
				echo $_SESSION['pw'];
				echo $_SESSION['nom'];
			}
 ?>