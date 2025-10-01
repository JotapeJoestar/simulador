
<?php 
session_start();

/* <!-- ARCHIVO QUE SE LLAMA PARA CONSULTAR EL ESTADO DE LAS VALVULAS --> */

 
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }
include('../conexion.php');

$pqueri1=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L7V1_Open'");
$pqueri2=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L7V2_Open'");
$pqueri3=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L7V3_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri4=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L6V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri5=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L6V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri6=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L6V3_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri7=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L6V4_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri8=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L4V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri9=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L4V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri10=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L4V3_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri11=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L4V4_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri12=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L4V5_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri13=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L3V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri14=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L3V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri15=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L2V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri16=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L2V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri17=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L1V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri18=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L7V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri19=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B1B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri20=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B2B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri21=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='BL_2A_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri22=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='BL_2B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri23=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='BL_2C_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri24=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='BL_1A_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri25=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='BL_1B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri26=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B1A_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri27=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B_CementHeadOpen' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri28=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B_CementPumpOpen' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri29=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B_ToChokeOpen' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$pqueri30=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B2A_open' AND NombreDB='$pozo'  AND Usuario='$usuval'");


$pres1=mysqli_fetch_assoc($pqueri1);
$pres2=mysqli_fetch_assoc($pqueri2);
$pres3=mysqli_fetch_assoc($pqueri3);
$pres4=mysqli_fetch_assoc($pqueri4);
$pres5=mysqli_fetch_assoc($pqueri5);
$pres6=mysqli_fetch_assoc($pqueri6);
$pres7=mysqli_fetch_assoc($pqueri7);
$pres8=mysqli_fetch_assoc($pqueri8);
$pres9=mysqli_fetch_assoc($pqueri9);
$pres10=mysqli_fetch_assoc($pqueri10);
$pres11=mysqli_fetch_assoc($pqueri11);
$pres12=mysqli_fetch_assoc($pqueri12);
$pres13=mysqli_fetch_assoc($pqueri13);
$pres14=mysqli_fetch_assoc($pqueri14);
$pres15=mysqli_fetch_assoc($pqueri15);
$pres16=mysqli_fetch_assoc($pqueri16);
$pres17=mysqli_fetch_assoc($pqueri17);
$pres18=mysqli_fetch_assoc($pqueri18);
$pres19=mysqli_fetch_assoc($pqueri19);
$pres20=mysqli_fetch_assoc($pqueri20);
$pres21=mysqli_fetch_assoc($pqueri21);
$pres22=mysqli_fetch_assoc($pqueri22);
$pres23=mysqli_fetch_assoc($pqueri23);
$pres24=mysqli_fetch_assoc($pqueri24);
$pres25=mysqli_fetch_assoc($pqueri25);
$pres26=mysqli_fetch_assoc($pqueri26);
$pres27=mysqli_fetch_assoc($pqueri27);
$pres28=mysqli_fetch_assoc($pqueri28);
$pres29=mysqli_fetch_assoc($pqueri29);
$pres30=mysqli_fetch_assoc($pqueri30);


$b1=       $pres1['valor1'];
$b2=       $pres2['valor1'];
$b3=       $pres3['valor1'];
$b4=       $pres4['valor1'];
$b5=       $pres5['valor1'];
$b6=       $pres6['valor1'];
$b7=       $pres7['valor1'];
$b8=       $pres8['valor1'];
$b9=       $pres9['valor1'];
$b10=       $pres10['valor1'];
$b11=       $pres11['valor1'];
$b12=       $pres12['valor1'];
$b13=       $pres13['valor1'];
$b14=       $pres14['valor1'];
$b15=       $pres15['valor1'];
$b16=       $pres16['valor1'];
$b17=       $pres17['valor1'];
$b18=       $pres18['valor1'];
$b19=       $pres19['valor1'];
$b20=       $pres20['valor1'];
$b21=       $pres21['valor1'];
$b22=       $pres22['valor1'];
$b23=       $pres23['valor1'];
$b24=       $pres24['valor1'];
$b25=       $pres25['valor1'];
$b26=       $pres26['valor1'];
$b27=       $pres27['valor1'];
$b28=       $pres28['valor1'];
$b29=       $pres29['valor1'];
$b30=       $pres30['valor1'];



$array= array($b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8,$b9,$b10,$b11,$b12,$b13,$b14,$b15,$b16,$b17,$b18,$b19,$b20,$b21,$b22,$b23,$b24,$b25,$b26,$b27,$b28,$b29,$b30);

echo json_encode($array);
?> 