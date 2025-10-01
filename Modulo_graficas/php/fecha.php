<?php

/* <!-- CONSULTA QUE ACTUALIZA NUMERO DE PRACTICA Y TOMA LA FECHA ACTUAL DEL SERVIDOR -->
 */
session_start(); 

$conexion=mysqli_connect("localhost","root","","simulador");

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }


 if (isset($_POST['continue'])) {
    $continue = $_POST['continue'];
    $actualizacion1=mysqli_query($conexion,"UPDATE var_constantes SET valor1 = '$continue' where Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'NewPract'");
    }


 if (isset($_POST['actprac'])) {
    $actualizacion=mysqli_query($conexion,"UPDATE var_constantes SET valor2 = 1+(SELECT valor2 FROM var_constantes WHERE Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'TimeScan') where Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'TimeScan'");
    }

$resultadort1=mysqli_query($conexion,"SELECT NOW() AS FECHA");

while ($rt1 = mysqli_fetch_assoc($resultadort1)) {
  $resultadort = $rt1["FECHA"];
}

$resultadort2=mysqli_query($conexion,"SELECT valor2 FROM var_constantes where Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'constanteScaneo' ");

while ($rt2 = mysqli_fetch_assoc($resultadort2)) {
  $resultadortv = $rt2["valor2"];
}

$arraydib= array($resultadort,$resultadortv);

echo json_encode($arraydib);

?>