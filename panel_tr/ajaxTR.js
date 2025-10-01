 //bloque para mostrar datos en tiempo real
function mostrarTR(){
   var fluid_volume=
   $.ajax({
      url:'/simulador/consul_tr/pump1c.php',
      dataType:'text',
      async:false
   }).responseText;
   js=JSON.parse(fluid_volume);

  document.getElementById('p1_spm').value= js[0]; 
//bomba2´´´´´´´´
  document.getElementById('p2_spm').value=js[1];
//total stk p1`````
  document.getElementById('p1_total_spm').value=js[2];
//total stk p2`````
  document.getElementById('p2_total_spm').value=js[3];
//total stk total`````total_strokes
  document.getElementById('total_spm').value=js[4];
//totalspm´´´´´´´´´''
  document.getElementById('total_strokes').value=js[5];
//bit depth'''''''''''''
  document.getElementById('bit_depth').value=js[6];
//block higth´´´´´´´´´´´´
  document.getElementById('block_high').value=js[7];
  document.getElementById('hideblock_high').value=js[7];
//hole depth´´´´´´´´
  document.getElementById('hole_depth').value=js[8];
//cassing pressure´´´´´´´´´´´´´´´´´´
  document.getElementById('cassing_pressure').value=js[9];
//cunas'''''''''''''
  document.getElementById('cuñas').value=js[10];
 //fluid volume ´´´´´´´´´´´´´´
  document.getElementById('fluid_volume').value=js[11];
 //hl´´´´´´´´´´´´
  document.getElementById('Hl').value=js[12];
  document.getElementById('Hlaux').value=js[12];
//pump_pressure
  document.getElementById('pump_pressure').value=js[13];
//rop´´´´´´´´´´´´´´
  document.getElementById('rop').value=js[14];
//rpm´´´´´´´´´´´´´´
  document.getElementById('rpm').value=js[15];
//torque´´´´´´
  document.getElementById('torque').value=js[16];
  var estadobloque=js[17];
  document.getElementById('aaa').value=js[17];
  
//condiciones para la rotacion de el taladro y el lodo
  var a= document.getElementById('rpm').value;
  var imgdawn = document.getElementById('imgmov');
  imgdawn.src = "img/gif_tuberia.gif";
  if ( document.getElementById('rpm').value==0) {
     imgdawn.src = "img/tuberia.png";
  }
  video.src = 'img/lodo.gif';
  if (document.getElementById('p1_spm').value==0) {
      video.src = 'img/sinlodo.gif';
  }   

if (document.getElementById('cuñas').value==0) {
 document.getElementById('stop').src ="img/unpx.png";
}else{
 document.getElementById('stop').src ="img/cunafinal.png";
}

}
function up(){
    var block_highcount = document.getElementById("block_high").value;
  var sum = block_highcount * 21.21;
  //console.log(sum);

  imgdawn.marginTop = "" + -sum + "px";
}


var RT=setInterval(mostrarTR,250);
var bajartaladros=setInterval(up,250);
// if ctrlcnx=0
function conexion(){
[]
  var conx=
   $.ajax({
      url:'/simulador/consul_tr/pump1c.php',
      dataType:'text',
      async:false
   }).responseText;
   jscon=JSON.parse(conx);
   var estadobloque=jscon[17];
   if (estadobloque==1) {
    clearInterval(RT);
    clearInterval(bajartaladros);
  // escribo base dato estadobloque =0
     var estadocon=0;
         $.ajax({
            url: "index_modulo/prueba.php",
            data: {estadocon:estadocon },
            type: "POST",
            success: function (datos) {
            }
         });
     if (ctrl_cnx==0) {
        
      imgdawn.src = "img/soltandotu.gif";
     imgdawn.style.marginTop = "-130px";

     setTimeout(timeoutiron, 4000);
        ctrl_cnx++;  
     } 
  }
}
//var aa=setInterval(conexion,6000);

//clearInterval(aa);
setInterval(conexion,500);


function wobagujabajar() {

var agujas=
   $.ajax({
      url:'/simulador/consul_tr/pump1c.php',
      dataType:'text',
      async:false
   }).responseText;
   jsagujas=JSON.parse(agujas);

var agujauno = document.getElementById('agujauno');
var agujados = document.getElementById('agujados');
  var sumwobxar = jsagujas[18];
  var Hlaux= jsagujas[19];
  agujauno.style.transform = "rotate(" + sumwobxar + "deg)";
  agujados.style.transform = "rotate(" + ((Hlaux * 0.72) + 180) + "deg)";//grafica en la aguja roja el valor de hook load
 
 //********************************************agujados.style.transform="rotate("+((HlT*0.72)+180)+"deg)";
}

setInterval(wobagujabajar,250);
//end 




  /*setTimeout(timeoutiron, 4000);
    setTimeout(function () {
      location.reload();
    }, 40000);
 
        
         imgdawn.src = "img/soltandotu.gif";
  imgdawn.style.marginTop = "-130px";
  */

