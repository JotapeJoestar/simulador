<?php 

/* <!-- CONSULTA QUE SELECCIONA LA CONFIGURACION DE CADA UNA DE LAS LINEAS DE GRAFICAS --> */
session_start(); 

$conexion=mysqli_connect("localhost","root","","simulador");

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }

  $query_valor1 = "SELECT val1 FROM `var_process` WHERE Namevar = 'DiferencialKit' AND usuario = '$usuval' AND Pozo = '$pozo'";
  $result_valor1 =mysqli_query($conexion,$query_valor1); 
  while($rows = mysqli_fetch_array($result_valor1)) {
              $result1[]= $rows['val1'];
                      }

$arraydib=array($result1);

echo json_encode($arraydib);



?>