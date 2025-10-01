

<?php 

/* <!-- GUARDA LOS DATOS DEL CHOKE EN BD --> */
/*Modulo encargado de guardar datos de el area de choque*/
include('../conexion.php');
session_start();

$usuval=$_SESSION['username'];
 
$pozo=$_SESSION['pozocon'];

if($pozo=="Defaull"){
   $usuval="Factory";
}


/* $choqueop=$_POST['choquedrllop'];
if (isset($choqueop)) {
	$query_choquemol1=mysqli_query($conexion,"UPDATE var_rt SET valor1='$choqueop' WHERE
	Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='Drill_pipe_open'");
} */


// Este bloque no se esta utilizando actualmente 22/10/2021
// $choque_estado=$_POST['choque_estado'];
/* if ($choque_estado==1) {
	$query_choquemol1=mysqli_query($conexion,"UPDATE var_rt SET valor1='0' WHERE
	 Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ChkRem2_Aper'");

	$query_choquemol2=mysqli_query($conexion,"UPDATE var_rt SET valor1='1',valor2='$choquedatarec' WHERE
	Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ChkRem1_Aper'");
}else{
	$query_choquemol1=mysqli_query($conexion,"UPDATE var_rt SET valor1='1',valor2='$choquedatarec' WHERE
	 Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ChkRem2_Aper'");

	$query_choquemol2=mysqli_query($conexion,"UPDATE var_rt SET valor1='0' WHERE
	Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ChkRem1_Aper'");
} */
// Este bloque no se esta utilizando actualmente 22/10/2021

$stateclose=$_POST['stateclose'];
if (isset($stateclose)) {
	$query_choke_stateclose=mysqli_query($conexion,"UPDATE var_rt SET valor1='$stateclose' WHERE
	 Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='Val_Aire_chk'");
}


$choke_positionop=$_POST['choke_positionop'];
if (isset($choke_positionop)) {
	$query_choquemol1=mysqli_query($conexion,"UPDATE var_rt SET valor1='$choke_positionop'WHERE
	 Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='choke_position'");

}

$choke_speedop=$_POST['choke_speedop'];
if (isset($choke_speedop)) {
	$query_choquemol1=mysqli_query($conexion,"UPDATE var_rt SET valor1='$choke_speedop' WHERE
	 Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='choke_speed'");
}


if (isset($_POST['choquespedat'])) {
	$choquespedat=$_POST['choquespedat'];
	$query_choquemol1=mysqli_query($conexion,"UPDATE var_process SET val2 ='$choquespedat' WHERE
	 Usuario='$usuval' AND Pozo='$pozo' AND Namevar='Choke_Act'");
}

if (isset($_POST['choque_estado'])) {
	$choque_estado=$_POST['choque_estado'];
	$query_choquemol1=mysqli_query($conexion,"UPDATE var_process SET val3 ='$choque_estado' WHERE
	 Usuario='$usuval' AND Pozo='$pozo' AND Namevar='Choke_Act'");
}


if (isset($_POST['choquedatarec'])) {
	$choquedatarec=$_POST['choquedatarec'];
	$query_choquemol1=mysqli_query($conexion,"UPDATE var_rt SET valor2='$choquedatarec' WHERE
	 Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='choke_speed'");
}


if (isset($_POST['aperchkval'])) {
	$aperchkval=$_POST['aperchkval'];
	$query_choquemol1=mysqli_query($conexion,"UPDATE var_rt SET valor1='$aperchkval' WHERE
	 Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='AperturaChoke'");
}
 ?>