<?php

/* <!-- CONSULTA DE TODAS LAS VALVULAS DE BOP ESTE ARCHIVO SE LLAMA DESDE BOP_MINI.PHP  --> */

 $conexion=mysqli_connect("localhost","root","","simulador");
 
 session_start();

 $usuval=$_SESSION['username'];
 
 $pozo=$_SESSION['pozocon'];

 if($pozo=="Defaull"){
    $usuval="Factory";
}


$valvula1=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L7V1_Open' AND Usuario='$usuval' AND NombreDB='$pozo'");
$valvula2=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L7V2_Open' AND Usuario='$usuval' AND NombreDB='$pozo'");
$valvula3=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L7V3_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula4=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L6V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula5=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L6V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula6=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L6V3_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula7=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L6V4_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula8=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L4V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula9=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L4V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula10=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L4V3_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula11=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L4V4_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula12=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L4V5_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula13=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L3V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula14=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L3V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula15=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L2V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula16=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L2V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula17=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L1V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula18=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='L7V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula19=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B1B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula20=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B2B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula21=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='BL_2A_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula22=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='BL_2B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula23=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='BL_2C_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula24=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='BL_1A_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula25=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='BL_1B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula26=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B1A_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula27=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B_CementHeadOpen' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula28=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B_CementPumpOpen' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula29=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B_ToChokeOpen' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula30=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='B2A_open' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula31=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='AnnularAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula32=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='UpperAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula33=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='BlindAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula34=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='LowerAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula35=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='killAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$valvula36=mysqli_query($conexion, "SELECT * FROM  var_rt WHERE Namevar='chokeAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'");



$vlv1=mysqli_fetch_assoc($valvula1);
$vlv2=mysqli_fetch_assoc($valvula2);
$vlv3=mysqli_fetch_assoc($valvula3);
$vlv4=mysqli_fetch_assoc($valvula4);
$vlv5=mysqli_fetch_assoc($valvula5);
$vlv6=mysqli_fetch_assoc($valvula6);
$vlv7=mysqli_fetch_assoc($valvula7);
$vlv8=mysqli_fetch_assoc($valvula8);
$vlv9=mysqli_fetch_assoc($valvula9);
$vlv10=mysqli_fetch_assoc($valvula10);
$vlv11=mysqli_fetch_assoc($valvula11);
$vlv12=mysqli_fetch_assoc($valvula12);
$vlv13=mysqli_fetch_assoc($valvula13);
$vlv14=mysqli_fetch_assoc($valvula14);
$vlv15=mysqli_fetch_assoc($valvula15);
$vlv16=mysqli_fetch_assoc($valvula16);
$vlv17=mysqli_fetch_assoc($valvula17);
$vlv18=mysqli_fetch_assoc($valvula18);
$vlv19=mysqli_fetch_assoc($valvula19);
$vlv20=mysqli_fetch_assoc($valvula20);
$vlv21=mysqli_fetch_assoc($valvula21);
$vlv22=mysqli_fetch_assoc($valvula22);
$vlv23=mysqli_fetch_assoc($valvula23);
$vlv24=mysqli_fetch_assoc($valvula24);
$vlv25=mysqli_fetch_assoc($valvula25);
$vlv26=mysqli_fetch_assoc($valvula26);
$vlv27=mysqli_fetch_assoc($valvula27);
$vlv28=mysqli_fetch_assoc($valvula28);
$vlv29=mysqli_fetch_assoc($valvula29);
$vlv30=mysqli_fetch_assoc($valvula30);
$vlv31=mysqli_fetch_assoc($valvula31);
$vlv32=mysqli_fetch_assoc($valvula32);
$vlv33=mysqli_fetch_assoc($valvula33);
$vlv34=mysqli_fetch_assoc($valvula34);
$vlv35=mysqli_fetch_assoc($valvula35);
$vlv36=mysqli_fetch_assoc($valvula36);


$vl1=$vlv1['valor1'];
$vl2=$vlv2['valor1'];
$vl3=$vlv3['valor1'];
$vl4=$vlv4['valor1'];
$vl5=$vlv5['valor1'];
$vl6=$vlv6['valor1'];
$vl7=$vlv7['valor1'];
$vl8=$vlv8['valor1'];
$vl9=$vlv9['valor1'];
$vl10=$vlv10['valor1'];
$vl11=$vlv11['valor1']; 
$vl12=$vlv12['valor1'];
$vl13=$vlv13['valor1'];
$vl14=$vlv14['valor1'];
$vl15=$vlv15['valor1'];
$vl16=$vlv16['valor1'];
$vl17=$vlv17['valor1'];
$vl18=$vlv18['valor1'];
$vl19=$vlv19['valor1'];
$vl20=$vlv20['valor1'];
$vl21=$vlv21['valor1'];
$vl22=$vlv22['valor1'];
$vl23=$vlv23['valor1'];
$vl24=$vlv24['valor1'];
$vl25=$vlv25['valor1'];
$vl26=$vlv26['valor1'];
$vl27=$vlv27['valor1'];
$vl28=$vlv28['valor1'];
$vl29=$vlv29['valor1'];
$vl30=$vlv30['valor1'];
$vl31=$vlv31['valor1'];
$vl32=$vlv32['valor1'];
$vl33=$vlv33['valor1'];
$vl34=$vlv34['valor1'];
$vl35=$vlv35['valor1'];
$vl36=$vlv36['valor1'];


$boparray=array($vl1,
$vl2,
$vl3,
$vl4,
$vl5,
$vl6,
$vl7,
$vl8,
$vl9,
$vl10,
$vl11,
$vl12,
$vl13,
$vl14,
$vl15,
$vl16,
$vl17,
$vl18,
$vl19,
$vl20,
$vl21,
$vl22,
$vl23,
$vl24,
$vl25,
$vl26,
$vl27,
$vl28,
$vl29,
$vl30,
$vl31,
$vl32,
$vl33,
$vl34,
$vl35,
$vl36);

echo json_encode($boparray);

?>