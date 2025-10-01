
<?php 

/* <!-- EJECUCION DE LOS PORCEDIMIENTOS QUE TOMAN LOS DATOS DE LAS GRAFICAS EN RANGOS DE FECHAS ACTUALES --> */


session_start(); 

$conexion=mysqli_connect("localhost","root","","simulador");

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }

$FechaAct=$_POST['FechaAct']; 
$FechaRes=$_POST['FechaRes']; // fecha restada en seg.
$Var1=$_POST['dato1']; 
$Var2=$_POST['dato2'];
$Var3=$_POST['dato3'];
$Var4=$_POST['dato4'];
$Var5=$_POST['dato5'];
$Var6=$_POST['dato6'];
$Var7=$_POST['dato7'];
$Var8=$_POST['dato8'];

$graf1="SELECT valor FROM rt_time WHERE FECHA BETWEEN '$FechaRes' AND '$FechaAct' AND Usuario = '$usuval' AND pozo = '$pozo' AND Practica = (SELECT valor2 FROM var_constantes WHERE Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'TimeScan') AND NAMEVAR='$Var1';";
$result_gra1=mysqli_query($conexion,$graf1); 
while($rows = mysqli_fetch_array($result_gra1)) 
     {
     $Datosx[]= $rows['valor'];
     }

$graf2="SELECT valor FROM rt_time WHERE FECHA BETWEEN '$FechaRes' AND '$FechaAct' AND Usuario = '$usuval' AND pozo = '$pozo' AND Practica = (SELECT valor2 FROM var_constantes WHERE Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'TimeScan') AND NAMEVAR='$Var2';";
$result_gra2=mysqli_query($conexion,$graf2); 
while($rows = mysqli_fetch_array($result_gra2)) 
     {
     $Datosx2[]= $rows['valor'];
     }

$graf3="SELECT valor FROM rt_time WHERE FECHA BETWEEN '$FechaRes' AND '$FechaAct' AND Usuario = '$usuval' AND pozo = '$pozo' AND Practica = (SELECT valor2 FROM var_constantes WHERE Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'TimeScan') AND NAMEVAR='$Var3';";
$result_gra3=mysqli_query($conexion,$graf3); 
while($rows = mysqli_fetch_array($result_gra3)) 
     {
     $Datosx3[]= $rows['valor'];
     }

$graf4="SELECT valor FROM rt_time WHERE FECHA BETWEEN '$FechaRes' AND '$FechaAct' AND Usuario = '$usuval' AND pozo = '$pozo' AND Practica = (SELECT valor2 FROM var_constantes WHERE Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'TimeScan') AND NAMEVAR='$Var4';";
$result_gra4=mysqli_query($conexion,$graf4); 
while($rows = mysqli_fetch_array($result_gra4)) 
     {
     $Datosx4[]= $rows['valor'];
     }

$graf5="SELECT valor FROM rt_time WHERE FECHA BETWEEN '$FechaRes' AND '$FechaAct' AND Usuario = '$usuval' AND pozo = '$pozo' AND Practica = (SELECT valor2 FROM var_constantes WHERE Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'TimeScan') AND NAMEVAR='$Var5';";
$result_gra5=mysqli_query($conexion,$graf5); 
while($rows = mysqli_fetch_array($result_gra5)) 
     {
     $Datosx5[]= $rows['valor'];
     }

$graf6="SELECT valor FROM rt_time WHERE FECHA BETWEEN '$FechaRes' AND '$FechaAct' AND Usuario = '$usuval' AND pozo = '$pozo' AND Practica = (SELECT valor2 FROM var_constantes WHERE Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'TimeScan') AND NAMEVAR='$Var6';";
$result_gra6=mysqli_query($conexion,$graf6); 
while($rows = mysqli_fetch_array($result_gra6)) 
     {
     $Datosx6[]= $rows['valor'];
     }

$graf7="SELECT valor FROM rt_time WHERE FECHA BETWEEN '$FechaRes' AND '$FechaAct' AND Usuario = '$usuval' AND pozo = '$pozo' AND Practica = (SELECT valor2 FROM var_constantes WHERE Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'TimeScan') AND NAMEVAR='$Var7';";
$result_gra7=mysqli_query($conexion,$graf7); 
while($rows = mysqli_fetch_array($result_gra7)) 
     {
     $Datosx7[]= $rows['valor'];
     }

$graf8="SELECT valor FROM rt_time WHERE FECHA BETWEEN '$FechaRes' AND '$FechaAct' AND Usuario = '$usuval' AND pozo = '$pozo' AND Practica = (SELECT valor2 FROM var_constantes WHERE Usuario='$usuval' and NombreDB='$pozo' AND namevar = 'TimeScan') AND NAMEVAR='$Var8';";
$result_gra8=mysqli_query($conexion,$graf8); 
while($rows = mysqli_fetch_array($result_gra8)) 
     {
     $Datosx8[]= $rows['valor'];
     }


if(empty($Datosx))
     {
     $Datosx[]=-9999;
     }
if(empty($Datosx2))
     {
     $Datosx2[]=-9999;
     }
if(empty($Datosx3))
     {
     $Datosx3[]=-9999;
     }
if(empty($Datosx4))
     {
     $Datosx4[]=-9999;
     }
if(empty($Datosx5))
     {
     $Datosx5[]=-9999;
     }
if(empty($Datosx6))
     {
     $Datosx6[]=-9999;
     }
if(empty($Datosx7))
     {
     $Datosx7[]=-9999;
     }
if(empty($Datosx8))
     {
     $Datosx8[]=-9999;
     }


$arraygraf= array($Datosx,$Datosx2,$Datosx3,$Datosx4,$Datosx5,$Datosx6,$Datosx7,$Datosx8);

echo json_encode($arraygraf);

?>