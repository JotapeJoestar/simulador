

<?php

/* <!-- TRAE LOS DATOS DE CONSULTA DE INFLUJOS --> */

session_start(); 

$conexion=mysqli_connect("localhost","root","","simulador");

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }

$query1=mysqli_query($conexion,"SELECT * FROM drillingrig WHERE Usuario='$usuval' AND Pozo='$pozo' AND tipo='Circulacion' AND caracteristica='Anular' AND Tipodeflujo = 'Influjo' ORDER BY ITEM LIMIT 10");
while($rows = mysqli_fetch_array($query1)) 
       {
       $res1[]=$rows['valor1'];
       $res2[]=$rows['valor2'];
       $res3[]=$rows['valor7'];
       $res4[]=$rows['item'];
       }

if(empty($res1))
    {
     $res1[]=0;
    }
  
if(empty($res2))
    {
    $res2[]=0;
    } 
    
if(empty($res3))
    {
    $res3[]=0;
    }

if(empty($res4))
    {
    $res4[]=0;
    }

$arraydib= array($res1,$res2,$res3,$res4);

echo json_encode($arraydib);

?>