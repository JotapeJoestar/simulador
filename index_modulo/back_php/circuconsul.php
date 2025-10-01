<?php

/* <!-- CONSULTA EL ESTADO DE LAS VALVULAS DE CIRCULACION --> */

$conexion=mysqli_connect("localhost","root","","simulador");  
session_start();

$cod_usuario=$_SESSION['codigo_rol'];
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
  $usuval="Factory";
}

$Valvl1=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula1' AND lista= 'Alineacion'");
$resValvl1=mysqli_fetch_array($Valvl1);

$Valvl2=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula2' AND lista= 'Alineacion'");
$resValvl2=mysqli_fetch_array($Valvl2);

$Valvl3=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula3' AND lista= 'Alineacion'");
$resValvl3=mysqli_fetch_array($Valvl3);

$Valvl4=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula4' AND lista= 'Alineacion'");
$resValvl4=mysqli_fetch_array($Valvl4);

$Valvl5=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula5' AND lista= 'Alineacion'");
$resValvl5=mysqli_fetch_array($Valvl5);

$Valvl6=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula6' AND lista= 'Alineacion'");
$resValvl6=mysqli_fetch_array($Valvl6);

$Mot1=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='Motor1' AND lista= 'Alineacion'");
$resMot1=mysqli_fetch_array($Mot1);


$array= array($resValvl1,$resValvl2,$resValvl3,$resValvl4,$resValvl5,$resValvl6,$resMot1,);
echo json_encode($array);

?>