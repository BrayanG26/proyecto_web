<?php
    session_start();
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);
	
    include("conectarse.php");
    $conn=conectarse();

	


 extract($_POST);
 
 

 $sql1= "DELETE FROM estados WHERE codigo_estado = '$codigo' ";
 $result1 = pg_query($conn,$sql1);
 if($result1) {
    header('Location: consulta_estados.php');
 }else{
    echo "NO SE PUDO BORRAR";
 }	
?>