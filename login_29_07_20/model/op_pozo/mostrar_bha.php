<?php 	
include('../conexion.php');
session_start();
error_reporting(0);
$usuval=$_SESSION['username'];
$pozo_consul=$_POST['o_pozo'];
if($pozo_consul=="Defaull"){
	$usuval="Factory";
}	
if ($pozo_consul) {
	
	$query_bha =" CALL dbo_drillingrig(0, '$usuval','$pozo_consul', '','', '', '', '', '', '','','','','','','','', '', '', '', '', '', '', '', '', 'mostrar_bha')";
$result_bha=mysqli_query($conexion,$query_bha);
//
}

 ?>
