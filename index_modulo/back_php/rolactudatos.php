<?php

/* <!-- ARCHIVO QUE SE EJECUTA CUANDO SE INICIA UNA NUEVA PRACTICA (CAMBIA LOS VALORES DEL POZO A LOS DEL SETUP) --> */
$conexion=mysqli_connect("localhost","root","","simulador");
session_start();


$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
  $usuval="Factory";
}


$actusetup=" CALL `CalTVar_funciones`(103, '$usuval', '$pozo', 0, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12);";
mysqli_query($conexion,$actusetup);

$actusetup2=mysqli_query($conexion,"CALL StartPozo(1,0, '$usuval','$pozo', '', '', '', '', '', '', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '$usuval', '$pozo', 0, 0)");

$actusetup3=mysqli_query($conexion,"CALL StartProcess(1,0,'$usuval','$pozo', '','','','','','', '', '', '', '', '$usuval','$pozo', 0, 0);");

?>
