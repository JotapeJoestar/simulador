
<?php 

/* <!-- CONSULTA QUE ACTUALIZA LOS DATOS CUANDO HAY UN NEWMUD --> */

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
}

$MWdata=$_POST['MWdata'];
$FVdata=$_POST['FVdata'];
$PVdata=$_POST['PVdata'];
$YPdata=$_POST['YPdata'];

$result_well=mysqli_query($conexion,"UPDATE drillingrig SET valor1 = '$MWdata', valor2 = '$FVdata', valor3 = '$PVdata', valor4 = '$YPdata' WHERE Usuario='$usuval' AND Pozo='$pozo' AND tipo='FluidNewMud' AND componente='mw,fv,pv,yp'");

?>