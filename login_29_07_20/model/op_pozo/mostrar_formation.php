<?php 
//este item muestra los datos de data formation	 
include('../conexion.php');
session_start();
error_reporting(0);
$usuval=$_SESSION['username'];

$query_formation ="";
$query_formation2 ="";
$query_formation3 ="";
$query_formation4 ="";
$query_formation5 ="";
$query_formation6 ="";
$conexion2=$conexion;
$conexion3=$conexion;
$conexion4=$conexion;
$conexion5=$conexion;
$conexion6=$conexion;


$pozo_consul=$_POST['o_pozo'];
if($pozo_consul=="Defaull"){
	$usuval="Factory";
}
if ($pozo_consul) {
	$query_formation ="CALL dbo_drillingrig(0, '$usuval','$pozo_consul', '1','', '', '', '', '', '','','','','','','','', '', '', '', '', '', '', '', '', 'mostrar_formation')";
    $conexion2=mysqli_connect("localhost","root","","simulador");
    $query_formation2 ="CALL dbo_drillingrig(0, '$usuval','$pozo_consul', '2','', '', '', '', '', '','','','','','','','', '', '', '', '', '', '', '', '', 'mostrar_formation')";
	$conexion3=mysqli_connect("localhost","root","","simulador");
    $query_formation3 ="CALL dbo_drillingrig(0, '$usuval','$pozo_consul', '3','', '', '', '', '', '','','','','','','','', '', '', '', '', '', '', '', '', 'mostrar_formation')";
    $conexion4=mysqli_connect("localhost","root","","simulador");
    $query_formation4 ="CALL dbo_drillingrig(0, '$usuval','$pozo_consul', '4','', '', '', '', '', '','','','','','','','', '', '', '', '', '', '', '', '', 'mostrar_formation')";
	$conexion5=mysqli_connect("localhost","root","","simulador");
    $query_formation5 ="CALL dbo_drillingrig(0, '$usuval','$pozo_consul', '5','', '', '', '', '', '','','','','','','','', '', '', '', '', '', '', '', '', 'mostrar_formation')";
	$conexion6=mysqli_connect("localhost","root","","simulador");
    $query_formation6 ="CALL dbo_drillingrig(0, '$usuval','$pozo_consul', '6','', '', '', '', '', '','','','','','','','', '', '', '', '', '', '', '', '', 'mostrar_formation')";
    $result_formation=mysqli_query($conexion,$query_formation);
    $result_formation2=mysqli_query($conexion2,$query_formation2);
     mysqli_close($conexion2); 
    $result_formation3=mysqli_query($conexion3,$query_formation3);
     mysqli_close($conexion3); 
    $result_formation4=mysqli_query($conexion4,$query_formation4);
     mysqli_close($conexion4); 
    $result_formation5=mysqli_query($conexion5,$query_formation5);
     mysqli_close($conexion5); 
    $result_formation6=mysqli_query($conexion6,$query_formation6);
     mysqli_close($conexion6); 

}


?>
