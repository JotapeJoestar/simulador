

<?php 

/* <!-- CONSULTA DE LOS ESTADOS DE LAS ALERTAS DE FALLAS--> */

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

$cod_usuario=$_SESSION['codigo_rol'];
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
  $usuval="Factory";
}


$resul1=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario = '$usuval' AND NombreDB = '$pozo' AND componente = 'FlowRet' AND tipoFalla = 'alertaHigh';");
while($rows = mysqli_fetch_array($resul1)) 
     {
     $resval1[]=$rows['val1'];
     $resfallact1[]=$rows['FallaAct'];
     }

$resul2=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario = '$usuval' AND NombreDB = '$pozo' AND componente = 'FlowRet' AND tipoFalla = 'alertaLow';");
while($rows = mysqli_fetch_array($resul2)) 
     {
     $resval2[]=$rows['val1'];
     $resfallact2[]=$rows['FallaAct'];
     }

$resul3=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario = '$usuval' AND NombreDB = '$pozo' AND componente = 'GainLoss' AND  tipoFalla = 'alertaHigh';");
while($rows = mysqli_fetch_array($resul3)) 
     {
     $resval3[]=$rows['val1'];
     $resfallact3[]=$rows['FallaAct'];
     }

$resul4=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario = '$usuval' AND NombreDB = '$pozo' AND componente = 'GainLoss' AND  tipoFalla = 'alertaLow';");
while($rows = mysqli_fetch_array($resul4)) 
     {
     $resval4[]=$rows['val1'];
     $resfallact4[]=$rows['FallaAct'];
     }

$array= array($resval1,$resfallact1,$resval2,$resfallact2,$resval3,$resfallact3,$resval4,$resfallact4);
echo json_encode($array);

?>
