
<!--========================================================================================================================================-->
<!--===================================================sentencia para evaluar si la session esta activa =============================================================-->
<!--========================================================================================================================================-->

<?php
session_start();
$usuval=$_SESSION['username'];
$cod_usuario=$_SESSION['codigo_rol'];
$pozo=$_SESSION['pozocon'];


if ($usuval==null||$usuval='') {
    echo "Login required";
?>
<br>
<br>
<a href="../simulador/login_29_07_20/vista" style="background:rgb(0,100,150);font-size:75px;">||regresar</a>
<?php  
    die();
}else{

?>
<!DOCTYPE>
<html>
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta name="google" value="notranslate">
<link rel="stylesheet" type="text/css" href="css/cssmod1.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php include('conexion.php'); ?>

<head>
    <title>ENTORNO DE PERFORACION</title>
</head>
<!--========================================================================================================================================-->
<!--====================================================consulta de roles y permisos========================================================-->
<!--========================================================================================================================================-->
<body>
    <style type="text/css"></style>


<!--     SE DEJA COMENTARIO, YA NO SE REINICIA LA PRACTICA DURANTE EL CARGUE DE LA PAGINA

<div id="contenedor_opc">
        <p id='texques'>Do you want to continue the practice</p>
        <button id='bot_opc'>CONTINUE</button>
        <button id='bot_ops'>NEW PRACTICE</button>
    </div> --> 


    <div id="contenedor_carga">
        <p id='texcarg'>Loading graphics</p>
        <div id="carga"></div>
    </div>

    <?php 
    $mostrar_perforador = mysqli_query($conexion,"SELECT * FROM `roles` WHERE codigo='$cod_usuario'");
    while ($data = mysqli_fetch_assoc($mostrar_perforador)) {        
            $rol_perforador = $data['rol_perforador'];
            $rol_bop_remoto = $data['rol_bop_remoto'];
            $rol_choque_remoto = $data['rol_choque_remoto'];
            $rol_instructor = $data['rol_instructor'];
            $rol_visitante = $data['rol_visitante'];
          } 
          if ($rol_visitante==1) {
        ?>
        
    <script>
    //no drilling control-no  control - no choque control 
    alert('You cannot edit any value since you do not have permissions');
    </script>
    <h1 style="position:absolute;left:250px;top:-10px;color: white;font-size: 15px;
    line-height: 20px;background-color:#198951;">
        No drilling control
    </h1> 
    <?php }?>
<!--========================================================================================================================================-->
<!--================================se llaman archivos necesarios para el funcionamiento de las valvulas ===================================-->
<!--========================================================================================================================================-->
    
    <script type="text/javascript" src="bop_modulo/valmanifold.js"></script>
    <img src="img/Fondo.png" class="imcont">
    <div class="imgmenu">
        <!--bop-->
        <li><img src="img/Boton_6.png" id="myBtn" class="myBtn del"></li>
        <li><img src="img/Boton_5.png" id="myBtn2" class="myBtn del2"></li>
        <li><img src="img/Boton_4.png" id="myBtn4" class="myBtn del4"></li>
        <li><a href="login_29_07_20/vista/inicio_in.php"><img src="img/Boton_3.png" id="myBtn3" href="paranatalia" class="myBtn del3" onclick="return confirm('Do you want to close session?')" ></a></li>
    </div>


<!--========================================================================================================================================-->
<!--================================se llaman los modulos bop choque etc que se ejecutan en un modal =======================================-->
<!--========================================================================================================================================-->
    <div class="panel">
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span id="idclose" class="close">&times;</span>
                <?php 
                  include('bop_modulo/bopmodal1.php');
                ?>
            </div>
        </div>
    </div>
    <!--fin manifold-->
    <!--fin bop -->

    <!-- Modal choke -->
    <div id="myModal1" class="modal">
        <span class="close">&times;</span>
        <input value='Change Windows' type='button' style='position:absolute;margin-left:1103px;height:35px;width:120px;' onclick='cambvent()'></input>
        <?php 
       include('choque_modulo/choquemodal.php');
    ?>
    </div>
    <!-- Fin modal Choke -->


    <!-- burbujas  modal -->
    <div id="myModal2" class="modal">
        <!-- Modal content -->

        <span class="close">&times;</span>

        <?php include('Modulo_graficas/burbu.php');?>
    </div>

    <!-- PARTES DE LA PANTALLA PRINCIPAL-->
    <style>
    .submenu {

        width: 440px;
        position: absolute;
        border: 3px solid blue;
        display: inline-block;
        top: 8%;
    }
    
    </style>
<!--========================================================================================================================================-->
<!--==============elementos (imagenes miniaturas en tiempo real) de la consola como strokes y la bop pequeña ===============================-->
<!--========================================================================================================================================-->
    
    <div class="submenu">
        <?php include("bop_modulo/bopmini/bop_mini.php"); ?>
    </div>
    <div>
        <img height="180" class="video" src="img/sinlodo.gif" alt="" id="video">
    </div>
    <header class="siteHeader">
        <img src="img/tuberia.png" id="imgmov" class="imgmov" />
    </header>
    <div class="texto">
        <a id="clear" class=" btx4 "></a>
    </div>
    <div class="group-buttons">
        <button class=" btx2" id="disminuye" href="#"></button>
        <button class=" btx3" id="incrementa" href="#"></button>

        <a class=" btx6" id="despr" onclick="setTimeout(timeoutiron,2000);"> </a>
        <input type="hidden" id="hide_bitDepth" name="hide_bitDepth" value="<?php echo $foo36;?>">
        <input type="hidden" id="continueprac" value="<?php echo $foo68;?>">
        <!-- <input id="acum_peso_stuck_pipe" type="hidden" name="acum_peso_stuck_pipe" value="<?php   echo $foo39; ?>"> -->
        <a class="btx9" id="cuna" onMousedown="cambia_imagen()"> </a>
    </div>
    <div class="irondiv">
        <img src="img/ironquieto.png" id="ironr" class="iron">
        <img src="" id="ironraux" class="iron">
        <img src="" id="stop" name="stop" class="stop">
    </div>
    <div class="module">
        <!--   <img src="img/Fondo_consola.png" class="moduloss" alt="Girl in a jacket" width="1440" height="600">
      <img src="img/Martin_decker.png" class="imrelocon">-->

<!--========================================================================================================================================-->
<!--================================================agujas de wob=================================================-->
<!--========================================================================================================================================-->

        <div id="agujauno" class="gear_panel"></div>
        <input type="hidden" id="agujaunohidden" value="<?php echo $foo69;?>">
        <div id="agujados" class="gear_panel_2"></div>
        <input type="hidden" id="agujadoshidden" value="<?php echo $foo70;?>">
        <style type="text/css">
        .mdboton {
            position: absolute;
            left: 1115px;
            top: -30px;
        }
        </style>

<!--========================================================================================================================================-->
<!--===========================Llama datos de la bd para la consola (En una primera vista) =============================================-->
<!--========================================================================================================================================-->
        <?php 
        if($pozo=="Defaull"){
            $usuval="Factory";
          }
          $deepval=mysqli_query($conexion,"SELECT valor1 FROM setupvar_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='Depth'");
          $res1=mysqli_fetch_assoc($deepval);
          $p1=$res1['valor1'];

          $BitDepthacc=mysqli_query($conexion,"SELECT valor1 FROM setupvar_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='BitDepth'");
          $res2=mysqli_fetch_assoc($BitDepthacc);
          $p2=$res2['valor1'];

          $deepval=mysqli_query($conexion,"SELECT valor1 FROM setupvar_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='AlturaBloque'");
          $res3=mysqli_fetch_assoc($deepval);
          $p3=$res3['valor1'];


         $query_pmps1=mysqli_query($conexion,"SELECT valor1 FROM `var_rt` WHERE `Usuario`='$usuval' AND `NombreDB`='$pozo' AND`Namevar`='SPMB1'");
         $query_pmps2=mysqli_query($conexion,"SELECT valor1 FROM `var_rt` WHERE `Usuario`='$usuval' AND `NombreDB`='$pozo' AND`Namevar`='SPMB2'");
         $query_pmpstotal1=mysqli_query($conexion,"SELECT valor1 FROM `var_rt` WHERE `Usuario`='$usuval' AND `NombreDB`='$pozo' AND`Namevar`='STKB1'");
         $query_pmpstotal2=mysqli_query($conexion,"SELECT valor1 FROM `var_rt` WHERE `Usuario`='$usuval' AND `NombreDB`='$pozo' AND`Namevar`='STKB2'");
         $query_total=mysqli_query($conexion,"SELECT valor1 FROM `var_rt` WHERE `Usuario`='$usuval' AND `NombreDB`='$pozo' AND`Namevar`='SPMtotal'");
         $query_totalskpm=mysqli_query($conexion,"SELECT valor1 FROM `var_rt` WHERE `Usuario`='$usuval' AND `NombreDB`='$pozo' AND`Namevar`='STKTotal'");

         while ($rowpms=mysqli_fetch_assoc($query_pmps1)) {
             $p1stkpm=$rowpms['valor1'];
        }
              while ($rows_pmps2=mysqli_fetch_assoc($query_pmps2)) {
             $p2stkpm=$rows_pmps2['valor1'];
        }
              while ($rows_pmpstotal1=mysqli_fetch_assoc($query_pmpstotal1)) {
             $p1total=$rows_pmpstotal1['valor1'];
        }
              while ($rows_pmpstotal2=mysqli_fetch_assoc($query_pmpstotal2)) {
             $p2total=$rows_pmpstotal2['valor1'];
        }
              while ($rows_total=mysqli_fetch_assoc($query_total)) {
             $totalstk=$rows_total['valor1'];
        }
              while ($rows_totalskpm=mysqli_fetch_assoc($query_totalskpm)) {
             $totalstkpm=$rows_totalskpm['valor1'];
        }

        

         ?>
<!--========================================================================================================================================-->
<!--============================================datos de los displays traidos de var_rt ====================================================-->
<!--========================================================================================================================================-->
         <img src="img/mdboton.png" id="mdboton" class="mdboton" />
        <!--  <div class="table_data">-->
        <form class="contenedor_consol">
            <label class="titlelabel td1 ">PUMP1-STK/MIN</label>
            <input id="p1_spm" class="dis d1" type="text" name="dis1" value="<?php echo $p1stkpm ?>" readonly="">
            <input id="calp1_spm" type="hidden" value = 0>
            <label class="titlelabel td2">PUMP1-TOTAL STK</label>
            <input class="dis  d2" type="text" id="p1_total_spm" name="dis2" readonly="" value="<?php echo $p1total ?>">
            <input type="hidden" id="p1_total_spm_temp" value = 0>
            <label class="titlelabel td3">PUMP2-TOTAL STK</label>
            <input class="dis d3" type="text" id="p2_total_spm" name="dis3" readonly="" value="<?php echo $p2total ?>">
            <input type="hidden" id="p2_total_spm_temp" value = 0>
            <label class="titlelabel td4">TOTAL STROKES</label>
            <input class="dis d4" type="text" id="total_strokes" name="dis4" readonly="" value="<?php echo $totalstk ?>">
            <label class="titlelabel td5">PUMP2-STK/MIN</label>
            <input id="p2_spm" class="dis d5" type="text" name="dis5" readonly="" value="<?php echo $p2stkpm ?>">
            <input id="calp2_spm" type="hidden" value = 0>
            <label class="titlelabel td6">TOTAL-STK/MIN</label>
            <input class="dis d6" type="text" name="dis6" id="total_spm" readonly="" value="<?php echo $totalstkpm ?>">
            <img class="btn11" id="resetp1" src="img/btn1.png">
            <img class="btn12" id="resetp2" src="img/btn2.png">
            <img class="btn13" id="resetp3" src="img/btn3.png">
            <input type="hidden" value="<?php echo $rol_perforador?>" id="perforador">
            <div style="position:absolute;top:1000px">
                <input type="text" name="deeph" id="deeph" value="<?php echo $p1;?>">
                <input type="text" name="bitdeeph" id="bitdeeph" value="<?php echo $p2;?>">
                <input type="text" name="altura" id="altura" value="<?php echo $p3;?>">
            </div>
<!--========================================================================================================================================-->
<!--======================================manejo de barras para los strokes.   ==============================================================--> 
<!--========================================================================================================================================-->    
    <?php 
    if ($rol_perforador==1 OR $rol_instructor==1 ) {
    ?>

    <!-- <button onclick="start()" id="start"type="button" name="button">START</button> -->

        <!-- <div class="titlep tab1 " style="margin-left: -905px;position:absolute;">P1</div>
        <input id='subirb1'style="background-position:center;background-repeat:no-repeat;background-size:cover;background-image:url('img/increbu.png');margin-left: 160px;margin-top:-8px;position:absolute;width:40px;height:40px; background-color:#808080;" type="button">
        <input id='bajarb1' style="background-position:center;background-repeat:no-repeat;background-size:cover;background-image:url('img/decrebu.png');position:absolute;margin-left:220px;margin-top:-8px;width:40px;height:40px;background-color:#808080;" type="button">

        <div class="titlep tab2 " style="margin-left: -965px;margin-top: 60px;position: absolute;">P2</div>
        <input id='subirb2'style="background-position:center;background-repeat:no-repeat;background-size:cover;background-image:url('img/increbu.png');margin-left: 160px;margin-top:52px;position:absolute;width:40px;height:40px; background-color:#808080;" type="button">
        <input id='bajarb2' style="background-position:center;background-repeat:no-repeat;background-size:cover;background-image:url('img/decrebu.png');position:absolute;margin-left:220px;margin-top:52px;width:40px;height:40px;background-color:#808080;" type="button">

        <div class="titlep tab2 " style="margin-left:-965px;margin-top:123px;position: absolute;">RPM</div>
        <input id='subirrpm'style="background-position:center;background-repeat:no-repeat;background-size:cover;background-image:url('img/increbu.png');margin-left: 160px;margin-top:115px;position:absolute;width:40px;height:40px; background-color:#808080;" type="button">
        <input id='bajarrpm' style="background-position:center;background-repeat:no-repeat;background-size:cover;background-image:url('img/decrebu.png');position:absolute;margin-left:220px;margin-top:115px;width:40px;height:40px;background-color:#808080;" type="button"> -->
        
        <p class="ff al">P1</p>
        <div id="myRange" class="myrag">
        <div id="myRangei" class="myrag"></div> 
        </div>

        <p class="ff al2">P2</p>
        <div id="myRange2">
        <div id="myRangei2" class="myrag"></div>
        </div>

        <p class="ff al3">RPM</p>
        <div id="myRange3">
        <div id="myRangei3" class="myrag"></div>
        </div>

    <?php

  }else{ 
     ?>

        <p class="ff al">P1</p>
        <div id="myRange" class="myrag">
        </div>
        <p class="ff al2">P2</p>
        <div id="myRange2"></div>
        <p class="ff al3">RPM</p>
        <div id="myRange3"></div>
        

  <?php } ?>
<!--========================================================================================================================================-->
<!--========================se llaman datos para los displays desde var_rt===========================================================-->
<!--========================================================================================================================================-->
            
            <label class="titlelabel std1 ">HOLE DEPTH</label>
            <input class="dis sd1" type="text" name="dis7" id="show_hole" readonly="" value="<?php echo $foo26; ?>">
            <input type="hidden" name="hole_depth" id="hole_depth" value="<?php echo $foo26; ?>">
            <label class="titlelabel std2">ROP</label>
            <input class="dis  sd2" type="text" name="rop" readonly="" id="rop" value="<?php echo $foo27; ?>">
            <label class="titlelabel std3">BIT DEPTH</label>
            <input class="dis sd3" type="hidden" name="bit_depth" id="bit_depth" readonly="" value="">
            <input class="dis sd3" type="text" name="show_depth" id="show_depth" readonly="" value="<?php   echo $foo36; ?>">
            <input type="hidden" name="defval" id="defval" value="<?php echo $foo28; ?>">
            <label class="titlelabel std4">CASSING PRESSURE</label>
            <input class="dis sd4" type="text" name="cassing_pressure" readonly="" id="cassing_pressure"value="<?php echo $foo29; ?>">
            <!-- <?php // if ($rol_perforador==1) {  }else{ }?> -->
            <!-- <script type="text/javascript"src="consul_tr/fluid_volume.js" ></script>-->
            <label class="titlelabel std5">FLUID VOLUME</label>
            <input class="dis sd5" type="numberf" name="fluid_volume" readonly="" id="fluid_volume"
                value="<?php  echo $foo30; ?>">
            <label class="titlelabel std6">PUMP PRESSURE</label>
            <input class="dis sd6" type="number" name="pump_pressure" readonly="" id="pump_pressure"
                value="<?php   echo $foo31; ?>">
            <label class="titlelabel std7">RPM</label>
            <input class="dis sd7" type="text" name="dis13" readonly="" id="rpm" value="<?php   echo $foo32; ?>">
            <label class="titlelabel std8">TORQUE</label>
            <input class="dis sd8" type="text" name="torque" readonly="" id="torque" value="0">
            <label class="titlelabel std9">TIME</label>
            <input class="dis sd9" type="text" name="time" readonly="" id="time" value="<?php   echo $foo34; ?>">
            <input id="hideblock_high" type="hidden" name="hideblock_high" value=" ">
            <!-- -->
            <input type="hidden" name="gainloss_tr" id="gainloss_tr" value="<?php   echo $foo47; ?>">
            <input type="hidden" name="BottomPress_tr" id="BottomPress_tr" value="<?php   echo $foo49; ?>">
            <input type="hidden" name="LeakPress_tr" id="LeakPress_tr" value="<?php   echo $foo50; ?>">
            <input type="hidden" name="ShoePress_tr" id="ShoePress_tr" value="<?php   echo $foo51; ?>">
            <input type="hidden" name="FormationPress_tr" id="FormationPress_tr" value="<?php   echo $foo52; ?>">
            <!--  -->
            <label class="titlelabel std10">BLOCK HIGH</label>
            <input class="dis sd10" id="block_high" type="text" readonly="" name="dis16"
                value="<?php   echo $foo35; ?>">
            <label class="titlelabel std11">ECD</label>
            <input class="dis sd11" id="ecd" type="text" readonly="" name="dis17" value="<?php   echo $foo45; ?>">
            <input id="Hl" type="hidden" name="Hl" value="<?php echo $foo37;?>">
            <input id="Hlaux" type="hidden" name="Hlaux" value="<?php echo $foo70;?>">
            <input id="cuñas" type="hidden" name="cuñas" value="<?php echo $foo38;?>">
            <input id="pesoBloque" type="hidden" name="pesoBloque" value="<?php  echo $foo39; ?>">
            <input id="zeroWob" type="hidden" name="zeroWob" value="<?php echo $foo73; ?>">
            <input id="durezaRoca" type="hidden" name="durezaRoca" value="<?php echo $foo40; ?>">
            <input id="ctePer" type="hidden" name="ctePer" value="<?php   echo $foo41; ?>">
            <input id="diaBit" type="hidden" name="diaBit" value="<?php   echo $foo42; ?>">
            <input id="estadoConectado" type="hidden" name="estadoConectado" value="<?php echo $foo43; ?>">
            <input id="aaa" type="hidden" name="aaa" value="">
            <input id="wobfisico" type="hidden" name="wobfisico" value="<?php echo $foo72; ?>">
            <input id="WOBteorico" type="hidden" name="WOBteorico" value="">
            <img class="btn16" id="pumpoff" src="img/pumpoff.png">
            <!-- <img class="btn17" src="img/btn3.png"> -->
            <!--
<p class="titleindi">HIGT ALARM</p>
<p class="titlelow">LOW ALARM</p>
-->
<!--========================================================================================================================================-->
<!--===========================Modulo inferior de la ganancia ==============================================================================-->
<!--========================================================================================================================================-->
            <p class="rwtitle rwpos">RETURN FLOW</p>
            <div class="ligth" id="luz1">
                <p class="marck mk1">H</p>
            </div>
            <div class="ligthon" id="luz2">
                <p class="marck mk2">L</p>
            </div>
            <div class="border">
                <input type="text" id="return_flow" class="datafg" value="<?php echo $foo46; ?>">
            </div>
            <p class="rwtitle rwpos2">GAIN</p>

            <div class="ligth2" id="luz3">
                <p class="marck mk3">H</p>
            </div>
            <div class="ligthon2" id="luz4">
                <p class="marck mk4">L</p>
            </div>
            <div class="border">
                <input type="text" id="gain" name="datafg2 border" class="datafg2" value="<?php echo $foo47; ?>">
            </div>
            <p style="position: absolute;left: 1093px;px;top:-14px; font-size:10px;text-align: center;">
                100<br>-<br>-<br>-<br>-<br>-<br>-<br>-<br>0</p>
            <div class="titlep tab1 ">FLOW</div>
            <div class="titlep tab2 ">GAIN</div>
            <p style="position: absolute;left:1155px;top:-14px; font-size:10px;text-align: center;">
                100<br>-<br>-<br>-<br>0<br>-<br>-<br>--100</p>
            <progress id="progresbar" class="progresbar" value="<?php echo $foo46; ?>" max="100"> </progress>
            <progress id="progresbar2" class="progresbar2" value="<?php echo $foo47; ?>" max="100"> </progress>
            <progress id="progresbar3" class="progresbar3" value="<?php echo $foo46; ?>" max="100"> </progress>
            <!-- <progress id="progresbar4" class="progresbar4" value="<?php echo $foo47; ?>" max="100"> </progress> -->
            <!-- The Modal -->
    </div>

         </form>
    </form>
    
<!--========================================================================================================================================-->
<!--======================================================= menu inferior ===================================================================-->
<!--========================================================================================================================================-->
    
    
<!--================================================quitar y poner sonidos ===================================================================-->
    <button id="modmute">Mute</button>
    <div id="tvesModalmute" class="modalContainer2">
        <div class="modal-content2">
            <span class="close2">×</span>
            <h2>Mute</h2>
            <button>audio on</button>
            <input type="submit" style="background-color:green;color:white;position:absolute;top:90px;" name="nomute"
                id="nomute" value="audio on">
            <input type="submit" style="background-color:red;color:white;position:absolute;top:90px;left:20px;"
                name="muteall" id="muteall" value="audio off">
        </div>
    </div>
<!--=================================================fallas superficie======================================================-->
    <button id="btnModal2">Faills Bottom</button>
    <div id="tvesModal2" class="modalContainer2" style="width:470px;height:500px;top:300px">
        <div class="modal-content2" style="width:370px;height:500px">
            <span class="close2">×</span>
            <h2>Faills Bottom </h2>

            <?php 
    if ($rol_instructor==1) {
        include('fallas/index_fallas.php');
    ?>
    <?php }else{
                ?>
            <h1>You do not have permissions</h1>
            <?php } ?>
        </div>
    </div>
    <!--========================================================================================================================================-->
    <!--============================================================fallas de la superficie ====================================================-->
    <!--========================================================================================================================================-->
    
    <!--==============================================================falla pump 1==========================================================-->
    <button id="btnModalwell">Faills Surface</button>
    <div id="tvesModalwell" class="modalContainer2" style="width:600px;height:650px;top:150px">
        <div class="modal-content2" style="width:350px;height:590px">
            <span class="close2">×</span>
            <h2>Faills Surface </h2>

            <?php 
    if ($rol_instructor==1) {
        include('fallas/fallas_surface.php');
    ?>
            <?php }else{
                ?>
                 <h1>You do not have permissions</h1>
            <?php } ?>

        </div>
    </div>

    <button id="btnModalun">NEW MUD</button>
    <div id="tvesModalun" class="modalContainer2" style="height: 450px;top: 350px;">
        <div class="modal-content2" style="padding:140px;" >
            <span class="close2" style="position: absolute;margin-top: -146px;margin-left: 416px;" >×</span>
            <table class="tabladataD" style='margin-top:-100px;'>
            <h2 style="margin-left:-135px;margin-top: -135px;position: absolute;font-size: 20px;">NEW MUD</h2>
            <tr>
            <th class="thtab">MW</th>
            <td class='tdtab' id='tdnm1'></td>
            </tr>
            <tr>
            <th class="thtab">FV</th>
            <td class='tdtab' id='tdnm2'></td>
            </tr>
            <tr>
            <th class="thtab">PV</th>
            <td class='tdtab' id='tdnm3'></td>
            </tr>
            <tr>
            <th class="thtab">YP</th>
            <td class='tdtab' id='tdnm4'></td>
            </tr>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div style='margin-left:-132px;'>
            <label>MW</label>
            <input type="number" id='DataMW'>
            <br>
            <br>
            <label>FV</label>
            <input type="number" id='DataFV'>
            <br>
            <br>
            <label>PV</label>
            <input type="number" id='DataPV'>
            <br>
            <br>
            <label>YP</label>
            <input type="number" id='DataYP'>
            <br>
            <br>
            <input style="position:absolute; width:62px;background-color:#0606EC; color:white;" type="button" id='savenewmud' value='Save' onclick="guardarnmud();">
            </div>
        </div>
    </div>

    <button id="btnModalgr">SPEED</button>
    <div id="tvesModalgr" class="modalContainer2">
        <div class="modal-content2">
            <span class="close2">×</span>
            <h2>SPEED</h2>
            <p>Select Speed</p>
            <select id="speedsel" style="width:100px;">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
            </select>
            <br>
            <br>
            <input type="button" id='dataspeed' style="position:absolute; width:62px;background-color:#0606EC; color:white;" value="Confirm" onclick="speedData()">
            </input>
        </div>
    </div>


    <button id="btnModalset">INFLUX</button>
    <div id="tvesModalset" class="modalContainer2" style="height: 450px;top: 350px;">
        <div class="modal-content2" style="padding:140px;">
            <span class="close2" style="position: absolute;margin-top: -146px;margin-left: 416px;">×</span>
            <h2 style="margin-left:-135px;margin-top: -135px;position: absolute;font-size: 20px;">INFLUX</h2>
            <br>
            <?php if ($rol_instructor==1) {?>
            <table class="tabladataD">
            <tr>
            <th class="thtab">Influx number</th>
            <td class="tdtab">1</td>
            <td class="tdtab">2</td>
            <td class="tdtab">3</td>
            </tr>
            <tr>
            <th class="thtab">DepthIni</th>
            <td class='tdtab' id='td1'></td>
            <td class='tdtab' id='td2'></td>
            <td class='tdtab' id='td3'></td>
            </tr>
            <tr>
            <th class="thtab">DepthEnd</th>
            <td class='tdtab' id='td4'></td>
            <td class='tdtab' id='td5'></td>
            <td class='tdtab' id='td6'></td>
            </tr>
            <tr>
            <th class="thtab">Height</th>
            <td class='tdtab' id='td7'></td>
            <td class='tdtab' id='td8'></td>
            <td class='tdtab' id='td9'></td>
            </tr>
            <tr>
            <th class="thtab">Volume</th>
            <td class='tdtab' id='td10'></td>
            <td class='tdtab' id='td11'></td>
            <td class='tdtab' id='td12'></td>
            </tr>
            <tr>
            <th class="thtab">Volexp</th>
            <td class='tdtab' id='td13'></td>
            <td class='tdtab' id='td14'></td>
            <td class='tdtab' id='td15'></td>
            </tr>
            <tr>
            <th class="thtab">HeightXExp</th>
            <td class='tdtab' id='td16'></td>
            <td class='tdtab' id='td17'></td>
            <td class='tdtab' id='td18'></td>
            </tr>
            </table>
            <?php } else { ?>
            <h1>You do not have permissions</h1>
            <?php } ?>
        </div>
    </div>

    <button id="btnModalalarm">ALARM</button>
    <div id="tvesModalalarm" class="modalContainer2">
        <div class="modal-content2">
            <span class="close2">×</span>
            <h2>ALARM </h2>
            <p>FlowRect</p>
            <label >High</label>
            <input id="alarmcheckbox1" type="checkbox" onclick="alertcb1()" value="<?php echo $foo59; ?>" >
            <input type="number" id='alarmnum1' style="width:60px; height:20px;" value="<?php echo $foo55; ?>">
            <br>
            <label >Low</label>
            <input id="alarmcheckbox2" type="checkbox" onclick="alertcb2()" value="<?php echo $foo60; ?>">
            <input type="number" id='alarmnum2' style="width:60px; height:20px;" value="<?php echo $foo56; ?>">
            <p style="position: absolute;margin-left:165px;margin-top:-75px;">GainLoss</p>
            <label style="position:absolute;margin-left:35px;margin-top:-26px;">High</label>
            <input id="alarmcheckbox3" type="checkbox" onclick="alertcb3()" style="position: absolute;margin-top:-22px;margin-left: 76px;" value="<?php echo $foo61; ?>" >
            <input type="number" id='alarmnum3' style="position: absolute;margin-top:-22px;margin-left: 94px; width:60px; height:20px;" value="<?php echo $foo57; ?>">
            <br>
            <label style="position: absolute;margin-left: 156px;margin-top: -23px;" >Low</label>
            <input id="alarmcheckbox4" type="checkbox" onclick="alertcb4()" style="position: absolute;margin-left: 196px;margin-top: -19px;" value="<?php echo $foo62; ?>" >
            <input type="number" id='alarmnum4' style="position: absolute;margin-left: 215px;margin-top: -19px; width:60px; height:20px;" value="<?php echo $foo58; ?>">
            <br>
            <!-- <input type="button" id='alarmdata' style="position:absolute; width:62px;background-color:#0606EC; color:white;" value="Confirm" onclick="alarmdata()"> -->
        </div>
    </div>


    <button id="btnModalhd">HIDRACULICS</button>
    <div id="tvesModalhd" class="modalContainer2">
        <div class="modal-content2">
            <span class="close2">×</span>
            <h2>HIDRACULICS </h2>
            <p>cosas de HIDRACULICS</p>
        </div>
    </div>

    <button id="btnModalcir">CIRCULATION</button>
    <div id="tvesModalcir" class="modalContainer2"  style="height:-1px;top:377px;">
        <div class="modal-content2"  style="padding:300px;" >
            <span class="close2" style='margin-top:-300px;position:absolute;margin-left:554px;color:white;z-index:1;' >×</span>
            <img src="img/Tanques_simulador_5.png" class='circulationimg'>

            <input type='number' id='cirfrtext' class='cirflowretd' readonly="" value=0></input>

            <input type='text' id='TotalPitVol' class='pitvol' readonly="" onMousedown="mossztva()"></input>
            <input type='text' id='SizeTotalPitVol' class='szpitvol' readonly=""></input>
            <progress class='protav' value=0 id='progresstva' max='100'> </progress>


            <input type='text' id='TotaltripTank' class='triptank' readonly="" onMousedown="mossztt()"></input>
            <input type='text' id='SizeTotaltripTank' class='sztriptank' readonly=""></input>
            <progress class='prott' value=0 id='progresstt' max='100'> </progress>


            <img id='circuval1Off' src="img/ValvulaH_Off.png" class='val1cirOff' onMousedown="camval1cir()">
            <img id='circuval1On' src="img/ValvulaH_On.png" class='val1cirOn' onMousedown="camval1cir()">
            <label id='circuval1text' class='valtextvalcir1'></label>

            <img id='circuval2Off' src="img/ValvulaH_Off.png" class='val2cirOff' onMousedown="camval2cir()">
            <img id='circuval2On' src="img/ValvulaH_On.png" class='val2cirOn' onMousedown="camval2cir()">
            <label id='circuval2text' class='valtextvalcir2'></label>

            <img id='circuval3Off' src="img/ValvulaV_Off.png" class='val3cirOff' onMousedown="camval3cir()">
            <img id='circuval3On' src="img/ValvulaV_On.png" class='val3cirOn' onMousedown="camval3cir()">
            <label id='circuval3text' class='valtextvalcir3'></label>

            <img id='circuval4Off' src="img/ValvulaH_Off.png" class='val4cirOff' onMousedown="camval4cir()">
            <img id='circuval4On' src="img/ValvulaH_On.png" class='val4cirOn' onMousedown="camval4cir()">
            <label id='circuval4text' class='valtextvalcir4'></label>

            <img id='circuval5Off' src="img/ValvulaH_Off.png" class='val5cirOff' onMousedown="camval5cir()">
            <img id='circuval5On' src="img/ValvulaH_On.png" class='val5cirOn' onMousedown="camval5cir()">
            <label id='circuval5text' class='valtextvalcir5'></label>

            <img id='circuval6Off' src="img/ValvulaH_Off.png" class='val6cirOff' onMousedown="camval6cir()">
            <img id='circuval6On' src="img/ValvulaH_On.png" class='val6cirOn' onMousedown="camval6cir()">
            <label id='circuval6text' class='valtextvalcir6'></label>

            <img id='circumot1Off' src="img/Mot1_Off.png" class='motorcirOff' onMousedown="cammot1cir()">
            <img id='circumot1On' src="img/Mot1_On.png" class='motorcirOn' onMousedown="cammot1cir()">
            <label id='circumot1text' class='valtextmotcir1'></label>

        </div>
    </div>

    <button id="btnModalpause">PAUSE</button>
    <div id="tvesModalpause" class="modalContainer2">
        <div class="modal-content2">
            <span class="close2">×</span>
            <h2>PAUSE</h2>
            <?php if ($rol_instructor==1) { ?>
            <label>Active Pause</label>
            <input type="checkbox" id='cbPause' value="<?php echo $foo63;?>" onclick="PauseValue();">
            <br>
            <br>
            <input type="button" id='PasueB' style="position:absolute; width:62px;background-color:#0606EC; color:white;" value="Confirm" onclick="Pausedata();">
            <?php } else { ?>
            
            <input type="checkbox" id='cbPause' value="<?php echo $foo63;?>" disabled="true" >
            
            <h1>You do not have permissions</h1>
            <?php } ?>
        </div>
    </div>


    <button id="btnModalupdate">SAVE </button>
    <div id="tvesModalupdate" class="modalContainer2">
        <div class="modal-content2">
            <span class="close2">×</span>
            <h2>CREATE COPY</h2>
            <p>Name</p>
            <input type="text" id='NamePozo' autocomplete="off">
            <br>
            <input style="position:absolute; width:62px;background-color:#0606EC; color:white;" type="button" id='savepozo' value='Save' onclick="guardarpozo();">
        </div>
    </div>

    <button id="btnModalmss">MSS</button>
    <div id="tvesModalmss" class="modalContainer2">
        <div class="modal-content2">
            <span class="close2">×</span>
            <h2>MSS </h2>
            <p>cosas de MSS</p>
        </div>
    </div>

   <script>
/*    document.getElementById('block_high').value = altura;
   document.getElementById('bit_depth').value = bitdeeph;
   document.getElementById("show_depth").value = bitdeeph;
   document.getElementById('defval').value = bitdeeph;
   document.getElementById('hole_depth').value = deep; */
   </script>

<!--==============================================================start (reseteo de datos de la consola)==========================================================-->

    <button id="btnModalstart">START</button>
    <div id="tvesModalstart" class="modalContainer2" style="width:400px;height:180px;top:620px;left:505px">
    <div class="modal-content2"  style="width:350px;height:590px">
    <span class="close2" id="close2start">×</span>
        <h2>Enter the code 1234 to reset the data</h2>
        <p></p>
    <?php if ($rol_instructor==1) { include('fallas/start.php'); ?>
    <?php } else { ?>
    <h1>You do not have permissions</h1>
    <?php } ?>
    </div>
    </div>

<!--========================================================================================================================================-->
<!--=====================================================librerias extras ========================================================================-->
<!--========================================================================================================================================-->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    </div>
    <p id="subirpor" style="position:absolute;top:1060px;left:1000px">arriba</p>
    <p id="bajarpor" style="position:absolute;top:1000px;left:1000px">bajar</p>
    <p id="stopall" style="position:absolute;top:1000px;left:100px">stop</p>
    
    <script type="text/javascript" src="index_modulo/jssimulador.js"></script> <!-- LLAMA LA RUTINA PARA CORRER EL RELOJ TIME -->
    <script type="text/javascript" src="Modulo_graficas/burbuja.js"></script> <!-- LLAMA LAS RUTINAS DEL MODULO DE GRAFICAS -->

    <?php if ($rol_bop_remoto==1 OR $rol_instructor==1) { ?>
    <script type="text/javascript" src="bop_modulo/globalVar/variables_globales.js"></script>
    <script type="text/javascript" src="bop_modulo/consola/clock.js"></script>
    <?php }else{}?>

    <?php if ($rol_choque_remoto==1 OR $rol_instructor==1) { ?>
    <script type="text/javascript"  src="choque_modulo/choque_funciones.js"></script>
    <?php }else{}?>

</html>

<?php } ?>