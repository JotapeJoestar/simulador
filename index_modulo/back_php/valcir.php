

<?php 

/* <!-- CONSULTA QUE ACTUALIZA LAS VALVULAS DE ALINEACION --> */

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

$cod_usuario=$_SESSION['codigo_rol'];
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
  $usuval="Factory";
}

if (isset($_POST['valv1cir'])) {
  $valv1cir=$_POST['valv1cir'];
  $actvalv1cir="UPDATE var_rt SET valor1 = '$valv1cir' WHERE Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula1' AND lista = 'Alineacion';";
  mysqli_query($conexion,$actvalv1cir);
  }

if (isset($_POST['valv2cir'])) {
  $valv2cir=$_POST['valv2cir'];
  $actvalv2cir="UPDATE var_rt SET valor1 = '$valv2cir' WHERE Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula2' AND lista = 'Alineacion';";
  mysqli_query($conexion,$actvalv2cir);
  }

if (isset($_POST['valv3cir'])) {
  $valv3cir=$_POST['valv3cir'];
  $actvalv3cir="UPDATE var_rt SET valor1 = '$valv3cir' WHERE Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula3' AND lista = 'Alineacion';";
  mysqli_query($conexion,$actvalv3cir);
  }

if (isset($_POST['valv4cir'])) {
  $valv4cir=$_POST['valv4cir'];
  $actvalv4cir="UPDATE var_rt SET valor1 = '$valv4cir' WHERE Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula4' AND lista = 'Alineacion';";
  mysqli_query($conexion,$actvalv4cir);
  }
 
if (isset($_POST['valv5cir'])) {
  $valv5cir=$_POST['valv5cir'];
  $actvalv5cir="UPDATE var_rt SET valor1 = '$valv5cir' WHERE Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula5' AND lista = 'Alineacion';";
  mysqli_query($conexion,$actvalv5cir);
  }  

if (isset($_POST['valv6cir'])) {
  $valv6cir=$_POST['valv6cir'];
  $actvalv6cir="UPDATE var_rt SET valor1 = '$valv6cir' WHERE Usuario='$usuval' and NombreDB='$pozo' and Namevar='Valvula6' AND lista = 'Alineacion';";
  mysqli_query($conexion,$actvalv6cir);
  }

if (isset($_POST['valm1cir'])) {
  $valm1cir=$_POST['valm1cir'];
  $actvalm1cir="UPDATE var_rt SET valor1 = '$valm1cir' WHERE Usuario='$usuval' and NombreDB='$pozo' and Namevar='Motor1' AND lista = 'Alineacion';";
  mysqli_query($conexion,$actvalm1cir);
  }  
?>