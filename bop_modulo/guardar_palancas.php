<?php 
//======================================FUNCIONES DE EL MODULO DE BOP PARA EL MANEJO DE PALANCAS Y RELOJES
session_start();
include('../conexion.php');
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];



if($pozo=="Defaull"){
    $usuval="Factory";
  }
  

if (isset($_POST['killopen'])) {
  $kill=$_POST['killopen'];
  $query_kill=mysqli_query($conexion,"UPDATE var_rt SET valor1='$kill' WHERE Usuario='$usuval' AND `NombreDB`= '$pozo' AND`Namevar`='killAbierto'");
}

if (isset($_POST['choqueline'])) {
  $choquel=$_POST['choqueline'];
  $query_choque=mysqli_query($conexion,"UPDATE var_rt SET valor1='$choquel' WHERE Usuario='$usuval' AND `NombreDB`= '$pozo' AND`Namevar`='chokeAbierto'");
}

?>