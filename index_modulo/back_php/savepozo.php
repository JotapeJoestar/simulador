
<?php 

/* <!-- CONSULTA QUE EJECUTA LOS PROCEDIMIENTOS PARA CREAR UN NUEVO POZO --> */

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
$Namepozo=$_POST['Namepozo'];

$verificarpozo=mysqli_query($conexion,"SELECT * FROM `drillingrig` WHERE `Usuario`='$usuval' AND`pozo`='$Namepozo' ");

if (mysqli_num_rows($verificarpozo)>0|| $Namepozo=="Defaull"||$Namepozo==""||$Namepozo==null)
{
}
else
{
if($pozo=="Defaull"){
    $usuvalcopia="Factory";
} 
else  
{
    $usuvalcopia=$_SESSION['username'];
}

$result_well=mysqli_query($conexion,"CALL CrearPozo(1,0,'$usuvalcopia','$pozo', '', '', '', '', '', '', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '$usuval', '$Namepozo', 0, 0)");

$result_well2=mysqli_query($conexion,"CALL CrearPozoSetup(1,0,'$usuvalcopia','$pozo', '', '', '', '', '', '', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '$usuval', '$Namepozo', 0, 0)");

$result_well3=mysqli_query($conexion,"CALL CrearSetupProcess(1,0,'$usuvalcopia','$pozo','','','','','','', '', '', '', '', '$usuval', '$Namepozo', 0, 0)");

$result_well4=mysqli_query($conexion,"CALL CrearProcess(1,0,'$usuvalcopia','$pozo','','','','','','', '', '', '', '', '$usuval', '$Namepozo', 0, 0);");

$result_bit=mysqli_query($conexion,"CALL `CrearBit`(1,0,'$usuvalcopia','$pozo','','','','','','','','','','','','','','','','','','','','', '$usuval', '$Namepozo',0)");

$result_const=mysqli_query($conexion," CALL `CrearVar_constantes`(1,'','$usuvalcopia','$pozo','','','','','','', '$usuval','$Namepozo',0)");

$result_const2=mysqli_query($conexion," CALL `CrearSetupVar_constantes`(1,'','$usuvalcopia','$pozo','','','','','','', '$usuval','$Namepozo',0)");

$result_fallas=mysqli_query($conexion,"CALL `CrearFallas`(1,'', '','$usuvalcopia','$pozo','','','','','','','','','','', '$usuval','$Namepozo',0,0)");

$result_hardware=mysqli_query($conexion," CALL `CrearhardwareTD`(1, '', '$usuvalcopia','$pozo', '', '', '', '', '', '','$usuval','$Namepozo',0,0)");

$conexion6=mysqli_connect("localhost","root","","simulador");
$result_setup=mysqli_query($conexion6,"CALL `Crearsetupvar_rt`(1,'', '$usuvalcopia','$pozo','','','','','','', '$usuval','$Namepozo',0,0)");

$conexion7=mysqli_connect("localhost","root","","simulador");
$result_var=mysqli_query($conexion7," CALL `Crearva_rt`(1,'', '$usuvalcopia','$pozo','','','','','','', '$usuval','$Namepozo',0,0)");
}

?>