<?php
 $conexion=mysqli_connect("localhost","root","","simulador");
 
 session_start();

 $usuval=$_SESSION['username'];
 
 $pozo=$_SESSION['pozocon'];

 if($pozo=="Defaull"){
    $usuval="Factory";
}

$deepdata= $_POST['deep'];
$bitdeephdata= $_POST['bitdeeph'];
$alturadata= $_POST['altura'];


$result_rig_setupvart=mysqli_query($conexion,"UPDATE `var_rt` SET `valor1`= '$deepdata'  WHERE `Usuario`= '$usuval' AND `NombreDB`='$pozo' AND `Namevar`='Depth'");
$result_rig_setup2vart=mysqli_query($conexion,"UPDATE `var_rt` SET `valor1`= ' $bitdeephdata'  WHERE `Usuario`= '$usuval' AND `NombreDB`='$pozo'  AND `Namevar`='BitDepth'");
$result_rig_setup3vart=mysqli_query($conexion,"UPDATE `var_rt` SET `valor1`= '$alturadata'  WHERE  `Usuario`= '$usuval' AND `NombreDB`='$pozo' AND `Namevar`='AlturaBloque'");

?>