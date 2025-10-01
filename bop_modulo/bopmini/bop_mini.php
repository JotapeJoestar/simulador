
<style>

/*  <!-- ESTE ARCHIVO CONSULTA Y MODIFICA LAS VALVULAS DEL BOP DE ACUERDO A LOS DATOS EN LA DB (CSS,HTML,PHP,JS)  -->

<!-- INICIO DE ESTILOS CSS --> */

.manifolminiuno{
    width:218px;
    position: absolute;
    top:170px;
    left: 220px;

}
.manifolminidos{
    width:210px;
    position: absolute;
    top:3px;
    left: 220px;

}
.manifolminibop{
    width:218px;
    position: relative;
}

.vv1{
    width:25px;
    position: absolute;
    top:7px;
    left: 280px;

}
.vv2{
    width:25px;
    position: absolute;
    top:7px;
    left: 315px;

}

.vv3{
    width:25px;
    position: absolute;
    top:7px;
    left: 350px;
}
.vv4{
    width:25px;
    position: absolute;
    top:40px;
    left: 255px;

}
.vv5{
    width:25px;
    position: absolute;
    top:40px;
    left: 280px;

}

.vv6{
    width:25px;
    position: absolute;
    top:40px;
    left: 350px;

}
.vv7{
    width:25px;
    position: absolute;
    top:40px;
    left: 376px;

}

.vv8{
    width:25px;
    position: absolute;
    top:80px;
    left: 255px ;

}

.vv9{
    width:25px;
    position: absolute;
    top:80px;
    left: 280px;
}

.vv10{
    width:25px;
    position: absolute;
    top:80px;
    left: 315px;

}



.vv11{
    width:25px;
    position: absolute;
    top:80px;
    left: 350px;

}

.vv12{
    width:25px;
    position: absolute;
    top:80px;
    left: 376px;

}


 .vv13{
    width:25px;
    position: absolute;
    top:95px;
    left: 297px;

} 


.vv14{
    width:25px;
    position: absolute;
    top:95px;
    left: 335px;

}
.vv15{
    width:25px;
    position: absolute;
    top:110px;
    left: 268px;

} 
.vv16{
    width:25px;
    position: absolute;
    top:110px;
    left: 363px;

}
.vv17{
    width:25px;
    position: absolute;
    top:130px;
    left: 285px;
}

.vv18{
    width:25px;
    position: absolute;
    top:130px;
    left: 345px;

}





.vv19{
    width:25px;
    position: absolute;
    top:180px;
    left: 246px;

}



.vv20{
    width:25px;
    position: absolute;
    top:180px;
    left: 407px;

}

.vv21{
    width:25px;
    position: absolute;
    top:217px;
    left: 225px;

}



.vv22{
    width:25px;
    position: absolute;
    top:217px;
    left: 290px;

}


.vv23{
    width:25px;
    position: absolute;
    top:217;
    left: 360px;

}




.vv24{
    width:25px;
    position: absolute;
    top:267;
    left: 265px;

}

.vv25{
    width:25px;
    position: absolute;
    top:267;
    left: 390px;

}


.vv26{
    width:25px;
    position: absolute;
    top:290;
    left: 247px;

}
.vv27{
    width:25px;
    position: absolute;
    top:290;
    left: 287px;

}
.vv28{
    width:25px;
    position: absolute;
    top:290;
    left: 325px;

}
.vv29{
    width:25px;
    position: absolute;
    top:290;
    left: 367px;

}
.vv30{
    width:25px;
    position: absolute;
    top:290;
    left: 407px;

}
/* .vv1{
    width:25px;
    position: absolute;
    top:10px;
    left: 244px;

}
 */

.boxclass {

 position: absolute;
    left:102px;
    top:105; 
     
}
.boxclass2 {
  position: absolute;
  left:104px;
  top:155;      
}
.boxclass3 {
  position: absolute;
  left:104px;
  top:205;
  
}
.boxclass4 {
    position: absolute;
  left:104px;
  top:285;
  
}


#axul{
    background-color:green;
    width: 10px;
  height: 10px;
  border: 3px solid black;
  margin: 0;
}
#axul2{
    background-color:green;
    width: 10px;
  height: 10px;
  border: 3px solid black;
  margin: 0;
}
#axul3{
    background-color:green;
    width: 10px;
  height: 10px;
  border: 3px solid black;
  margin: 0;
}
#axul4{
    background-color:green;
    width: 10px;
  height: 10px;
  border: 3px solid black;
  margin: 0;
}


.palancaxx1{
    width: 20px;
  height: 20px;
    position: absolute;
  left:53px;
  top:225;    

}

.palancaxx2{
    width: 20px;
  height: 20px;
    position: absolute;
  left:142px;
  top:225;    




}

</style>

<!-- FIN ESTILOS CSS -->

<script>

//llamado a estado de bop

/* if (document.getElementById('hostanular').value==1) {
    document.getElementById('axul').innerHTML = '.';
    document.getElementById("axul").style.backgroundColor = "red";
    
}else{
    document.getElementById('axul').innerHTML = '.';
    document.getElementById("axul").style.backgroundColor = "green";


} 

if (document.getElementById('hostuper').value==1) {
    document.getElementById('axul2').innerHTML = '.';
    document.getElementById("axul2").style.backgroundColor = "red";
    
}else{
    document.getElementById('axul2').innerHTML = '.';
    document.getElementById("axul2").style.backgroundColor = "green";


} 

if (document.getElementById('hostblind').value==1) {
    document.getElementById('axul3').innerHTML = '.';
    document.getElementById("axul3").style.backgroundColor = "red";
    
}else{
    document.getElementById('axul3').innerHTML = '.';
    document.getElementById("axul3").style.backgroundColor = "green";


} 


if (document.getElementById('hostlower').value==1) {
    document.getElementById('axul4').innerHTML = '.';
    document.getElementById("axul4").style.backgroundColor = "red";
    
}else{
    document.getElementById('axul4').innerHTML = '.';
    document.getElementById("axul4").style.backgroundColor = "green";


}

if(document.getElementById('hostkill').value==1){

    document.getElementById('palancakill').src='img/Palancaclose.png';
    document.getElementById('palancakill').style.left="57px"

}else{
   
    document.getElementById('palancakill').src='img/Palancaopen.png';
    document.getElementById('palancakill').style.left="53px"
}

if(document.getElementById('hostchoque').value==1){

    document.getElementById('palanchoque').src='img/Palancaclose.png';
    document.getElementById('palanchoque').style.left="147px"

}else{
    document.getElementById('palanchoque').src='img/Palancaopen.png';
    document.getElementById('palanchoque').style.left="142px"
} */


$('#idclose').click(function(){

//llamado a valvulas 
var pumpdata =
    $.ajax({
         url: 'bop_modulo/bopmini/llamardatamini.php',
         dataType:'text',
        async:false
     }).responseText;
  
      var jsval = JSON.parse(pumpdata);
      var vl1=jsval[0];
      var vl2=jsval[1];
      var vl3=jsval[2];
      var vl4=jsval[3];
      var vl5=jsval[4];
      var vl6=jsval[5];
      var vl7=jsval[6];
      var vl8=jsval[7];
      var vl9=jsval[8];
      var vl10=jsval[9];
      var vl11=jsval[10];
      var vl12=jsval[11];
      var vl13=jsval[12];
      var vl14=jsval[13];
      var vl15=jsval[14];
      var vl16=jsval[15];
      var vl17=jsval[16];
      var vl18=jsval[17];
      var vl19=jsval[18];
      var vl20=jsval[19];
      var vl21=jsval[20];
      var vl22=jsval[21];
      var vl23=jsval[22];
      var vl24=jsval[23];
      var vl25=jsval[24];
      var vl26=jsval[25];
      var vl27=jsval[26];
      var vl28=jsval[27];
      var vl29=jsval[28];
      var vl30=jsval[29];
      var vl31=jsval[30];
      var vl32=jsval[31];
      var vl33=jsval[32];
      var vl34=jsval[33];
      var vl35=jsval[34];
      var vl36=jsval[35];






if (vl1==1) {
    document.getElementById('vv1').src='img/valvulaoffmin.png';
}else{
    document.getElementById('vv1').src='img/valvulaonmin.png';
}

if (vl2==1) {

    document.getElementById('vv2').src='img/valvulaoffmin.png';
}else{

    document.getElementById('vv2').src='img/valvulaonmin.png';
}



if (vl3==1) {

document.getElementById('vv3').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv3').src='img/valvulaonmin.png';
}


if (vl4==1) {

document.getElementById('vv4').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv4').src='img/valvulaonmin.png';
}


if (vl5==1) {

document.getElementById('vv5').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv5').src='img/valvulaonmin.png';
}
if (vl6==1) {

document.getElementById('vv6').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv6').src='img/valvulaonmin.png';
}

if (vl7==1) {

document.getElementById('vv7').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv7').src='img/valvulaonmin.png';
}
if (vl8==1) {

document.getElementById('vv8').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv8').src='img/valvulaonmin.png';
}
if (vl9==1) {

document.getElementById('vv9').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv9').src='img/valvulaonmin.png';
}

if (vl10==1) {

document.getElementById('vv10').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv10').src='img/valvulaonmin.png';
}


if (vl11==1) {

document.getElementById('vv11').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv11').src='img/valvulaonmin.png';
}

if (vl12==1) {

document.getElementById('vv12').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv12').src='img/valvulaonmin.png';
}
if (vl13==1) {

document.getElementById('vv13').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv13').src='img/valvulaonmin.png';
}

if (vl14==1) {

document.getElementById('vv14').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv14').src='img/valvulaonmin.png';
}
if (vl15==1) {

document.getElementById('vv15').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv15').src='img/valvulaonmin.png';
}
if (vl16==1) {

document.getElementById('vv16').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv16').src='img/valvulaonmin.png';
}

if (vl17==1) {

document.getElementById('vv17').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv17').src='img/valvulaonmin.png';
}


if (vl18==1) {

document.getElementById('vv18').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv18').src='img/valvulaonmin.png';
}

if (vl19==1) {

document.getElementById('vv19').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv19').src='img/valvulaonmin.png';
}

if (vl20==1) {

document.getElementById('vv20').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv20').src='img/valvulaonmin.png';
}


if (vl21==1) {

document.getElementById('vv21').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv21').src='img/valvulaonmin.png';
}


if (vl22==1) {

document.getElementById('vv22').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv22').src='img/valvulaonmin.png';
}

if (vl23==1) {

document.getElementById('vv23').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv23').src='img/valvulaonmin.png';
}

if (vl24==1) {

document.getElementById('vv24').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv24').src='img/valvulaonmin.png';
}

if (vl25==1) {

document.getElementById('vv25').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv25').src='img/valvulaonmin.png';
}
if (vl26==1) {

document.getElementById('vv26').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv26').src='img/valvulaonmin.png';
}
if (vl27==1) {

document.getElementById('vv27').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv27').src='img/valvulaonmin.png';
}

if (vl28==1) {

document.getElementById('vv28').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv28').src='img/valvulaonmin.png';
}

if (vl29==1) {

document.getElementById('vv29').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv29').src='img/valvulaonmin.png';
}


if (vl30==1) {

document.getElementById('vv30').src='img/valvulaoffmin.png';
}else{

document.getElementById('vv30').src='img/valvulaonmin.png';
}


/* if (vl31=='Explotion') {
document.getElementById('p1_spm').value=0;
document.getElementById('myRange').scrollTop=0;

    
}

if (vl32=='Explotion') {
document.getElementById('p2_spm').value=0;
document.getElementById('myRange2').scrollTop=0;
    
} */



//llamado a estado de bop


if (vl31==0) {
    document.getElementById('axul').innerHTML = '.';
    document.getElementById("axul").style.backgroundColor = "red";
    
}else{
    document.getElementById('axul').innerHTML = '.';
    document.getElementById("axul").style.backgroundColor = "green";
} 


if (vl32==0) {
    document.getElementById('axul2').innerHTML = '.';
    document.getElementById("axul2").style.backgroundColor = "red";
    
}else{
    document.getElementById('axul2').innerHTML = '.';
    document.getElementById("axul2").style.backgroundColor = "green";
} 

if (vl33==0) {
    document.getElementById('axul3').innerHTML = '.';
    document.getElementById("axul3").style.backgroundColor = "red";
    
}else{
    document.getElementById('axul3').innerHTML = '.';
    document.getElementById("axul3").style.backgroundColor = "green";
} 


if (vl34==0) {
    document.getElementById('axul4').innerHTML = '.';
    document.getElementById("axul4").style.backgroundColor = "red";
    
}else{
    document.getElementById('axul4').innerHTML = '.';
    document.getElementById("axul4").style.backgroundColor = "green";
}

if(vl35==0){
    document.getElementById('palancakill').src='img/Palancaclose.png';
    document.getElementById('palancakill').style.left="57px"

}else{
    document.getElementById('palancakill').src='img/Palancaopen.png';
    document.getElementById('palancakill').style.left="53px"
}

if(vl36==0){

    document.getElementById('palanchoque').src='img/Palancaclose.png';
    document.getElementById('palanchoque').style.left="147px"

}else{
    document.getElementById('palanchoque').src='img/Palancaopen.png';
    document.getElementById('palanchoque').style.left="142px"
}

})

</script>

<img class="manifolminibop" src="img/BOP1.png">

<!-- palanca  -->
 <img id='palancaarrib' src="img/Airlevelarriba.png" style="float: right;margin-right: 384px;margin-top: -167px;position: relative;z-index: 10;height: 32px;">
 
<?php if ($food1==0){?>
<div id="box" class="boxclass" >
<p id="axul" style="background-color:red;">.</p>
</div>
<?php } ?>
<?php if ($food1==1){?>
<div id="box" class="boxclass" >
<p id="axul" style="background-color:green;">.</p>
</div>
<?php } ?>

<?php if ($food2==0){?>
<div id="box2" class="boxclass2" >
<p id="axul2" style="background-color:red;">.</p>
</div>
<?php } ?>
<?php if ($food2==1){?>
<div id="box2" class="boxclass2" >
<p id="axul2" style="background-color:green;">.</p>
</div>
<?php } ?>

<?php if ($food3==0){?>
<div id="box3" class="boxclass3" >
<p id="axul3" style="background-color:red;">.</p>
</div>
<?php } ?>
<?php if ($food3==1){?>
<div id="box3" class="boxclass3" >
<p id="axul3" style="background-color:green;">.</p>
</div>
<?php } ?>

<?php if ($food4==0){?>
<div id="box4" class="boxclass4" >
<p id="axul4" style="background-color:red;">.</p>
</div>
<?php } ?>
<?php if ($food4==1){?>
<div id="box4" class="boxclass4" >
<p id="axul4" style="background-color:green;">.</p>
</div>
<?php } ?>

<?php if ($food5==0){?>
<img class="palancaxx1" id="palancakill" src="img/Palancaclose.png" style="left:57px;">
<?php } ?>
<?php if ($food5==1){?>
<img class="palancaxx1" id="palancakill" src="img/Palancaopen.png" style="left:53px;">
<?php } ?>

<?php if ($food6==0){?>
<img class="palancaxx2" id="palanchoque" src="img/Palancaclose.png" style="left:147px;">
<?php } ?>
<?php if ($food6==1){?>
<img class="palancaxx2" id="palanchoque" src="img/Palancaopen.png" style="left:142px;">
<?php } ?>


<img class="manifolminiuno" src="img/manifold2.png">
<img class="manifolminidos" src="img/manifold1.png">


<!--1-->
<?php   
if ($foo1a==3){?>

<img class=" vv1" id="vv1" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo1a==1) {?>
<img class="vv1"  id="vv1" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo1a==2) {?>
<img class="vv1" id="vv1" src="img/valvulaonmin.png">
<?php   } ?>




<!--2-->
<?php   
if ($foo1b==3){?>

<img class=" vv2" id="vv2" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo1b==1) {?>
<img class=" vv2" id="vv2" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo1b==2) {?>
<img class=" vv2" id="vv2" src="img/valvulaonmin.png">

<?php   } ?>


<!--2-->
<?php   
if ($foo1c==3){?>

<img class=" vv3" id="vv3" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo1c==1) {?>
<img class=" vv3" id="vv3" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo1c==2) {?>
<img class=" vv3" id="vv3" src="img/valvulaonmin.png">

<?php   } ?>


<?php   
if ($foo1d==3){?>

<img class=" vv4" id="vv4" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo1d==1) {?>
<img class=" vv4"  id="vv4" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo1d==2) {?>
<img class=" vv4" id="vv4" src="img/valvulaonmin.png">

<?php   } ?>




<?php   
if ($foo1==3){?>

<img class=" vv5" id="vv5" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo1==1) {?>
<img class=" vv5" id="vv5" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo1==2) {?>
<img class=" vv5"id="vv5" src="img/valvulaonmin.png">

<?php   } ?>


<?php   
if ($foo2==3){?>

<img class=" vv6" id="vv6" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo2==1) {?>
<img class=" vv6"  id="vv6" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo2==2) {?>
<img class=" vv6" id="vv6" src="img/valvulaonmin.png">

<?php   } ?>    



<?php   
if ($foo2a==3){?>

<img class=" vv7" id="vv7" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo2a==1) {?>
<img class=" vv7"  id="vv7" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo2a==2) {?>
<img class=" vv7" id="vv7" src="img/valvulaonmin.png">

<?php   } ?>    



<?php   
if ($foo3==3){?>

<img class=" vv8" id="vv8" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo3==1) {?>
<img class=" vv8" id="vv8" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo3==2) {?>
<img class=" vv8" id="vv8" src="img/valvulaonmin.png">

<?php   } ?>   




<?php   
if ($foo4==3){?>

<img class=" vv9" id="vv9" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo4==1) {?>
<img class=" vv9" id="vv9" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo4==2) {?>
<img class=" vv9" id="vv9" src="img/valvulaonmin.png">

<?php   } ?>   




<?php   
if ($foo5==3){?>

<img class=" vv10" id="vv10" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo5==1) {?>
<img class=" vv10" id="vv10" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo5==2) {?>
<img class=" vv10" id="vv10" src="img/valvulaonmin.png">

<?php   } ?>   




<?php   
if ($foo6==3){?>

<img class=" vv11" id="vv11"  src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo6==1) {?>
<img class=" vv11" id="vv11"  src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo6==2) {?>
<img class=" vv11" id="vv11"  src="img/valvulaonmin.png">

<?php   } ?>   




<?php   
if ($foo7==3){?>

<img class=" vv12" id="vv12"  src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo7==1) {?>
<img class=" vv12" id="vv12"  src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo7==2) {?>
<img class=" vv12" id="vv12"  src="img/valvulaonmin.png">

<?php   } ?>   



<?php   
if ($foo8==3){?>

<img class=" vv13" id="vv13"  src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo8==1) {?>
<img class=" vv13" id="vv13"  src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo8==2) {?>
<img class=" vv13" id="vv13"  src="img/valvulaonmin.png">

<?php   } ?>  




<?php   
if ($foo9==3){?>

<img class=" vv14" id="vv14"  src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo9==1) {?>
<img class=" vv14" id="vv14"  src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo9==2) {?>
<img class=" vv14" id="vv14"  src="img/valvulaonmin.png">

<?php   } ?>  



<?php   
if ($foo10==3){?>

<img class=" vv15" id="vv15"  src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo10==1) {?>
<img class=" vv15" id="vv15"  src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo10==2) {?>
<img class=" vv15" id="vv15"   src="img/valvulaonmin.png">

<?php   } ?>  



<?php   
if ($foo11==3){?>

<img class=" vv16" id="vv16"  src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo11==1) {?>
<img class=" vv16" id="vv16"  src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo11==2) {?>
<img class=" vv16" id="vv16"  src="img/valvulaonmin.png">

<?php   } ?>  


<?php   
if ($foo12==3){?>

<img class=" vv17" id="vv17"  src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo12==1) {?>
<img class=" vv17"  id="vv17" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo12==2) {?>
<img class=" vv17" id="vv17"  src="img/valvulaonmin.png">

<?php   } ?>  



<?php   
if ($foo13==3){?>

<img class=" vv18" id="vv18"  src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo13==1) {?>
<img class=" vv18" id="vv18"  src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo13==2) {?>
<img class=" vv18" id="vv18"  src="img/valvulaonmin.png">

<?php   } ?>  



<?php   
if ($foo14==3){?>

<img class=" vv19" id="vv19"  src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo14==1) {?>
<img class=" vv19" id="vv19"  src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo14==2) {?>
<img class=" vv19"  id="vv19" src="img/valvulaonmin.png">

<?php   } ?>  


<?php   
if ($foo15==3){?>

<img class=" vv20" id="vv20"  src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo15==1) {?>
<img class=" vv20"  id="vv20"  src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo15==2) {?>
<img class=" vv20" id="vv20"   src="img/valvulaonmin.png">

<?php   } ?>  



<?php   
if ($foo16==3){?>

<img class=" vv21" id="vv21"  src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo16==1) {?>
<img class=" vv21" id="vv21"  src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo16==2) {?>
<img class=" vv21" id="vv21"  src="img/valvulaonmin.png">

<?php   } ?>  






<?php   
if ($foo17==3){?>

<img class=" vv22" id="vv22" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo17==1) {?>
<img class=" vv22" id="vv22" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo17==2) {?>
<img class=" vv22" id="vv22" src="img/valvulaonmin.png">

<?php   } ?>  



<?php   
if ($foo18==3){?>

<img class=" vv23" id="vv23" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo18==1) {?>
<img class=" vv23" id="vv23" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo18==2) {?>
<img class=" vv23" id="vv23" src="img/valvulaonmin.png">

<?php   } ?>  


<?php   
if ($foo19==3){?>

<img class=" vv24" id="vv24" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo19==1) {?>
<img class=" vv24" id="vv24" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo19==2) {?>
<img class=" vv24" id="vv24" src="img/valvulaonmin.png">

<?php   } ?>  



<?php   
if ($foo20==3){?>

<img class=" vv25" id="vv25" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo20==1) {?>
<img class=" vv25" id="vv25" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo20==2) {?>
<img class=" vv25" id="vv25" src="img/valvulaonmin.png">

<?php   } ?>  


<?php   
if ($foo21==3){?>

<img class=" vv26" id="vv26" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo21==1) {?>
<img class=" vv26" id="vv26" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo21==2) {?>
<img class=" vv26"  id="vv26" src="img/valvulaonmin.png">

<?php   } ?>  



<?php   
if ($foo22==3){?>

<img class=" vv27" id="vv27" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo22==1) {?>
<img class=" vv27" id="vv27" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo22==2) {?>
<img class=" vv27" id="vv27" src="img/valvulaonmin.png">

<?php   } ?>  


<?php   
if ($foo23==3){?>

<img class=" vv28" id="vv28" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo23==1) {?>
<img class=" vv28" id="vv28" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo23==2) {?>
<img class=" vv28" id="vv28" src="img/valvulaonmin.png">

<?php   } ?>  



<?php   
if ($foo24==3){?>

<img class=" vv29" id="vv29" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo24==1) {?>
<img class=" vv29" id="vv29" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo24==2) {?>
<img class=" vv29" id="vv29" src="img/valvulaonmin.png">

<?php   } ?>  



<?php   
if ($foo25==3){?>

<img class=" vv30" id="vv30" src="img/valvula.png">
<?php   } ?>
<?php   
if ($foo25==1) {?>
<img class=" vv30" id="vv30" src="img/valvulaoffmin.png">
<?php   } ?>
<?php   
if ($foo25==2) {?>
<img class=" vv30" id="vv30" src="img/valvulaonmin.png">

<?php   } ?>  



