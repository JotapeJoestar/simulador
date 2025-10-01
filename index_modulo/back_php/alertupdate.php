

<?php 

/* <!-- UPDATE DE LAS ALERTAS DE FALLAS--> */

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

$cod_usuario=$_SESSION['codigo_rol'];
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
  $usuval="Factory";
}

$val1=$_POST['val1'];
$val2=$_POST['val2'];
$val3=$_POST['val3'];
$val4=$_POST['val4'];
$chb1=$_POST['chb1'];
$chb2=$_POST['chb2'];
$chb3=$_POST['chb3'];
$chb4=$_POST['chb4'];

$resul1=mysqli_query($conexion,"UPDATE fallas SET val1 = '$val1',FallaAct ='$chb1' WHERE Usuario = '$usuval' AND NombreDB = '$pozo' AND componente = 'FlowRet' AND tipoFalla = 'alertaHigh';");

$resul2=mysqli_query($conexion,"UPDATE fallas SET val1 = '$val2',FallaAct ='$chb2' WHERE Usuario = '$usuval' AND NombreDB = '$pozo' AND componente = 'FlowRet' AND tipoFalla = 'alertaLow';");

$resul3=mysqli_query($conexion,"UPDATE fallas SET val1 = '$val3',FallaAct ='$chb3' WHERE Usuario = '$usuval' AND NombreDB = '$pozo' AND componente = 'GainLoss'AND  tipoFalla = 'alertaHigh';");

$resul4=mysqli_query($conexion,"UPDATE fallas SET val1 = '$val4',FallaAct ='$chb4' WHERE Usuario = '$usuval' AND NombreDB = '$pozo' AND componente = 'GainLoss'AND  tipoFalla = 'alertaLow';");



?>
