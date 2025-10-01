

<?php 

/* <!-- CONSULTA QUE SELECCIONA LA CONFIGURACION DE CADA UNA DE LAS LINEAS DE GRAFICAS --> */

session_start(); 

$conexion=mysqli_connect("localhost","root","","simulador");

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }

$Varconf=$_POST['dato40'];

$query_valor_grafica = "SELECT varname,color,ancho,Max,Min FROM setup_graf WHERE nombreconf = '$Varconf' and num_data = 1;";
$result_valor_grafica=mysqli_query($conexion,$query_valor_grafica); 
while($rows = mysqli_fetch_array($result_valor_grafica)) {
     $varname1[]= $rows['varname'];
     $color1[]= $rows['color'];
     $ancho1[]= $rows['ancho'];
     $Min1[]= $rows['Min'];
     $Max1[]= $rows['Max'];
     }    

$query_valor_grafica2 = "SELECT varname,color,ancho,Max,Min FROM setup_graf WHERE nombreconf = '$Varconf' and num_data = 2;";
$result_valor_grafica2 =mysqli_query($conexion,$query_valor_grafica2); 
while($rows = mysqli_fetch_array($result_valor_grafica2)) {
          $varname2[]= $rows['varname'];
          $color2[]= $rows['color'];
          $ancho2[]= $rows['ancho'];
          $Min2[]= $rows['Min'];
          $Max2[]= $rows['Max'];
          }   

$query_valor_grafica3 = "SELECT varname,color,ancho,Max,Min FROM setup_graf WHERE nombreconf = '$Varconf' and num_data = 3;";
$result_valor_grafica3 =mysqli_query($conexion,$query_valor_grafica3); 
while($rows = mysqli_fetch_array($result_valor_grafica3)) {
            $varname3[]= $rows['varname'];
            $color3[]= $rows['color'];
            $ancho3[]= $rows['ancho'];
            $Min3[]= $rows['Min'];
            $Max3[]= $rows['Max'];
                    }   

$query_valor_grafica4 = "SELECT varname,color,ancho,Max,Min FROM setup_graf WHERE nombreconf = '$Varconf' and num_data = 4;";
$result_valor_grafica4 =mysqli_query($conexion,$query_valor_grafica4); 
while($rows = mysqli_fetch_array($result_valor_grafica4)) {
            $varname4[]= $rows['varname'];
            $color4[]= $rows['color'];
            $ancho4[]= $rows['ancho'];
            $Min4[]= $rows['Min'];
            $Max4[]= $rows['Max'];
                    }   

$query_valor_grafica5 = "SELECT varname,color,ancho,Max,Min FROM setup_graf WHERE nombreconf = '$Varconf' and num_data = 5;";
$result_valor_grafica5 =mysqli_query($conexion,$query_valor_grafica5); 
while($rows = mysqli_fetch_array($result_valor_grafica5)) {
            $varname5[]= $rows['varname'];
            $color5[]= $rows['color'];
            $ancho5[]= $rows['ancho'];
            $Min5[]= $rows['Min'];
            $Max5[]= $rows['Max'];
                    }   
                                        

$query_valor_grafica6 = "SELECT varname,color,ancho,Max,Min FROM setup_graf WHERE nombreconf = '$Varconf' and num_data = 6;";
$result_valor_grafica6 =mysqli_query($conexion,$query_valor_grafica6); 
while($rows = mysqli_fetch_array($result_valor_grafica6)) {
            $varname6[]= $rows['varname'];
            $color6[]= $rows['color'];
            $ancho6[]= $rows['ancho'];
            $Min6[]= $rows['Min'];
            $Max6[]= $rows['Max'];
                    }  
                    
$query_valor_grafica7 = "SELECT varname,color,ancho,Max,Min FROM setup_graf WHERE nombreconf = '$Varconf' and num_data = 7;";
$result_valor_grafica7 =mysqli_query($conexion,$query_valor_grafica7); 
while($rows = mysqli_fetch_array($result_valor_grafica7)) {
            $varname7[]= $rows['varname'];
            $color7[]= $rows['color'];
            $ancho7[]= $rows['ancho'];
            $Min7[]= $rows['Min'];
            $Max7[]= $rows['Max'];
                    }  

$query_valor_grafica8 = "SELECT varname,color,ancho,Max,Min FROM setup_graf WHERE nombreconf = '$Varconf' and num_data = 8;";
$result_valor_grafica8 =mysqli_query($conexion,$query_valor_grafica8); 
while($rows = mysqli_fetch_array($result_valor_grafica8)) {
            $varname8[]= $rows['varname'];
            $color8[]= $rows['color'];
            $ancho8[]= $rows['ancho'];
            $Min8[]= $rows['Min'];
            $Max8[]= $rows['Max'];
                    }   
 
$query_variable_grafica = "SELECT `item`,`Namevar`FROM `setupvar_rt` WHERE `Lista` = 'StrucParamDrill' GROUP BY Namevar";
$result_variable_grafica=mysqli_query($conexion,$query_variable_grafica); 
while($rows = mysqli_fetch_array($result_variable_grafica)) {
$DatosVar[]= $rows['Namevar'];
                }      


$arraydib=array($varname1,$color1,$ancho1,$Min1,$Max1,$varname2,$color2,$ancho2,$Min2,$Max2,$varname3,$color3,$ancho3,$Min3,$Max3,$varname4,$color4,$ancho4,$Min4,$Max4,$varname5,$color5,$ancho5,$Min5,$Max5,$varname6,$color6,$ancho6,$Min6,$Max6,$varname7,$color7,$ancho7,$Min7,$Max7,$varname8,$color8,$ancho8,$Min8,$Max8,$DatosVar);

echo json_encode($arraydib);



?>