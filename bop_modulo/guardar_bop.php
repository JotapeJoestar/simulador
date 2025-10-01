<?php 
//======================================FUNCIONES DE EL MODULO DE BOP PARA EL MANEJO DE PALANCAS Y RELOJES
session_start();
include('../conexion.php');
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];



if($pozo=="Defaull"){
    $usuval="Factory";
  }
  
  $anular=$_POST['estado_anular'];
  $blind=$_POST['estado_blind'];
  $upper=$_POST['estado_upper'];
  $lower=$_POST['estado_lower'];

if (isset($_POST['estado_anular'])) {
  $query_anular=mysqli_query($conexion,"UPDATE var_rt SET valor1='$anular' WHERE Usuario='$usuval' AND `NombreDB`= '$pozo' AND`Namevar`='AnnularAbierto'");
}
  
if (isset($_POST['estado_upper'])) {
  $query_upper=mysqli_query($conexion,"UPDATE var_rt SET valor1='$upper' WHERE Usuario='$usuval' AND `NombreDB`= '$pozo' AND`Namevar`='UpperAbierto'");
}

if (isset($_POST['estado_blind'])) {
  $query_blind=mysqli_query($conexion,"UPDATE var_rt SET valor1='$blind' WHERE Usuario='$usuval' AND `NombreDB`= '$pozo' AND`Namevar`='BlindAbierto'");
}

if (isset($_POST['estado_lower'])) {
  $query_lower=mysqli_query($conexion,"UPDATE var_rt SET valor1='$lower' WHERE Usuario='$usuval' AND `NombreDB`= '$pozo' AND`Namevar`='LowerAbierto'");
}

if (isset($_POST['killopen'])) {
  $kill=$_POST['killopen'];
  $query_kill=mysqli_query($conexion,"UPDATE var_rt SET valor1='$kill' WHERE Usuario='$usuval' AND `NombreDB`= '$pozo' AND`Namevar`='killAbierto'");
}

if (isset($_POST['choqueline'])) {
  $choquel=$_POST['choqueline'];
  $query_choque=mysqli_query($conexion,"UPDATE var_rt SET valor1='$choquel' WHERE Usuario='$usuval' AND `NombreDB`= '$pozo' AND`Namevar`='chokeAbierto'");
}

if($anular==1 && $upper==1 && $blind==1 && $lower==1){
    $query_aux=mysqli_query($conexion,"UPDATE var_rt SET valor1=1
 WHERE Usuario='$usuval' AND `NombreDB`= '$pozo' AND`Namevar`='BOPopen'");

}else{
    $query_aux=mysqli_query($conexion,"UPDATE var_rt SET valor1=0
 WHERE Usuario='$usuval' AND `NombreDB`= '$pozo' AND`Namevar`='BOPopen'");
}

?>