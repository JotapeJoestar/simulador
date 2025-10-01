<?php 

// 1. Trae los datos de Inlflujos que se encuentren en la tabla burbujas 
// 2. Trae los datos de Altura- D-End D-Ini, New Mud MW
// 3. Trae para la graficacion de la curva los datos de select data


$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }

// Selecciona Nombre Circulacion, ID Cir, Valor Cir donde sean de tipo Anular

$query_valor_cir= "SELECT NOMBRE_CIR, MAX(VALOR_CIR) AS VALOR_CIR,ID_CIR FROM `burbujas` WHERE `tipo_cir` LIKE 'ANULAR';";
$result_valor_cir= mysqli_query($conexion,$query_valor_cir); 
while($row = mysqli_fetch_array($result_valor_cir)) {
     $nombre_cir= $row['NOMBRE_CIR'];
     $valor_cir= $row['VALOR_CIR'];
     $id_cir= $row['ID_CIR'];
}
      
$query_variable_grafica = "SELECT `item`,`Namevar`FROM `setupvar_rt` WHERE `Lista` = 'StrucParamDrill' GROUP BY Namevar";
$result_variable_grafica=mysqli_query($conexion,$query_variable_grafica); 
while($rows = mysqli_fetch_array($result_variable_grafica)) {
     $DatosVar[]= $rows['Namevar'];
      }      

?>