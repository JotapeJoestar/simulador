<?php 
$conexion=mysqli_connect("localhost","root","","simulador");

/* <!-- CONSULTA EL ESTADO DE FALLAS DE CHOKE --> */

session_start();

$cod_usuario=$_SESSION['codigo_rol'];
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
  $usuval="Factory";
}

$queri1=mysqli_query($conexion,"SELECT (SELECT ROUND(valor1, 0) FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='FlowAct') as valor1");
$res1=mysqli_fetch_assoc($queri1);

$array= array($fluid_volume,$spp,$ecd,$estadobombastd,
$estadobombadosstd);

?>