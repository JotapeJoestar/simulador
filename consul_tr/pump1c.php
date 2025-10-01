

<?php 
session_start();

/* <!-- CONSULTA LOS DATOS DE LA BD PARA LUEGO ACTUALIZAR EN EL SITIO WEB --> */
 
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }
include('../conexion.php');

$queri1=mysqli_query($conexion, "SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPMB1'");
$queri2=mysqli_query($conexion, "SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPMB2'");
$queri3=mysqli_query($conexion, "SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='STKB1'");
$queri4=mysqli_query($conexion, "SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='STKB2'");
$queri5=mysqli_query($conexion, "SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPMtotal'");
$queri6=mysqli_query($conexion, "SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='STKTotal'");
$queri7=mysqli_query($conexion, "SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='BitDepth'");
$queri8=mysqli_query($conexion, "SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='AlturaBloque'");
$queri9=mysqli_query($conexion, "SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='Depth'");
$queri10=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='CPP'");
$queri11=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' and NombreDB='$pozo' and Namevar='Cunas'");
$queri12=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='FlowAct'");
$queri13=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='HL'");
$queri14=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPP'");
$queri15=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ROP'");
$queri16=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='RPM'");
$queri17=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='TQ'");
$queri18=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='EstadoBlockConecc'");
$queri19=mysqli_query($conexion,"SELECT * FROM var_constantes WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='agu1'");
$queri20=mysqli_query($conexion,"SELECT * FROM var_constantes WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='agu2'");

$res1=mysqli_fetch_assoc($queri1);
$res2=mysqli_fetch_assoc($queri2);
$res3=mysqli_fetch_assoc($queri3);
$res4=mysqli_fetch_assoc($queri4);
$res5=mysqli_fetch_assoc($queri5);
$res6=mysqli_fetch_assoc($queri6);
$res7=mysqli_fetch_assoc($queri7);
$res8=mysqli_fetch_assoc($queri8);
$res9=mysqli_fetch_assoc($queri9);
$res10=mysqli_fetch_assoc($queri10);
$res11=mysqli_fetch_assoc($queri11);
$res12=mysqli_fetch_assoc($queri12);
$res13=mysqli_fetch_assoc($queri13);
$res14=mysqli_fetch_assoc($queri14);
$res15=mysqli_fetch_assoc($queri15);
$res16=mysqli_fetch_assoc($queri16);
$res17=mysqli_fetch_assoc($queri17);
$res18=mysqli_fetch_assoc($queri18);
$res19=mysqli_fetch_assoc($queri19);
$res20=mysqli_fetch_assoc($queri20);



     $p1=       $res1['valor1'];
     $p2=       $res2['valor1'];
     $tsk1=     $res3['valor1'];
     $tsk2=     $res4['valor1'];
     $tsk=      $res5['valor1'];
     $tskpm=    $res6['valor1'];
     $bitD=     $res7['valor1'];
     $blockh=   $res8['valor1'];
     $depth=    $res9['valor1'];
     $cpreshure=$res10['valor1'];
     $cunas=    $res11['valor1'];
     $flow=     $res12['valor1'];
     $hl1=       $res13['valor1'];
     $spp1=      $res14['valor1'];
     $rop1=      $res15['valor1'];
     $rpm1=      $res16['valor1'];
     $tq1=       $res17['valor1'];
     $estadobloque=  $res18['valor1'];
     $agu11= $res19['valor1'];
     $agu21= $res20['valor1'];


 
$array= array($p1,$p2,$tsk1,$tsk2,$tsk,$tskpm,$bitD,$blockh,$depth,$cpreshure,$cunas,$flow,$hl1,$spp1,$rop1,$rpm1,$tq1, $estadobloque,$agu11,$agu21);

echo json_encode($array);

   


?>