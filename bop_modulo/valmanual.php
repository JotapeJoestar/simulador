<?php

/* <!-- ARCHIVO PARA CONSULTAR EL ESTADO DE LAS VALVULAS MANUALES --> */

error_reporting(0);

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

$usuval=$_SESSION['username'];

$pozo=$_SESSION['pozocon'];

if($pozo=="Defaull"){
    $usuval="Factory";
}


if ($box1a=$_POST['valmanu1']) {
$boxsave1a="UPDATE var_rt SET valor1='$box1a' WHERE Usuario='$usuval' AND NombreDB= '$pozo' AND Namevar='L5V1ValvulaManual_Val';";
mysqli_query($conexion,$boxsave1a);
}

if ($box1b=$_POST['valmanu2']) {
$boxsave1b="UPDATE var_rt SET valor1='$box1b' WHERE Usuario='$usuval' AND NombreDB= '$pozo' AND Namevar='L5V2ValvulaManual_Val';";
mysqli_query($conexion,$boxsave1b);
}

?>