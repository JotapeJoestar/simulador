<?php
//este item muestra muds
include('../conexion.php');
//consulta mostrar datos
session_start();
error_reporting(0);
$usuval=$_SESSION['username'];
//
$pozo_consul="";
$pozo_consul=$_POST['o_pozo'];
if($pozo_consul=="Defaull"){
	$usuval="Factory";
}
if ($pozo_consul) {

     $pums_query ="CALL `dbo_drillingrig`(@p0, '$usuval', '$pozo_consul', @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'mostrar_pums') ";
     $res_Pums=mysqli_query($conexion,$pums_query);
     
}


 ?>
