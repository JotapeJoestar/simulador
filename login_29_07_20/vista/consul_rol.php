<?php 

/* <!-- CONSULTA LOS ROLES DEL USUARIO --> */

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

/* $cod_usuario=$_SESSION['codigo_rol']; */
$usuval=$_SESSION['username'];
$idusu=$_SESSION['idusuario'];

/* $pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
  $usuval="Factory";
}
 */

$query1=mysqli_query($conexion,"SELECT * FROM roles WHERE codigo='$idusu'");
while($rows = mysqli_fetch_array($query1)) 
       {
       $res1[]=$rows['rol_perforador'];
       $res2[]=$rows['rol_bop_remoto'];
       $res3[]=$rows['rol_choque_remoto'];
       $res4[]=$rows['rol_instructor'];
       $res5[]=$rows['rol_visitante'];
       }

$array = array($res1,$res2,$res3,$res4,$res5);

echo json_encode($array);

?>
