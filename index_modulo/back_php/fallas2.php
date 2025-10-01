
<?php 


/* <!-- EJECUCION DE ACTUALIZACIONES Y PROCEDIMIENTOS DE ACUERDO AL ESTADO DE LAS FALLAS  --> */

session_start();
if (!isset($usuval)  or $usuval==''){
    $usuval="Factory";
  }else{
    $usuval=$_SESSION['username'];
  }
$pozo=$_SESSION['pozocon'];
include('../conexion.php');


$apaga=$_POST['apaga'];
$apagatotal=$_POST['apagatotal'];
$insta=$_POST['insta'];
$temporalz=$_POST['temporalz'];
$timetre=$_POST['timetre'];
$fallatre=$_POST['fallatre'];


if ($apaga == 1) {
$query22=mysqli_query($conexion,"UPDATE fallas SET val1='$apaga',Instantaneo='$insta',Temorizado='$temporalz',Tiempo='$timetre',FallaAct='$fallatre' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='ApagadoParcial' AND componente='PUMPNo1'");

$query27=mysqli_query($conexion,"UPDATE fallas SET val1='0',Instantaneo='0',Temorizado='0',Tiempo='0',FallaAct='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Apagado Total' AND componente='PUMPNo1'");
}

if ($apagatotal == 1) {
$query33=mysqli_query($conexion,"UPDATE fallas SET val1='$apagatotal',Instantaneo='$insta',Temorizado='$temporalz',Tiempo='$timetre',FallaAct='$fallatre' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Apagado Total' AND componente='PUMPNo1'");

$query38=mysqli_query($conexion,"UPDATE fallas SET val1='0',Instantaneo='0',Temorizado='0',Tiempo='0',FallaAct='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='ApagadoParcial' AND componente='PUMPNo1'");
}

if ($apaga == 0 && $apagatotal == 0) {
$query34=mysqli_query($conexion,"UPDATE fallas SET val1='0',Instantaneo='$insta',Temorizado='$temporalz',Tiempo='$timetre',FallaAct='$fallatre' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='ApagadoParcial' AND componente='PUMPNo1'");

$query39=mysqli_query($conexion,"UPDATE fallas SET val1='0',Instantaneo='$insta',Temorizado='$temporalz',Tiempo='$timetre',FallaAct='$fallatre' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Apagado Total' AND componente='PUMPNo1'");
}

///////////////////////////////////////////////////////fin tabla 3////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 3////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 3////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 3////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 3////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 3////////////////////////////////////////////////////////////////////////////////////////////

$apagadop2=$_POST['apagadop2'];
$apagatotap2=$_POST['apagatotap2'];
$ins4=$_POST['ins4'];
$temp4=$_POST['temp4'];
$timemin3=$_POST['timemin3'];
$falla3=$_POST['falla3'];

if ($apagadop2 == 1) {
$query43=mysqli_query($conexion,"UPDATE fallas SET val1='$apagadop2',Instantaneo='$ins4',Temorizado='$temp4',Tiempo='$timemin3',FallaAct='$falla3' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='ApagadoParcial' AND componente='PUMPNo2'");

$query44=mysqli_query($conexion,"UPDATE fallas SET val1='0',Instantaneo='0',Temorizado='0',Tiempo='0',FallaAct='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Apagado Total' AND componente='PUMPNo2'");
}

if ($apagatotap2 == 1) {
$query43=mysqli_query($conexion,"UPDATE fallas SET val1='$apagatotap2',Instantaneo='$ins4',Temorizado='$temp4',Tiempo='$timemin3',FallaAct='$falla3' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Apagado Total' AND componente='PUMPNo2'");

$query44=mysqli_query($conexion,"UPDATE fallas SET val1='0',Instantaneo='0',Temorizado='0',Tiempo='0',FallaAct='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='ApagadoParcial' AND componente='PUMPNo2'");
}

if ($apagadop2 == 0 && $apagatotap2 == 0) {
$query43=mysqli_query($conexion,"UPDATE fallas SET val1='0',Instantaneo='$ins4',Temorizado='$temp4',Tiempo='$timemin3',FallaAct='$falla3' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='ApagadoParcial' AND componente='PUMPNo2'");

$query44=mysqli_query($conexion,"UPDATE fallas SET val1='0',Instantaneo='$ins4',Temorizado='$temp4',Tiempo='$timemin3',FallaAct='$falla3' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Apagado Total' AND componente='PUMPNo2'");
}

///////////////////////////////////////////////////////fin tabla 4////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 4////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 4////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 4////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla4////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 4////////////////////////////////////////////////////////////////////////////////////////////

$cht=$_POST['cht'];
$chl=$_POST['chl'];
$choqueno=$_POST['choqueno'];
$porcentge=$_POST['porcentge'];
$ins5=$_POST['ins5'];
$temp5=$_POST['temp5'];
$timemin4=$_POST['timemin4'];
$fallault=$_POST['fallault'];


if ($_POST['cht']==1  ) {
$query22=mysqli_query($conexion,"UPDATE fallas  SET val1='$cht'          WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query23=mysqli_query($conexion,"UPDATE fallas  SET Instantaneo='$ins5'  WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query231=mysqli_query($conexion,"UPDATE fallas SET var2='$choqueno'    WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query232=mysqli_query($conexion,"UPDATE fallas SET var3='$porcentge'   WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query24=mysqli_query($conexion,"UPDATE fallas  SET Temorizado='$temp5'  WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query25=mysqli_query($conexion,"UPDATE fallas  SET Tiempo='$timemin4'   WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query26=mysqli_query($conexion,"UPDATE fallas  SET FallaAct='$fallault' WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");

$query22=mysqli_query($conexion,"UPDATE fallas SET val1='0'           WHERE Usuario='$usuval' AND NombreDB='$pozo'    AND tipoFalla='Choke Lavada'");
$query23=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='0'    WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query231=mysqli_query($conexion,"UPDATE fallas SET var2='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Choke Lavada'");
$query232=mysqli_query($conexion,"UPDATE fallas SET var3='0' WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Choke Lavada'");
$query24=mysqli_query($conexion,"UPDATE fallas SET Temorizado='0' WHERE Usuario='$usuval' AND NombreDB='$pozo'      AND tipoFalla='Choke Lavada'");
$query25=mysqli_query($conexion,"UPDATE fallas SET Tiempo='0'       WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Choke Lavada'");
$query26=mysqli_query($conexion,"UPDATE fallas SET FallaAct='0'    WHERE Usuario='$usuval' AND NombreDB='$pozo'  AND tipoFalla='Choke Lavada'");


}

if ($_POST['chl']==1) {
$query22=mysqli_query($conexion,"UPDATE fallas  SET val1='$chl'          WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query23=mysqli_query($conexion,"UPDATE fallas  SET Instantaneo='$ins5'  WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query231=mysqli_query($conexion,"UPDATE fallas SET var2='$choqueno'    WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query232=mysqli_query($conexion,"UPDATE fallas SET var3='$porcentge'   WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query24=mysqli_query($conexion,"UPDATE fallas  SET Temorizado='$temp5'  WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query25=mysqli_query($conexion,"UPDATE fallas  SET Tiempo='$timemin4'   WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query26=mysqli_query($conexion,"UPDATE fallas  SET FallaAct='$fallault' WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");

$query22=mysqli_query($conexion,"UPDATE fallas SET val1='0'           WHERE Usuario='$usuval' AND NombreDB='$pozo'     AND tipoFalla='ChokeTapado'");
$query23=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='0'    WHERE Usuario='$usuval' AND NombreDB='$pozo'     AND tipoFalla='ChokeTapado'");
$query231=mysqli_query($conexion,"UPDATE fallas SET var2='0'          WHERE Usuario='$usuval' AND NombreDB='$pozo'     AND tipoFalla='ChokeTapado'");
$query232=mysqli_query($conexion,"UPDATE fallas SET var3='0'          WHERE Usuario='$usuval' AND NombreDB='$pozo'     AND tipoFalla='ChokeTapado'");
$query24=mysqli_query($conexion,"UPDATE fallas SET Temorizado='0'     WHERE Usuario='$usuval' AND NombreDB='$pozo'     AND tipoFalla='ChokeTapado'");
$query25=mysqli_query($conexion,"UPDATE fallas SET Tiempo='0'         WHERE Usuario='$usuval' AND NombreDB='$pozo'     AND tipoFalla='ChokeTapado'");
$query26=mysqli_query($conexion,"UPDATE fallas SET FallaAct='0'       WHERE Usuario='$usuval' AND NombreDB='$pozo'     AND tipoFalla='ChokeTapado'");


}


if ($cht==0 && $chl==0) {
$query1=mysqli_query($conexion,"UPDATE fallas  SET val1='0'          WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query2=mysqli_query($conexion,"UPDATE fallas  SET Instantaneo='$ins5'  WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query3=mysqli_query($conexion,"UPDATE fallas SET var2='$choqueno'    WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query4=mysqli_query($conexion,"UPDATE fallas SET var3='$porcentge'   WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query5=mysqli_query($conexion,"UPDATE fallas  SET Temorizado='$temp5'  WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query6=mysqli_query($conexion,"UPDATE fallas  SET Tiempo='$timemin4'   WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");
$query7=mysqli_query($conexion,"UPDATE fallas  SET FallaAct='$fallault' WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='ChokeTapado'");

$query8=mysqli_query($conexion,"UPDATE fallas  SET val1='0'          WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query9=mysqli_query($conexion,"UPDATE fallas  SET Instantaneo='$ins5'  WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query10=mysqli_query($conexion,"UPDATE fallas SET var2='$choqueno'    WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query11=mysqli_query($conexion,"UPDATE fallas SET var3='$porcentge'   WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query12=mysqli_query($conexion,"UPDATE fallas  SET Temorizado='$temp5'  WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query13=mysqli_query($conexion,"UPDATE fallas  SET Tiempo='$timemin4'   WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");
$query14=mysqli_query($conexion,"UPDATE fallas  SET FallaAct='$fallault' WHERE Usuario='$usuval' AND NombreDB='$pozo'   AND tipoFalla='Choke Lavada'");

}


///////////////////////////////////////////////////////fin tabla 5////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 5////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 5////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 5////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 5////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////fin tabla 5////////////////////////////////////////////////////////////////////////////////////////////5

$goteo=$_POST['goteo'];
$porcent=$_POST['porcent'];
$ins6=$_POST['ins6'];
$temp6=$_POST['temp6'];
$timemin5=$_POST['timemin5'];
$fallaultimate=$_POST['fallaultimate'];


if ($_POST['goteo']==1) {
$query22=mysqli_query($conexion,"UPDATE fallas SET val1='$goteo'           WHERE Usuario='$usuval' AND NombreDB='$pozo'      AND tipoFalla='Goteo'");
$query222=mysqli_query($conexion,"UPDATE fallas SET var3='$porcent'           WHERE Usuario='$usuval' AND NombreDB='$pozo'      AND tipoFalla='Goteo'");
$query23=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='$ins6'    WHERE Usuario='$usuval' AND NombreDB='$pozo'       AND tipoFalla='Goteo'");
$query24=mysqli_query($conexion,"UPDATE fallas SET Temorizado='$temp6' WHERE Usuario='$usuval' AND NombreDB='$pozo'          AND tipoFalla='Goteo'");
$query25=mysqli_query($conexion,"UPDATE fallas SET Tiempo='$timemin5'       WHERE Usuario='$usuval' AND NombreDB='$pozo'     AND tipoFalla='Goteo'");
$query26=mysqli_query($conexion,"UPDATE fallas SET FallaAct='$fallaultimate'    WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Goteo'");



}

if ($_POST['goteo']==0) {
    $query22=mysqli_query($conexion,"UPDATE fallas SET val1='0'           WHERE Usuario='$usuval' AND NombreDB='$pozo'      AND tipoFalla='Goteo'");
$query222=mysqli_query($conexion,"UPDATE fallas SET var3='$porcent'           WHERE Usuario='$usuval' AND NombreDB='$pozo'      AND tipoFalla='Goteo'");
$query23=mysqli_query($conexion,"UPDATE fallas SET Instantaneo='$ins6'    WHERE Usuario='$usuval' AND NombreDB='$pozo'       AND tipoFalla='Goteo'");
$query24=mysqli_query($conexion,"UPDATE fallas SET Temorizado='$temp6' WHERE Usuario='$usuval' AND NombreDB='$pozo'          AND tipoFalla='Goteo'");
$query25=mysqli_query($conexion,"UPDATE fallas SET Tiempo='$timemin5'       WHERE Usuario='$usuval' AND NombreDB='$pozo'     AND tipoFalla='Goteo'");
$query26=mysqli_query($conexion,"UPDATE fallas SET FallaAct='$fallaultimate'    WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Goteo'");
}



?>