<?php

/* <!-- CONSULTA QUE SELECCIONA LOS DATOS DE SETUP DE LAS GRAFICAS --> */

session_start(); 

$conexion=mysqli_connect("localhost","root","","simulador");

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }



$Var1=$_POST['dato'];


/* $sql3=mysqli_query($conexion,"CALL DibujarGraficas (1,@p1,0,0,0,'$usuval','$pozo',@p2,0,0,0,@p3,@p4,0,0,0,0,0,0,@p5,0,0,0,'$Var1','','','');");
 */

$query_valor_grafica = "SELECT VALORX,VALORY FROM DatosGraficas WHERE NAMEVAR ='$Var1' ORDER BY ITEM;";
$result_valor_grafica=mysqli_query($conexion,$query_valor_grafica); 
while($rows = mysqli_fetch_array($result_valor_grafica)) {
     $Datosy[]= $rows['VALORY'];
     $Datosx[]= $rows['VALORX'];
     }    

$query_valor_grafica = "SELECT COLOR,ANCHO FROM setup_graf where varname = '$Var1' ORDER by ITEM DESC LIMIT 1;";
$result_valor_grafica=mysqli_query($conexion,$query_valor_grafica); 

while($rows = mysqli_fetch_array($result_valor_grafica)) {
      $Color[]= $rows['COLOR'];
      $Ancho[]= $rows['ANCHO'];
      }    


      $arraydib= array($Datosy,$Datosx,$Color,$Ancho);


      echo json_encode($arraydib);


?>