
<?php 
/* <!-- CONSULTA QUE SELECCIONA LOS DATOS QUE SE ENCUENTRAN EN LA PARTE DERECHA DE LA GRAFICAS (PARTE DERECHA CUANDO SE ABREN LAS GRAFICAS) --> */

session_start(); 

$conexion=mysqli_connect("localhost","root","","simulador");

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }


$Var1=$_POST['dato41'];
$Var2=$_POST['dato42'];
$Var3=$_POST['dato43'];
$Var4=$_POST['dato44'];
$Var5=$_POST['dato45'];
$Var6=$_POST['dato46'];
$Var7=$_POST['dato47'];
$Var8=$_POST['dato48'];

$query_valor1 = "SELECT valor1 FROM `var_rt` WHERE Namevar = '$Var1';";
$result_valor1 =mysqli_query($conexion,$query_valor1); 
while($rows = mysqli_fetch_array($result_valor1)) {
            $vard1[]= $rows['valor1'];
                    }


$query_valor2 = "SELECT valor1 FROM `var_rt` WHERE Namevar = '$Var2';";
$result_valor2 =mysqli_query($conexion,$query_valor2); 
while($rows = mysqli_fetch_array($result_valor2)) {
            $vard2[]= $rows['valor1'];
                    }
                                
$query_valor3 = "SELECT valor1 FROM `var_rt` WHERE Namevar = '$Var3';";
$result_valor3 =mysqli_query($conexion,$query_valor3); 
while($rows = mysqli_fetch_array($result_valor3)) {
            $vard3[]= $rows['valor1'];
                    }

$query_valor4 = "SELECT valor1 FROM `var_rt` WHERE Namevar = '$Var4';";
$result_valor4 =mysqli_query($conexion,$query_valor4); 
while($rows = mysqli_fetch_array($result_valor4)) {
            $vard4[]= $rows['valor1'];
                    }

$query_valor5 = "SELECT valor1 FROM `var_rt` WHERE Namevar = '$Var5';";
$result_valor5 =mysqli_query($conexion,$query_valor5); 
while($rows = mysqli_fetch_array($result_valor5)) {
            $vard5[]= $rows['valor1'];
                    }

$query_valor6 = "SELECT valor1 FROM `var_rt` WHERE Namevar = '$Var6';";
$result_valor6 =mysqli_query($conexion,$query_valor6); 
while($rows = mysqli_fetch_array($result_valor6)) {
            $vard6[]= $rows['valor1'];
                    }

$query_valor7 = "SELECT valor1 FROM `var_rt` WHERE Namevar = '$Var7';";
$result_valor7 =mysqli_query($conexion,$query_valor7); 
while($rows = mysqli_fetch_array($result_valor7)) {
            $vard7[]= $rows['valor1'];
                    }

$query_valor8 = "SELECT valor1 FROM `var_rt` WHERE Namevar = '$Var8';";
$result_valor8 =mysqli_query($conexion,$query_valor8); 
while($rows = mysqli_fetch_array($result_valor8)) {
            $vard8[]= $rows['valor1'];
                    }


if(empty($vard1))
{
    $vard1[]=0;
}
if(empty($vard2))
{
    $vard2[]=0;
}
if(empty($vard3))
{
    $vard3[]=0;
}
if(empty($vard4))
{
    $vard4[]=0;
}
if(empty($vard5))
{
    $vard5[]=0;
}
if(empty($vard6))
{
    $vard6[]=0;
}
if(empty($vard7))
{
    $vard7[]=0;
}
if(empty($vard8))
{
    $vard8[]=0;
}
               
$arraydib1=array($vard1,$vard2,$vard3,$vard4,$vard5,$vard6,$vard7,$vard8);

      echo json_encode($arraydib1);

?>