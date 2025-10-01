

<?php 

/* <!-- ESTE ARCHIVO CONTIENE LA ESTRUCTURA DEL MODAL DE CHOKE --> */

include('conexion.php');


$usuval=$_SESSION['username'];
 
$pozo=$_SESSION['pozocon'];

if($pozo=="Defaull"){
   $usuval="Factory";
}

  
$querychoq1=mysqli_query($conexion,"SELECT * FROM `var_rt` WHERE
     `Namevar`='SPP' AND`Usuario`='$usuval' and `NombreDB`='$pozo'");

$querychoq2=mysqli_query($conexion,"SELECT * FROM `var_rt` WHERE
 `Namevar`='CPP' AND`Usuario`='$usuval' and `NombreDB`='$pozo'");

$querychoq3=mysqli_query($conexion,"SELECT * FROM `var_rt` WHERE
 `Namevar`='killAbierto' AND`Usuario`='$usuval' and `NombreDB`='$pozo'");

$querychoq4=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE
 Namevar='Drill_pipe_open' AND Usuario='$usuval' and NombreDB='$pozo'");


$querychoq5=mysqli_query($conexion,"SELECT valor1 FROM `var_rt` WHERE
 `Namevar`='choke_state' AND`Usuario`='$usuval' and `NombreDB`='$pozo'");


$querychoq6=mysqli_query($conexion,"SELECT valor1 FROM `var_rt` WHERE
 `Namevar`='choke_control' AND`Usuario`='$usuval' and `NombreDB`='$pozo'");


$querychoq7=mysqli_query($conexion,"SELECT valor1 FROM `var_rt` WHERE
 `Namevar`='choke_speed' AND`Usuario`='$usuval' and `NombreDB`='$pozo'");

$querychoq8=mysqli_query($conexion,"SELECT valor1 FROM `var_rt` WHERE
 `Namevar`='choke_position' AND`Usuario`='$usuval' and `NombreDB`='$pozo'");



while ($rowch1=mysqli_fetch_array($querychoq1)) {
  $spp1=$rowch1['valor1'];
}
while ($rowch2=mysqli_fetch_array($querychoq2)) {
  $spp2=$rowch2['valor1'];
}
while ($rowch3=mysqli_fetch_array($querychoq3)) {
  $spp3=$rowch3['valor1'];
}

$rowch4=mysqli_fetch_array($querychoq4);
$rowch5=mysqli_fetch_array($querychoq5);
$rowch6=mysqli_fetch_array($querychoq6);
$rowch7=mysqli_fetch_array($querychoq7);



if ($rol_choque_remoto==0 OR $rol_instructor==0 ) {?>
    <h1 style="position:absolute;left:600px;top:0px;color: white;font-size: 15px;line-height: 20px;background-color: #198951;">No choque control</h1>
            <?php }?>
<img src="img/ChokeRemoto.jpg" class="modalbg">
<div id="choque1" class="choqueretmoto"></div>
  <div id="choque2" class="choqueretmoto2"></div>
    <div id="choque3" class="choqueretmoto3"></div>
      <input id="choque4" type="text" class="choqueretmotodisplay ch1" name="dispchoqueretmotodisplay1" value="0">
      <input id="choque5" type="text" class="choqueretmotodisplay ch2" name="dispchoqueretmotodisplay2" value="0">
      <input id="choque6" type="text" class="choqueretmotodisplay ch3" name="dispchoqueretmotodisplay3" value="0">
      <img id="choque7" src="img/SelectChoke1.png"  class="onoffchoque">
      <img id="choque8" src="img/AireClose.png" class="switch1choque">
      <img id="choque9" src="img/ChokeHold.png" class="choquecontrol">

      <a  style="left:510px;top:500px;position:absolute;font-size:20px;color:black" id="open" >open</a>
       <a  style="left:730px;top:500px;position:absolute;font-size:20px;color:black"  id="close">close</a>

       <a  style="left:80px;top:510px;position:absolute;font-size:25px;color:black"  >open</a>
 

       
      <input type="text" style="position:absolute;top:520px;left:1090px;height:30px;width:50px" name="choquedata" id="choquedata" value="<?php echo $foo64;?>%">


      <input type="text" name="dismini1" id="dataglob1" style="position: absolute;left:260px;top:265px;height:30px;width:50px" value="0">
      <input type="text" name="dismini2"  id="dataglob2" style="position: absolute;left:990px;top:268px;height:30px;width:50px" value="0">
  
      <img id="resetstkpm" src="img/btn3.png"   style="position: absolute;left:460px;top:420px;">

      <img id="chokepos" src="img/Perillax.png" class="chokepos" >

      <div class="titlep p1">P1</div>
          <div id="nb" onscroll="barchoke()">
             <div id=nbi>   
             </div>
          </div> 

        <!--   <input type="text" id="databar" name="databar" value="" style="position:absolute;left:900px;top:450px;whit:20px;heigth:20px;display :none "> -->
    
           <input type="text" class="inc" name="inc" id="inc" value="<?php echo $foo65;?>">




      <table style="position: absolute;background-color:rgba(0,0,300,0.5);height:100px;width:440px;top:0px">
        <tr>
          <td> 
             <input id="datashowchk" type="submit" style="width:150px;height:80px;margin-top:20px;background-color:white;" name="submit1" value="Show Pressure">
          </td>
          <td id="tabBP" style="color:white;text-align:center;vertical-align:middle;max-width: 590px;display:none;">Bottom Press: 
          <li id='ChkDtaPress1'><?php echo $foo49; ?></li>
          </td>
          <td id="tabBP2" style="color:white;text-align:center;vertical-align:middle;max-width: 590px;display:none;">Cassing Pressure Shoe: 
          <li id='ChkDtaPress2'><?php echo $foo51; ?></li>
          </td>
        </tr>
    </table>


<input type="hidden"  id="estdadoch1" value="<?php echo $rowch4; ?>">
<input type="hidden"  id="estdadoch2" value="<?php echo $rowch5; ?>">
<input type="hidden"  id="estdadoch3" value="<?php echo $rowch6; ?>">
<input type="hidden"  id="estdadoch4" value="<?php echo $rowch7; ?>">
<input type="hidden"  id="valorchoquesolo" value="<?php echo $foo64;?>">
<input type="hidden"  id="choque8data" value="<?php echo $foo66;?>">
<input type="hidden"  id="choque1o2" value="<?php echo $foo67;?>">