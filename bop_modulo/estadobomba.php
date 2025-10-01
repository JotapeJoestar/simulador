<?php 
//======================================FUNCIONES DE EL MODULO DE BOP PARA EL MANEJO DE PALANCAS Y RELOJES
$conexion=mysqli_connect("localhost","root","","simulador");
session_start();
 
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];

if($pozo=="Defaull"){
    $usuval="Factory";
  }


if (isset($_POST['estadobomba1'])) {
	$estadobomba11=$_POST['estadobomba1'];
	$query=mysqli_query($conexion,"UPDATE var_rt SET Descrip='$estadobomba11' WHERE Namevar='EstadoBomba1' AND Usuario='$usuval' AND NombreDB='$pozo'");
}

if (isset($_POST['estadobomba2'])) {
	$estadobomba12=$_POST['estadobomba2'];
	$query=mysqli_query($conexion,"UPDATE var_rt SET Descrip='$estadobomba12' WHERE Namevar='EstadoBomba2' AND Usuario='$usuval' AND NombreDB='$pozo'");
}

if (isset($_POST['ChokeRem2_Activo'])) {
	$ChokeRem2_Activo=$_POST['ChokeRem2_Activo'];
	$query=mysqli_query($conexion,"UPDATE var_rt SET Descrip='$ChokeRem2_Activo' WHERE Namevar='ChkRem2_Val_Activo' AND Usuario='$usuval' AND NombreDB='$pozo'");
}

if (isset($_POST['ChokeRem1_Activo'])) {
	$ChokeRem1_Activo=$_POST['ChokeRem1_Activo'];
	$query=mysqli_query($conexion,"UPDATE var_rt SET Descrip='$ChokeRem1_Activo' WHERE Namevar='ChkRem1_Val_Activo' AND Usuario='$usuval' AND NombreDB='$pozo'");
}

if (isset($_POST['ChokeDesfogue'])) {
	$ChokeDesfogue=$_POST['ChokeDesfogue'];
	$query=mysqli_query($conexion,"UPDATE var_rt SET Descrip='$ChokeDesfogue' WHERE Namevar='Desfogue_Act' AND Usuario='$usuval' AND NombreDB='$pozo'");
}

if (isset($_POST['ChokeMan1_Activo'])) {
	$ChokeMan1_Activo=$_POST['ChokeMan1_Activo'];
	$query=mysqli_query($conexion,"UPDATE var_rt SET Descrip='$ChokeMan1_Activo' WHERE Namevar='L5V1_Val_Activo' AND Usuario='$usuval' AND NombreDB='$pozo'");
}

if (isset($_POST['ChokeMan2_Activo'])) {
	$ChokeMan2_Activo=$_POST['ChokeMan2_Activo'];
	$query=mysqli_query($conexion,"UPDATE var_rt SET Descrip='$ChokeMan2_Activo' WHERE Namevar='L5V2_Val_Activo' AND Usuario='$usuval' AND NombreDB='$pozo'");
}

 ?>