<?php
//este item muestra los datos de geometria 
include('../conexion.php');
session_start();
$usuval=$_SESSION['username'];

//consulta mostrar datos de geometria se activa cuando se consulta un pozo en el index Open Hole 
$query_daos_tablas ="";
$query_daos_tablas2 ="";
$pozo_consul=$_POST['o_pozo'];

if($pozo_consul=="Defaull"){
    $usuval="Factory";
  }




if ( $pozo_consul) {
	$query_daos_tablas ="SELECT  * FROM  setupdrillingrig WHERE  Pozo='$pozo_consul' AND Usuario='$usuval'  AND Tipo='Geometria' AND Componente='Open Hole'";
	$result_daos_tablas=mysqli_query($conexion,$query_daos_tablas);
	$query_daos_tablas2 ="SELECT  * FROM  setupdrillingrig WHERE  Pozo='$pozo_consul' AND Usuario='$usuval'  AND Tipo='Geometria' AND Componente='Casing'";
	$result_daos_tablas2=mysqli_query($conexion,$query_daos_tablas2);
}





// consulta mostrar datos de geometria 2do campo se activa cuando se consulta un pozo en el index Casing 
//



 ?>
