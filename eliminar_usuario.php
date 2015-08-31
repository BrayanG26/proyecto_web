<?php
    session_start();
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);
	
    include("conectarse.php");
    $conn=conectarse();
	

 extract($_POST);
 
 

 $sql1= "DELETE FROM usuarios WHERE usuario = '$usuario' ";
 $result1 = pg_query($conn,$sql1);

 if($result1) {
    header('Location: consulta_usuario.php');
 }else{
    echo "NO SE PUDO BORRAR";
 }
?>
