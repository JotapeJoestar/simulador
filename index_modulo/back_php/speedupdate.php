<?php 

/* <!-- CONSULTA QUE ACTUALIZA LOS VALORES DE VELOCIDAD DEL PROGRAMA EN BD --> */

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

$cod_usuario=$_SESSION['codigo_rol'];
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
  $usuval="Factory";
}

$resultSpeed=$_POST['resultSpeed'];
$speedval=$_POST['speedval'];

$actuspeed="UPDATE  var_process SET val1 = $resultSpeed WHERE Usuario='$usuval' and Pozo='$pozo' and Namevar='Time_ms';";
mysqli_query($conexion,$actuspeed);

$actuspeed2="UPDATE var_constantes SET valor1 = $speedval WHERE Usuario='$usuval' and NombreDB='$pozo' and Namevar='CteVelo';";
mysqli_query($conexion,$actuspeed2);

?>
