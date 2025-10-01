<?php 	
//este item muestra los datos de rig configuiration 
session_start();$usuval=$_SESSION['username'];
include('../conexion.php');
	
$pozo_consul=$_POST['o_pozo'];
$conexion2=$conexion;
$conexion3=$conexion;
$conexion4=$conexion;
$conexion5=$conexion;
$conexion6=$conexion;
if($pozo_consul=="Defaull"){
	$usuval="Factory";
}
if ($pozo_consul) {

$consuldeep=mysqli_query($conexion,"CALL `dbo_drillingrig`(@p0,'$usuval','$pozo_consul', @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'mostrarsetuprc')") ;

$conexion2=mysqli_connect("localhost","root","","simulador");
$consulbitdeep=mysqli_query($conexion2,"CALL `dbo_drillingrig`(@p0,'$usuval','$pozo_consul', @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'mostrarvartrc')");

$conexion3=mysqli_connect("localhost","root","","simulador");
$consulblockhigt=mysqli_query($conexion3,"CALL `dbo_drillingrig`(@p0,'$usuval','$pozo_consul', @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'mostrarsetuprc2')");

$conexion4=mysqli_connect("localhost","root","","simulador");
$consulav=mysqli_query($conexion4,"CALL `dbo_drillingrig`(@p0,'$usuval','$pozo_consul', @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'mostrarvarconrc')");

$conexion5=mysqli_connect("localhost","root","","simulador");
$consulsl=mysqli_query($conexion5,"CALL `dbo_drillingrig`(@p0,'$usuval','$pozo_consul', @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'mostrarvarconrc2')");

$conexion6=mysqli_connect("localhost","root","","simulador");
$consulcons=mysqli_query($conexion6,"SELECT valor1 FROM `var_constantes` WHERE `Usuario`='$usuval' and `NombreDB`='$pozo_consul' and `Namevar`='ctePer' ");

}

//

 ?>