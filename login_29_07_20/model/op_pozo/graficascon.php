<?php
//consulta a rt_depth
include('../conexion.php');
$query_valor_gra = /*"SELECT  valor,md FROM `rt_depth` where md < 499";*/ "SELECT valor,md FROM `rt_depth` ORDER BY md DESC LIMIT 500";
$result_valor_gra=mysqli_query($conexion,$query_valor_gra);
 ?>
 <!-- ORDER BY item DESC LIMIT 1 -->