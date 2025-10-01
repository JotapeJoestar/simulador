<?php   

/* 
 1.VISTA DE ENTORNO DONDE SE SELECCIONA LA OPCION PARA CONSULTAR
 2.ICONOS Y MANEJO LOGICO PARA CREAR Y ELIMINAR POZO 
 3.CONTIENE LA OPCION DE DRILLING DONDE SE INGRESA AL ENTORNO DE PERFORACION
 4.MUESTRA Y CARGA LOS ICONOS Y MODALES DE LAS OPCIONES DE WELL GEOMETRY, PUMPS, MUD PROPERTIES,BIT,FORMATION DATA,BHA, KITS LEAKS Y RIG CONF TRAYENDO LOS DATOS DE LA BD Y MOSTRANDOSELOS AL USUARIO
*/

session_start();
error_reporting(0);
$usuval=$_SESSION['username'];
$cod_usuario=$_SESSION['codigo_rol'];
$_SESSION['pozocon']=$_POST['o_pozo'];
if ($usuval==null||$usuval='') {
  echo "Es necesario iniciar sesión/
Login required";

?>
<br>
<br>
<a href="../vista"  style="background:rgb(0,100,150);font-size:75px;">||regresar</a>
<?php  
die();
}else{


if ($_SESSION['codigo_rol']==''||$_SESSION['codigo_rol']==null) {
?>
<script>
alert('usted no selecciono un codigo');
window.location='edit_usuario.php';

</script>
<?php
}else{
include('../vista/template.php');
include('../vista/menu_in.php');
?>
 <link rel="stylesheet" type="text/css" href="../css/modal.css"> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="ini">
  <div class="limiter"></div>
</div>
<div class="ini">
  <div class="limiter">
    <form action="#" method="POST"   > 
    <table >
    <tr>
        <td>
          <a href="crear_in.php" class="actionsis" style="background-image: url('../imagenes/index/CREATE.jpg');"></a>
        </td>
        <td>
          <a href="eliminar_in.php" class="actionsis" style="background-image: url('../imagenes/index/DELETE.jpg');"></a>
        </td>
        
  </tr>
  </table>
</form>
<!-- <h3><?php /* echo $_SESSION['codigo_rol']; */  ?></h3> -->


  <form action="#" method="POST" class="elpozo">
   <select name="o_pozo" required="">
      <option value="">
choose a well</option>
    <?php 
    require_once('../model/pozo.php');
       while ($row=mysqli_fetch_array($result)) {
     ?>
      <option  value="<?php echo $row['Pozo'];?>"><?php echo $row['Pozo'];?></option>
     <?php  } ?>
     </select>
     <input type="submit"  name="selec_p"  style="background-image: url('../imagenes/index/CONSULT.jpg');height:140px;width:130px" value="" >
      
   <img  class="logsup" src="../imagenes/index/LOGO_LATERAL.png">
  </form>

</div>


  <h1>welcome | Edit </h1>
 <label>Current well
<input type="text" class="" value="<?php echo $o_pozo?> "></label>
</div>

<?php if (isset($o_pozo)) {
  # code...
 ?>


<a href="../../../simulador/indexs.php?idpozo=<?php echo $o_pozo; ?>" style="background-image: url('../imagenes/index/CONTINUE.jpg');position:absolute;top:205px;left:382px;"  class="actionsis"></a>

<a href="../../../simulador/indexs.php?idpozo=<?php echo $o_pozo; ?>" style="background-image: url('../imagenes/index/START.jpg');position:absolute;top:205px;left:515px;"  class="actionsis" onclick="reiniciar()"></a>
       
<button id='myBtn' name="primerb" class='datos myBtn'><img  class="bott" src="../imagenes/index/WEL_GEOMETRY.png"></button>
<div id='myModal' class='modal1 myModal'>
   <div class='modal-content1'>
   <span class='close1'>&times;</span>
   <p><b>Geometry</b>
<table>
<!--*************************** bloque para guardar los datos de configuracion de la geometria de pozo ********************-->
<!--*************************** ****************************************************************** ********************-->
  <form action="../model/op_pozo/o_segundo.php" method="POST"  class="inputform">  
  <input type="hidden" name="usuarioid" id="usuarioid" value="<?php echo $_SESSION['username']; ?>"> 
     <tr>
     <th>Component        |</th>
     <th>External diameter  |</th> 
     <th>Internal diameter  |</th>
     <th>Measured length|</th>
      
    <?php 
    include('../model/op_pozo/o_primero.php');
    while ($row_well=mysqli_fetch_array($result_daos_tablas)) {
        $indice           = $row_well['indice'];
        $pozo             = $row_well['pozo'];
        $componente     = $row_well['componente'];
        $tipo           = $row_well['tipo'];
        $val1           =$row_well['valor1'];
        $val2           =$row_well['valor2'];
        $val3           =$row_well['valor3'];
        $val4           =$row_well['valor4'];
  
   }   

 while ($row_well2=mysqli_fetch_array($result_daos_tablas2)) {
        $indice2           = $row_well2['indice'];
        $pozo2             = $row_well['pozo'];
        $item2             = $row_well2['item'];
        $componente2     = $row_well2['componente'];
        $tipo2           = $row_well2['tipo'];
        $val1_2           =$row_well2['valor1'];
        $val2_2           =$row_well2['valor2'];
        $val3_2           =$row_well2['valor3'];
        $val4_2           =$row_well2['valor4'];
   }   





        ?>  
        <input type="hidden" name="o_pozo" value="<?php echo $o_pozo; ?>">
       <input type="hidden" name="id_pozo" value="<?php echo $indice; ?>">
        <input type="hidden" name="id_pozo2" value="<?php echo $indice2; ?>">
       
        <tr>  
          <td>             
          <input type="text" class="inputform" name="datos_form1_2"  id="datos_form1_2" value="<?php echo $componente2 ; ?>" readonly="" >
   </td>

                     <td>

                     <input type="text" class="inputform" name="datos_form2_2" id="datos_form2_2"
                            value="<?php echo $val1_2 ; ?>">
                    </td>
                    <td>

                        <input type="text" class="inputform" name="datos_form3_2" id="datos_form3_2"
                            value=" <?php echo $val2_2 ;?>">
                    </td>
                

                    <td>

                        <input type="text" class="inputform" name="datos_form4_2" id="datos_form4_2"
                            value="<?php echo $val3_2;?>"></label>
                        <input type="hidden" class="" name="pozo_h" id="pozo_h" value="<?php echo $o_pozo; ?>">
                    </td>
                   <td>
                      <input type="submit" class="inputsubmit" name="actualizar1_2" id="actualizar1_2" value="  Update Casing" > 
                   </td>
                </tr>
                   <tr>  
          <td>                
          <input type="text" class="inputform" name="datos_form1"  id="datos_form1" value="<?php echo $componente; ?>" readonly="" >
   </td>
                     <td>
                     <input type="text" class="inputform" name="datos_form2" id="datos_form2"
                            value="<?php echo $val1 ; ?>">
                    </td>
                    <td>

                        <input type="text" class="inputform" name="datos_form3" id="datos_form3"
                            value=" <?php echo $val2 ;?>">
                    </td>
                    <td>

                        <input type="text" class="inputform" name="datos_form4" id="datos_form4"
                            value="<?php echo $val3;?>"></label>
                        <input type="hidden" class="" name="pozo_h" id="pozo_h" value="<?php echo $o_pozo; ?>">
                    </td>
                   <td>
                         <input type="submit" class="inputsubmit" name="actualizar" id="actualizar" value="Update Open Hole">
                   </td>             
                </tr>
            </form>
        </table>
    </div>
</div>

<!-- *********************************************************** -->
<!-- Bloque de codigo que crea formulario para editar las bombas -->
<!-- *********************************************************** -->
<button id='myBtn2' class='datos myBtn'><img class="bott" src="../imagenes/index/PUMS.png"></button>
<div id='myModal2' class='modal1 myModal'>
    <div class='modal-content1'>
        <span class='close1'>&times;</span>
        <p><b>
                PUMPS</b>
            <?php
            include('../model/op_pozo/mostrar_pumps.php');
            while ($row_pumps=mysqli_fetch_array($res_Pums)) {
              $indice_pumps         = $row_pumps['indice'];
              $usuario_pumps              = $row_pumps['Usuario'];
              $pozo_consul          = $row_pumps['pozo'];
              $componente_pumps     = $row_pumps['componente'];
              $tipo_pumps                 = $row_pumps['tipo'];
              $caracteristica_pumps = $row_pumps['caracteristica'];
              $valor1_pumps           = $row_pumps['valor1'];
              $valor2_pumps           = $row_pumps['valor2'];
              $valor3_pumps           = $row_pumps['valor3'];
              $valor4_pumps           = $row_pumps['valor4'];
              $valor5_pumps           = $row_pumps['valor5'];
              $valor6_pumps           = $row_pumps['valor6'];
              $valor7_pumps           = $row_pumps['valor7'];
            ?>
        <form action="../model/op_pozo/o_segundo.php" method="POST" class="inputform">
          <input type="hidden" name="usuarioid2" id="usuarioid2" value="<?php echo $_SESSION['username']; ?>">
            <table>
                <tr>
                    <th>Pump name|</th>
                    <th>Pump type|</th>
                    <th>Linner Diameter (in)|</th>
                    <th>Stroke Leng (in)|</th>
                    <th>Efficiency (%)</th>
                    <th>Diameter Piston (in) |</th>
                    <th>Manual Entry (bbls/stk)|</th>
                    <th>OutPut (bbls/Stk))|</th>
                    <th>MaxPres (psi)</th>
                    <th> </th>
                </tr>
                <tr>
                    <input type="hidden" name="o_pozo" value="<?php echo $o_pozo; ?>">
                    <td>
                        <input type="text" id="componente_pumps" name="componente_pumps" readonly=""
                            value="<?php echo $componente_pumps;?>">
                    </td>
                    <td>
                        <select name="caracteristica_pumps" id="caracteristica_pumps" onchange="enviar_valorespumps(this.value);">
                            <option value="<?php  echo $caracteristica_pumps;?>">
                                <?php  echo $caracteristica_pumps;?></option>
                            <option value="Triplex">Triplex</option>
                            <option value="Duplex">Duplex</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" id="valor1_pumps" name="valor1_pumps" value="<?php echo $valor1_pumps;?>">
                    </td>
                    <td>
                        <input type="text" id="valor2_pumps" name="valor2_pumps" value="<?php echo $valor2_pumps;?>">
                    </td>
                    <td>
                        <input type="text" id="valor3_pumps" name="valor3_pumps" value="<?php echo $valor3_pumps;?>">
                    </td>
                    <td>
                        <input type="text" id="valor4_pumps" name="valor4_pumps" value="<?php echo $valor4_pumps;?>">
                    </td>
                    <td>
                        <input type="text" id="valor5_pumps" name="valor5_pumps" value="<?php echo $valor5_pumps;?>">
                    </td>
                    <td>
                        <input type="text" id="valor6_pumps" name="valor6_pumps" value="<?php echo $valor6_pumps;?>">
                    </td>
                    <td>
                        <input type="text" id="valor7_pumps" name="valor7_pumps" value="<?php echo $valor7_pumps;?>">
                    </td>
                    <td>
                        <input type="hidden" class="" name="pozo_h" id="pozo_h" value="<?php echo $o_pozo; ?>">
                        <input type="hidden" class="" name="usuario_pumps" id="usuario_pumps" value="<?php echo $usuario_pumps; ?>">
                        <input type="hidden" class="" name="tipo_pumps" id="tipo_pumps" value="<?php echo $tipo_pumps; ?>">
                        <input type="submit" class="inputsubmit" name="actualizar_pumps" id="actualizar_pumps"
                            value="Update">
                    </td>
                </tr>
            </table>
        </form>
        <?php }?>  
    </div>
</div>



  <button id='myBtn3' class='datos myBtn'><img  class="bott" src="../imagenes/index/MUD_PROPERTIES.png"></button>
  <div id='myModal3' class='modal1 myModal'>
    <div class='modal-content1'>
      <span class='close1'>&times;</span>
      <p><b>
MUD PROPERTIES</b><br>  
 <form action="../model/op_pozo/o_segundo.php" method="POST"  class="inputform">   
  <input type="hidden" name="usuarioid3" id="usuarioid3" value="<?php echo $_SESSION['username']; ?>">
<?php

include('../model/op_pozo/mostrar_muds.php');

while ($row_well=mysqli_fetch_array($result_muds)) {
    $id_muds           =$row_well['indice'];
    $val1muds           =$row_well['valor1'];
    $val2muds           =$row_well['valor2'];
    $val3muds           =$row_well['valor3'];
    $val4muds           =$row_well['valor4'];
  

?>


<table> 
  <input type="hidden" name="id_muds" value="<?php echo $id_muds; ?>">
<tr> 
  <th> 
<label>
Mud weight:
   </th>
   <td> 
  <input type="text" id="mud1" name="mud1" value="<?php echo $val1muds;?>"></label><br> 
 </td>
 </tr>


<tr> 
  <th> 
<label>

Funnel viscosity:</th>
<td>
  <input type="text" id="mud2" name="mud2" value="<?php echo $val2muds;?>"></label><br> 
</td>
 </tr>


<tr> 
  <th> 
<label>Plastic viscosity:
  </th>
<td>
  <input type="text" id="mud3" name="mud3" value="<?php echo $val3muds;?>"></label><br> 
</td>
 </tr>





<tr> 
  <th> 
<label>
yield point:
    </th>
<td>
  <input type="text" id="mud4" name="mud4" value="<?php echo $val4muds;?>"></label><br> 
</td>
 </tr>


<tr> 
  <td>
 <p><b></b><br> 
</td>

   <input type="hidden" class="" name="pozo_h"  id="pozo_h" value="<?php echo $o_pozo; ?>">
         
          <td> </td>
        
         <td>
        <input type="submit" class="inputsubmit" name="actualizar3"  id="actualizar3" value="Update">
</td>


</tr>




<tr> 
  <th> 
 <label>Mud weight::
  </th>
  <td>
  <input type="text" id="fname" name="firstname" value=""></label><br> 
 </td>
</tr>



<tr> 
  <th> 
<label>
Funnel viscosity:
 </th>
  <td>
  <input type="text" id="fname" name="firstname" value=""></label><br> 
 </td>
</tr>



<tr> 
  <th> 
<label>Plastic viscosity:
  </th>
  <td>
  <input type="text" id="fname" name="firstname" value=""></label><br> 
 </td>
</tr>



<tr> 
  <th>
<label>
yield point:
  </th>
  <td>
  <input type="text" id="fname" name="firstname" value=""></label><br> 
 </td>
</tr>


      </table>  
    </form>
      <?php }?>  

</div>  
</div>
<br>  
<!--formulario actualizar bit-->
<!--***********************************************************************************************-->
<!--***********************************************************************************************-->

  <button id='myBtn4' class='datos myBtn '><img  class="bott" src="../imagenes/index/BIT.png"></button>
  <div id='myModal4' class='modal1 myModal'>
    <div class='modal-content1'>
       <span class='close1'>&times;</span>
       <p><b>BIT</b>
       <form action="../model/op_pozo/o_segundo.php" method="POST"  class="inputform">   
        <input type="hidden" name="usuarioid4" id="usuarioid4" value="<?php echo $_SESSION['username']; ?>">
      <?php 
       include('../model/op_pozo/mostrar_bit.php');
       while ($row_well=mysqli_fetch_array($result_bit)) {
             $id_bit          =$row_well['item'];
             $namebit         =$row_well['name'];
             $nz1             =$row_well['nz1'];
             $nz2             =$row_well['nz2'];
             $nz3             =$row_well['nz3'];
             $nz4             =$row_well['nz4'];
             $nz5             =$row_well['nz5'];
             $nz6             =$row_well['nz6'];
             $nz7             =$row_well['nz7'];
             $nz8             =$row_well['nz8'];
             $nz9             =$row_well['nz9'];
             $nz10            =$row_well['nz10'];
             $nz11            =$row_well['nz11'];
             $nz12            =$row_well['nz12'];
             $nz13            =$row_well['nz13'];
             $nz14            =$row_well['nz14'];
             $nz15            =$row_well['nz15'];
             $TFAmanual       =$row_well['tfamanual'];
             $TFA             =$row_well['tfa'];
             
             ?>
            <table> 
               <input type="hidden" name="id_bit" value="<?php echo $id_bit;?>">
                 <tr>
                    <th>Name Bti |</th>
                    <th>Nozzle/1| </th>
                    <th>Nozzle/2| </th>
                    <th>Nozzle/3| </th>
                    <th>Nozzle/4| </th>
                    <th>Nozzle/5| </th>
                    <th>Nozzle/6| </th>
                    <th>Nozzle/7| </th>
                    <th>Nozzle/8| </th>
                    <th>Nozzle/9| </th>
                    <th>Nozzle/10| </th>
                    <th>Nozzle/11| </th>
                    <th>Nozzle/12| </th>
                    <th>Nozzle/13| </th>
                    <th>Nozzle/14| </th>
                    <th>Nozzle/15| </th>
                    <th>TFA Manual| </th>
                    <th>TFA</th>
                 </tr>
                 <tr>  
                    <td>
                       <input type="text" id="namebit" name="namebit" value="<?php echo $namebit; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle1" name="Nozzle1" value="<?php echo $nz1; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle2" name="Nozzle2" value="<?php echo $nz2; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle3" name="Nozzle3" value="<?php echo $nz3; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle4" name="Nozzle4" value="<?php echo $nz4; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle5" name="Nozzle5" value="<?php echo $nz5; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle6" name="Nozzle6" value="<?php echo $nz6; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle7" name="Nozzle7" value="<?php echo $nz7; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle8" name="Nozzle8" value="<?php echo $nz8; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle9" name="Nozzle9" value="<?php echo $nz9; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle10" name="Nozzle10" value="<?php echo $nz10; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle11" name="Nozzle11" value="<?php echo $nz11; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle12" name="Nozzle12" value="<?php echo $nz12; ?>">
                    </td>
                     <td>
                        <input type="text" id="Nozzle13" name="Nozzle13" value="<?php echo $nz13; ?>">
                    </td>
                     <td>
                        <input type="text" id="Nozzle14" name="Nozzle14" value="<?php echo $nz14; ?>">
                    </td>
                    <td>
                        <input type="text" id="Nozzle15" name="Nozzle15" value="<?php echo $nz15; ?>">
                    </td>
                    <td>
                        <input type="text" id="TFAmanual" name="TFAmanual" value="<?php echo $TFAmanual; ?>">
                    </td>
                    <td>
                        <input type="text" id="TFA" name="TFA" value="<?php echo $TFA; ?>">

                    </td>
                 </tr>
                 <input type="hidden" class="" name="pozo_h"  id="pozo_h" value="<?php echo $o_pozo; ?>">
                 <tr>  
                      <td><input type="submit" class="inputsubmit" name="actualizar4"  id="actualizar4" value="Update"></td>
                </tr>
                <?php } ?>
            </form>
    </table>
   </div>
</div>

  

  

  <button id='myBtn5' class='datos myBtn '><img  class="bott" src="../imagenes/index/FORMATION_DATA.png"></button>
  <div id='myModal5' class='modal1 myModal'>
    <div class='modal-content1'>
      <span class='close1'>&times;</span>
      <p><b>
TRAINING DATA</b>
 


 <form action="../model/op_pozo/o_segundo.php" method="POST"  class="inputform"> 
  <input type="hidden" name="usuarioid5" id="usuarioid5" value="<?php echo $_SESSION['username']; ?>">
        <?php

include('../model/op_pozo/mostrar_formation.php');
         while ($row_well=mysqli_fetch_array($result_formation)) {
    $id_formation    = $row_well['indice'];
    $componentef     = $row_well['componente'];
    $val1f           =$row_well['valor1'];
    $val2f           =$row_well['valor2'];
    $val3f           =$row_well['valor3'];
    $val4f           =$row_well['valor4'];
    $val5f           =$row_well['valor5'];
  }

           while ($row_well2=mysqli_fetch_array($result_formation2)) {
    $id_formation2    = $row_well2['indice'];
    $componentef2     = $row_well2['componente'];
    $val1f2           =$row_well2['valor1'];
    $val2f2           =$row_well2['valor2'];
    $val3f2           =$row_well2['valor3'];
    $val4f2           =$row_well2['valor4'];
    $val5f2           =$row_well2['valor5'];
  }

           while ($row_well3=mysqli_fetch_array($result_formation3)) {
    $id_formation3    = $row_well3['indice'];
    $componentef3     = $row_well3['componente'];
    $val1f3           =$row_well3['valor1'];
    $val2f3           =$row_well3['valor2'];
    $val3f3           =$row_well3['valor3'];
    $val4f3           =$row_well3['valor4'];
    $val5f3           =$row_well3['valor5'];
  }

           while ($row_well4=mysqli_fetch_array($result_formation4)) {
    $id_formation4    = $row_well4['indice'];
    $componentef4     = $row_well4['componente'];
    $val1f4           =$row_well4['valor1'];
    $val2f4           =$row_well4['valor2'];
    $val3f4           =$row_well4['valor3'];
    $val4f4           =$row_well4['valor4'];
    $val5f4           =$row_well4['valor5'];
  }

           while ($row_well5=mysqli_fetch_array($result_formation5)) {
    $id_formation5    = $row_well5['indice'];
    $componentef5     = $row_well5['componente'];
    $val1f5           =$row_well5['valor1'];
    $val2f5           =$row_well5['valor2'];
    $val3f5           =$row_well5['valor3'];
    $val4f5           =$row_well5['valor4'];
    $val5f5           =$row_well5['valor5'];
  }

           while ($row_well6=mysqli_fetch_array($result_formation6)) {
    $id_formation6    = $row_well6['indice'];
    $componentef6     = $row_well6['componente'];
    $val1f6           =$row_well6['valor1'];
    $val2f6           =$row_well6['valor2'];
    $val3f6           =$row_well6['valor3'];
    $val4f6           =$row_well6['valor4'];
    $val5f6           =$row_well6['valor5'];
  }
  ?>
 
<table>

  <form>
  <input type="hidden" name="id_formation" value="<?php echo $id_formation; ?>">  
 
   




<tr>
  <th>Training          |</th>
  <th>Zone               |</th>
  <th>start depth          |</th>
  <th>Final depth           |</th>
  <th>Formation pressure|</th>
  <th>Rock composition
|</th>
  <th></th>
</tr>

<tr>
  <td>  
<input type="text" id="componentef" name="componentef" value="<?php echo $componentef; ?>">
</td>
<td>  
<input type="text" id="dataf2" name="dataf2" value="<?php echo  $val1f; ?>">

</td>
<td>  
<input type="text" id="dataf3" name="dataf3" value="<?php echo  $val2f; ?>">

</td>
<td>  
<input type="text" id="dataf4" name="dataf4" value="<?php echo  $val3f; ?>">

</td>
<td>  
<input type="text" id="dataf5" name="dataf5" value="<?php echo  $val4f; ?>">

</td>
<td>  
<input type="text" id="dataf6" name="dataf6" value="<?php echo  $val5f; ?>">

</td>
<td>
 <input type="hidden" class="" name="pozo_h"  id="pozo_h" value="<?php echo $o_pozo; ?>">
  <input type="submit" class="inputsubmit" name="actualizar5"  id="actualizar5" value="Update"></td></td>
</tr>
<!--222222222222222222222222222222222-->
<!--222222222222222222222222222222222-->
<!--222222222222222222222222222222222-->
<!--222222222222222222222222222222222-->

<tr>
  <td>  
     <input type="hidden" name="id_formation2" value="<?php echo $id_formation2; ?>">  
<input type="text" id="componentef2" name="componentef2" value="<?php echo $componentef2; ?>">
</td>
<td>  
<input type="text" id="dataf2_2" name="dataf2_2" value="<?php echo  $val1f2; ?>">

</td>
<td>  
<input type="text" id="dataf3_2" name="dataf3_2" value="<?php echo  $val2f2; ?>">

</td>
<td>  
<input type="text" id="dataf4_2" name="dataf4_2" value="<?php echo  $val3f2; ?>">

</td>
<td>  
<input type="text" id="dataf5_2" name="dataf5_2" value="<?php echo  $val4f2; ?>">

</td>
<td>  
<input type="text" id="dataf6_2" name="dataf6_2" value="<?php echo  $val5f2; ?>">

</td>
<td>
 <input type="hidden" class="" name="pozo_h"  id="pozo_h" value="<?php echo $o_pozo; ?>">
  <input type="submit" class="inputsubmit" name="actualizar5_2"  id="actualizar5_2" value="Update"></td></td>
</tr>

<!--333333333333333333333333333333333333333-->
<!--333333333333333333333333333333333333333-->
<!--333333333333333333333333333333333333333-->
<!--333333333333333333333333333333333333333-->
<!--333333333333333333333333333333333333333-->

<tr>
  <td>  
    <input type="hidden" name="id_formation3" value="<?php echo $id_formation3; ?>"> 
<input type="text" id="componentef3" name="componentef3" value="<?php echo $componentef3; ?>">
</td>
<td>  
<input type="text" id="dataf2_3" name="dataf2_3" value="<?php echo  $val1f3; ?>">

</td>
<td>  
<input type="text" id="dataf3_3" name="dataf3_3" value="<?php echo  $val2f3; ?>">

</td>
<td>  
<input type="text" id="dataf4_3" name="dataf4_3" value="<?php echo  $val3f3; ?>">

</td>
<td>  
<input type="text" id="dataf5_3" name="dataf5_3" value="<?php echo  $val4f3; ?>">

</td>
<td>  
<input type="text" id="dataf6_3" name="dataf6_3" value="<?php echo  $val5f3; ?>">

</td>
<td>
 <input type="hidden" class="" name="pozo_h"  id="pozo_h" value="<?php echo $o_pozo; ?>">
  <input type="submit" class="inputsubmit" name="actualizar5_3"  id="actualizar5_3" value="Update"></td></td>
</tr>
<!--4444444444444444444444444444444444444444444-->
<!--4444444444444444444444444444444444444444444-->
<!--4444444444444444444444444444444444444444444-->
<!--4444444444444444444444444444444444444444444-->
<!--4444444444444444444444444444444444444444444-->
<tr>
  <td>  
      <input type="hidden" name="id_formation4" value="<?php echo $id_formation4; ?>">  
<input type="text" id="componentef4" name="componentef4" value="<?php echo $componentef4; ?>">
</td>
<td>  
<input type="text" id="dataf2_4" name="dataf2_4" value="<?php echo  $val1f4; ?>">

</td>
<td>  
<input type="text" id="dataf3_4" name="dataf3_4" value="<?php echo  $val2f4; ?>">

</td>
<td>  
<input type="text" id="dataf4_4" name="dataf4_4" value="<?php echo  $val3f4; ?>">

</td>
<td>  
<input type="text" id="dataf5_4" name="dataf5_4" value="<?php echo  $val4f4; ?>">

</td>
<td>  
<input type="text" id="dataf6_4" name="dataf6_4" value="<?php echo  $val5f4; ?>">

</td>
<td>
 <input type="hidden" class="" name="pozo_h"  id="pozo_h" value="<?php echo $o_pozo; ?>">
  <input type="submit" class="inputsubmit" name="actualizar5_4"  id="actualizar5_4" value="Update"></td></td>
</tr>
<tr>
  <!--55555555555555555555555555555555555555555-->
  <!--55555555555555555555555555555555555555555-->
  <!--55555555555555555555555555555555555555555-->
  <!--55555555555555555555555555555555555555555-->
  <!--55555555555555555555555555555555555555555-->
  <!--55555555555555555555555555555555555555555-->
  <td>  
      <input type="hidden" name="id_formation5" value="<?php echo $id_formation5; ?>">  
<input type="text" id="componentef5" name="componentef5" value="<?php echo $componentef5; ?>">
</td>
<td>  
<input type="text" id="dataf2_5" name="dataf2_5" value="<?php echo  $val1f5; ?>">

</td>
<td>  
<input type="text" id="dataf3_5" name="dataf3_5" value="<?php echo  $val2f5; ?>">

</td>
<td>  
<input type="text" id="dataf4_5" name="dataf4_5" value="<?php echo  $val3f5; ?>">

</td>
<td>  
<input type="text" id="dataf5_5" name="dataf5_5" value="<?php echo  $val4f5; ?>">

</td>
<td>  
<input type="text" id="dataf6_5" name="dataf6_5" value="<?php echo  $val5f5; ?>">

</td>
<td>
 <input type="hidden" class="" name="pozo_h"  id="pozo_h" value="<?php echo $o_pozo; ?>">
  <input type="submit" class="inputsubmit" name="actualizar5_5"  id="actualizar5_5" value="Update"></td></td>
</tr>
<!--66666666666666666666666666666666666-->
<!--66666666666666666666666666666666666-->
<!--66666666666666666666666666666666666-->
<!--66666666666666666666666666666666666-->
<!--66666666666666666666666666666666666-->
<!--66666666666666666666666666666666666-->

<tr>
  <td>  
      <input type="hidden" name="id_formation6" value="<?php echo $id_formation6; ?>">  
<input type="text" id="componentef6" name="componentef6" value="<?php echo $componentef6; ?>">
</td>
<td>  
<input type="text" id="dataf2_6" name="dataf2_6" value="<?php echo  $val1f6; ?>">

</td>
<td>  
<input type="text" id="dataf3_6" name="dataf3_6" value="<?php echo  $val2f6; ?>">

</td>
<td>  
<input type="text" id="dataf4_6" name="dataf4_6" value="<?php echo  $val3f6; ?>">

</td>
<td>  
<input type="text" id="dataf5_6" name="dataf5_6" value="<?php echo  $val4f6; ?>">

</td>
<td>  
<input type="text" id="dataf6_6" name="dataf6_6" value="<?php echo  $val5f6; ?>">

</td>
<td>
 <input type="hidden" class="" name="pozo_h"  id="pozo_h" value="<?php echo $o_pozo; ?>">
  <input type="submit" class="inputsubmit" name="actualizar5_6"  id="actualizar5_6" value="Update"></td></td>
</tr>

</table>


</form>



    </div>
  </div>





            <!-- *********************************************************** -->
            <!-- Bloque de codigo que crea formulario para editar el bha -->
            <!-- *********************************************************** -->

<button id='myBtn6' class='datos myBtn '><img class="bott" src="../imagenes/index/BHA.png"></button>
<div id='myModal6' class='modal1 myModal'>
    <div class='modal-content1'>
        <span class='close1'>&times;</span>
        <p><b>BHA</b>

            <?php 

include('../model/op_pozo/mostrar_bha.php');



while ($row_bha=mysqli_fetch_array($result_bha)) {

    $indice_bha           =$row_bha['indice'];
    $item_bha             =$row_bha['item'];
    $usuario_bha          =$row_bha['Usuario'];
    $componente_bha       =$row_bha['componente'];
    $tipo_bha             =$row_bha['tipo'];
    $caracteristica_bha   =$row_bha['caracteristica'];
    $valor1_bha           =$row_bha['valor1'];
    $valor2_bha           =$row_bha['valor2'];
    $valor3_bha           =$row_bha['valor3'];
    $valor4_bha           =$row_bha['valor4'];

?>


        <form action="../model/op_pozo/o_segundo.php" method="POST" class="inputform">
          <input type="hidden" name="usuarioid6" id="usuarioid6" value="<?php echo $_SESSION['username']; ?>">
            <table>
                <input type="hidden" name="id_bha" value="<?php echo $id_bha; ?>">
                <tr>

                    <th>Component</th>
                    <th>Outer Diameter</th>
                    <th>Inner Diameter</th>
                    <th>Length</th>
                    <th>Weight</th>
                    <th></th>
                </tr>

                <tr>
                    <td>
                        <!-- <input type="text" id="componente_bha" name="componente_bha" readonly=" "
                            value="<?php echo $componente_bha  ?>"> -->
                        <select id="componente_bha" name="componente_bha" onchange="enviar_valoresbha(this.value);">
                            <option value="<?php echo $componente_bha; ?>"><?php echo $componente_bha; ?></option>
                            <option value="DrillPipe">DrillPipe</option>
                            <option value="HWDP">HWDP</option>
                            <option value="Drill Collar">Drill Collar</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" id="valor1_bha" name="valor1_bha" value="<?php echo $valor1_bha  ?>">
                    </td>
                    <td>
                        <input type="text" id="valor2_bha" name="valor2_bha" value="<?php echo $valor2_bha; ?>">
                    </td>
                    <td>
                        <input type="text" id="valor3_bha" name="valor3_bha" value="<?php echo $valor3_bha; ?>">
                    </td>
                    <td>
                        <input type="text" id="valor4_bha" name="valor4_bha" value="<?php echo $valor4_bha; ?>">
                    </td>
                    <td>
                        <input type="hidden" class="" name="indice_bha" id="indice_bha" value="<?php echo $indice_bha; ?>">
                        <input type="hidden" class="" name="usuario_bha" id="usuario_bha" value="<?php echo $usuario_bha; ?>">
                        <input type="hidden" class="" name="item_bha" id="item_bha" value="<?php echo $item_bha; ?>">
                        <input type="hidden" class="" name="tipo_bha" id="tipo_bha" value="<?php echo $tipo_bha; ?>">
                        <input type="hidden" class="" name="caracteristica_bha" id="caracteristica_bha" value="<?php echo $caracteristica_bha; ?>">
                        <input type="hidden" class="" name="pozo_h" id="pozo_h" value="<?php echo $o_pozo; ?>">
                        <input type="submit" class="inputsubmit" name="actualizar6" id="actualizar6" value="UPDATE">
                    </td>
                    </td>
                </tr>
            </table>
        </form>
        <?php  } ?>

    </div>
</div>
<br>

  <button id='myBtn7' class='datos myBtn'><img  class="bott" src="../imagenes/index/KITS_LEAKS.png">   </button>
  <div id='myModal7' class='modal1 myModal'>
    <div class='modal-content1'>
      <span class='close1'>&times;</span>
      <p><b>KIT LEAKS</b><br>

 <form action="../model/op_pozo/o_segundo.php" method="POST"  class="inputform">
 <input type="hidden" name="usuarioid7" id="usuarioid7" value="<?php echo $_SESSION['username']; ?>">   


<?php 

include('../model/op_pozo/mostrar_kits_leaks.php');

while ($row_well=mysqli_fetch_array($result_kits_leaks)) {
    
    $id_kiks         =$row_well['indice'];
   $val1fkits_leaks =$row_well['valor1'];    
?>

<table>
  <input type="hidden" name="id_kiks" value="<?php echo $id_kiks ?>">
  <tr>
       <th> <label>equivalent mud weight:</label></th>
  <td><input type="text" id="kits" name="kits" value="<?php echo $val1fkits_leaks; ?>"></td> 
 <td>
  <input type="hidden" class="" name="pozo_h"  id="pozo_h" value="<?php echo $o_pozo; ?>">
  <input type="submit" class="inputsubmit" name="actualizar7"  id="actualizar7" value="Update"></td>



</tr>
</table>
</form>
<?php } ?>
    </div>
  </div>




  <button id='myBtn8' class='datos myBtn '><img  class="bott" src="../imagenes/index/RIG_CONFIGURATION.png"></button>
  <div id='myModal8' class='modal1 myModal'>
    <div class='modal-content1'>
      <span class='close1'>&times;</span>
      <p><b>

EQUIPMENT CONFIGURATION</b><br>  
 
<?php 
include('../model/op_pozo/mostrar_rig_configuration.php');


while ($row_well=mysqli_fetch_array($consuldeep)) {
    $deep    =$row_well['valor1'];
}
while ($row_well=mysqli_fetch_array($consulbitdeep)) {
    $bitdeep    =$row_well['valor1'];
}
while ($row_well=mysqli_fetch_array($consulblockhigt)) {
    $blockh   =$row_well['valor1'];
}
while ($row_well=mysqli_fetch_array($consulav)) {
    $vav   =$row_well['valor1'];
}
while ($row_well=mysqli_fetch_array($consulsl)) {
    $vsl   =$row_well['valor1'];
}
while ($row_well=mysqli_fetch_array($consulcons)) {
  $constante   =$row_well['valor1'];
}
 ?>
  <form action="../model/op_pozo/o_segundo.php" method="POST"  class="inputform"> 
    <input type="hidden" name="usuarioid8" id="usuarioid8" value="<?php echo $_SESSION['username']; ?>">
<table>
  <input type="hidden" name="id_rig" value="<?php echo $id_rig;  ?>">
<tr>
<th>
Depth (ft):</th>
 <td> <input type="text" id="confi1" name="confi1" value="<?php echo  $deep ;  ?>"></td>
 </tr>



 <tr>
  <th>Bit 
Depth (ft):</th>
 <td> <input type="text" id="confi2" name="confi2" value="<?php echo  $bitdeep ;  ?>"></td>
</tr>
<tr>
  
  <th>Block 
Higt (ft):</th>
<td><input type="text" id="confi5" name="confi5" value="<?php echo  $blockh ;  ?>"></td>
</tr>



<tr>
  <th>Active volume (bbl):</th>
  <td><input type="text" id="confi3" name="confi3" value="<?php echo  $vav ;  ?>"></td>
</tr>



<tr>
  <th>
suffrace line volume(bbl)</th>
  <td><input type="text" id="confi4" name="confi4" value="<?php echo  $vsl ;  ?>"></td>
</tr>

<tr>
  <th>Drilling constant</th>
  <td><input type="text" id="constante" name="constante" value="<?php echo  $constante ;  ?>"></td>
</tr>
  <td>
  <input type="hidden" class="" name="pozo_h"   value="<?php echo $o_pozo; ?>">
  

</table><input type="submit" class="inputsubmit" name="actualizar8"  id="actualizar8" value="Update"></td>
</form>



</div>
</div>

<button id='myBtnGrafs' class='datos myBtn '><img  class="bott" src="../imagenes/index/GRAFSbtn.png"></button>
  <div id='myModalGrafs' class='modal1 myModal'>
    <div class='modal-content2'>
      <span class='close1'>&times;</span>
      <p><b>

      <div class="col-4" id='DivOpciones'>
          
        <button class="botonesBurbujas" id="BotonSA1" style="background-color:Blue">
                <li id="Color1G"> 
                <label id="DatoInput1T" style="color: white">Data 1</label>           
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA2"style="background-color:Blue">
                <li id="Color2G">
                <label id="DatoInput2T" style="color: white">Data 2</label>           
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA3" style="background-color:Blue">
                <li id="Color3G">
                <label id="DatoInput3T" style="color: white">Data 3</label>            
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA4" style="background-color:Blue">
                <li id="Color4G">
                <label id="DatoInput4T" style="color: white">Data 4</label>                
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA5" style="background-color:Blue">
                <li id="Color5G">
                <label id="DatoInput5T" style="color: white">Data 5</label>                
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA6" style="background-color:Blue">
                <li id="Color6G">
                <label id="DatoInput6T" style="color: white">Data 6</label>                
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA7" style="background-color:Blue">
                <li id="Color7G">
                <label id="DatoInput7T" style="color: white">Data 7</label>                
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA8" style="background-color:Blue">
                <li id="Color8G">
                <label id="DatoInput8T" style="color: white">Data 8</label>                
                </li>
        </button>
                <br>
                <br>

                <button id="save" class="savegrafb" style="background-image:url('../../img/imagenes/guardar.png');background-position: center;background-repeat: no-repeat;background-size: cover;"></button>

        </div>


        <div class="minimod" id='DivOpciones1' style="display:none">
        <p id="indata1">Data to Graph</p>
        <select id="select1" onchange="camb1()" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol1" >
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl1" onchange="color1()">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl1">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl1">
        <br>
        <br>
        </div>

        <div class="minimod" id='DivOpciones2' style="display:none">
        <p id="indata2">Data to Graph</p>
        <select id="select2" onchange="camb2()" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol2">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl2" onchange="color2()">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl2">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl2">
        <br>
        <br>
        </div>

        <div class="minimod" id='DivOpciones3'style="display:none">
        <p id="indata3">Data to Graph</p>
        <select id="select3" onchange="camb3()" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol3">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl3" onchange="color3()">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl3">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl3">
        <br>
        <br>
        </div>

        <div class="minimod" id='DivOpciones4'style="display:none">
        <p id="indata4">Data to Graph</p>
        <select id="select4" onchange="camb4()" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol4">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl4" onchange="color4()">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl4">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl4">
        <br>
        <br>
        </div>

        <div class="minimod" id='DivOpciones5'style="display:none">
        <p id="indata5">Data to Graph</p>
        <select id="select5" onchange="camb5()" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol5">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl5" onchange="color5()">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl5">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl5">
        <br>
        <br>
        </div>

        <div class="minimod" id='DivOpciones6'style="display:none">
        <p id="indata6">Data to Graph</p>
        <select id="select6" onchange="camb6()" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol6">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl6" onchange="color6()">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl6">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl6">
        <br>
        <br>
        </div>

        <div class="minimod" id='DivOpciones7'style="display:none">
        <p id="indata7">Data to Graph</p>
        <select id="select7" onchange="camb7()" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol7">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl7" onchange="color7()">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl7">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl7">
        <br>
        <br>
        </div>

        <div class="minimod" id='DivOpciones8'style="display:none">

        <p id="indata8">Data to Graph</p>
        <select id="select8" onchange="camb8()" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol8">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl8" onchange="color8()">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl8">
         <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl8">
        <br>
        <br>

        </div>
      </form>

      </div>
</div>


<button id='myBtnSetup' class='datos myBtn setup'><img  class="bott" src="../imagenes/index/setup.png"></button>
<div id='myModalSetup' class='modal1 myModal'>
    <div class='modal-content1'>
        <span class='close1'>&times;</span>
        <p><b>SETUP</b><br>
        <table>
          <tr>
              <th> <label>DiferencialKit:</label></th>
          <td><input type="number" id="dataset1" name="dataset1"></td> 
        <td>
          <input onclick="savesetup1()" class="inputsubmit" name="actusetup1"  id="actusetup1" value="Update"></td>
        </tr>
        </table>
      </div>
      </div>
      </div>

<?php
   }
  }
} 
?>




<?php include('../vista/fott.php'); ?>
<script src="../js1/modales/modal.js"></script>
</div>

 </div>
 </div>
</div>
</div>
