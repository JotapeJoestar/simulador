<?php 	
// ese item muestra la parte de bit 
session_start();
error_reporting(0);
$usuval=$_SESSION['username'];
include('../conexion.php');

$pozo_consul=$_POST['o_pozo'];
if($pozo_consul=="Defaull"){
	$usuval="Factory";
}
if ($pozo_consul) {
    $query_bit="CALL dbo_drillingrig(0, '$usuval', '$pozo_consul','', '', '', '', '', '', '', '', '', '', '', '','','','','','','','', '', '', '', 'mostrar_bit')";
    $result_bit=mysqli_query($conexion,$query_bit);
	
}


 ?>