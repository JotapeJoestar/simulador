<?php
//este item consuta todos los pozos 
include('../conexion.php');
session_start();
error_reporting(0);
$usuval=$_SESSION['username'];


$pozo_r="";
$o_pozo="";
$usernameglobal="";

if (isset($pozo_r)||isset($o_pozo)||isset($usernameglobal)) {
	# code...

$pozo_r=$_POST['selec_p'];
$o_pozo=$_POST['o_pozo'];
$usernameglobal=$_POST['usernameglobal'];
// 	//seleccionar pozo 


$query="SELECT Pozo FROM drillingrig  WHERE `Usuario`='$usuval' OR `Usuario`='Factory' GROUP BY Pozo";
$result=mysqli_query($conexion,$query);




/*   $asocdeepval=mysqli_fetch_assoc($deepval);
  $valorasocdeepval=$asocdeepval['valor1']; */





//consulta mostrar datos

	
}

?>
  





