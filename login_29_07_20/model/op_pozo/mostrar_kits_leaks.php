<?php 	
//este item muestra kits leaks 
session_start();
$usuval=$_SESSION['username'];
include('../conexion.php');
	

$pozo_consul=$_POST['o_pozo'];
if($pozo_consul=="Defaull"){
	$usuval="Factory";
}
if ($pozo_consul) {

	$query_kits_leaks="CALL dbo_drillingrig(0, '$usuval','$pozo_consul', '','', '', '', '', '', '','','','','','','','', '', '', '', '', '', '', '', '', 'mostrar_kits_leaks')";
$result_kits_leaks=mysqli_query($conexion,$query_kits_leaks);
}


 ?>
