<?php 
	// Inicializamos sesi�n 
	session_start();
	
	// Borramos la variable
	unset ( $_SESSION["nombres"] );
	unset ( $_SESSION["apellidos"]);
	unset ( $_SESSION["usuario"] );
	// Borramos toda la sesi�n
	session_destroy();
	if ( isset ( $_SESSION['nombres'] ) ) { 
	// Si existe
	echo $_SESSION['nombres'];
	unset ( $_SESSION['nombres'] );
	} else { 
	// Si no existe 
	echo "SESION TERMINADA";
	session_unset();
	session_destroy();
	header('location: ../nueva_entrega/');
	exit(); 
	}
?>
