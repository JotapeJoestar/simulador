

<?php 

/* <!-- ARHCIVO QUE ACTUALIZA EL ESTADO DE PAUSA DEL PROGRAMA --> */

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

$cod_usuario=$_SESSION['codigo_rol'];
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
  $usuval="Factory";
}


if (isset($_POST['Pausecb'])) {
  $val1=$_POST['Pausecb'];
  $actufall="UPDATE fallas SET FallaAct = '$val1' WHERE Usuario = '$usuval' AND NombreDB = '$pozo' AND componente = 'Pause' AND tipoFalla = 'Pause';";
  mysqli_query($conexion,$actufall);
  }

if (isset($_POST['counthoursi'])) {
  $counthoursi=$_POST['counthoursi'];
  $acthour="UPDATE var_process SET val1 = '$counthoursi' WHERE Usuario='$usuval' and Pozo='$pozo' and Namevar='Tiempo';";
  mysqli_query($conexion,$acthour);
  }
if (isset($_POST['countmini'])) {
  $countmini=$_POST['countmini'];
  $actmin="UPDATE var_process SET val2 = '$countmini' WHERE Usuario='$usuval' and Pozo='$pozo' and Namevar='Tiempo';";
  mysqli_query($conexion,$actmin);
  }
if (isset($_POST['countip'])) {
  $countip=$_POST['countip'];
  $actseg="UPDATE var_process SET val3 = '$countip' WHERE Usuario='$usuval' and Pozo='$pozo' and Namevar='Tiempo';";
  mysqli_query($conexion,$actseg);
  }
if (isset($_POST['Tiempo'])) {
  $Tiempo=$_POST['Tiempo'];
  $actseg2="UPDATE var_constantes SET valor1 = '$Tiempo' WHERE Usuario='$usuval' and NombreDB='$pozo' and Namevar='constanteScaneo';";
  mysqli_query($conexion,$actseg2);
  }

?>