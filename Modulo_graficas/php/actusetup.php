<?php 

/* <!-- CONSULTA QUE SELECCIONA LA CONFIGURACION DE CADA UNA DE LAS LINEAS DE GRAFICAS --> */
session_start(); 

$conexion=mysqli_connect("localhost","root","","simulador");

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }
  
  if (isset($_POST['datasetup1'])) {
    $val1=$_POST['datasetup1'];
    $actufall="UPDATE var_process SET val1 = '$val1' WHERE usuario = '$usuval' AND pozo = '$pozo' AND namevar = 'DiferencialKit';";
    mysqli_query($conexion,$actufall);
    }



?>