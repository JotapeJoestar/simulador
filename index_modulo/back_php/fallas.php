


<?php 
session_start();

/* <!-- EJECUCION DE ACTUALIZACIONES Y PROCEDIMIENTOS DE ACUERDO AL ESTADO DE LAS FALLAS  --> */

include('../conexion.php');
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }

$nztapada=$_POST['nztapada'];
$nzlavada=$_POST['nzlavada'];
$ins=$_POST['ins'];
$temp=$_POST['temp'];
$timemin=$_POST['timemin'];
$fa=$_POST['fa'];
$canti=$_POST['canti_dad'];

 
if ($_POST['nztapada']==1) {
$query1=mysqli_query($conexion,"UPDATE fallas SET val1='$nztapada'   WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query3=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='$ins' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query4=mysqli_query($conexion,"UPDATE fallas SET Temorizado='$temp' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query5=mysqli_query($conexion,"UPDATE fallas SET Tiempo='$timemin'  WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query6=mysqli_query($conexion,"UPDATE fallas SET FallaAct='$fa'     WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$queryx=mysqli_query($conexion,"UPDATE fallas SET var2='$canti'   WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");

$query7=mysqli_query($conexion,"UPDATE fallas SET val1='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query8=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query9=mysqli_query($conexion,"UPDATE fallas SET Temorizado='0'  WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query10=mysqli_query($conexion,"UPDATE fallas SET Tiempo='0'     WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query11=mysqli_query($conexion,"UPDATE fallas SET FallaAct='0'   WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$queryxx=mysqli_query($conexion,"UPDATE fallas SET var2='0'   WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");

$eliminarBitCopiadelete=mysqli_query($conexion,"CALL `ManTBit`(20, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");

$copiaBit1=mysqli_query($conexion," CALL `ManTBit`(5, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");


if ($fa==0) {
    $eliminarBitCopiadelete=mysqli_query($conexion,"CALL `ManTBit`(20, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
else {
if($canti ==1){
    $nozzle1=mysqli_query($conexion,"CALL `ManTBit`(10, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
if($canti ==2){
    $nozzle1=mysqli_query($conexion,"CALL `ManTBit`(11, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
if($canti ==3){
    $nozzle1=mysqli_query($conexion,"CALL `ManTBit`(12, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}

if($canti ==4){
    $nozzle1=mysqli_query($conexion,"CALL `ManTBit`(13, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
if($canti ==5){
    $nozzle1=mysqli_query($conexion,"CALL `ManTBit`(14, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
$copiaBit2=mysqli_query($conexion,"CALL `CalTBit`(1, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
}

if ($_POST['nzlavada']==1) {

$query7=mysqli_query($conexion,"UPDATE fallas SET val1='$nzlavada'   WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query8=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='$ins' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query9=mysqli_query($conexion,"UPDATE fallas SET Temorizado='$temp' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query10=mysqli_query($conexion,"UPDATE fallas SET Tiempo='$timemin' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query11=mysqli_query($conexion,"UPDATE fallas SET FallaAct='$fa'    WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$queryx=mysqli_query($conexion,"UPDATE fallas SET var2='$canti'   WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");


$query1=mysqli_query($conexion,"UPDATE fallas SET val1='0'        WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query3=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query4=mysqli_query($conexion,"UPDATE fallas SET Temorizado='0'  WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query5=mysqli_query($conexion,"UPDATE fallas SET Tiempo='0'      WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query6=mysqli_query($conexion,"UPDATE fallas SET FallaAct='0'    WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$queryxx=mysqli_query($conexion,"UPDATE fallas SET var2='0'        WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");

$eliminarBitCopiadelete=mysqli_query($conexion,"CALL `ManTBit`(20, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");

$copiaBit1=mysqli_query($conexion," CALL `ManTBit`(5, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");

if ($_POST['nztapada']==0 && $_POST['nzlavada'] ==0) {
    $eliminarBitCopia=mysqli_query($conexion,"CALL `ManTBit`(20, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}

else {
if($canti ==1){
    $nozzle1=mysqli_query($conexion,"CALL `ManTBit`(15, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
if($canti ==2){
    $nozzle1=mysqli_query($conexion,"CALL `ManTBit`(16, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
if($canti ==3){
    $nozzle1=mysqli_query($conexion,"CALL `ManTBit`(17, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
if($canti ==4){
    $nozzle1=mysqli_query($conexion,"CALL `ManTBit`(18, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
if($canti ==5){
    $nozzle1=mysqli_query($conexion,"CALL `ManTBit`(19, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
$copiaBit2=mysqli_query($conexion,"CALL `CalTBit`(1, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");

if ($fa==0) {
    $eliminarBitCopiadelete=mysqli_query($conexion,"CALL `ManTBit`(20, @p1, '$usuval','$pozo', @p4, 'Bit No 1', @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24);");
}
}
}




if ( $_POST['nztapada']==0 &&  $_POST['nzlavada']==0 ) {
$query1=mysqli_query($conexion,"UPDATE fallas SET val1='0'        WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query3=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='$ins' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query4=mysqli_query($conexion,"UPDATE fallas SET Temorizado='$temp' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query5=mysqli_query($conexion,"UPDATE fallas SET Tiempo='$timemin'  WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$query6=mysqli_query($conexion,"UPDATE fallas SET FallaAct='$fa'     WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$queryx=mysqli_query($conexion,"UPDATE fallas SET var2='$canti'   WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");

$query7=mysqli_query($conexion,"UPDATE fallas SET val1='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query8=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='$ins' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query9=mysqli_query($conexion,"UPDATE fallas SET Temorizado='$temp' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query10=mysqli_query($conexion,"UPDATE fallas SET Tiempo='$timemin' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$query11=mysqli_query($conexion,"UPDATE fallas SET FallaAct='$fa'    WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
$queryxd=mysqli_query($conexion,"UPDATE fallas SET var2='$canti'   WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");


}


///////////////////////////////////////////////////////fin tabla 1////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 1////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 1////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 1////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 1////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 1////////////////////////////////////////////////////////////////////////////////////////////






$Dferencial=$_POST['Dferencial'];
$empaquetamiento=$_POST['empaquetamiento'];
$Instantaneo=$_POST['Instantaneo'];
$Temporizado=$_POST['Temporizado'];
$timemin2=$_POST['timemin2'];
$fa2=$_POST['fa2'];

if ($_POST['Dferencial']==1 ) {
$query12=mysqli_query($conexion,"UPDATE fallas SET val1='$Dferencial' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query13=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='$Instantaneo' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query14=mysqli_query($conexion,"UPDATE fallas SET Temorizado='$Temporizado' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query15=mysqli_query($conexion,"UPDATE fallas SET Tiempo='$timemin2' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query16=mysqli_query($conexion,"UPDATE fallas SET FallaAct='$fa2' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");


$query17=mysqli_query($conexion,"UPDATE fallas SET val1='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query18=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query19=mysqli_query($conexion,"UPDATE fallas SET Temorizado='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query20=mysqli_query($conexion,"UPDATE fallas SET Tiempo='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query21=mysqli_query($conexion,"UPDATE fallas SET FallaAct='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");

}



if ($_POST['empaquetamiento']==1 ) {

$query12=mysqli_query($conexion,"UPDATE fallas SET val1='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query13=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query14=mysqli_query($conexion,"UPDATE fallas SET Temorizado='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query15=mysqli_query($conexion,"UPDATE fallas SET Tiempo='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query16=mysqli_query($conexion,"UPDATE fallas SET FallaAct='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");

$query17=mysqli_query($conexion,"UPDATE fallas SET val1='$empaquetamiento' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query18=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='$Instantaneo' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query19=mysqli_query($conexion,"UPDATE fallas SET Temorizado='$Temporizado' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query20=mysqli_query($conexion,"UPDATE fallas SET Tiempo='$timemin2' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query21=mysqli_query($conexion,"UPDATE fallas SET FallaAct='$fa2' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");

}


if ($_POST['Dferencial']==0 && $_POST['empaquetamiento']==0 ) {
    $query17=mysqli_query($conexion,"UPDATE fallas SET val1='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query18=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='$Instantaneo' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query19=mysqli_query($conexion,"UPDATE fallas SET Temorizado='$Temporizado' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query20=mysqli_query($conexion,"UPDATE fallas SET Tiempo='$timemin2' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
$query21=mysqli_query($conexion,"UPDATE fallas SET FallaAct='$fa2' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");



$query12=mysqli_query($conexion,"UPDATE fallas SET val1='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query13=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='$Instantaneo' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query14=mysqli_query($conexion,"UPDATE fallas SET Temorizado='$Temporizado' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query15=mysqli_query($conexion,"UPDATE fallas SET Tiempo='$timemin2' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$query16=mysqli_query($conexion,"UPDATE fallas SET FallaAct='$fa2' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");


}



///////////////////////////////////////////////////////fin tabla 2////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 2////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 2////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 2////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 2////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 2////////////////////////////////////////////////////////////////////////////////////////////




 ?>