<?php

//Esta pagina actualiza los datos de lso items de menu Geometria, BHA, Pumps,mud,bit,data formation,kits leaks, rig configuration
include('conexion_pozo.php');
session_start();
error_reporting(0);
$usuval=$_SESSION['username'];
$id_pozo=$_POST['id_pozo'];
$pozo_consul=$_POST['o_pozo'];
if ($pozo_consul=="Defaull") {
   echo "el poso no se puede actualizar";
   ?>
<script type="text/javascript">
    alert('default well cant be edited');window.history.go(-2);
</script>
   <?php
}else{

//actualiza el open hole de el area de geometria 
if (isset($_POST['actualizar'])) {
   $id_pozo=$_POST['id_pozo'];
   $pozo_consul=$_POST['pozo_h'];
   $datos_form1=$_POST['datos_form1'];
   $datos_form2=$_POST['datos_form2'];
   $datos_form3=$_POST['datos_form3'];
   $datos_form4=$_POST['datos_form4'];
   $result_actu=mysqli_query($conexion," CALL `dbo_drillingrig`(@p0, '$usuval', '$pozo_consul', @p3, '$datos_form1', @p5, @p6, '$datos_form2', ' $datos_form3', ' $datos_form4', @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'actu_well');");
   if ($result_actu) {
    ?>

<script type="text/javascript">
  alert('geometry data updated');window.history.go(-2);
</script>

<?php 

    }

}

//actualiza el casing de el area de geometria 
if (isset($_POST['actualizar1_2'])) {
   $id_pozo_2=$_POST['id_pozo2'];
   $pozo_consul=$_POST['pozo_h'];
   $datos_form1_2=$_POST['datos_form1_2'];
   $datos_form2_2=$_POST['datos_form2_2'];
   $datos_form3_2=$_POST['datos_form3_2'];
   $datos_form4_2=$_POST['datos_form4_2'];
   $result_actu2=mysqli_query($conexion,"CALL `dbo_drillingrig`(@p0, '$usuval', '$pozo_consul', @p3, '$datos_form1_2', @p5, @p6, '$datos_form2_2', ' $datos_form3_2', ' $datos_form4_2', @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'actu_well2')");
   if($result_actu2) {
      ?>

<script type="text/javascript">
  alert('geometry data updated ');window.history.go(-2);
</script>

<?php 

   }
}


//crea un nuevo campo en geometria 
if (isset($_POST['nuevo'])) {
  $pozo_consul=$_POST['pozo_h'];
  $qnuevo_w=mysqli_query($conexion,"CALL dbo_drillingrig(0,'','$pozo_consul','','','','','','','','','','','','','','','','','','','','','','','crear_well')");
?>
<script>
header ("Location: /login_29_07_20/vista/inicio.php#");
</script>
<?php
}


// actualiza el item de pumps
if (isset($_POST['actualizar_pumps'])) {
  $usuario              =$_POST['usuario_pumps'];
  $pozo_consul          =$_POST['pozo_h'];
  $componentepums       =$_POST['componente_pumps'];
  $tipo                 =$_POST['tipo_pumps'];
  $caracteristicapums   =$_POST['caracteristica_pumps'];
  $valor1_pumps             =$_POST['valor1_pumps'];
  $valor2_pumps             =$_POST['valor2_pumps'];
  $valor3_pumps             =$_POST['valor3_pumps'];
  $valor4_pumps             =$_POST['valor4_pumps'];
  $valor5_pumps             =$_POST['valor5_pumps'];
  $valor6_pumps             =$_POST['valor6_pumps'];
  $valor7_pumps             =$_POST['valor7_pumps'];
 
  //$result_pumps=mysqli_query($conexion,"CALL dbo_drillingrig('$indice_pumps','','','','$componentepums','','$caracteristicapums','$valor1_pumps','$valor2_pumps','$valor3_pumps','$valor4_pumps','$valor5_pumps','$valor6_pumps','$valor7_pumps','','','','','','','','','','','','actu_pums')");
  $result_pumps=mysqli_query($conexion," CALL `CalTDrillingRig`(2, @p1, '$usuario', '$pozo_consul', @p4, '$componentepums', '$tipo', '$caracteristicapums', '$valor1_pumps','$valor2_pumps','$valor3_pumps','$valor4_pumps','$valor5_pumps','$valor6_pumps','$valor7_pumps', @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26)");
 // $result_pumps=mysqli_query($conexion," CALL `CalTDrillingRig`(2, @p1, 'Factory', 'Defaull', @p4, '$componentepums', 'PUMPS', '$caracteristicapums', '$valor1_pumps','$valor2_pumps','$valor3_pumps','$valor4_pumps','$valor5_pumps','$valor6_pumps','$valor7_pumps', @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26)");

  if ($result_pumps) {
      ?>
      <script type="text/javascript">
         alert('Pumps data updated');window.history.go(-2);
      </script>

      <?php 
  }
}

//actualiza el item de muds
if (isset($_POST['actualizar3'])) {
    $id_muds            =$_POST['id_muds'];
    $pozo_consul        =$_POST['pozo_h'];
    $val1muds           =$_POST['mud1'];
    $val2muds           =$_POST['mud2'];
    $val3muds           =$_POST['mud3'];
    $val4muds           =$_POST['mud4'];
    $result_muds=mysqli_query($conexion,"CALL dbo_drillingrig(0,'$usuval','$pozo_consul','','','','','$val1muds ','$val2muds','$val3muds','$val4muds','','','','','','','','','','','','','','','actu_muds')");
    if ($result_muds) {
    ?>
     <script>
        alert('Muds data updated');window.history.go(-2);
     </script>
    <?php  
   }
}

//actualiza el item de bit
if(isset($_POST['actualizar4'])) {
    $id_bit          =$_POST['id_bit'];
    $pozo_consul     =$_POST['pozo_h'];
    $namebit         =$_POST['namebit'];
    $NZ1             =$_POST['Nozzle1'];
    $NZ2             =$_POST['Nozzle2'];
    $NZ3             =$_POST['Nozzle3'];
    $NZ4             =$_POST['Nozzle4'];
    $NZ5             =$_POST['Nozzle5'];
    $NZ6             =$_POST['Nozzle6'];
    $NZ7             =$_POST['Nozzle7'];
    $NZ8             =$_POST['Nozzle8'];
    $NZ9             =$_POST['Nozzle9'];
    $NZ10            =$_POST['Nozzle10'];
    $NZ11            =$_POST['Nozzle11'];
    $NZ12            =$_POST['Nozzle12'];
    $NZ13            =$_POST['Nozzle13'];
    $NZ14            =$_POST['Nozzle14'];
    $NZ15            =$_POST['Nozzle15'];
    $TFAmanual       =$_POST['TFAmanual'];
    $TFA             =$_POST['TFA'];

    $result_muds=mysqli_query($conexion,"CALL CalTBit (2,' 0','$usuval','$pozo_consul','0','$namebit','0', '$NZ1','$NZ2','$NZ3','$NZ4','$NZ5','$NZ6','$NZ7','$NZ8','$NZ9','$NZ10','$NZ11','$NZ12','$NZ13','$NZ14','$NZ15','0','0', @p24)");
   if ($result_muds) {
   ?>
   <script>
      alert('Bit data updated');window.history.go(-2); 
   </script>
   <?php  
  }
}

//atualiza el item de formation
if (isset($_POST['actualizar5'])) {
  $id_formation  =$_POST['id_formation'];
  $pozo_consul=$_POST['pozo_h'];
  $componentef     = $_POST['componentef'];                
  $val2f           =$_POST['dataf2'];
  $val3f           =$_POST['dataf3'];
  $val4f           =$_POST['dataf4'];
  $val5f           =$_POST['dataf5'];
  $val6f           =$_POST['dataf6'];
  $result_formation=mysqli_query($conexion,"CALL dbo_drillingrig(0,'$usuval','$pozo_consul','1','$componentef ','','','$val2f ','$val3f','$val4f','$val5f','$val6f','','','','','','','','','','','','','','actu_formation')");
  if ($result_formation) {
    ?>
    <script>
       alert('training data updated');window.history.go(-2); 
     </script>
    <?php
  }
}
if (isset($_POST['actualizar5_2'])) {
  $id_formation2  =$_POST['id_formation2'];
  $pozo_consul=$_POST['pozo_h'];
  $componentef2     = $_POST['componentef2'];                
  $val2f_2           =$_POST['dataf2_2'];
  $val3f_2           =$_POST['dataf3_2'];
  $val4f_2           =$_POST['dataf4_2'];
  $val5f_2           =$_POST['dataf5_2'];
  $val6f_2           =$_POST['dataf6_2'];
  $result_formation2=mysqli_query($conexion,"CALL dbo_drillingrig(0,'$usuval','$pozo_consul','2','$componentef2','','','$val2f_2','$val3f_2','$val4f_2','$val5f_2','$val6f_2','','','','','','','','','','','','','','actu_formation')");
  if ($result_formation2) {
    ?>
    <script>
       alert('training data updated');window.history.go(-2); 
     </script>
    <?php
  }
}
if (isset($_POST['actualizar5_3'])) {
  $id_formation3  =$_POST['id_formation3'];
  $pozo_consul=$_POST['pozo_h'];
  $componentef3     = $_POST['componentef3'];                
  $val2f_3           =$_POST['dataf2_3'];
  $val3f_3           =$_POST['dataf3_3'];
  $val4f_3           =$_POST['dataf4_3'];
  $val5f_3           =$_POST['dataf5_3'];
  $val6f_3           =$_POST['dataf6_3'];
  $result_formation3=mysqli_query($conexion,"CALL dbo_drillingrig(0,'$usuval','$pozo_consul','3','$componentef3','','','$val2f_3 ','$val3f_3','$val4f_3','$val5f_3','$val6f_3','','','','','','','','','','','','','','actu_formation')");
  if ($result_formation3) {
    ?>
    <script>
       alert('training data updated');window.history.go(-2);
     </script>
    <?php
  }
}
if (isset($_POST['actualizar5_4'])) {
  $id_formation4  =$_POST['id_formation4'];
  $pozo_consul=$_POST['pozo_h'];
  $componentef4     = $_POST['componentef4'];                
  $val2f_4           =$_POST['dataf2_4'];
  $val3f_4           =$_POST['dataf3_4'];
  $val4f_4           =$_POST['dataf4_4'];
  $val5f_4           =$_POST['dataf5_4'];
  $val6f_4           =$_POST['dataf6_4'];
  $result_formation4=mysqli_query($conexion,"CALL dbo_drillingrig(0,'$usuval','$pozo_consul','4','$componentef4 ','','','$val2f_4 ','$val3f_4','$val4f_4','$val5f_4','$val6f_4','','','','','','','','','','','','','','actu_formation')");
  if ($result_formation4) {
    ?>
    <script>
       alert('training data updated');window.history.go(-2) ;
     </script>
    <?php
  }
}
if (isset($_POST['actualizar5_5'])) {
  $id_formation5  =$_POST['id_formation5'];
  $pozo_consul=$_POST['pozo_h'];
  $componentef5     = $_POST['componentef5'];                
  $val2f_5           =$_POST['dataf2_5'];
  $val3f_5           =$_POST['dataf3_5'];
  $val4f_5           =$_POST['dataf4_5'];
  $val5f_5           =$_POST['dataf5_5'];
  $val6f_5           =$_POST['dataf6_5'];
  $result_formation5=mysqli_query($conexion,"CALL dbo_drillingrig(0,'$usuval','$pozo_consul','5','$componentef5','','','$val2f_5 ','$val3f_5','$val4f_5','$val5f_5','$val6f_5','','','','','','','','','','','','','','actu_formation')");
  if ($result_formation5) {
    ?>
    <script>
       alert('datos de formation  actualizados/updated training data');window.history.go(-2) ;
     </script>
    <?php
  }
}


if (isset($_POST['actualizar5_6'])) {
  $id_formation6  =$_POST['id_formation6'];
  $pozo_consul=$_POST['pozo_h'];
  $componentef6     = $_POST['componentef6'];                
  $val2f_6           =$_POST['dataf2_6'];
  $val3f_6           =$_POST['dataf3_6'];
  $val4f_6           =$_POST['dataf4_6'];
  $val5f_6           =$_POST['dataf5_6'];
  $val6f_6           =$_POST['dataf6_6'];
  $result_formation6=mysqli_query($conexion,"CALL dbo_drillingrig(0,'$usuval','$pozo_consul','6','$componentef6 ','','','$val2f_6 ','$val3f_6','$val4f_6','$val5f_6','$val6f_6','','','','','','','','','','','','','','actu_formation')");
  if ($result_formation6) {
    ?>
    <script>
       alert('datos de formation  actualizados/updated training data');window.history.go(-2);
     </script>
    <?php
  }
}



//actualiza el item de bha
if (isset($_POST['actualizar6'])) {
    $indice_bha            =$_POST['indice_bha'];
    $pozo_consul           =$_POST['pozo_h'];
    $usuario_bha           =$_POST['usuario_bha'];
    $item_bha              =$_POST['item_bha'];
    $tipo_bha              =$_POST['tipo_bha'];
    $caracteristica_bha    =$_POST['caracteristica_bha'];
    $componente_bha        =$_POST['componente_bha'];
    $valor1_bha            =$_POST['valor1_bha'];
    $valor2_bha            =$_POST['valor2_bha'];
    $valor3_bha            =$_POST['valor3_bha'];
    $valor4_bha            =$_POST['valor4_bha'];
if ($pozo_consul=="Defaull") {
   echo "el pozo no se puede actualizar";
   ?>
<script type="text/javascript">
    alert('el pozo default no se puede editar');window.history.go(-2);
</script>
   <?php
}else{
   
     
   //actualiza los valores ingresados en el BHA
      $conexion1=mysqli_connect("localhost","root","","simulador");
      $result_formation=mysqli_query($conexion1,"CALL `ManTDrillingRig`(2, @p1,'$usuario_bha', '$pozo_consul','$item_bha', '$componente_bha','$tipo_bha', '$caracteristica_bha', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25)");
      mysqli_close($conexion1);  
      // CALCULA LA CAPACIDAD DE BHA Y GEOMETRIA reg (Valor6)
      $conexion2=mysqli_connect("localhost","root","","simulador");
      $result_valor6=mysqli_query($conexion2," CALL `CalTDrillingRig`(10,@p1,'$usuario_bha', '$pozo_consul','$item_bha', '$componente_bha','$tipo_bha', '$caracteristica_bha', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion2);  
      //  CALCULA LA VELOCIDAD DE BHA Y GEOMETRIA  reg (Valor8)
      $conexion4=mysqli_connect("localhost","root","","simulador");
      $result_valor8=mysqli_query($conexion4," CALL `CalTDrillingRig`(12,@p1,'$usuario_bha', '$pozo_consul','$item_bha', '$componente_bha','$tipo_bha', '$caracteristica_bha', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion4);
      $conexion5=mysqli_connect("localhost","root","","simulador");
      $result_valor9=mysqli_query($conexion5," CALL `CalTDrillingRig`(13,@p1,'$usuario_bha', '$pozo_consul','$item_bha', '$componente_bha','$tipo_bha', '$caracteristica_bha', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion5);
      $conexion6=mysqli_connect("localhost","root","","simulador");
      $result_valor10=mysqli_query($conexion6," CALL `CalTDrillingRig`(14,@p1,'$usuario_bha', '$pozo_consul','$item_bha', '$componente_bha','$tipo_bha', '$caracteristica_bha', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion6);
      $conexion7=mysqli_connect("localhost","root","","simulador");
      $result_valor11=mysqli_query($conexion7," CALL `CalTDrillingRig`(15,@p1,'$usuario_bha', '$pozo_consul','$item_bha', '$componente_bha','$tipo_bha', '$caracteristica_bha', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion7);
      $conexion8=mysqli_connect("localhost","root","","simulador");
      $result_valor12=mysqli_query($conexion8," CALL `CalTDrillingRig`(21,@p1,'$usuario_bha', '$pozo_consul','$item_bha', '$componente_bha','$tipo_bha', '$caracteristica_bha', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion8);
      $conexion9=mysqli_connect("localhost","root","","simulador");
      $result_valor13=mysqli_query($conexion9," CALL `CalTDrillingRig`(5,@p1,'$usuario_bha', '$pozo_consul','$item_bha', '$componente_bha','$tipo_bha', '$caracteristica_bha', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion9);
      $conexion11=mysqli_connect("localhost","root","","simulador");
      $result_valor16=mysqli_query($conexion11," CALL `CalTDrillingRig`(17,@p1,'$usuario_bha', '$pozo_consul','$item_bha', 'DrillPipe','EM_BHA', 'Casing', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion11);
      $conexion12=mysqli_connect("localhost","root","","simulador");
      $result_valor17=mysqli_query($conexion12," CALL `CalTDrillingRig`(17,@p1,'$usuario_bha', '$pozo_consul','', 'DrillPipe','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion12);
      $conexion13=mysqli_connect("localhost","root","","simulador");
      $result_valor18=mysqli_query($conexion13," CALL `CalTDrillingRig`(17,@p1,'$usuario_bha', '$pozo_consul','', 'HWDP','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion13);
      $conexion14=mysqli_connect("localhost","root","","simulador");
      $result_valor19=mysqli_query($conexion14," CALL `CalTDrillingRig`(17,@p1,'$usuario_bha', '$pozo_consul','', 'Drill Collar','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion14);
      //  CALCULA VOLUMEN DE BHA Y GEOMETRIA  reg (Valor7)
      $conexion3=mysqli_connect("localhost","root","","simulador");
      $result_valor15=mysqli_query($conexion3," CALL `CalTDrillingRig`(11,@p1,'$usuario_bha', '$pozo_consul','$item_bha', '$componente_bha','$tipo_bha', '$caracteristica_bha', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion3);
      $conexion10=mysqli_connect("localhost","root","","simulador");
      $result_valor14=mysqli_query($conexion10," CALL `CalTDrillingRig`(18,@p1,'$usuario_bha', '$pozo_consul','$item_bha', 'DrillPipe','EM_BHA', 'Casing', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion10);
      $conexion15=mysqli_connect("localhost","root","","simulador");
      $result_valor20=mysqli_query($conexion15," CALL `CalTDrillingRig`(18,@p1,'$usuario_bha', '$pozo_consul','', 'DrillPipe','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion15);
      $conexion16=mysqli_connect("localhost","root","","simulador");
      $result_valor21=mysqli_query($conexion16," CALL `CalTDrillingRig`(18,@p1,'$usuario_bha', '$pozo_consul','', 'HWDP','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion16);
      $conexion17=mysqli_connect("localhost","root","","simulador");
      $result_valor22=mysqli_query($conexion17," CALL `CalTDrillingRig`(18,@p1,'$usuario_bha', '$pozo_consul','', 'Drill Collar','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion17);
      $conexion18=mysqli_connect("localhost","root","","simulador");
      $result_valor23=mysqli_query($conexion18," CALL `CalTDrillingRig`(19,@p1,'$usuario_bha', '$pozo_consul','$item_bha', 'DrillPipe','EM_BHA', 'Casing', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion18);
      $conexion19=mysqli_connect("localhost","root","","simulador");
      $result_valor24=mysqli_query($conexion19," CALL `CalTDrillingRig`(19,@p1,'$usuario_bha', '$pozo_consul','', 'DrillPipe','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion19);
      $conexion20=mysqli_connect("localhost","root","","simulador");
      $result_valor25=mysqli_query($conexion20," CALL `CalTDrillingRig`(19,@p1,'$usuario_bha', '$pozo_consul','', 'HWDP','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion20);
      $conexion21=mysqli_connect("localhost","root","","simulador");
      $result_valor26=mysqli_query($conexion21," CALL `CalTDrillingRig`(19,@p1,'$usuario_bha', '$pozo_consul','', 'Drill Collar','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion21);
      $conexion22=mysqli_connect("localhost","root","","simulador");
      $result_valor27=mysqli_query($conexion22," CALL `CalTDrillingRig`(23,@p1,'$usuario_bha', '$pozo_consul','', 'DrillPipe','EM_BHA', 'Casing', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion22);
      $conexion23=mysqli_connect("localhost","root","","simulador");
      $result_valor28=mysqli_query($conexion23," CALL `CalTDrillingRig`(23,@p1,'$usuario_bha', '$pozo_consul','', 'DrillPipe','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion23);
      $conexion24=mysqli_connect("localhost","root","","simulador");
      $result_valor29=mysqli_query($conexion24," CALL `CalTDrillingRig`(23,@p1,'$usuario_bha', '$pozo_consul','', 'HWDP','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion24);
      $conexion25=mysqli_connect("localhost","root","","simulador");
      $result_valor30=mysqli_query($conexion25," CALL `CalTDrillingRig`(23,@p1,'$usuario_bha', '$pozo_consul','', 'Drill Collar','EM_BHA', 'OH', '$valor1_bha', '$valor2_bha', '$valor3_bha', '$valor4_bha', 90,@p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);");
      mysqli_close($conexion25);
      // CALCULA EL PESO DE BHA EN VAR
      $conexion26=mysqli_connect("localhost","root","","simulador");
      $result_valor31=mysqli_query($conexion26," CALL `CalTDrillingRig`(20, @p1,'$usuario_bha', '$pozo_consul', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26); ");
      mysqli_close($conexion26); 
      // CALCULA EL PUMP PRESURE
      $conexion27=mysqli_connect("localhost","root","","simulador");
      $result_valor32=mysqli_query($conexion27," CALL `CalTDrillingRig`(26, @p1,'$usuario_bha', '$pozo_consul', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26); ");
      mysqli_close($conexion27); 
      // CALCULA EL ECD
      $conexion28=mysqli_connect("localhost","root","","simulador");
      $result_valor33=mysqli_query($conexion28," CALL `CalTDrillingRig`(27, @p1,'$usuario_bha', '$pozo_consul', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26); ");
      mysqli_close($conexion28); 
      if ($result_formation||$result_valor6||$result_valor7||$result_valor8||$result_valor9||$result_valor10||$result_valor11||$result_valor12) {        
            ?>
       <script>
          alert('datos de BHA  actualizados/updated BHA');window.history.go(-2); 
     </script>
       <?php
      }
    }
        
}

//actualiza el item de kiks
if (isset($_POST['actualizar7'])) {
    $id_kiks   =$_POST['id_kiks'];
    $pozo_consul=$_POST['pozo_h'];
    $val1fkits_leaks =$_POST['kits'];
    $result_formation=mysqli_query($conexion,"CALL dbo_drillingrig(0,'$usuval','$pozo_consul','',' ','','','$val1fkits_leaks ','','','','','','','','','','','','','','','','','','actu_kiks')");
    if ($result_formation) {
       ?>
       <script>
          alert('datos de kits_leaks  actualizados/updated kits_leaks data');window.history.go(-2); 
       </script>
       <?php
     }
}

//actualzia el campo de rig
if (isset($_POST['actualizar8'])) {
    $pozo_consul     =$_POST['pozo_h'];
    $val1r           =$_POST['confi1'];
    $val2r           =$_POST['confi2'];
    $val3r           =$_POST['confi3'];
    $val4r           =$_POST['confi4'];
    $val5r           =$_POST['confi5'];
    $constanteP      =$_POST['constante'];

    $result_rig_setup1=mysqli_query($conexion,"CALL `dbo_drillingrig`(@p0, '$usuval','$pozo_consul', @p3, @p4, @p5, @p6,'$val1r', @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24,'RCDepth')");
    $result_rig_setup2=mysqli_query($conexion,"CALL `dbo_drillingrig`(@p0, '$usuval','$pozo_consul', @p3, @p4, @p5, @p6,'$val2r', @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'RCbitdeep')");
    $result_rig_setup3=mysqli_query($conexion,"CALL `dbo_drillingrig`(@p0, '$usuval','$pozo_consul', @p3, @p4, @p5, @p6,'$val5r', @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'RCAltura')");
    
    $result_rig_setup4=mysqli_query($conexion,"CALL `dbo_drillingrig`(@p0, '$usuval','$pozo_consul', @p3, @p4, @p5, @p6,'$val3r', @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'RCavolume')");
    $result_rig_setup4=mysqli_query($conexion,"CALL `dbo_drillingrig`(@p0, '$usuval','$pozo_consul', @p3, @p4, @p5, @p6,'$val4r', @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, 'RCvolume')");

    $result_rig_setupvart=mysqli_query($conexion,"UPDATE `var_rt` SET `valor1`= '$val1r'  WHERE `Usuario`= '$usuval' AND `NombreDB`='$pozo_consul' AND `Namevar`='Depth'");
    $result_rig_setup2vart=mysqli_query($conexion,"UPDATE `var_rt` SET `valor1`= '$val2r'  WHERE `Usuario`= '$usuval' AND `NombreDB`='$pozo_consul'  AND `Namevar`='BitDepth'");
    $result_rig_setup3vart=mysqli_query($conexion,"UPDATE `var_rt` SET `valor1`= '$val5r'  WHERE  `Usuario`= '$usuval' AND `NombreDB`='$pozo_consul' AND `Namevar`='AlturaBloque'");


    //ACTUALIZA EL VALOR DE LA CONSTANTE DE PERFORACION
    $result_rig_setup5=mysqli_query($conexion,"UPDATE `var_constantes` SET `valor1`= '$constanteP'  WHERE `Usuario`='$usuval' and `NombreDB`='$pozo_consul' and `Namevar`='ctePer';");
    //ACTUALIZA EL VALOR DE LA DUREZA DE ROCA   
    $result_rig_setup5=mysqli_query($conexion,"CALL `CalTDrillingRig`(25, @p1,'$usuval', '$pozo_consul', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26); ");



   

    if ($result_rig_setup1 OR $result_rig_setup2 OR $result_rig_setup3 OR $result_rig_setup4 OR $result_rig_setup4) {
    ?>
    <script>
      alert('datos de rig_configuration  actualizados/updated rig_configuration data');
      window.history.go(-2);
    </script>
    <?php  
   }
}



}
?>