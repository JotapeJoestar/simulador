<?php 	
//este item muestra muds
include('../conexion.php');
session_start();
error_reporting(0);
$usuval=$_SESSION['username'];
//consulta mostrar datos
//CALL dbo_drillingrig(0, '','$pozo_consul', '','', '', '', '', '', '','','','','','','','', '', '', '', '', '', '', '', '', 'mostrar_muds')
$query_muds =="";

$pozo_consul=$_POST['o_pozo'];
if($pozo_consul=="Defaull"){
	$usuval="Factory";
}
if ($pozo_consul) {
$query_muds =" CALL dbo_drillingrig(0, '$usuval','$pozo_consul', '','', '', '', '', '', '','','','','','','','', '', '', '', '', '', '', '', '', 'mostrar_muds')";
$result_muds=mysqli_query($conexion,$query_muds);

}
?>
