
<?php

/* <!-- CONSULTA QUE INSERTA LOS DATOS EN SETUO GRAFICAS DE ACUERDO A LA MODIFICACIONES REALIZADAS A LA CONFIGURACION DE LAS MISMAS --> */

session_start(); 

$conexion=mysqli_connect("localhost","root","","simulador");

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }


$Varnamel=$_POST['dato1']; 
$AnchoL=$_POST['dato2'];
$ColorL=$_POST['dato3'];
$Maxl=$_POST['dato4'];
$Minl=$_POST['dato5'];
$nombreconf=$_POST['dato6'];
$item=$_POST['dato7'];



$sql=("SELECT * FROM setup_graf WHERE usuario='$usuval' AND nombrebd='$pozo' AND nombreconf='$nombreconf' AND num_data='$item'");

$res=mysqli_query($conexion,$sql);

if(mysqli_fetch_array($res)==0){
  $sql1=mysqli_query($conexion,"INSERT INTO setup_graf(usuario, nombrebd, nombreconf, num_pract, numero_lienzo, varname, color, ancho, Max, Min, num_data) VALUES ('$usuval','$pozo','$nombreconf',1,1,'$Varnamel','$ColorL','$AnchoL','$Maxl','$Minl','$item')");
}else{
  $sql1=mysqli_query($conexion,"UPDATE setup_graf SET varname='$Varnamel',color='$ColorL',ancho='$AnchoL',Max='$Maxl',Min='$Minl' WHERE usuario='$usuval' AND nombrebd='$pozo' AND nombreconf='$nombreconf' AND num_data='$item'");
}
?>