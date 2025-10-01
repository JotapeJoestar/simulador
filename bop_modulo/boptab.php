<?php

/* <!-- CONTIENE COMPLEMENTOS DE LOS RELOJES DE LA OPCION DE BOP --> */

$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
include('conexion.php');


if($pozo=="Defaull"){
     $usuval="Factory";
   }

$query_time=mysqli_query($conexion,"SELECT * FROM `hardwaretimedata` WHERE `Namevar`='TimeOpenAnnPreventor'AND Usuario='$usuval' ANd NombreDB='$pozo' ");
$timelist=mysqli_fetch_assoc($query_time);
$timerow=$timelist['valor1'];
$acumulador_time_query=mysqli_query($conexion,"SELECT * FROM `hardwaretimedata` WHERE `Namevar`='TimeOenUpperPipeRams'AND Usuario='$usuval' ANd NombreDB='$pozo' ");
$timeacumuador=mysqli_fetch_assoc($acumulador_time_query);
$acurow=$timeacumuador['valor1'];




?>


<img class="" src="img/BOP1.png" >
     <!-- agujas  -->
     <div id="agu1" class="gear uno"></div>
     <div id="agu2" class="gear dos"></div>
     <div id="agu3" class="gear tres"></div>
     <div id="agu4" class="gear cuatro"></div>
  
     <!-- fin agujas -->
<!--control de anular -->
     <button id="ledgreenanular"  class="btn btn1"></button>
     <button  id="ledredanular" class="btn btn2"></button>
     <button  id="accionanular"  class="btmclass btmonoff idbtn" disabled=""></button>
     <div style="position:absolute;">
     <input type="hidden" name="timexd" id="timexd" value="<?php echo $timerow; ?>"> 
     <input type="hidden" name="valorent" id="valorate" value="1500">
     <input type="hidden" name="tiempoentrada" id="tiempoentrada" value="1500">
     </div>
      
<!-- fin de control de anular -->
       
<!--control de upper rams -->
     <button id="ledgreenuper"  class="btn btn1a"></button>
     <button  id="ledreduper" class="btn btn2a"></button>
     <button  id="accionuper"class="btmclass btmonoffa" disabled=""></button>
     <div style="position:absolute;">
     <input type="hidden" name="urtime" id="urtime" value="900"> 
     <input type="hidden" name="urvalor" id="urvalor" value="1215">
     <input type="hidden" name="urtentrada" id="urtentrada" value="1500">
    <input  type="hidden" name="valoruperent" id="valoruperent" value="3000">
     <input type="hidden" name="valorupersal" id="valorupersal" value="2703">

     </div>
  <!--fin de control de upper rams -->

<!--control de blind rams -->
     <button id="ledgreenblind"  class="btn btn1b"></button>
     <button  id="ledredblind" class="btn btn2b"></button>
     <button  id="accionblind"class="btmclass btmonoffb" disabled=""></button>
 <!--fin de control de blind rams -->




<!--control de lower rams -->
      <button id="ledgreenlower"  class="btn btn1c"></button>
      <button  id="ledredlower" class="btn btn2c"></button>
      <button  id="acctionlower"class="btmclass btmonoffc" disabled=""></button>
<!--fin de control de lower rams -->


<label>
   <img id="air" class="onoffair" src="img/Airlevelarriba.png" onclick="air()" >
</label>  
<style>
.temporal{
     position: absolute;
     width: 30px;
     height:15px;
     font-size: 10px;
     text-align: center;
}
</style>
<input class="temporal t1" type="text" id="boxcell1" value="3000" > 
<input class=" temporal t2" type="text" id="boxcell2" value="1500" > 
<input class=" temporal t3" type="text" id="boxcell3" value="1500" > 
<input class=" temporal t4" type="text" id="boxcell4" value="1500" > 
<imput type="hidden" id="hostanular" value="0"> 
<imput type="hidden" id="hostuper"   value="0">
<imput type="hidden" id="hostblind"  value="0">
<imput type="hidden" id="hostlower" value="0">   
<imput type="hidden" id="hostkill" value="0"> 
<imput type="hidden" id="hostchoque" value="0">   

<img id="palanca1" class="palanca1" src="img/Palancaopen.png"  >
<img id="palanca2" class="palanca2" src="img/Palancaopen.png" >
<img  id="bypas" class="bypas" src="img/palanca1.png" >
 
<input type="hidden" id="estadoair" value="">
