<?php
session_start();
// Activar errores
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);

  	include("conectarse.php");
  	$conn=conectarse();
  	extract($_POST);
  	echo $username;

	$sql1="Select* from usuarios where usuario='$username' and clave = '".$password."' ";

				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);

				if ($numrows5==0){
					header("Location: ingresar.php?errorusuario=si");
				}else {
					$row1 = pg_fetch_array($result1);
					$codigo_tipo = $row1["codigo_tipo"];
					
					$nombres = $row1["nombres"];
					$apellidos = $row1["apellidos"];
					//Enviamos los datos de quien ingresa
					$_SESSION["apellidos"] =$apellidos;
					$_SESSION["nombres"]=$nombres;
					$_SESSION["usuario"]= $username;
					$_SESSION["ingresado"] = 1;
					$_SESSION["codigo_tipo"] = $codigo_tipo;
					 //FALTA POR MODIFICAR
					echo $tipo_usuario;
				/*if ($codigo_tipo=='01'){
					 	
				}
				if ($tipo_usuario='02'){
					header("Location:  ../nueva_entrega/");
					exit(); 
				
				}
				if ($tipo_usuario='03'){
					header("Location:  ../nueva_entrega/");
					exit(); 
				
				}*/
				header("Location: ../nueva_entrega/");
				exit();
			}
		
?>