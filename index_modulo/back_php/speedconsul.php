
<?php 
$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

/* <!-- CONSULTA QUE REALIZA LA SELECCION DE VALORES DE TIEMPO PARA CALCULAR LA VELOCIDAD DEL PROGRAMA --> */

$cod_usuario=$_SESSION['codigo_rol'];
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
  $usuval="Factory";
}


$speed=mysqli_query($conexion,"SELECT valor1 FROM var_constantes WHERE Usuario= '$usuval' AND NombreDB='$pozo' AND Namevar='constanteScaneo'");
$resultspd=mysqli_fetch_array($speed);

$speed2=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE Usuario= '$usuval' AND Pozo='$pozo' AND Namevar='Time_ms'");
$resultspd2=mysqli_fetch_array($speed2);

$speed3=mysqli_query($conexion,"SELECT valor1 FROM var_constantes WHERE Usuario='$usuval' and NombreDB='$pozo' and Namevar='CteVelo'");
$resultspd3=mysqli_fetch_array($speed3);

$array=array($resultspd
 ,$resultspd2
 ,$resultspd3
);

echo json_encode($array); 

?>
