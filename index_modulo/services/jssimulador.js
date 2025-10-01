i

// *******************************************************************************************
// 1. Archivo que contiene multiples funciones de js
// 2. Actualiza los valores de SPMB1, SPMB2, SPMT, STKB!, STKSB2, STST (PRIMERO EN WEB Y DESPUES EN BASE DE DATOS)
// 3. Calcula el torque (WEB)
// 4. Controla los tiempos de actualizacion de los datos que se guardan tambien controla el cronometro que se ve en la parte de time en la consola controla el llamado de datos de fluid volumen de ecd y de pump pressure 
// 5. Manejo total de la consola de perforador
// 6. Manejo de ventanas dentro del entorno de perforacion

// **********************************************************************************************
document.getElementById("selectGra").value = 'WELL CONTROL';
var flowret = 0;
var gainloss = 0;
var contador250 = 0;
var navbar1 = document.getElementById("d1box");
var navbar2 = document.getElementById("d2box");
var navbar3 = document.getElementById('dis13');
var d1 = document.getElementById("d1");
let d2 = document.getElementById("d2");
let d3 = document.getElementById("d3");
var ironr = document.getElementById('ironr');
var palanca1 = document.getElementById('palanca1');
var progresbar = document.getElementById('progresbar').value;
var progresbar2 = document.getElementById('progresbar2').value;
var progresbar3 = document.getElementById('progresbar3').value;
/* var progresbar4 = document.getElementById('progresbar4').value; */
var subirpor = document.getElementById('subirpor');
var return_flow = document.getElementById('return_flow');
var gain = document.getElementById('gain');
var separador = document.getElementById('separador');
var nav2de = document.getElementById('nav2de');
//audios////audios////audios////audios////audios////audios////audios////audios//


// AUDIOS LARGOS
/* var audiop1 = new Audio('audio/Bombas4min.wav');
var audiop1d = new Audio('audio/Bombas4min.wav');
var audiop2 = new Audio('audio/Rotaria5min.wav');
var audiop3 = new Audio('audio/MalacateOn.wav');
var audiop4 = new Audio('audio/SartaBajando.wav');
var audiop5 = new Audio('audio/ColocarCuna.wav');
var audioalar = new Audio('audio/Alarma.wav'); */


//AUDIOS CORTOS
/* var audiop1 = new Audio('audio/Bombas3seg.wav');
var audiop1d = new Audio('audio/Bombas3seg.wav');
var audiop2 = new Audio('audio/Rotaria4seg.wav');
var audiop3 = new Audio('audio/MalacateOn2seg.wav');
var audiop4 = new Audio('audio/SartaBajando4seg.wav');
var audiop5 = new Audio('audio/ColocarCuna.wav');
var audioalar = new Audio('audio/Alarma.wav'); */


//AUDIOS 30 SEGUNDOS
var audiop1 = new Audio('audio/Bombas30seg.wav');
var audiop1d = new Audio('audio/Bombas30seg.wav');
var audiop2 = new Audio('audio/Rotaria30seg.wav');
var audiop3 = new Audio('audio/MalacateOn.wav');
var audiop4 = new Audio('audio/SartaBajando.wav');
var audiop5 = new Audio('audio/ColocarCuna.wav');
var audioalar = new Audio('audio/Alarma.wav');

//audios////audios////audios////audios////audios////audios////audios////audios//
// videosgif// videosgif// videosgif// videosgif// videosgif// videosgif// videosgif
var flatlodogif = 0;
var flatpumoff = 0;
var flattuberiagif = 0;
var flatb1php = 0;
var flatb2php = 0;
var flatb1s1 = 0;
var flatb2s1 = 0;


// videosgif// videosgif// videosgif// videosgif// videosgif// videosgif// videosgif
j1 = progresbar.value;
j2 = progresbar2.value;
j3 = progresbar3.value;
/* j4 = progresbar4.value; */

var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
var anula = -45;
agu2.style.transform = "rotate(" + anula + "deg)";
var block_high = document.getElementById("block_high").value;
//a pixeles
///var sumdisplay= Math.abs(block_high*24,0044);
var imgdawn = document.getElementById('imgmov');
var stop = document.getElementById('stop');
//var idt = -sumdisplay-835;
let limit = -833;
var incrementa = document.getElementById('incrementa');
var disminuye = document.getElementById('disminuye');
//imgdawn.style.marginTop = ""+idt+"px";
var bitd = document.getElementById('bit_depth');
var defval = document.getElementById('defval');
bitd.value = defval.value;
var contador1 = 0;
var contador2 = 0;
mi_imagen1 = new Image
mi_imagen1.src = "img/cunafinal.png";
mi_imagen2 = new Image
mi_imagen2.visibility = false;
vopen = new Image
vopen.src = "img/valvulaoff.png"
vclose = new Image
vclose.src = "img/valvulaon.png"
var i = 1;
var box1a = document.getElementById('box1a');
var resdb1a = document.getElementById('resdb1a');
var box1b = document.getElementById('box1b');
var resdb1b = document.getElementById('resdb1b');
var box1c = document.getElementById('box1c');
var resdb1c = document.getElementById('resdb1c');
var box = document.getElementById('box');
var resdb = document.getElementById('resdb');
var box2 = document.getElementById('box2');
var resdb2 = document.getElementById('resdb2');
var box3 = document.getElementById('box3');
var resdb3 = document.getElementById('resdb3');
var box4 = document.getElementById('box4');
var resdb4 = document.getElementById('resdb4');
var box5 = document.getElementById('box5');
var resdb5 = document.getElementById('resdb5');
var box6 = document.getElementById('box6');
var resdb6 = document.getElementById('resdb6');
var box7 = document.getElementById('box7');
var resdb7 = document.getElementById('resdb7');
var box8 = document.getElementById('box8');
var resdb8 = document.getElementById('resdb8');
var box9 = document.getElementById('box9');
var resdb9 = document.getElementById('resdb9');
var box10 = document.getElementById('box10');
var resdb10 = document.getElementById('resdb10');
var box11 = document.getElementById('box11');
var resdb11 = document.getElementById('resdb11');
var box12 = document.getElementById('box12');
var resdb12 = document.getElementById('resdb12');
var box13 = document.getElementById('box13');
var resdb13 = document.getElementById('resdb13');
var hole_depth = document.getElementById('hole_depth');
var box14 = document.getElementById('box14');
var resdb14 = document.getElementById('resdb14');
var box15 = document.getElementById('box15');
var resdb15 = document.getElementById('resdb15');
var box16 = document.getElementById('box16');
var resdb16 = document.getElementById('resdb16');
var box17 = document.getElementById('box17');
var resdb17 = document.getElementById('resdb17');
var box18 = document.getElementById('box18');
var resdb18 = document.getElementById('resdb18');
var box19 = document.getElementById('box19');
var resdb19 = document.getElementById('resdb19');
var box20 = document.getElementById('box20');
var resdb20 = document.getElementById('resdb20');
var box21 = document.getElementById('box21');
var resdb21 = document.getElementById('resdb21');
var box22 = document.getElementById('box22');
var resdb22 = document.getElementById('resdb22');
var box23 = document.getElementById('box23');
var resdb23 = document.getElementById('resdb23');
var box24 = document.getElementById('box24');
var resdb24 = document.getElementById('resdb24');
var box25 = document.getElementById('box25');
var resdb25 = document.getElementById('resdb25');
var p1_spmau = document.getElementById('p1_spm');
var p2_spmau = document.getElementById('p2_spm');
var x = document.getElementById("myRange");
var defaultVal = x.defaultValue;
var currentVal2 = x.scrollTop;
let count = 0;
let counter;
let tiempob1;
let tiempob2;
var click = document.getElementById("myRange");
/* var subir5r1 = document.getElementById("subir5r1");
var subir5r2 = document.getElementById("subir5r2");
subir5r1.addEventListener('click', Subir5d1);
subir5r2.addEventListener('click', Subir5d2); */
var valord = document.getElementById("p1_total_spm");
var restartbtn = document.getElementById("desactivar");
click.addEventListener('mouseup', myFunction);
click.addEventListener('scroll', myFunctionVal);
var x2 = document.getElementById("myRange2");
var x3 = document.getElementById("myRange3");
var defaultVal2 = x2.defaultValue;
var currentVal2 = x2.scrollTop;
let count2 = 0;
let counter2;
var click2 = document.getElementById("myRange2");
var valord2 = document.getElementById("p2_total_spm");
var restartbtn2 = document.getElementById("desactivar");
click2.addEventListener('mouseup', myFunction2);
click2.addEventListener('scroll', myFunctionVal2);
var click3 = document.getElementById("myRange3");
click3.addEventListener('mouseup', myFunction3);
click3.addEventListener('scroll', myFunctionVal3);
var total_spm = document.getElementById('total_spm');
total_spm.addEventListener('change', settotoal);
var del;
var countt = '';
var timei = document.getElementById('time');
var countsave = '';
var countit = 0;
var countip = 0;
var countActGraf = ''; // Este se usa para contar el tiempo de actualizacion de las graficas (Lienas)
var countmini = '';
var counthoursi = '';
var milesegundo = '';
var milisegundocal = '';
var ctrl_cnx = 0;
timei.value = countmini + ':' + count;
var resetp1 = document.getElementById("resetp1");
var resetp2 = document.getElementById("resetp2");
var resetp3 = document.getElementById("resetp3");
resetp1.addEventListener('click', resetp1f);
resetp2.addEventListener('click', resetp2f);
resetp3.addEventListener('click', resetp3f);
var flag0 = 0; /// BANDERA BOMBAS EN 0   
var flagb0 = 0; /// BANDERA BOMBAS EN 0  
var choque4 = document.getElementById('choque4');
var choque5 = document.getElementById('choque5');

//alert('Desactivar timeri 53');

/* var timedatarop = setInterval(calculoRopTorque,*/
/* 1000 */
/*  1000);*/
var ax = 1;
var ventcam = 0;

var ModalChk = 0;
var ModalGraf = 0;

x.scrollTop = (parseFloat(document.getElementById('p1_spm').value) * 34.9);
x2.scrollTop = (parseFloat(document.getElementById('p2_spm').value) * 34.9);
x3.scrollTop = (parseFloat(document.getElementById('rpm').value) * 34.9);

/* function Subir5d1()
{
x.scrollTop = (parseInt(x.scrollTop)+150);
document.getElementById('p1_spm').value = (parseFloat(document.getElementById('p1_spm').value) + 5);
}

function Subir5d2()
{
x2.scrollTop = (parseInt(x2.scrollTop)+150);
document.getElementById('p2_spm').value = (parseFloat(document.getElementById('p2_spm').value) + 5);
} */



//Bloque para guardar lodo nuevo y crearlo

function guardarnmud() {
  MWdata = document.getElementById('DataMW').value;
  FVdata = document.getElementById('DataFV').value;
  PVdata = document.getElementById('DataPV').value;
  YPdata = document.getElementById('DataYP').value;

  console.log(MWdata, FVdata, PVdata, YPdata);

  $.ajax({
    url: "index_modulo/savenewmud.php",
    data: {
      MWdata: MWdata,
      FVdata: FVdata,
      PVdata: PVdata,
      YPdata: YPdata
    },
    type: "POST"
  })

  /* setInterval(SPnewmud, 300); */

}

function SPnewmud() {
}

//Fin bloque guardar lodo nuevo


// Bloque para guardar pozo
function guardarpozo() {

  Namepozo = document.getElementById('NamePozo').value;
  console.log(Namepozo);

  $.ajax({
    url: "index_modulo/savepozo.php",
    data: {
      Namepozo: Namepozo
    },
    type: "POST"
  })

  modalupdate.style.display = "none";

}
// fin bloque guardar pozo

//Cambio de ventana choke
function cambvent() {
  if (ventcam == 1) {
    $("#myModal1").css({
      'left': '0',
      'top': '0',
      'width': '100%',
      'height': '100%'
    });
    ventcam = 0;
    parrib.style.display = "none";
  }
  else {
    $("#myModal1").css({
      'width': '1350px',
      'height': '680px',
      'left': '380px'
    });
    parrib.style.display = "block";
    ventcam = 1;

  }
}
//Fin cambio de ventana Choke

// Funcion para Pause
var Pausecb = document.getElementById('cbPause').value;

if (Pausecb == 1) {
  $("#cbPause").prop("checked", true);
  btnModalpause.style.background = "red";
}
else {
  $("#cbPause").prop("checked", false);
  btnModalpause.style.background = 'rgba(0,0,300,0.8)';
}

function PauseValue() {

  modalpausebtn = document.getElementById("btnModalpause");
  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 1) {
    Pausecb = 0;
    document.getElementById('cbPause').value = Pausecb;
  }
  else {
    Pausecb = 1;
    document.getElementById('cbPause').value = Pausecb;
  }

}

function Pausedata() {

  var Pausecb = document.getElementById('cbPause').value;

  $.ajax({
    url: "index_modulo/pause.php",
    data: {
      Pausecb: Pausecb,
    },
    type: "POST"
  })

  modalpause.style.display = "none";

  if (Pausecb == 1) {
    btnModalpause.style.background = "red";
    if (flagaudi == 0) {
      audiop1.volume = 0;
      audiop1d.volume = 0;
      audiop2.volume = 0;
      audiop3.volume = 0;
      audiop4.volume = 0;
      audiop5.volume = 0;
      audioalar.volume = 0;
      flagaudi = 1;
    }
  }
  else {
    modalpause.style.background = "none";
    btnModalpause.style.background = 'rgba(0,0,300,0.8)';
    if (flagaudi == 1) {
      audiop1.volume = 1;
      audiop1d.volume = 1;
      audiop2.volume = 1;
      audiop3.volume = 1;
      audiop4.volume = 1;
      audiop5.volume = 1;
      audioalar.volume =1;
      flagaudi = 0;
    }
  }
}

//Fin funcion para pause


// Funcion para alarmas

var alarmcb1 = document.getElementById('alarmcheckbox1').value;
var alarmcb2 = document.getElementById('alarmcheckbox2').value;
var alarmcb3 = document.getElementById('alarmcheckbox3').value;
var alarmcb4 = document.getElementById('alarmcheckbox4').value;

if (alarmcb1 == 1) {
  $("#alarmcheckbox1").prop("checked", true);
}
else {
  $("#alarmcheckbox1").prop("checked", false);
}

if (alarmcb2 == 1) {
  $("#alarmcheckbox2").prop("checked", true);
}
else {
  $("#alarmcheckbox2").prop("checked", false);
}

if (alarmcb3 == 1) {
  $("#alarmcheckbox3").prop("checked", true);
}
else {
  $("#alarmcheckbox3").prop("checked", false);
}

if (alarmcb4 == 1) {
  $("#alarmcheckbox4").prop("checked", true);
}
else {
  $("#alarmcheckbox4").prop("checked", false);
}

function alertcb1() {

  if ($('#alarmcheckbox1').prop('checked')) {
    document.getElementById('alarmcheckbox1').value = 1;
  }
  else {
    document.getElementById('alarmcheckbox1').value = 0;
  }

  var alarmnum1 = document.getElementById('alarmnum1').value;
  var alarmcb1 = document.getElementById('alarmcheckbox1').value;

  $.ajax({
    url: "index_modulo/alertupdate.php",
    data: {
      val1: alarmnum1,
      chb1: alarmcb1
    },
    type: "POST"
  })

}

function alertd1() {
  var alarmnum1 = document.getElementById('alarmnum1').value;
  var alarmcb1 = document.getElementById('alarmcheckbox1').value;

  $.ajax({
    url: "index_modulo/alertupdate.php",
    data: {
      val1: alarmnum1,
      chb1: alarmcb1
    },
    type: "POST"
  })
}

function alertcb2() {

  if ($('#alarmcheckbox2').prop('checked')) {
    document.getElementById('alarmcheckbox2').value = 1;
  }
  else {
    document.getElementById('alarmcheckbox2').value = 0;
  }

  var alarmnum2 = document.getElementById('alarmnum2').value;
  var alarmcb2 = document.getElementById('alarmcheckbox2').value;

  $.ajax({
    url: "index_modulo/alertupdate.php",
    data: {
      val2: alarmnum2,
      chb2: alarmcb2
    },
    type: "POST"
  })

}

function alertd2() {
  var alarmnum2 = document.getElementById('alarmnum2').value;
  var alarmcb2 = document.getElementById('alarmcheckbox2').value;

  $.ajax({
    url: "index_modulo/alertupdate.php",
    data: {
      val2: alarmnum2,
      chb2: alarmcb2
    },
    type: "POST"
  })
}

function alertcb3() {

  if ($('#alarmcheckbox3').prop('checked')) {
    document.getElementById('alarmcheckbox3').value = 1;
  }
  else {
    document.getElementById('alarmcheckbox3').value = 0;
  }

  var alarmnum3 = document.getElementById('alarmnum3').value;
  var alarmcb3 = document.getElementById('alarmcheckbox3').value;

  $.ajax({
    url: "index_modulo/alertupdate.php",
    data: {
      val3: alarmnum3,
      chb3: alarmcb3
    },
    type: "POST"
  })

}

function alertd3() {
  var alarmnum3 = document.getElementById('alarmnum3').value;
  var alarmcb3 = document.getElementById('alarmcheckbox3').value;

  $.ajax({
    url: "index_modulo/alertupdate.php",
    data: {
      val3: alarmnum3,
      chb3: alarmcb3
    },
    type: "POST"
  })
}

function alertcb4() {

  if ($('#alarmcheckbox4').prop('checked')) {
    document.getElementById('alarmcheckbox4').value = 1;
  }
  else {
    document.getElementById('alarmcheckbox4').value = 0;
  }

  var alarmnum4 = document.getElementById('alarmnum4').value;
  var alarmcb4 = document.getElementById('alarmcheckbox4').value;

  $.ajax({
    url: "index_modulo/alertupdate.php",
    data: {
      val4: alarmnum4,
      chb4: alarmcb4
    },
    type: "POST"
  })

}

function alertd4() {
  var alarmnum4 = document.getElementById('alarmnum4').value;
  var alarmcb4 = document.getElementById('alarmcheckbox4').value;

  $.ajax({
    url: "index_modulo/alertupdate.php",
    data: {
      val4: alarmnum4,
      chb4: alarmcb4
    },
    type: "POST"
  })
}

function alarmdata() {


  ///// SE DESACTIVA FUNCION POR CAMBIOS EN ALARMAS SOLO CHECK

  /* Dataler = $.ajax({
    url: "index_modulo/alertconsul.php",
    dataType: 'text',
    type: "POST",
    async: false
  }).responseText;
  jsal = JSON.parse(Dataler);

  alertval1 = jsal[0];
  alertcheck1 = jsal[1];
  alertval2 = jsal[2];
  alertcheck2 = jsal[3];
  alertval3 = jsal[4];
  alertcheck3 = jsal[5];
  alertval4 = jsal[6];
  alertcheck4 = jsal[7];

  alarmcb1 = document.getElementById('alarmcheckbox1').value;
  alarmcb2 = document.getElementById('alarmcheckbox2').value;
  alarmcb3 = document.getElementById('alarmcheckbox3').value;
  alarmcb4 = document.getElementById('alarmcheckbox4').value;

  modalalarmbtn = document.getElementById("btnModalalarm");
  alarmdatabtn = document.getElementById("alarmdata");
  alarmdatabtn.style.backgroundColor = "Green"
  luz1 = document.getElementById("luz1");
  luz2 = document.getElementById("luz2");
  luz3 = document.getElementById("luz3");
  luz4 = document.getElementById("luz4");

  if (alarmcb1 == 1 && parseInt(flowret) >= parseInt(alertval1)) {
    luz1.style.background = "red";
    audioalar.play(); //SE COMENTA POR DESACTIVACION DE SONIDOS
  }
  else {
    luz1.style.background = "green";
  }

  if (alarmcb2 == 1 && parseInt(flowret) <= parseInt(alertval2)) {
    luz2.style.background = "red";
    audioalar.play(); //SE COMENTA POR DESACTIVACION DE SONIDOS
  }
  else {
    luz2.style.background = "green";
  }

  if (alarmcb3 == 1 && parseInt(gainloss) >= parseInt(alertval3)) {
    luz3.style.background = "red";
    audioalar.play(); //SE COMENTA POR DESACTIVACION DE SONIDOS
  }
  else {
    luz3.style.background = "green";
  }

  if (alarmcb4 == 1 && parseInt(gainloss) <= parseInt(alertval4)) {
    luz4.style.background = "red";
    audioalar.play(); //SE COMENTA POR DESACTIVACION DE SONIDOS
  }
  else {
    luz4.style.background = "green";
  }

  if (alarmcb1 == 0 && alarmcb2 == 0 && alarmcb3 == 0 && alarmcb4 == 0) {
    modalalarmbtn.style.background = 'rgba(0,0,300,0.8)';
  }

  alarmcb1 = document.getElementById('alarmcheckbox1').value;
  alarmcb2 = document.getElementById('alarmcheckbox2').value;
  alarmcb3 = document.getElementById('alarmcheckbox3').value;
  alarmcb4 = document.getElementById('alarmcheckbox4').value;

  alarmnum1 = document.getElementById('alarmnum1').value;
  alarmnum2 = document.getElementById('alarmnum2').value;
  alarmnum3 = document.getElementById('alarmnum3').value;
  alarmnum4 = document.getElementById('alarmnum4').value;

  setTimeout(() => {
    alarmdatabtn.style.backgroundColor = "#0606EC";
    modalalarm.style.display = "none";
  }, 2000); */

}

// Esta funcion se ejecuta en intervalos para comprobar la informacion en Tiempo Real
function alarmdata2() {

  Dataler = $.ajax({
    url: "index_modulo/alertconsul.php",
    dataType: 'text',
    type: "POST",
    async: false
  }).responseText;
  jsal = JSON.parse(Dataler);

  alertval1 = jsal[0];
  alertcheck1 = jsal[1];
  alertval2 = jsal[2];
  alertcheck2 = jsal[3];
  alertval3 = jsal[4];
  alertcheck3 = jsal[5];
  alertval4 = jsal[6];
  alertcheck4 = jsal[7];

  alarmcb1 = document.getElementById('alarmcheckbox1').value;
  alarmcb2 = document.getElementById('alarmcheckbox2').value;
  alarmcb3 = document.getElementById('alarmcheckbox3').value;
  alarmcb4 = document.getElementById('alarmcheckbox4').value;

  modalalarmbtn = document.getElementById("btnModalalarm");
  luz1 = document.getElementById("luz1");
  luz2 = document.getElementById("luz2");
  luz3 = document.getElementById("luz3");
  luz4 = document.getElementById("luz4");

  if (alarmcb1 == 1 && parseInt(flowret) >= parseInt(alertval1)) {
    luz1.style.background = "red";
    audioalar.play();
  }
  else {
    luz1.style.background = "green";
  }

  if (alarmcb2 == 1 && parseInt(flowret) <= parseInt(alertval2)) {
    luz2.style.background = "red";
    audioalar.play();
  }
  else {
    luz2.style.background = "green";
  }

  if (alarmcb3 == 1 && parseInt(gainloss) >= parseInt(alertval3)) {
    luz3.style.background = "red";
    audioalar.play();
  }
  else {
    luz3.style.background = "green";
  }

  if (alarmcb4 == 1 && parseInt(gainloss) <= parseInt(alertval4)) {
    luz4.style.background = "red";
    audioalar.play();
  }
  else {
    luz4.style.background = "green";
  }

  if (alarmcb1 == 0 && alarmcb2 == 0 && alarmcb3 == 0 && alarmcb4 == 0) {
    modalalarmbtn.style.background = 'rgba(0,0,300,0.8)';
  }
}
// fin funciones alarmas


// funcion para guardar los datos de boton speed 
function speedData() {
  dataselsepeed = document.getElementById("speedsel").value;

  Dataspd = $.ajax({
    url: "index_modulo/speedconsul.php",
    dataType: 'text',
    type: "POST",
    async: false
  }).responseText;
  jspd = JSON.parse(Dataspd);

  constspeed = jspd[0];
  constspeedi = constspeed[0];

  resultSpeed = parseInt(constspeedi * dataselsepeed);

  $.ajax({
    url: "index_modulo/speedupdate.php",
    data: {
      resultSpeed: resultSpeed,
      speedval: dataselsepeed
    },
    type: "POST"
  })

  modalspeed = document.getElementById("tvesModalgr");
  modalspeed.style.display = "none";
}
// fin funcion speed

// funciones para subir linea
function subirlinea() {
  var iq = parseInt(nav2de.scrollTop / 5);
  separador.style.marginTop = -iq;
  document.getElementById("ie").innerHTML = 0;
}
var axe = 0;

//barras de progreso parte inferior de el tablero

/* $('#subirpor').click(function () {
  var intervalagu1=setInterval(function(){
  j++;
  progresbar.value = j;
  progresbar2.value = j;
  if (j === 50) {
     return_flow = document.getElementById('return_flow').value = 0;
  }

   return_flow = document.getElementById('return_flow').value = axe++;

  if (progresbar.value === 100) {
    progresbar.value = 50;
    progresbar2.value = 50;
     return_flow = document.getElementById('return_flow').value = 50;
  }
})


$('#bajarpor').click(function () {
  j--;
  progresbar.value = j;
  progresbar2.value = j;
  if (j === 50) {
     return_flow = document.getElementById('return_flow').value = 0;
  }
  return_flow.value = axe--;
  if (progresbar.value === 0) {
    progresbar.value = 50;
    progresbar2.value = 50;
    gain.value = 50;
  }
})
 */

//modal parte superior 
//
var btn = document.getElementsByClassName("myBtn");
//
var span = document.getElementsByClassName("close");
// 
var parrib = document.getElementById("palancaarrib");
//
btn[0].onclick = function () {
  modal.style.display = "block";
  parrib.style.display = "none";

  var pump =
    $.ajax({
      url: 'bopval_tr/bopv1.php',
      dataType: 'text',
      async: false
    }).responseText;

  pumpjs = JSON.parse(pump);
  //b1
  document.getElementById('val1a').value = pumpjs[0];
  if (pumpjs[0] == 1) {
    document.images['val1a'].src = vopen.src;

  } else {
    document.images['val1a'].src = vclose.src;

  }

  //b2
  document.getElementById('val1b').value = pumpjs[1];
  if (pumpjs[1] == 1) {
    document.images['val1b'].src = vopen.src;

  } else {
    document.images['val1b'].src = vclose.src;

  }

  //b3   

  document.getElementById('val1c').value = pumpjs[2];
  if (pumpjs[2] == 1) {
    document.images['val1c'].src = vopen.src;

  } else {
    document.images['val1c'].src = vclose.src;

  }
  //b4
  document.getElementById('val1d').value = pumpjs[3];
  if (pumpjs[3] == 1) {
    document.images['val1d'].src = vopen.src;

  } else {
    document.images['val1d'].src = vclose.src;

  }
  //b5
  document.getElementById('val1').value = pumpjs[4];
  if (pumpjs[4] == 1) {
    document.images['val1'].src = vopen.src;

  } else {
    document.images['val1'].src = vclose.src;

  }
  //b6
  document.getElementById('val2').value = pumpjs[5];
  if (pumpjs[5] == 1) {
    document.images['val2'].src = vopen.src;

  } else {
    document.images['val2'].src = vclose.src;
  }
  //b7
  document.getElementById('val2a').value = pumpjs[6];
  if (pumpjs[6] == 1) {
    document.images['val2a'].src = vopen.src;

  } else {
    document.images['val2a'].src = vclose.src;

  }
  //b8
  document.getElementById('val3').value = pumpjs[7];
  if (pumpjs[7] == 1) {
    document.images['val3'].src = vopen.src;

  } else {
    document.images['val3'].src = vclose.src;

  }
  //b9
  document.getElementById('val4').value = pumpjs[8];
  if (pumpjs[8] == 1) {
    document.images['val4'].src = vopen.src;

  } else {
    document.images['val4'].src = vclose.src;

  }
  //b10
  document.getElementById('val5').value = pumpjs[9];
  if (pumpjs[9] == 1) {
    document.images['val5'].src = vopen.src;

  } else {
    document.images['val5'].src = vclose.src;

  }
  //b11
  document.getElementById('val7').value = pumpjs[11];
  if (pumpjs[11] == 1) {
    document.images['val7'].src = vopen.src;

  } else {
    document.images['val7'].src = vclose.src;

  }

  //b12
  document.getElementById('val8').value = pumpjs[12];
  if (pumpjs[12] == 1) {
    document.images['val8'].src = vopen.src;

  } else {
    document.images['val8'].src = vclose.src;

  }

  //b13
  document.getElementById('val9').value = pumpjs[13];
  if (pumpjs[13] == 1) {
    document.images['val9'].src = vopen.src;

  } else {
    document.images['val9'].src = vclose.src;

  }

  //b13
  document.getElementById('val10').value = pumpjs[14];
  if (pumpjs[14] == 1) {
    document.images['val10'].src = vopen.src;

  } else {
    document.images['val10'].src = vclose.src;

  }

  //b13
  document.getElementById('val11').value = pumpjs[15];
  if (pumpjs[15] == 1) {
    document.images['val11'].src = vopen.src;

  } else {
    document.images['val11'].src = vclose.src;

  }
  //b13
  document.getElementById('val12').value = pumpjs[16];
  if (pumpjs[16] == 1) {
    document.images['val12'].src = vopen.src;

  } else {
    document.images['val12'].src = vclose.src;

  }
  //b13
  document.getElementById('val13').value = pumpjs[17];
  if (pumpjs[17] == 1) {
    document.images['val13'].src = vopen.src;

  } else {
    document.images['val13'].src = vclose.src;

  }

  //b13
  document.getElementById('val14').value = pumpjs[18];
  if (pumpjs[18] == 1) {
    document.images['val14'].src = vopen.src;

  } else {
    document.images['val14'].src = vclose.src;

  }

  //b13
  document.getElementById('val15').value = pumpjs[19];
  if (pumpjs[19] == 1) {
    document.images['val15'].src = vopen.src;

  } else {
    document.images['val15'].src = vclose.src;

  }

  //b13
  document.getElementById('val16').value = pumpjs[20];
  if (pumpjs[20] == 1) {
    document.images['val16'].src = vopen.src;

  } else {
    document.images['val16'].src = vclose.src;

  }
  //b13
  document.getElementById('val17').value = pumpjs[21];
  if (pumpjs[21] == 1) {
    document.images['val17'].src = vopen.src;

  } else {
    document.images['val17'].src = vclose.src;

  }

  document.getElementById('val18').value = pumpjs[22];
  if (pumpjs[22] == 1) {
    document.images['val18'].src = vopen.src;

  } else {
    document.images['val18'].src = vclose.src;

  }
  document.getElementById('val19').value = pumpjs[23];
  if (pumpjs[23] == 1) {
    document.images['val19'].src = vopen.src;

  } else {
    document.images['val19'].src = vclose.src;

  }

  console.log(pumpjs[24]);

  document.getElementById('val20').value = pumpjs[24];
  if (pumpjs[24] == 1) {
    document.images['val20'].src = vopen.src;

  } else {
    document.images['val20'].src = vclose.src;

  }

  document.getElementById('val21').value = pumpjs[25];
  if (pumpjs[25] == 1) {
    document.images['val21'].src = vopen.src;

  } else {
    document.images['val21'].src = vclose.src;

  }

  document.getElementById('val22').value = pumpjs[26];
  if (pumpjs[26] == 1) {
    document.images['val22'].src = vopen.src;

  } else {
    document.images['val22'].src = vclose.src;

  }

  document.getElementById('val23').value = pumpjs[27];
  if (pumpjs[27] == 1) {
    document.images['val23'].src = vopen.src;

  } else {
    document.images['val23'].src = vclose.src;

  }

  document.getElementById('val24').value = pumpjs[28];
  if (pumpjs[28] == 1) {
    document.images['val24'].src = vopen.src;

  } else {
    document.images['val24'].src = vclose.src;

  }

  document.getElementById('val25').value = pumpjs[29];
  if (pumpjs[29] == 1) {
    document.images['val25'].src = vopen.src;

  } else {
    document.images['val25'].src = vclose.src;

  }




}
//
span[0].onclick = function () {
  modal.style.display = "none";
  parrib.style.display = "block";
}
btn[1].onclick = function () {
  modal1.style.display = "block";
  ModalChk = 1;
  parrib.style.display = "none";
}
//
span[1].onclick = function () {
  modal1.style.display = "none";
  ModalChk = 0;
  parrib.style.display = "block";
}

function abrirNuevoTab(url) {
  // Abrir nuevo tab
  var win = window.open(url, '_blank');
  // Cambiar el foco al nuevo tab (punto opcional)
  win.focus();
}

btn[2].onclick = function () {
  abrirNuevoTab('/simulador/GrafsP/grafs.php')
  /* modal2.style.display = "block";
  ModalGraf = 1; */
}

//
/* span[2].onclick = function () {
  modal2.style.display = "none";
  ModalGraf = 0;
} */

// 
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


$(document).ready(function () {
  $('.switch').click(function () {
    $(this).toggleClass("switchOn");
  });
});

//fin modal superior


var perforador = document.getElementById('perforador');

//*************************************************************************************wobfisico********

// ******************************** RUTINAS ENTORNO PERFORACION *******************************
//*********************************************************************************************


//Rutina para asignar el HookLoad y el WOBteorico
var Hl = document.getElementById("Hl").value; //setup_var
//var Hlaux = document.getElementById('agujadoshidden').value;
var Hlaux = document.getElementById("Hlaux").value; //toma el valor inicial de hook load para realizar operaciones sin alterarlo
var zeroWob = document.getElementById("zeroWob").value;
var WOBteorico = document.getElementById("WOBteorico").value;
//WOBteorico = zeroWob;
//Rutina que baja bloque y aumenta Bit dept, depth y WOB
var decrementoBloque = 0.2;
var block_high = document.getElementById("block_high").value;
var bit_depth = document.getElementById("bit_depth");
var wobfisico = document.getElementById("wobfisico").value;
var velocidad; //esta variable hace que la perforacion suceda mas rapido
velocidad = 1;
var pesoBloque = document.getElementById("pesoBloque").value;
var cuñas = document.getElementById("cuñas");
var estadoConectado = document.getElementById("estadoConectado").value;
if (cuñas.value == 1) {
  document.images['stop'].src = mi_imagen1.src;
}


// RUTINA QUE CAMBIA EL VALOR DE LAS CUÑAS Y MUESTRA COMPORTAMIENTOS 
function cambia_imagen() {

  if (perforador.value == 1) {

    if (cuñas.value == 0) {

      $('#cuna').css('background-image', 'url(img/cunaof.png)');

      setTimeout(() => {
        $('#cuna').css('background-image', 'url(img/cuna.png)');
      }, 1000);

      document.images['stop'].src = mi_imagen1.src;
      audiop5.play();
      cuñas.value = 1;
    } else {
      if (loadCuña > 0) {
        alert('weight in Slips');
      }
      else {
        $('#cuna').css('background-image', 'url(img/cunaof.png)');

        setTimeout(() => {
          $('#cuna').css('background-image', 'url(img/cuna.png)');
        }, 1000);

        document.images['stop'].src = mi_imagen2.src;
        cuñas.value = 0;
      }
    }

    cuñasdata = cuñas.value

    console.log(cuñasdata);

    $.ajax({
      url: "index_modulo/prueba.php",
      data: {
        cuñasdata: cuñasdata
      },
      type: "POST",
      async: false,
    })

  }

}

// RUTINA QUE CALCULA EL TORQUE
var sdurezaRoca = document.getElementById("durezaRoca").value; //depende del hole depth
var ctePer = document.getElementById("ctePer").value; //agregar en rigconfiguration, guardar en var_constantes
var diaBit = document.getElementById("diaBit").value; //depende del diametro interno del open hole
var rop = 0;
var loadCuña = 0;
s = sdurezaRoca;


//'Calcula el ROP basada en la formula  R=Kd*NW^2/D^2S^2=Kd*RPM*WOB^2/Dia^2*esfuerzo de perforabilidad de la roca'esta formula se cumple para pozo con limpieza perfecta
//Rutina para calcular bloque y torque
function calculoRopTorque() {
  ///RUTINA QUE CALCULA EL TORQUE
  var auxTQ;
  var auxTQrpm;
  var auxTQHl;
  var rpm = document.getElementById("rpm").value;

  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {

    if (rpm > 0) {
      auxTQrpm = ((100 / document.getElementById("rpm").value) / 100); //rpm calculado por rotacion simple y dividido por 100 para dar klb/ft
      auxTQHl = (0.3 * Hl) / 36; //rpm calculado por el peso de la sarta
      auxTQ = ctePer * diaBit * (wobfisico / 36); //rpm calculado por peso en la broca
      document.getElementById("torque").value = (auxTQ + auxTQrpm + auxTQHl).toFixed(1);
      document.getElementById("rop").value = (((ctePer * rpm * (Math.pow(wobfisico, 2))) / ((Math.pow(diaBit, 2)) * (Math.pow(s, 2))))).toFixed(1);
      //document.getElementById("rop").value=33;
      // if (wobfisico > 45) {
      //   AuxWob = (wobfisico - (wobfisico - 45) - 10);
      //   document.getElementById("rop").value = (((ctePer * document.getElementById("rpm").value * (Math.pow(wobfisico, 2))) / ((Math.pow(diaBit, 2)) * (Math.pow(s, 2))))).toFixed(1);
      //   if (document.getElementById("rpm").value > 0) {
      //     document.getElementById("torque").value = (torque + (Math.pow((wobfisico - 45), 2)));
      //   }
      // }
      console.log(ctePer, rpm, wobfisico, diaBit, s);
    } else {
      torque = 0;
    }

    if (document.getElementById("rpm").value == 0) {
      document.getElementById("rop").value = 0;
    }
  }
}
//Esta rutina perfora cuando WOB>0
//Este procedimiento perfora formacion con un tiempo fijo de 300ms con la siguiente logica:
//'si Xft se perforan en 60 minutos;'entonces Xft se perforan en 3600 segundos:''Y Xft se perforan en 36.000 decimas de segundo
//'aplicando regla de tres'el incremento cada 0.300 segundos debe ser dado por la siguiente formula:
//3 decSeg*ROP/36000
document.getElementById("rop").value = 0;

function increasePerfora() {

  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {

    var incremento;
    if (wobfisico > 0) {

      var hole_depth = document.getElementById('hole_depth').value;

      anthd = Math.trunc(document.getElementById('show_depth').value);

      incremento = ((2.4 * document.getElementById("rop").value) / 10285);
      var incrementoDos = ((2.4 * document.getElementById("rop").value) / 10285);
      //hole_depth.value =  parseFloat(hole_depth.value + (incremento * velocidad));

      document.getElementById('hole_depth').value = (parseFloat(hole_depth) + parseFloat(incrementoDos)).toFixed(4);
      hole_depth = document.getElementById('hole_depth').value;
      // console.log(hole_depth);
      document.getElementById("show_hole").value = parseFloat(hole_depth).toFixed(2);
      // vis= holedepth.value(2)
      document.getElementById("show_depth").value = parseFloat(hole_depth).toFixed(2);

      chanhd = Math.trunc(document.getElementById('show_depth').value);

      document.getElementById("bit_depth").value = parseFloat(hole_depth).toFixed(2);
      // console.log(parseFloat(hole_depth).toFixed(2));

      wobfisico = wobfisico - (incremento * 3.3 * velocidad);
      document.getElementById('wobfisico').value = wobfisico;

      if (loadCuña > 0) {
        Hlaux = Hl - loadCuña;
      }
      else {
        Hlaux = Hl - wobfisico;
      }
      WOBteorico = zeroWob - Hlaux;
      // //console.log('wobfisico en incrementa arreglado' + wobfisico);
      if (wobfisico < 0) {
        wobfisico = 0;
      }

      if (chanhd > anthd) {


        /*       var block_high = document.getElementById('block_high').value;
              var hole_depth = document.getElementById('hole_depth').value;
              var rop = document.getElementById('rop').value;
              var bit_depth = document.getElementById('bit_depth').value;
              var action = 93;
              var bitactual = bit_depth.value;
              var estadocon = 1;
        
              $.ajax({
        
                url: "index_modulo/prueba.php",
                data: {
                  block_high: block_high,
                  hole_depth: hole_depth,
                  rop: rop,
                  bit_depth: bit_depth,
                  action: action,
                  bitactual: bitactual,
                  estadocon: estadocon
                },
                type: "POST",
                async: false
              }) */
      }
      ////console.log('wobfisico en incrementa' + wobfisico);
    }
  }
}

//FUNCION BAJAR BLOQUE+++++++++++++++
function bajarBloque() {

  var Pausecb = document.getElementById('cbPause').value;

  console.log(Pausecb);

  if (Pausecb == 0) {

    var sumBlock_decremento;
    if (cuñas.value == 1) {
      peso_en_libras = (pesoBloque / 1000);
      if (Hlaux >= peso_en_libras) {
        loadCuña = loadCuña + 20;
        Hlaux = Hl - loadCuña;
        if (WOBteorico <= 90) {
          WOBteorico = zeroWob - Hlaux;
          if (WOBteorico > 90) {
            WOBteorico = 90;
          }
          // //console.log('valor wob menor a 90' + WOBteorico);
        }
        if (loadCuña > 0) {
          //console.log('loadCuña' + loadCuña);
          carga_cuña = loadCuña;
          //console.log('carga_cuña' + carga_cuña);
        } else {
          console.log('valor wob mayor a 90:' + WOBteorico);
        }
        console.log('Hlaux con cuñas mayor a peso:' + Hlaux + 'Peso bloque' + peso_en_libras);
      } else {
        console.log('HlT con cuñas menor a peso:' + Hlaux);
      }
    } else {
      // console.log('HlT sin cuñas:' + Hl);

    }

    //console.log(parseInt(document.getElementById('block_high').value));
    if (parseFloat(document.getElementById('block_high').value) > 0.2) { //El bloque 
      decrementoBloque = parseFloat(document.getElementById('block_high').value) - 0.2;
      document.getElementById("block_high").value = Math.abs(decrementoBloque).toFixed(1);
      //Comportamiento cuñas en fondo
      if (cuñas.value == 1) {
        console.log('Tiene cuñas no hace nada en fondo:');
      } else {
        if ((bit_depth.value + 0.2) < hole_depth.value) { //esta en el aire

          console.log('comentario 1', bit_depth.value + 0.2, hole_depth.value);
          wobfisico = 0;
          bit_depth.value = parseFloat(bit_depth.value) + 0.2;
          bit_depth.value = Math.abs(bit_depth.value).toFixed(2);
          document.getElementById("show_depth").value = bit_depth.value;
          console.log(bit_depth.value);

          if (bit_depth.value > hole_depth.value) {
            document.getElementById("show_depth").value = parseFloat(hole_depth.value).toFixed(2);

            wobfisico = parseFloat(document.getElementById('wobfisico').value) + 0.2 * 3.3; //se multiplica el decrmento den profundidad 0.2 x cte 3.3 
            document.getElementById("wobfisico").value = Math.abs(wobfisico).toFixed(1);
            //console.log('wob bajada:' + wobfisico);
            //console.log('WOBteorico:' + WOBteorico);
            if (estadoConectado = 1) {
              Hlaux = Hl - wobfisico;
              //peso = HlT + parseFloat(document.getElementById('acum_peso_stuck_pipe').value);     
              WOBteorico = zeroWob - Hlaux;
              //console.log('wob bajada:' + wobfisico + "  estadoConectado:" + estadoConectado + " Hlaux" + Hlaux + " Hookload setup_var" + Hl);
            } else {
              Hl = pesoBloque;
              //console.log('wob bajada:' + wobfisico + " Hl:" + Hl + " estadoConectado:" + estadoConectado);
            }

          }

          //console.log('bit_depth+0.2 < hole_depth wob bajada:' + wobfisico);

        } else {
          wobfisico = parseFloat(document.getElementById('wobfisico').value) + 0.2 * 3.3; //se multiplica el decrmento den profundidad 0.2 x cte 3.3 
          document.getElementById("wobfisico").value = Math.abs(wobfisico).toFixed(1);
          //console.log('wob bajada:' + wobfisico);
          //console.log('WOBteorico:' + WOBteorico);
          if (estadoConectado = 1) {
            Hlaux = Hl - wobfisico;
            //peso = HlT + parseFloat(document.getElementById('acum_peso_stuck_pipe').value);     
            WOBteorico = zeroWob - Hlaux;
            //console.log('wob bajada:' + wobfisico + "  estadoConectado:" + estadoConectado + " Hlaux" + Hlaux + " Hookload setup_var" + Hl);
          } else {
            Hl = pesoBloque;
            //console.log('wob bajada:' + wobfisico + " Hl:" + Hl + " estadoConectado:" + estadoConectado);
          }
        }
      }

    }
  }
}

//FUNCION QUE SUBE EL BLOQUE
//Rutina que sube bloque y disminuye Bit dept, depth y WOB
var incrementoBloque = 0.2;

function subirBloque() {
  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {
    if (cuñas.value == 1) {
      //console.log('Hl con cuñas:' + Hl);
      peso_en_libras = (pesoBloque / 1000);
      if (loadCuña > 0) {
        loadCuña = loadCuña - 20;
        Hlaux = Hl - loadCuña;
        WOBteorico = zeroWob - Hlaux;
        if (WOBteorico > 90) {
          WOBteorico = 90;
        }
        // console.log('valor wob menor a 90' + WOBteorico);

        // console.log('HlT con cuñas mayor a peso:' + Hlaux + 'Peso bloque' + peso_en_libras);
      } else {
        // console.log('HlT con cuñas menor a peso:' + Hlaux);
      }
    } else {
      // console.log('HlT sin cuñas:' + Hl);
    }


    /*   var sumBlock_incremento;  variuable*/
    //console.log(parseInt(document.getElementById('block_high').value));
    if (parseFloat(document.getElementById('block_high').value) >= 0.2) { //corregir con jesus limite de alatura maxima del bloque

      incrementoBloque = parseFloat(document.getElementById('block_high').value) + 0.2;
      document.getElementById("block_high").value = Math.abs(incrementoBloque).toFixed(1);
      if (wobfisico > 0) {
        wobfisico = parseFloat(document.getElementById('wobfisico').value) - 0.2 * 3.3;
        document.getElementById("wobfisico").value = Math.abs(wobfisico).toFixed(1);
        //console.log('wob subida:' + wobfisico);
        //console.log('WOBteorico:' + WOBteorico);
        if (estadoConectado = 1) {
          Hlaux = Hl - wobfisico;
          //peso = HlT + parseFloat(document.getElementById('acum_peso_stuck_pipe').value)
          WOBteorico = zeroWob - Hlaux;
          //console.log('wob bajada:' + wobfisico + "  estadoConectado:" + estadoConectado + " Hlaux" + Hlaux + " Hookload setup_var" + Hl);
        } else {

          Hlaux = pesoBloque;
          //console.log('wob bajada:' + wobfisico + " Hl:" + Hl + " estadoConectado:" + estadoConectado);
        }
      } else {
        bit_depth.value = parseFloat(bit_depth.value).toFixed(2) - 0.2;
        document.getElementById("show_depth").value = parseFloat(bit_depth.value).toFixed(2);
      }
    }
  }
}



//*********************funciones para movimiento de agujas en base a WOB****************************************
var agujauno = document.getElementById('agujauno');
var agujados = document.getElementById('agujados');


//aguja1 294 grados =0
//aguja1 25 grados =90
//aguja1 339 grados =15 inicio
//aguja2 90 grados =0
//aguja2 215 grados= 50
//360/500=0.72
//roja wob
//blanca hl
//var aguja2=divi/4;
//agujauno.style.transform="rotate("+totalB+"deg)";
//agujados.style.transform="rotate("+totalR+"deg)";

var sola = document.getElementById('agujaunohidden').value;
var solb = document.getElementById('agujadoshidden').value;;

/* agujauno.style.transform = "rotate(" + 294 + "deg)";
*/

agujados.style.transform = "rotate(" + ((solb * 0.72) + 180) + "deg)";

//agujados.style.transform = "rotate(" + solb + "deg)";


/// Agujas de WOB de acuerdo a dato de practica
if (sola == 0) {
  agujauno.style.transform = "rotate(" + 294 + "deg)";
}
else {
  agujauno.style.transform = "rotate(" + sola + "deg)";
}

//agujados.style.transform = "rotate(" + ((solb * 0.72) + 180) + "deg)";



///////////////////

/* agujados.style.transform = "rotate(" + ((Hl * 0.72) + 180) + "deg)"; */
//ESTA LINEA LO GRAFICA ALA INICIO DE LA PAGINA ANTES DE ENTRARA A UNA FUNCION
//************funcion para  aguja aumento ***********************************************************************************
function wobagujabajar() {
  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {
    var sumwobxar = (-WOBteorico * 3.040) + 294;
    // console.log(sumwobxar);
    agujauno.style.transform = "rotate(" + sumwobxar + "deg)";
    agujados.style.transform = "rotate(" + ((Hlaux * 0.72) + 180) + "deg)"; //grafica en la aguja roja el valor de hook load
    sola = sumwobxar;
    solb = Hlaux;

    //********************************************agujados.style.transform="rotate("+((HlT*0.72)+180)+"deg)";
  }
}


//******************boton de el martin deker********************
$('#mdboton').click(function () {
  if (perforador.value == 1) {
    document.getElementById("zeroWob").value = Hlaux;
    zeroWob = Hlaux;
    WOBteorico = zeroWob - Hlaux;

    agujauno.style.transform = "rotate(" + 294 + "deg)";

    $.ajax({
      url: "index_modulo/prueba.php",
      data: {
        WOBteorico: WOBteorico,
        Hlaux: Hlaux,
        wobfisico: wobfisico,
        zeroWob: zeroWob

      },
      type: "POST",
      async: false,
    })


    //console.log(' hl:' + Hl + ' zeroWob ' + zeroWob + '  WOBteoricooooooooo  ' + WOBteorico);
  } else {
    //console.log('bloqueado boton zero');
  }
})

var ini = block_high * 21.31;
imgdawn.style.marginTop = "" + -ini + "px";

function bajartaladro() {
  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {

    var block_highcount = document.getElementById("block_high").value;
    var sum = block_highcount * 21.21;
    audiop4.play();
    imgdawn.style.marginTop = "" + -sum + "px";
  }
}

function subirtaladro() {
  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {
    var block_highcount = document.getElementById("block_high").value;
    var sum = block_highcount * 21.21;
    ////console.log(sum);
    audiop3.play(); //SE COMENTA POR DESACTIVACION DE SONIDOS
    imgdawn.style.marginTop = "" + -sum + "px";
  }
}


//****************************************************************************
//imgdawn.style.marginTop = "-1940px";
var sumBlock_incremento;
var hideblock_high = document.getElementById('hideblock_high').value;
var block_high = document.getElementById("block_high").value;
var startmeta = Math.abs(-block_high * 21, 55); //con tuberia de 90 pies, cada pie tiene 39.61 segun formula px-1940/90=21,55(calculo para pies de altura teniendo en cuenta los px)	
////console.log("px"+startmeta);i
////console.log("ft"+block_high);
var pxdata = startmeta;
////console.log(block_high+" "+hideblock_high);var sumpx=-850+incrementoBloque;
////console.log(defval.value);
////console.log(hide_bitDepth.value);
var incrementoBloque = 0.2;
var sumf = pxdata * incrementoBloque;

function setintervalin() {
  if (incrementoBloque) {
    incrementoBloque = incrementoBloque + 0.2;
    sumBlock_incremento = parseInt(block_high) - incrementoBloque;
    document.getElementById("block_high").value = Math.abs(sumBlock_incremento).toFixed(1);
    var hide_bitDepthi = parseInt(document.getElementById('hide_bitDepth').value) + incrementoBloque;
    console.log('intervalin')
    bit_depth.value = hide_bitDepthi;
    document.getElementById("show_depth").value = bit_depth.value;
    sumBlock_decrementoi = parseInt(block_high) + incrementoBloque;
    sumBlock_decrementoi = hideblock_high;
    /*//console.log(defval.value);
    //console.log(hide_bitDepthi);*/
    //console.log(sumf);
    imgdawn.style.marginTop = "" + sumf + "px";

    /*
    //console.log("bit deph setupvar: "+bit_depth.value);
    //console.log("bit depth var rt:"+hide_bitDepth );
    */
  }
  /*
 //console.log("block higt:"+sumBlock_incremento);
 //console.log(Math.abs(sumBlock_incremento).toFixed(1));
  */
}
var decrementoBloque = 0.2;

function setintervaldis() {
  if (decrementoBloque) {
    decrementoBloque = decrementoBloque + 0.2;
    sumBlock_decremento = parseInt(block_high) + decrementoBloque;
    document.getElementById("block_high").value = Math.abs(sumBlock_decremento).toFixed(1);
    sumBlock_decrementoi = parseInt(block_high) + decrementoBloque;
    sumBlock_decrementoi = hideblock_high;
    imgdawn.style.marginTop = "" + pxdata + "px";
  }

  /*
  var cosa =Math.abs(document.getElementById("block_high").value).toFixed(1);
  var tempbit = bitd.value;
  var sinD=Math.abs(bitd.value).toFixed(1);
  document.getElementById("block_high").value = Math.abs(divi/24,44).toFixed(1);
  var cosa2=cosa-Math.abs(document.getElementById("block_high").value).toFixed(1);
  if (cosa2>0) {
    bitd.value= Math.abs(parseFloat(sinD) +parseFloat(Math.abs(cosa2))).toFixed(1);
  }
  if (cosa2<0) {
    bitd.value=Math.abs(parseFloat(sinD) -parseFloat(Math.abs(cosa2))).toFixed(1);
  }
  /* if (idt){
      idt=idt-5;
    } 
  divi=idt+835;
  var cosa =Math.abs(document.getElementById("block_high").value).toFixed(1);
  
  /*var tempbit = bitd.value;
  var sinD=Math.abs(bitd.value).toFixed(1);
  
  
  
  
  document.getElementById("block_high").value = Math.abs(divi/24,44).toFixed(1);
  imgdawn.style.marginTop = ""+idt+"px"; 
  
  
  var cosa2=cosa-Math.abs(document.getElementById("block_high").value).toFixed(1);
  
  
  if (cosa2>0) {
    bitd.value= Math.abs(parseFloat(sinD) +parseFloat(Math.abs(cosa2))).toFixed(1);
  
  }
  if (cosa2<0) {
    bitd.value=Math.abs(parseFloat(sinD) -parseFloat(Math.abs(cosa2))).toFixed(1);
  }
  
  audiop3.play();
  
  
   }
  
  if (idt>-830) {
  imgdawn.style.marginTop = ""+-3070+"px";
  */
}

//*************GRAFICAR PERFORACION*************************
//*************GRAFICAR PERFORACION*************************
//*************GRAFICAR PERFORACION*************************
//*************GRAFICAR PERFORACION*************************

//************** funcion encargada de bajar el bloque *********

$('#incrementa').click(function () {

  var Pausecb = document.getElementById('cbPause').value;

  console.log(Pausecb);

  if (Pausecb == 0) {
    if (perforador.value == 1) {
      ironr.src = "img/ironquieto.png";
      var xd = setInterval(bajarBloque, 1000); //calcular hook load y wob fisico.....wob teorico
      var aja = setInterval(bajartaladro, 1000); //grafica el bloque bajando
      var wobbajar = setInterval(wobagujabajar, 1000); // baja altura de bloque de bit depth y wob
      document.getElementById("show_depth").value = bit_depth.value;
      // var wobagujabajar=setInterval(wobagujabajar,1000);// corre la aguja de el wob
      //var xd=setInterval(setintervalin,1000);
      //funcion para marcacion de hl\
      //funcionpara marcacion WOBdial
      // agregar fallas y cuñas
      // en otra funcion de tiempo agrgar perforacion con rop
      $('#clear').click(function () {
        clearInterval(xd);
        clearInterval(aja);
        disminuye.disabled = false;
        incrementa.disabled = false;
        audiop4.pause();
        contador1 = 0;
        contador2 = 0;
      })

      $('#cuna').click(function () {
        if (cuñas.value == 1) {
          clearInterval(xd);
          clearInterval(aja);
          disminuye.disabled = false;
          incrementa.disabled = false;
          audiop4.pause();
          contador1 = 0;
          contador2 = 0;
        }
      })


      disminuye.disabled = true;
    } else {
      //console.log('boton bajar bloqueado');
      audiop4.pause();
    }
  }
  else {
    clearInterval(xd);
    clearInterval(aja);
    clearInterval(wobbajar);
    disminuye.disabled = false;
    incrementa.disabled = false;
    audiop4.pause();
    contador1 = 0;
    contador2 = 0;
  }

})

//************** funcion encargada de subir el bloque *********
$('#disminuye').click(function () {


  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {
    ironr.src = "img/ironquieto.png";
    //var xd=setInterval(setintervaldis,1000);
    var wobbajar = setInterval(wobagujabajar, 1000);
    var aja = setInterval(subirtaladro, 1000);
    var xd = setInterval(subirBloque, 1000);
    document.getElementById("show_depth").value = bit_depth.value;
    $('#clear').click(function () {

      clearInterval(xd);
      clearInterval(aja);
      incrementa.disabled = false;
      audiop3.pause();
      contador1 = 0;
      contador2 = 0;
    })

    $('#cuna').click(function () {
      if (cuñas.value == 1) {
        clearInterval(xd);
        clearInterval(aja);
        disminuye.disabled = false;
        incrementa.disabled = false;
        audiop4.pause();
        contador1 = 0;
        contador2 = 0;
      }
    })

    incrementa.disabled = true;

  }
  else {
    clearInterval(xd);
    clearInterval(aja);
    clearInterval(wobbajar);
    disminuye.disabled = false;
    incrementa.disabled = false;
    audiop4.pause();
    contador1 = 0;
    contador2 = 0;
  }
})
//***************************EVENTO DE CONEXION**********************************************************
//***************************EVENTO DE CONEXION**********************************************************
//esta funcion se ejecuta cuando el gif de el bloque termina de subir
var flat16 = 0;

function timeoutiron() {
  var block_high = document.getElementById("block_high").value;
  var rpmm = document.getElementById("rpm").value;
  var p1 = document.getElementById('p1_spm').value;
  var p2 = document.getElementById('p2_spm').value;
  var cunas = document.getElementById('cuñas').value;

  if (p1 > 0 || block_high > 4.2 || p2 > 0 || rpmm > 0 || cunas == 0) {
    alert('pumps activated or block height is not 4.2 to 4 or rpm is activated or Slips sits idle ');
  } else {
    //guarda el estado de conexion para que se pueda actualizar en tiempo

    /*     $('#despr').css('background-image', 'url(img/cnxof.png)');
    
        setTimeout(() => {
          $('#despr').css('background-image', 'url(img/Cnx.png)');
        }, 1000); */

    imgdawn.src = "";
    imgdawn.src = "img/soltandotu.gif";
    imgdawn.src = "";
    ironr.src = "img/ironrunner.gif";
    document.getElementById('ironraux').src = "";

    var estadocon = 1;
    var estadocon2 = 1;

    $.ajax({
      url: "index_modulo/prueba.php",
      data: {
        estadocon2: estadocon2
      },
      type: "POST"
    })

    //if (flat16 == 0) {
    // flat16 = 1;
    setTimeout(function () {

      imgdawn.style.marginTop = "" + -1985 + "px";
      imgdawn.src = "img/tuberia.png";
      ironr.src = "";
      document.getElementById('ironraux').src = "img/ironquieto.png";
      document.getElementById('block_high').value = 93;

      var estadocon = 1;
      var action = 93;
      var bitactual = bit_depth.value;

      $.ajax({
        url: "index_modulo/prueba.php",
        data: {
          action: action,
          bitactual: bitactual,
          estadocon: estadocon
        },
        succes: estadoconfun(),
        type: "POST"
      })

    }, 16000);
  }
}

function estadoconfun() {

  var estadocon2 = 0;

  $.ajax({
    url: "index_modulo/prueba.php",
    data: {
      estadocon2: estadocon2
    },
    type: "POST"
  })
}

/* function desablebtns() {
  var despr = document.getElementById('despr');
  var cuna = document.getElementById('cuna');
  var p1 = document.getElementById('p1_spm').value;
  imgdawn.src = "img/soltandotu.gif";
  imgdawn.style.marginTop = "-130px";
} */


//boton para la conexion condiciones que permiten la conexion.al tiempo se activa la funcion 'timeoutiron' 
$('#despr').click(function () {

  $('#despr').css('background-image', 'url(img/cnxof.png)');

  setTimeout(() => {
    $('#despr').css('background-image', 'url(img/Cnx.png)');
  }, 1000);
}
)

/*if (perforador.value == 1) {
    var block_high = document.getElementById("block_high").value;
    var rpmm = document.getElementById("rpm").value;
    var a = sola;
    var b = solb;
    var p1 = document.getElementById('calp1_spm').value;
    var p1total = document.getElementById('p1_total_spm').value;
    var p2 = document.getElementById('calp2_spm').value;
    var p2total = document.getElementById('p2_total_spm').value;
    var stpmt = document.getElementById('total_spm').value;
    var totalskt = document.getElementById('total_strokes').value;

    var hole_depth = document.getElementById('hole_depth').value;
    var rop = document.getElementById('rop').value;
    var bit_depth = document.getElementById('bit_depth').value;
    var cassing_pressure = document.getElementById('cassing_pressure').value;
    var fluid_volume = document.getElementById('fluid_volume').value;
    var pump_pressure = document.getElementById('pump_pressure').value;
    var rpm = document.getElementById('rpm').value;
    var torque = document.getElementById('torque').value;
    var time = document.getElementById('time').value;
    var block_high = document.getElementById('block_high').value;
    var zeroWob = document.getElementById("zeroWob").value;
    var cuñas = document.getElementById("cuñas").value;
 
    if (p1 > 0 || block_high > 4.2 || p2 > 0 || rpmm > 0 ) {
      alert('pumps activated or block height is not 4.2 to 4 or rpm is activated ');
    } else {
      var estadocon = 1;
      var Pausecb = document.getElementById('cbPause').value;
      console.time("Eje2");
      
      $.ajax({
        url: "index_modulo/prueba.php",
        data: {
          a: a,
          b: b,
          p1: p1,
          p1total: p1total,
          p2: p2,
          p2total: p2total,
          stpmt: stpmt,
          totalskt: totalskt,
          rpm: rpm,
          block_high: block_high,
          hole_depth: hole_depth,
          rop: rop,
          bit_depth: bit_depth,
          cassing_pressure: cassing_pressure,
          fluid_volume: fluid_volume,
          pump_pressure: pump_pressure,
          torque: torque,
          zeroWob: zeroWob,
          cuñas: cuñas,
          time: time,
          estadocon: estadocon,
          pause: Pausecb
        },
        type: "POST",
        success: function (datos) { }
      })
      
      console.timeEnd("Eje2");
      desablebtns();
    }
  } else {
    //console.log('conexion bloqueada');
  }
}) */
//*********************************FIN DE CONEXION**************************************************
//*********************************FIN DE CONEXION**************************************************


disminuye.onclick = function () {

  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {

    contador1++;
    //console.log(contador1);
    if (contador1 > 5) {
      disminuye.disabled = true;
    }
  }
}

incrementa.onclick = function () {
  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {

    contador2++;
    //console.log(contador2);
    if (contador2 > 5) {
      incrementa.disabled = true;
    }
  }
}
//**********************FIN DE EVENTO DE PERFORACION************************************************/
//**********************FIN DE EVENTO DE PERFORACION************************************************/
//**********************FIN DE EVENTO DE PERFORACION************************************************/
//**********************FIN DE EVENTO DE PERFORACION************************************************/





// *******************************************************************************************
// ***************************** INICIO DE BLOQUE CONTROL DE BOMBAS ****************************+
// **********************************************************************************************
//contador de tiempo

aumentartStk = 0;

function timer() {

  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {

    aumentartStk = (Number(aumentartStk) + Number(dataspeedt));

    p1_total_spm.value = aumentartStk.toFixed(0);
    aumentartStk = p1_total_spm.value;

  }

}

var entradab1 = 1;
var xdeftemp1 = 0;
var xdeftemp = 0;
var xdef1 = 0;


/* var xdefdelta = 0; */

function timerbom1() {

  //console.log("Si me ejecuto bro");

  xdef1 = parseFloat(document.getElementById("p1_spm").value);
  xdeftemp1 = parseFloat(document.getElementById('calp1_spm').value);

  /* console.log('Inicio ', entradab1, 'xdeftemp: ',xdeftemp, 'xdeftemp1: ', xdeftemp1,'xdef1: ',xdef1); */


  if (entradab1 == 1) {

    if (xdeftemp1 < xdef1) {

      if (xdeftemp > xdef1) {
        xdeftemp = 0;
        xdeftemp = parseFloat(xdeftemp) + parseFloat(xdef1 / 10);
        /* console.log('salida1'); */
      }
      else {
        if (xdef1 >= 40) {
          xdeftemp = parseFloat(xdeftemp) + 10 /* parseFloat(xdef1 / 10) */;
          /* console.log('salida2'); */
        }
        else {
          xdeftemp = parseFloat(xdeftemp) + 1 /* parseFloat(xdef1 / 10) */;
          /* console.log('salida2'); */
        }
      }

      /* console.log('valor ', xdeftemp); */

      if (xdeftemp >= xdef1) {
        xdeftemp = xdef1;
        document.getElementById('calp1_spm').value = xdeftemp;
        killinterval();
        /*         console.log('salida3'); */
      }
      else {
        document.getElementById('calp1_spm').value = xdeftemp;
        /*  console.log('salida4'); */
      }
    }

    if (xdeftemp > xdef1) {
      xdeftemp = 0;
      xdeftemp = parseFloat(xdeftemp) + parseFloat(xdef1 / 10);
      /*    console.log('salida5 Valor: ', xdeftemp); */
    }

    if (xdef1 < xdeftemp1) {
      xdeftemp = xdef1;
      document.getElementById('calp1_spm').value = xdeftemp;
      killinterval();
      /*   console.log('salida6'); */
    }

    if (xdef1 < xdeftemp) {
      document.getElementById('calp1_spm').value = xdef1;
      killinterval();
      /* console.log('salida7'); */
    }

  }
  /* console.log('Final ', entradab1, 'xdeftemp: ',xdeftemp, 'xdeftemp1: ', xdeftemp1,'xdef1: ',xdef1); */
}

function killinterval() {
  clearInterval(tiempob1);
}

//Corre cuando se activa el scroll de las Bombas como resultado visualiza el valor de SPMB1, SPMB2 y SPMBT
const alarmaon = new Audio('audio/PumpPopOff.wav');


// CONVIERTE EL VALOR DEL SCROLL DE 0 A 60
function myFunctionVal() {

  console.log(x.scrollTop + '   --- Aqui el Scroll');

  var xdef = parseInt(x.scrollTop / 34.9);

  document.getElementById("p1_spm").value = xdef;

}

// ESTA FUNCION TAMBIEN VALIDA EL MODVIMIENTO DE LOS GIF DE LODO Y LOS AUDIOS DE BOMBA
function myFunction() {

  var p1 = document.getElementById("p1_spm").value;
  var xdef = parseInt(x.scrollTop / 34.9);
  //console.log(xdef);
  //console.log('bomba activa 1');
  var defaultVal = x.defaultValue;
  var currentVal = xdef;
  var currentop = currentVal / 60;
  var currentsegun = 1000 / currentop;
  clearInterval(counter);

  if (defaultVal == currentVal) {
    document.getElementById("p1_spm").value = xdef;
  } else {
    document.getElementById("p1_spm").value = xdef;
  }

  console.log(currentVal);

  if (currentVal >= 1) {
    counter = setInterval(timer, currentsegun);
    if (flatlodogif == 0) {
      video.src = 'img/lodo.gif';
      flatlodogif = 1;
      audiop1d.play();
      audiop1d.loop = true;
      flag0 = 0;
      flagb0 = 0;
    }

  } else {
    p2 = document.getElementById('p2_spm').value;
    if (flatlodogif == 1 && p2 < 1) {
      video.src = 'img/sinlodo.gif';
      audiop1d.pause();
      flatlodogif = 0;
      flag0 = 1;
    }
  }

  var p1_spm = document.getElementById('p1_spm');
  var p2_spm = document.getElementById('p2_spm');
  var total_spm = document.getElementById('total_spm');
  var suma = Number(p1_spm.value.replace(/[^0-9\.-]+/g, "")) + Number(p2_spm.value.replace(/[^0-9\.-]+/g, ""))
  total_spm.value = suma;
  settotoal();// Toma el valor de SPMT y realiza el contador de SKST


  // ************************************************************************************************************
  // ********************************* GUARDAR EN BASE EN DATOS Y CORRE POROCEDIMIENTOS ALMACENADOS RELACIONADOS 
  // **********************************************************************************************************
  // Guarda SPMB1,calcula flujo y spp

  /*
  var p1 = document.getElementById("p1_spm").value;
  
  if (flatb1php == 0)
  {
    flatb1php = 1;
  $.ajax({

    url: "index_modulo/prueba.php",
    data: {
      p1: p1
    },
    type: "POST",
    async: false,
    succes: flatb1php = 0
  })  
  */
  //************************************************************************************************************
  // ********************************* CONSULTA EN BASE DE DATOS Y LUEGO ACTUALIZA EN WEB (VALORES DE FLUID_VOLUME, PUMPPRESSURE,ECD)
  // **********************************************************************************************************
  /*
  var fluid_volume =
    $.ajax({
      type: "POST",
      url: 'consul_tr/fluid_volume.php',
      data: {
        p1: p1
      },
      dataType: 'text',
      async: false
    }).responseText;
  js = JSON.parse(fluid_volume);
  
  console.log(js[0]);
  
  document.getElementById('fluid_volume').value = js[0];
  document.getElementById('pump_pressure').value = js[1];
  document.getElementById('ecd').value = js[2];

  }*/
}

$('#pumpoff').click(function () {

  if (flatpumoff == 1) {
    document.getElementById('pumpoff').src = "img/pumpoff.png";
    flatpumoff = 0;
  }

})

aumentartStk2 = 0;

function timer2() {

  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {

    aumentartStk2 = (Number(aumentartStk2) + Number(dataspeedt));

    p2_total_spm.value = aumentartStk2.toFixed(0);
    aumentartStk2 = p2_total_spm.value;

  }

}

var entradab2 = 1;
var xdeftemp2 = 0;
var xdeftemp_2 = 0;
var xdef2 = 0;

function timerbom2() {

  xdef2 = parseFloat(document.getElementById("p2_spm").value);
  xdeftemp2 = parseFloat(document.getElementById('calp2_spm').value);

  if (entradab2 == 1) {

    if (xdeftemp2 < xdef2) {

      if (xdeftemp_2 > xdef2) {
        xdeftemp_2 = 0;
        xdeftemp_2 = parseFloat(xdeftemp_2) + parseFloat(xdef2 / 10);
      }
      else {
        if (xdef2 >= 40) {
          xdeftemp_2 = parseFloat(xdeftemp_2) + 10;
        }
        else {
          xdeftemp_2 = parseFloat(xdeftemp_2) + 1;
        }

      }
      if (xdeftemp_2 >= xdef2) {
        xdeftemp_2 = xdef2;
        document.getElementById('calp2_spm').value = xdeftemp_2;
        killinterval2();
      }
      else {
        document.getElementById('calp2_spm').value = xdeftemp_2;
      }
    }

    if (xdeftemp_2 > xdef2) {
      xdeftemp_2 = 0;
      xdeftemp_2 = parseFloat(xdeftemp_2) + parseFloat(xdef2 / 10);
      /* console.log('salida5 Valor: ', xdeftemp); */
    }

    if (xdef2 < xdeftemp2) {
      xdeftemp_2 = xdef2;
      document.getElementById('calp2_spm').value = xdeftemp_2;
      killinterval2();
    }

    if (xdef2 < xdeftemp_2) {
      document.getElementById('calp2_spm').value = xdef2;
      killinterval2();
    }

  }
}


function killinterval2() {
  clearInterval(tiempob2);
}

function flujoBombas() {
  //console.log('la bomba 1 esta en ' + p1_spm.value);
}

function myFunctionVal2() {
  var xdef2 = parseInt(x2.scrollTop / 34.9);

  document.getElementById("p2_spm").value = xdef2;
}

function myFunction2() {
  var xdef2 = parseInt(x2.scrollTop / 34.9);
  var defaultVal2 = x2.defaultValue;
  var currentVal2 = xdef2;
  var currentop2 = currentVal2 / 60;
  var currentsegun2 = 1000 / currentop2;

  /*   if (delta == 0) {
      delta = 300;
    }
    else {
      delta = delta;
    } */
  clearInterval(counter2);
  // clearInterval(tiempob2);
  // if (currentVal2 >= 1) {
  // counter2 = setInterval(timer2, currentsegun2);
  // tiempob2 = setInterval(timerbom2, 1000); 
  // audiop1.play();
  //} else {
  //audiop1.pause();
  // }
  if (defaultVal2 == currentVal2) {
    document.getElementById("p2_spm").value = xdef2;
  } else {
    document.getElementById("p2_spm").value = xdef2;
    // p2_total_spm.value = count2;
  }
  if (currentVal2 >= 1) {
    counter2 = setInterval(timer2, currentsegun2);
    if (flatlodogif == 0) {
      video.src = 'img/lodo.gif';
      flatlodogif = 1;
      audiop1d.play();
      audiop1d.loop = true;
      flag0 = 0;
      flagb0 = 0;
    }
  } else {
    p1 = document.getElementById('p1_spm').value;
    if (flatlodogif == 1 && p1 < 1) {
      video.src = 'img/sinlodo.gif';
      audiop1d.pause();
      flatlodogif = 0;
      flag0 = 1;
    }
    // document.getElementById("calp2_spm").value = 0;
    // xdeftemp_2 = 0;
  }

  /*   // Bloque que valida estado explotion
    if (globbomb2 == "Explotion" && p2 >= 0) {
      if (flatpumoff == 0) {
        alarmaon.play(); 
        document.getElementById('pumpoff').src = "img/pumpoffrojo.png";
        flatpumoff = 1;
      }
    }
    else {
      if (flatpumoff == 1) {
        document.getElementById('pumpoff').src = "img/pumpoff.png";
        flatpumoff = 0;
      }
    }
    // Fin bloque que valida estado explotion */

  var p1_spm = document.getElementById('p1_spm');
  var p2_spm = document.getElementById('p2_spm');
  var total_spm = document.getElementById('total_spm');
  var suma = Number(p1_spm.value.replace(/[^0-9\.-]+/g, "")) + Number(p2_spm.value.replace(/[^0-9\.-]+/g, ""))
  total_spm.value = suma;
  settotoal();


  //************************************************************************************************************
  // ********************************* GUARDAR EN BASE EN DATOS Y CORRE POROCEDIMIENTOS ALMACENADOS RELACIONADOS 
  // **********************************************************************************************************
  // Guarda SPMB2,calcula flujo y spp
  /*

  var p2 = document.getElementById("p2_spm").value;

  if (flatb2php == 0)
  {
    flatb2php = 1;
  $.ajax({
    url: "index_modulo/prueba.php",
    data: {
      p2: p2
    },
    type: "POST",
    async: false,
    succes: flatb2php = 0
  })
*/

  //************************************************************************************************************
  // ********************************* CONSULTA EN BASE DE DATOS Y LUEGO ACTUALIZA EN WEB (VALORES DE FLUID_VOLUME, PUMPPRESSURE,ECD)
  // **********************************************************************************************************
  /*
  var fluid_volume =
    $.ajax({
      type: "POST",
      url: 'consul_tr/fluid_volume.php',
      data: {
        p2: p2
      },
      dataType: 'text',
      async: false
    }).responseText;
  js = JSON.parse(fluid_volume);

  document.getElementById('fluid_volume').value = js[0];
  document.getElementById('pump_pressure').value = js[1];
  document.getElementById('ecd').value = js[2];
  }*/
}


var p1_spm = document.getElementById('p1_spm');
var p2_spm = document.getElementById('p2_spm');
var total_spm = document.getElementById('total_spm');
var suma = Number(p1_spm.value.replace(/[^0-9\.-]+/g, "")) + Number(p2_spm.value.replace(/[^0-9\.-]+/g, ""))
total_spm.value = suma;


function myFunctionVal3() {
  var x3 = document.getElementById("myRange3");
  var xdef3 = parseInt(x3.scrollTop / 34.9);
  document.getElementById("rpm").value = xdef3;
}

function myFunction3() {
  var x3 = document.getElementById("myRange3");
  var xdef3 = parseInt(x3.scrollTop / 34.9);
  var defaultVal3 = x3.defaultValue;
  var currentVal3 = xdef3;
  if (defaultVal3 == currentVal3) {
    document.getElementById("rpm").value = xdef3;
  } else {
    document.getElementById("rpm").value = xdef3;
  }


  if (currentVal3 > 0) {
    if (flattuberiagif == 0) {
      imgdawn.src = "img/gif_tuberia.gif";
      audiop2.play();
      audiop2.loop = true;
      flattuberiagif = 1;
    }
  }
  if (currentVal3 == 0) {
    if (flattuberiagif == 1) {
      document.getElementById("torque").value = 0;
      imgdawn.src = "img/tuberia.png";
      audiop2.pause();
      flattuberiagif = 0;
    }
  }




  // calculoRopTorque();
}

function timertotal() {

  var Pausecb = document.getElementById('cbPause').value;

  if (Pausecb == 0) {

    countt++;
    // = (Number(p1_total_spm.value) + Number(p2_total_spm.value));
    // var total_strokes = document.getElementById('total_strokes').value = countt;
    document.getElementById('total_strokes').value = countt.toFixed(0);

  }
}

// Toma el valor de SPMT y realiza el contador de SKST
function settotoal() {
  var xt = document.getElementById('total_spm');
  var defaultVal = x.defaultValue;
  var currentValu = xt.value;
  var currentopu = currentValu / 60;
  var currentsegunu = 1000 / currentopu;
  var totaltiempo = currentsegunu;
  //console.log(totaltiempo);
  clearInterval(del);
  if (currentValu >= 1) {
    del = setInterval(timertotal, currentsegunu);
    console.log(currentsegunu);
  }

}


function resetp1f() {
  if (perforador.value == 1) {
    var x = document.getElementById("myRange");
    count = 0;
    valord.value = 0;
    aumentartStk = 0;
  }
}


function resetp2f() {
  if (perforador.value == 1) {
    var x2 = document.getElementById("myRange2");
    count2 = 0;
    valord2.value = 0;
    aumentartStk2 = 0;
  }
}


function resetp3f() {
  if (perforador.value == 1) {
    total_strokes.value = 0;
    countt = 0;
  }
}



$('#resetstkpm').click(function () {
  if (perforador.value == 1) {
    total_strokes.value = 0;
    countt = 0;
  } else {

  }
})




// *******************************************************************************************
// ***************************** FIN DE BLOQUE CONTROL DE BOMBAS ****************************+
// **********************************************************************************************


//controla los tiempos de actualizacion de los datos que se guardan tambien controla el cronometro que se ve en la parte de time en la consola
function timeri() {

  var Pausecb = document.getElementById('cbPause').value;

  var startTime = moment().format('x');
  var delta = 0;

  Dataspd = $.ajax({
    url: "index_modulo/speedconsul.php",
    dataType: 'text',
    type: "POST",
    async: false
  }).responseText;

  jspd = JSON.parse(Dataspd);

  dataspeed = jspd[0];
  dataspeedt = dataspeed[0];


  Dataspd = $.ajax({
    url: "index_modulo/speedconsul.php",
    dataType: 'text',
    type: "POST",
    async: false
  }).responseText;

  jspd = JSON.parse(Dataspd);

  dataspeed = jspd[2];
  dataspeedt = dataspeed[0]; /// SELECCION DE TIEMPO EJEMPLO SI ES 1/2/10/20/50

  if (Pausecb == 0) {

    if (perforador.value == 1) {

      milesegundo++;
      if (milesegundo == 3) {
        milesegundo = 0;
        countit = 1 * dataspeedt;
        countip = countit + countip;
      }

      //reset

      if (countip >= 60) {
        countip = countip - 60;
        counti = 0;
        countmini++;
      }
      if (countmini >= 60) {
        countmini = 0;
        counthoursi++;
      }

      timei.value = counthoursi + ':' + countmini + ':' + countip;

      $.ajax({
        url: "index_modulo/pause.php",
        data: {
          counthoursi: counthoursi,
          countmini: countmini,
          countip: countip
        },
        type: "POST"
      })
    }
  }


  //// CONTADOR PARA SIMULAR 1 SEGUNDO

  contador250 = contador250 + 1;

  ///// FUNCION PARA MOVER AGUJA DE CHOKE (PRESION)

  if (ModalChk == 1) {

    globalfluid = document.getElementById('pump_pressure').value;
    document.getElementById('dataglob1').value = globalfluid;

    globalfluid1 = document.getElementById('cassing_pressure').value;
    document.getElementById('dataglob2').value = globalfluid1;

    valorspp2 = document.getElementById('dataglob2').value;
    valorspp1 = document.getElementById('dataglob1').value;
    sumval1 = (valorspp1 * 0.056) + 220;
    sumval2 = (valorspp2 * 0.056) + 220;
    choque1.style.transform = "rotate(" + sumval1 + "deg)";
    choque2.style.transform = "rotate(" + sumval2 + "deg)";
  }


  if (contador250 == 4) {

    //************************************************************************************************************
    // ********************************* CALCULO DE PROFUNDIDAD
    // **********************************************************************************************************

    var hole_depth = document.getElementById('hole_depth').value;
    time = 1;


    var rop = document.getElementById('rop').value;
    var bit_depth = document.getElementById('bit_depth').value;
    var block_high = document.getElementById('block_high').value;
    var a = sola;
    var b = solb;
    var well = 0;

    // console.log(bit_depth, block_high)

    if (Pausecb == 0) {
      $.ajax({
        url: "index_modulo/prueba.php",
        data: {
          WOBteorico: WOBteorico,
          Hlaux: Hlaux,
          wobfisico: wobfisico,
          zeroWob: zeroWob

        },
        type: "POST",
        async: false,
      })
    }


   // console.log(Hlaux + ' DataHlaux' + '   ' + wobfisico + '   ' + WOBteorico + ' zero' + zeroWob);

    if (Pausecb == 0) {

      $.ajax({
        url: "index_modulo/prueba.php",
        data: {
          hole_depth: hole_depth,
          rop: rop,
          block_high: block_high,
          bit_depth: bit_depth,
          time: time,
          well: well,

        },
        type: "POST",
        async: false,
      })

    }

    var p1 = document.getElementById("p1_spm").value; // Bomba 1
    var p2 = document.getElementById("p2_spm").value; // Bomba 2
    var p1total = document.getElementById('p1_total_spm').value;
    var p2total = document.getElementById('p2_total_spm').value;
    var stpmt = document.getElementById('total_spm').value;
    var totalskt = document.getElementById('total_strokes').value;
    var rpm = document.getElementById("rpm").value
    var a = sola;
    var b = solb;

    var suma = Number(p1_spm.value.replace(/[^0-9\.-]+/g, "")) + Number(p2_spm.value.replace(/[^0-9\.-]+/g, ""))
    total_spm.value = suma;

    if (p1 >= 1) {
      if (flatlodogif == 0) {
        video.src = 'img/lodo.gif';
        flatlodogif = 1;
        audiop1d.play();
        audiop1d.loop = true;
        flag0 = 0;
        flagb0 = 0;
      }
    } else {
      if (flatlodogif == 1 && p2 < 1) {
        video.src = 'img/sinlodo.gif';
        audiop1d.pause();
        flatlodogif = 0;
        flag0 = 1;
      }
    }

    if (p2 >= 1) {
      if (flatlodogif == 0) {
        video.src = 'img/lodo.gif';
        audiop1d.play();
        audiop1d.loop = true;
        flatlodogif = 1;
        flag0 = 0;
        flagb0 = 0;
      }

    } else {
      if (flatlodogif == 1 && p1 < 1) {
        video.src = 'img/sinlodo.gif';
        audiop1d.pause();
        flatlodogif = 0;
        flag0 = 1;
      }
    }

    if (rpm > 0) {
      if (flattuberiagif == 0) {
        imgdawn.src = "img/gif_tuberia.gif";
        audiop2.play();
        audiop2.loop = true;
        flattuberiagif = 1;
      }
    }
    if (rpm == 0) {
      if (flattuberiagif == 1) {
        document.getElementById("torque").value = 0;
        imgdawn.src = "img/tuberia.png";
        audiop2.pause();
        flattuberiagif = 0;
      }
    }



    if (Pausecb == 0) {
      if (flag0 == 0) {
        $.ajax({
          url: "index_modulo/prueba.php",
          data: {
            p1: p1,
            p1total: p1total,
            p2: p2,
            p2total: p2total,
            stpmt: stpmt,
            totalskt: totalskt,
            a: a,
            b: b
          },
          type: "POST",
          async: false,
        })
      }
      else {
        if (flagb0 == 0) {
          {
            $.ajax({
              url: "index_modulo/prueba.php",
              data: {
                p1: p1,
                p1total: p1total,
                p2: p2,
                p2total: p2total,
                stpmt: stpmt,
                totalskt: totalskt,
                a: a,
                b: b
              },
              type: "POST",
              async: false,
            })

            flagb0 = 1;
          }
        }
      }
    }

    //************************************************************************************************************
    // ********************************* CONSULTA EN BASE DE DATOS Y LUEGO ACTUALIZA EN WEB (VALORES DE FLUID_VOLUME, PUMPPRESSURE,ECD)
    // **********************************************************************************************************

    cosult1 = 0;

    choque4.value = document.getElementById('total_spm').value;
    choque5.value = total_strokes.value;

    var fluid_volume =
      $.ajax({
        type: "POST",
        url: 'consul_tr/fluid_volume.php',
        data: {
          cosult1: cosult1
        },
        dataType: 'text',
        async: false
      }).responseText;
    js = JSON.parse(fluid_volume);

    document.getElementById('fluid_volume').value = js[0];
    document.getElementById('pump_pressure').value = js[1];
    document.getElementById('ecd').value = Number(js[2]).toFixed(2);
    document.getElementById('cassing_pressure').value = Number(js[7]).toFixed(0);


    if (js[4] == 'Explotion' && p1 > 0) {
      document.getElementById('p1_spm').value = 0;
      document.getElementById('myRange').scrollTop = 0;
      document.getElementById('pumpoff').src = "img/pumpoffrojo.png";
      video.src = 'img/sinlodo.gif';
      audiop1d.pause();
      alarmaon.play();
      globbomb1 = js[4];

    }
    else {
      globbomb1 = js[4]; // estado de bomba 1 (Explotion,Bombeando y Desfogue)

    }


    if (js[5] == 'Explotion' && p2 > 0) {
      document.getElementById('p2_spm').value = 0;
      document.getElementById('myRange2').scrollTop = 0;
      document.getElementById('pumpoff').src = "img/pumpoffrojo.png";
      video.src = 'img/sinlodo.gif';
      audiop1d.pause();
      alarmaon.play();

      globbomb2 = js[5];

    }
    else {
      globbomb2 = js[5]; // estado de bomba 2 (Explotion,Bombeando y Desfogue)

    }


    ////// ESTE BLOQUE VALIDA TODOS LOS POSIBLES ESTADOS DE BOMBAS Y SUS RESPECTIVOS PROCESOS DE ACUERDO AL ESTADO //////////////


    if (globbomb1 == "Explotion" && globbomb2 == "Explotion") { /// Estado ded bomba 1 y 2 en explotion 

      if (p1 > 0) {
        document.getElementById('p2_spm').value = 0;
        document.getElementById('pumpoff').src = "img/pumpoffrojo.png";
        video.src = 'img/sinlodo.gif';
        audiop1d.pause();
        alarmaon.play();
        flatpumoff = 1;
      }

      if (p2 > 0) {
        document.getElementById('p2_spm').value = 0;
        document.getElementById('pumpoff').src = "img/pumpoffrojo.png";
        video.src = 'img/sinlodo.gif';
        audiop1d.pause();
        alarmaon.play();
        flatpumoff = 1;
      }

    }

    if (globbomb1 == "Bombeando" && globbomb2 == "Explotion" || globbomb1 == "Desfogue" && globbomb2 == "Explotion") { // Estado de b 1 en desfogue o bombeando y estado bomba 2 en explotion 

      if (p2 > 0) {
        document.getElementById('p2_spm').value = 0;
        document.getElementById('pumpoff').src = "img/pumpoffrojo.png";
        video.src = 'img/sinlodo.gif';
        audiop1d.pause();

        alarmaon.play();
        flatpumoff = 1;
      }

      else if (flatpumoff == 1) {
        document.getElementById('p1_spm').value = 0;
        document.getElementById('p2_spm').value = 0;
        $("#myRange").scrollTop(0);
        $("#myRange2").scrollTop(0);
        // document.getElementById('myRange1').scrollTop = 0;
        document.getElementById('pumpoff').src = "img/pumpoffrojo.png";
        video.src = 'img/sinlodo.gif';
        audiop1d.pause();
      }

      else if (p1 > 0) {
        video.src = 'img/lodo.gif';
        audiop1d.play();
        audiop1d.loop = true;
      }


    }

    if (globbomb2 == "Bombeando" && globbomb1 == "Explotion" || globbomb2 == "Desfogue" && globbomb1 == "Explotion") {

      if (p1 > 0) {
        document.getElementById('p1_spm').value = 0;
        document.getElementById('pumpoff').src = "img/pumpoffrojo.png";
        video.src = 'img/sinlodo.gif';
        audiop1d.pause();
        alarmaon.play();
      }

      else if (flatpumoff == 1) {
        document.getElementById('p1_spm').value = 0;
        document.getElementById('p2_spm').value = 0;
        $("#myRange").scrollTop(0);
        $("#myRange2").scrollTop(0);
        // document.getElementById('myRange1').scrollTop = 0;
        document.getElementById('pumpoff').src = "img/pumpoffrojo.png";
        video.src = 'img/sinlodo.gif';
        audiop1d.pause();
      }

      if (p2 > 0) {
        video.src = 'img/lodo.gif';
        audiop1d.play();
        audiop1d.loop = true;
      }
    }

    if (globbomb1 == "Bombeando" && globbomb2 == "Bombeando" || globbomb1 == "Desfogue" && globbomb2 == "Desfogue") {
      if (p1 > 0) {
        video.src = 'img/lodo.gif';
        audiop1d.play();
        audiop1d.loop = true;
      }

      if (p2 > 0) {
        video.src = 'img/lodo.gif';
        audiop1d.play();
        audiop1d.loop = true;
      }
    }


    ///////////////////// FIN DE BLOQUE VALIDACION ESTADO BOMBAS //////////////////////////////////////////////////


    // Valdiar valores de barras para progreso negativo o positivo 

    gainloss = parseFloat(js[3]);
    flowret = parseFloat(js[6]);

    document.getElementById('Gain LossG').innerHTML = 'Gain Loss: ' + gainloss.toFixed(1);

    document.getElementById('return_flow').value = flowret.toFixed(1);
    document.getElementById('gain').value = gainloss.toFixed(1);

    GainData = Math.sign(gainloss);
    FlowretData = Math.sign(flowret);

    if (GainData == -1) {
      document.getElementById('progresbar').value = 0;
      PosiDataG = Math.abs(gainloss);
      document.getElementById('progresbar3').value = PosiDataG;
    }
    else {
      document.getElementById('progresbar3').value = 0;
      PosiDataG = Math.abs(gainloss);
      document.getElementById('progresbar').value = PosiDataG;
    }

    if (FlowretData == -1) {
      document.getElementById('progresbar2').value = 0;
    }
    else {
      document.getElementById('progresbar2').value = flowret;
    }


    // Bloque que actualiza la tabla del boton Depth
    arryD1 = js[8];
    arryD2 = js[9];
    arryD3 = js[10];
    arryD4 = js[11];
    arryD5 = js[12];
    arryD6 = js[13];

    document.getElementById('td1').innerText = arryD1[0];
    document.getElementById('td2').innerText = arryD1[1];
    document.getElementById('td3').innerText = arryD1[2];

    document.getElementById('td4').innerText = arryD2[0];
    document.getElementById('td5').innerText = arryD2[1];
    document.getElementById('td6').innerText = arryD2[2];

    document.getElementById('td7').innerText = arryD3[0];
    document.getElementById('td8').innerText = arryD3[1];
    document.getElementById('td9').innerText = arryD3[2];

    document.getElementById('td10').innerText = arryD4[0];
    document.getElementById('td11').innerText = arryD4[1];
    document.getElementById('td12').innerText = arryD4[2];

    document.getElementById('td13').innerText = arryD5[0];
    document.getElementById('td14').innerText = arryD5[1];
    document.getElementById('td15').innerText = arryD5[2];

    document.getElementById('td16').innerText = arryD6[0];
    document.getElementById('td17').innerText = arryD6[1];
    document.getElementById('td18').innerText = arryD6[2];

    if (perforador.value == 1) {
      increasePerfora();
      calculoRopTorque();
      // ************************************************************************************************************
      // ********************************* GUARDAR EN BASE EN DATOS Y CORRE POROCEDIMIENTOS ALMACENADOS RELACIONADOS 
      // **********************************************************************************************************
      // Copia la tabla Var_rt en time_rt
      time = 0;
      rpm = document.getElementById('rpm').value;

      $.ajax({

        url: "index_modulo/prueba.php",
        data: {
          time: time,
          rpm: rpm
        },
        type: "POST",
        async: false
      })


      // Guarda SPMB1,calcula flujo y spp

      if (flatb1php == 0) {
        if (p1 == flatb1s1) {
        }
        else {
          flatb1s1 = p1;
          flatb1php = 1;
          if (Pausecb == 0) {
            if (flag0 == 0) {
              $.ajax({
                url: "index_modulo/prueba.php",
                data: {
                  p1: p1
                },
                type: "POST",
                async: false,
                succes: flatb1php = 0
              })
            }
            else {
              if (flagb0 == 0) {
                $.ajax({
                  url: "index_modulo/prueba.php",
                  data: {
                    p1: p1
                  },
                  type: "POST",
                  async: false,
                  succes: flatb1php = 0
                })
                flagb0 = 1;
              }
            }
          }
          //************************************************************************************************************
          // ********************************* CONSULTA EN BASE DE DATOS Y LUEGO ACTUALIZA EN WEB (VALORES DE FLUID_VOLUME, PUMPPRESSURE,ECD)
          // **********************************************************************************************************

          var fluid_volume =
            $.ajax({
              type: "POST",
              url: 'consul_tr/fluid_volume.php',
              data: {
                p1: p1
              },
              dataType: 'text',
              async: false
            }).responseText;
          js = JSON.parse(fluid_volume);
          document.getElementById('fluid_volume').value = js[0];
          document.getElementById('pump_pressure').value = js[1];
          document.getElementById('ecd').value = js[2];
        }

      }

      if (flatb2php == 0) {
        if (p2 == flatb2s1) { }
        else {
          flatb2php = 1;
          flatb2s1 = p2;
          if (Pausecb == 0) {
            if (flag0 == 0) {
              $.ajax({
                url: "index_modulo/prueba.php",
                data: {
                  p2: p2
                },
                type: "POST",
                async: false,
                succes: flatb2php = 0
              })
            }
            else {
              if (flagb0 == 0) {
                $.ajax({
                  url: "index_modulo/prueba.php",
                  data: {
                    p2: p2
                  },
                  type: "POST",
                  async: false,
                  succes: flatb2php = 0
                })
                flagb0 = 1;
              }
            }
          }

          //************************************************************************************************************
          // ********************************* CONSULTA EN BASE DE DATOS Y LUEGO ACTUALIZA EN WEB (VALORES DE FLUID_VOLUME, PUMPPRESSURE,ECD)
          // **********************************************************************************************************

          var fluid_volume =
            $.ajax({
              type: "POST",
              url: 'consul_tr/fluid_volume.php',
              data: {
                p2: p2
              },
              dataType: 'text',
              async: false
            }).responseText;
          js = JSON.parse(fluid_volume);

          document.getElementById('fluid_volume').value = js[0];
          document.getElementById('pump_pressure').value = js[1];
          document.getElementById('ecd').value = js[2];
        }


      }

      // mostrarTR();
      /* save(); */
    }

    /////// BLOQUE PARA ALARMAS

    alarmdata2();

    /////////// BLOQUE PARA VALVULAS

    var pumpdata =
      $.ajax({
        url: 'bop_modulo/bopmini/llamardatamini.php',
        dataType: 'text',
        async: false
      }).responseText;

    var jsval = JSON.parse(pumpdata);
    var vl1 = jsval[0];
    var vl2 = jsval[1];
    var vl3 = jsval[2];
    var vl4 = jsval[3];
    var vl5 = jsval[4];
    var vl6 = jsval[5];
    var vl7 = jsval[6];
    var vl8 = jsval[7];
    var vl9 = jsval[8];
    var vl10 = jsval[9];
    var vl11 = jsval[10];
    var vl12 = jsval[11];
    var vl13 = jsval[12];
    var vl14 = jsval[13];
    var vl15 = jsval[14];
    var vl16 = jsval[15];
    var vl17 = jsval[16];
    var vl18 = jsval[17];
    var vl19 = jsval[18];
    var vl20 = jsval[19];
    var vl21 = jsval[20];
    var vl22 = jsval[21];
    var vl23 = jsval[22];
    var vl24 = jsval[23];
    var vl25 = jsval[24];
    var vl26 = jsval[25];
    var vl27 = jsval[26];
    var vl28 = jsval[27];
    var vl29 = jsval[28];
    var vl30 = jsval[29];
    var vl31 = jsval[30];
    var vl32 = jsval[31];
    var vl33 = jsval[32];
    var vl34 = jsval[33];
    var vl35 = jsval[34];
    var vl36 = jsval[35];

    if (vl1 == 1) {
      document.getElementById('vv1').src = 'img/valvulaoffmin.png';
    } else {
      document.getElementById('vv1').src = 'img/valvulaonmin.png';
    }

    if (vl2 == 1) {

      document.getElementById('vv2').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv2').src = 'img/valvulaonmin.png';
    }



    if (vl3 == 1) {

      document.getElementById('vv3').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv3').src = 'img/valvulaonmin.png';
    }


    if (vl4 == 1) {

      document.getElementById('vv4').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv4').src = 'img/valvulaonmin.png';
    }


    if (vl5 == 1) {

      document.getElementById('vv5').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv5').src = 'img/valvulaonmin.png';
    }
    if (vl6 == 1) {

      document.getElementById('vv6').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv6').src = 'img/valvulaonmin.png';
    }

    if (vl7 == 1) {

      document.getElementById('vv7').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv7').src = 'img/valvulaonmin.png';
    }
    if (vl8 == 1) {

      document.getElementById('vv8').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv8').src = 'img/valvulaonmin.png';
    }
    if (vl9 == 1) {

      document.getElementById('vv9').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv9').src = 'img/valvulaonmin.png';
    }

    if (vl10 == 1) {

      document.getElementById('vv10').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv10').src = 'img/valvulaonmin.png';
    }


    if (vl11 == 1) {

      document.getElementById('vv11').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv11').src = 'img/valvulaonmin.png';
    }

    if (vl12 == 1) {

      document.getElementById('vv12').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv12').src = 'img/valvulaonmin.png';
    }
    if (vl13 == 1) {

      document.getElementById('vv13').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv13').src = 'img/valvulaonmin.png';
    }

    if (vl14 == 1) {

      document.getElementById('vv14').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv14').src = 'img/valvulaonmin.png';
    }
    if (vl15 == 1) {

      document.getElementById('vv15').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv15').src = 'img/valvulaonmin.png';
    }
    if (vl16 == 1) {

      document.getElementById('vv16').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv16').src = 'img/valvulaonmin.png';
    }

    if (vl17 == 1) {

      document.getElementById('vv17').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv17').src = 'img/valvulaonmin.png';
    }


    if (vl18 == 1) {

      document.getElementById('vv18').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv18').src = 'img/valvulaonmin.png';
    }

    if (vl19 == 1) {

      document.getElementById('vv19').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv19').src = 'img/valvulaonmin.png';
    }

    if (vl20 == 1) {

      document.getElementById('vv20').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv20').src = 'img/valvulaonmin.png';
    }


    if (vl21 == 1) {

      document.getElementById('vv21').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv21').src = 'img/valvulaonmin.png';
    }


    if (vl22 == 1) {

      document.getElementById('vv22').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv22').src = 'img/valvulaonmin.png';
    }

    if (vl23 == 1) {

      document.getElementById('vv23').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv23').src = 'img/valvulaonmin.png';
    }

    if (vl24 == 1) {

      document.getElementById('vv24').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv24').src = 'img/valvulaonmin.png';
    }

    if (vl25 == 1) {

      document.getElementById('vv25').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv25').src = 'img/valvulaonmin.png';
    }
    if (vl26 == 1) {

      document.getElementById('vv26').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv26').src = 'img/valvulaonmin.png';
    }
    if (vl27 == 1) {

      document.getElementById('vv27').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv27').src = 'img/valvulaonmin.png';
    }

    if (vl28 == 1) {

      document.getElementById('vv28').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv28').src = 'img/valvulaonmin.png';
    }

    if (vl29 == 1) {

      document.getElementById('vv29').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv29').src = 'img/valvulaonmin.png';
    }


    if (vl30 == 1) {

      document.getElementById('vv30').src = 'img/valvulaoffmin.png';
    } else {

      document.getElementById('vv30').src = 'img/valvulaonmin.png';
    }

    if (vl31 == 0) {
      document.getElementById('axul').innerHTML = '.';
      document.getElementById("axul").style.backgroundColor = "red";

    } else {
      document.getElementById('axul').innerHTML = '.';
      document.getElementById("axul").style.backgroundColor = "green";

    }


    if (vl32 == 0) {
      document.getElementById('axul2').innerHTML = '.';
      document.getElementById("axul2").style.backgroundColor = "red";

    } else {
      document.getElementById('axul2').innerHTML = '.';
      document.getElementById("axul2").style.backgroundColor = "green";
    }

    if (vl33 == 0) {
      document.getElementById('axul3').innerHTML = '.';
      document.getElementById("axul3").style.backgroundColor = "red";

    } else {
      document.getElementById('axul3').innerHTML = '.';
      document.getElementById("axul3").style.backgroundColor = "green";
    }


    if (vl34 == 0) {
      document.getElementById('axul4').innerHTML = '.';
      document.getElementById("axul4").style.backgroundColor = "red";

    } else {
      document.getElementById('axul4').innerHTML = '.';
      document.getElementById("axul4").style.backgroundColor = "green";
    }

    if (vl35 == 0) {
      document.getElementById('palancakill').src = 'img/Palancaclose.png';
      document.getElementById('palancakill').style.left = "57px"

    } else {
      document.getElementById('palancakill').src = 'img/Palancaopen.png';
      document.getElementById('palancakill').style.left = "53px"
    }

    if (vl36 == 0) {

      document.getElementById('palanchoque').src = 'img/Palancaclose.png';
      document.getElementById('palanchoque').style.left = "147px"

    } else {
      document.getElementById('palanchoque').src = 'img/Palancaopen.png';
      document.getElementById('palanchoque').style.left = "142px"
    }


    contador250 = 0;
  }
  /// FIN FUNCION 

}


function tiempoeje() {

}

var startTime = moment().format('x');
var delta = 0;

function save() {
  var a = sola;
  var b = solb;
  var p1 = document.getElementById('calp1_spm').value;
  var p1total = document.getElementById('p1_total_spm').value;
  var p2 = document.getElementById('calp2_spm').value;
  var p2total = document.getElementById('p2_total_spm').value;
  var stpmt = document.getElementById('total_spm').value;
  var totalskt = document.getElementById('total_strokes').value;
  var hole_depth = document.getElementById('hole_depth').value;
  var rop = document.getElementById('rop').value;
  var bit_depth = document.getElementById('bit_depth').value;
  var cassing_pressure = document.getElementById('cassing_pressure').value;
  var fluid_volume = document.getElementById('fluid_volume').value;
  var pump_pressure = document.getElementById('pump_pressure').value;
  var rpm = document.getElementById('rpm').value;
  var torque = document.getElementById('torque').value;
  var time = document.getElementById('time').value;
  var block_high = document.getElementById('block_high').value;
  var zeroWob = document.getElementById("zeroWob").value;
  var cuñas = document.getElementById("cuñas").value;

  //actualiza el estado de las bombas en forma global
  //fin actualiza el estado de las bombas en forma global

  var Pausecb = document.getElementById('cbPause').value;

  $.ajax({
    url: "index_modulo/prueba.php",
    data: {
      a: a,
      b: b,
      p1: p1,
      p1total: p1total,
      p2: p2,
      p2total: p2total,
      stpmt: stpmt,
      totalskt: totalskt,
      rpm: rpm,
      block_high: block_high,
      hole_depth: hole_depth,
      rop: rop,
      bit_depth: bit_depth,
      cassing_pressure: cassing_pressure,
      fluid_volume: fluid_volume,
      pump_pressure: pump_pressure,
      torque: torque,
      zeroWob: zeroWob,
      cuñas: cuñas,
      time: time,
      pause: Pausecb
    },
    type: "POST",
    success: function (datos) {
      $("#rchan").value = 'holakase';
    }
  })


  /*  var begin=Date.now();   
 console.time("Eje3");
*/

  /*     console.timeEnd("Eje3");  */
  /*   var endTime = moment().format('x'); */
  // var end= Date.now();

  /*   delta = endTime - startTime; */
  /* var timeSpent=(end-begin)/1000; */

  /* 
    startTime = moment().format('x'); */
  // startTime 


  /*       console.timeEnd("Eje3"); 
        var endTime = moment().format('x');
        var end= Date.now();
        
        var delta = endTime-startTime;
        var timeSpent=(end-begin)/1000; */

  /* console.log(delta); */

  /*   $.ajax({
      url: "index_modulo/pause.php",
      data: {
        Tiempo: delta
      },
      type: "POST"
    }) */

}

var globbomb1;
var globbomb2;
var globalcassing;
var globalstk;
var globalfluid;
var globaltotalstk;
var flatgif = 1;

function mostrarTR() {

  datarol = 0;

  var fluid_volume =
    $.ajax({
      type: "POST",
      url: 'consul_tr/fluid_volume.php',
      dataType: 'text',
      data: {
        datarol: datarol
      },
      async: false
    }).responseText;
  js = JSON.parse(fluid_volume);

  if (js[0] == "") {
    js[0] = 0;
  }
  if (js[1] == "") {
    js[1] = 0;
  }

  //// DATOS DE CONSOLA
  document.getElementById('fluid_volume').value = js[0];
  document.getElementById('pump_pressure').value = js[1];
  document.getElementById('ecd').value = js[2];
  document.getElementById('p1_spm').value = js[3];
  document.getElementById('p2_spm').value = js[4];
  document.getElementById('p1_total_spm').value = js[5];
  document.getElementById('p2_total_spm').value = js[6];
  document.getElementById('total_strokes').value = js[7];
  document.getElementById('total_spm').value = js[8];
  document.getElementById('block_high').value = js[9];
  document.getElementById('show_hole').value = js[10];
  document.getElementById('hole_depth').value = js[10];
  document.getElementById('rop').value = js[11];
  document.getElementById('show_depth').value = js[12];
  document.getElementById('bit_depth').value = js[12];
  document.getElementById('rpm').value = js[13];


  // GIFS
  if (document.getElementById('p1_spm').value > 0 || document.getElementById('p1_spm').value > 0) {
    video.src = 'img/lodo.gif';
    audiop1d.play();
    audiop1d.loop = true;
  }

  if (document.getElementById('p1_spm').value == 0) {
    if (document.getElementById('p2_spm').value == 0) {
      video.src = 'img/sinlodo.gif';
      audiop1d.pause();
    }
  }

  //// WOB

  agujauno.style.transform = "rotate(" + js[14] + "deg)";
  agujados.style.transform = "rotate(" + ((js[15] * 0.72) + 180) + "deg)";


  ///// BAJADA DEL TALADRO
  var block_highcount = document.getElementById("block_high").value;
  var sum = block_highcount * 21.21;
  imgdawn.style.marginTop = "" + -sum + "px";

  if (js[13] > 0) {
    imgdawn.src = "img/gif_tuberia.gif";
  }
  else {
    imgdawn.src = "img/tuberia.png";
  }

  //// CUÑAS

  var cuñasmtr = js[16];

  if (cuñasmtr == 1) {
    document.images['stop'].src = mi_imagen1.src;
  }
  if (cuñasmtr == 0) {
    document.images['stop'].src = mi_imagen2.src;
  }

  //// TIEMPO

  timei.value = js[17] + ':' + js[18] + ':' + js[19];


  ///// GIF DE CONEXION 

  if (js[20] == 1) {

    if (flatgif == 1) {
      imgdawn.src = "";

      imgdawn.src = "img/soltandotu.gif";

      imgdawn.src = "";

      ironr.src = "img/ironrunner.gif";

      document.getElementById('ironraux').src = "";

      setTimeout(function () {

        imgdawn.src = "img/tuberia.png";

        ironr.src = "";

        document.getElementById('ironraux').src = "img/ironquieto.png";

      }, 16000);

      flatgif = 1;

    }

    flatgif = 0;
  }


}

var flagaudi = 0;

$('#muteall').click(function () {

  if (flagaudi == 0) {
    audiop1.volume = 0;
    audiop1d.volume = 0;
    audiop2.volume = 0;
    audiop3.volume = 0;
    audiop4.volume = 0;
    audiop5.volume = 0;
    audioalar.volume = 0;
    flagaudi = 1;
  }

  btnmute = document.getElementById('muteall')
  btnmute.style.background = 'GREEN'

  setTimeout(() => {
    btnmute = document.getElementById('muteall')
    btnmute.style.background = 'RED'
  }, 1000);



})

$('#nomute').click(function () {

  if (flagaudi == 1) {
    audiop1.volume = 1;
    audiop1d.volume = 1;
    audiop2.volume = 1;
    audiop3.volume = 1;
    audiop4.volume = 1;
    audiop5.volume = 1;
    audioalar.volume =1;
    flagaudi = 0;
  }

  btnnomute = document.getElementById('nomute')
  btnnomute.style.background = 'RED'

  setTimeout(() => {
    btnnomute = document.getElementById('nomute')
    btnnomute.style.background = 'GREEN'
  }, 1000);

})

$('#stopall').click(function () {
  // clearInterval(setinttime);
})

if (document.getElementById("modmute")) {
  var modalmute = document.getElementById("tvesModalmute");
  var btnmute = document.getElementById("modmute");
  var spanmute = document.getElementsByClassName("close2")[0];
  var bodymute = document.getElementsByTagName("body")[0];

  btnmute.onclick = function () {
    modalmute.style.display = "block";

    bodymute.style.position = "static";
    bodymute.style.height = "100%";
    bodymute.style.overflow = "hidden";
  }

  spanmute.onclick = function () {
    modalmute.style.display = "none";

    bodymute.style.position = "inherit";
    bodymute.style.height = "auto";
    bodymute.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modalmute) {
      modalmute.style.display = "none";

      bodymute.style.position = "inherit";
      bodymute.style.height = "auto";
      bodymute.style.overflow = "visible";
    }
  }
}
if (document.getElementById("btnModal2")) {
  var modaldw = document.getElementById("tvesModal2");
  var btndw = document.getElementById("btnModal2");
  var spandw = document.getElementsByClassName("close2")[1];
  var bodydw = document.getElementsByTagName("body")[1];

  btndw.onclick = function () {
    modaldw.style.display = "block";

    bodydw.style.position = "static";
    bodydw.style.height = "100%";
    bodydw.style.overflow = "hidden";
  }

  spandw.onclick = function () {
    modaldw.style.display = "none";

    bodydw.style.position = "inherit";
    bodydw.style.height = "auto";
    bodydw.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modaldw) {
      modaldw.style.display = "none";

      bodydw.style.position = "inherit";
      bodydw.style.height = "auto";
      bodydw.style.overflow = "visible";
    }
  }
}
if (document.getElementById("btnModalwell")) {
  var modalwell = document.getElementById("tvesModalwell");
  var btnwell = document.getElementById("btnModalwell");
  var spanwell = document.getElementsByClassName("close2")[2];
  var bodywell = document.getElementsByTagName("body")[2];

  btnwell.onclick = function () {
    modalwell.style.display = "block";

    bodywell.style.position = "static";
    bodywell.style.height = "100%";
    bodywell.style.overflow = "hidden";
  }

  spanwell.onclick = function () {
    modalwell.style.display = "none";
    bodywell.style.position = "inherit";
    bodywell.style.height = "auto";
    bodywell.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modalwell) {
      modalwell.style.display = "none";

      bodywell.style.position = "inherit";
      bodywell.style.height = "auto";
      bodywell.style.overflow = "visible";
    }
  }
}
if (document.getElementById("btnModalun")) {
  var modalun = document.getElementById("tvesModalun");
  var btnun = document.getElementById("btnModalun");
  var spanun = document.getElementsByClassName("close2")[3];
  var bodyun = document.getElementsByTagName("body")[3];

  btnun.onclick = function () {
    modalun.style.display = "block";

    bodyun.style.position = "static";
    bodyun.style.height = "100%";
    bodyun.style.overflow = "hidden";
  }

  spanun.onclick = function () {
    modalun.style.display = "none";

    bodyun.style.position = "inherit";
    bodyun.style.height = "auto";
    bodyun.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modalun) {
      modalun.style.display = "none";

      bodyun.style.position = "inherit";
      bodyun.style.height = "auto";
      bodyun.style.overflow = "visible";
    }
  }
}
if (document.getElementById("btnModalgr")) {
  var modalgr = document.getElementById("tvesModalgr");
  var btngr = document.getElementById("btnModalgr");
  var spangr = document.getElementsByClassName("close2")[4];
  var bodygr = document.getElementsByTagName("body")[4];

  btngr.onclick = function () {
    modalgr.style.display = "block";

    bodygr.style.position = "static";
    bodygr.style.height = "100%";
    bodygr.style.overflow = "hidden";
  }

  spangr.onclick = function () {
    modalgr.style.display = "none";

    bodygr.style.position = "inherit";
    bodygr.style.height = "auto";
    bodygr.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modalgr) {
      modalgr.style.display = "none";

      bodygr.style.position = "inherit";
      bodygr.style.height = "auto";
      bodygr.style.overflow = "visible";
    }
  }
}

if (document.getElementById("btnModalset")) {
  var modalset = document.getElementById("tvesModalset");
  var btnset = document.getElementById("btnModalset");
  var spanset = document.getElementsByClassName("close2")[5];
  var bodyset = document.getElementsByTagName("body")[5];

  btnset.onclick = function () {
    modalset.style.display = "block";

    bodyset.style.position = "static";
    bodyset.style.height = "100%";
    bodyset.style.overflow = "hidden";
  }

  spanset.onclick = function () {
    modalset.style.display = "none";

    bodyset.style.position = "inherit";
    bodyset.style.height = "auto";
    bodyset.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modalset) {
      modalset.style.display = "none";

      bodyset.style.position = "inherit";
      bodyset.style.height = "auto";
      bodyset.style.overflow = "visible";
    }
  }
}

if (document.getElementById("btnModalalarm")) {
  var modalalarm = document.getElementById("tvesModalalarm");
  var btnalarm = document.getElementById("btnModalalarm");
  var spanalarm = document.getElementsByClassName("close2")[6];
  //  var bodyalarm = document.getElementsByTagName("body")[6];

  btnalarm.onclick = function () {
    modalalarm.style.display = "block";
    // bodyalarm.style.position = "static";
    // bodyalarm.style.height = "100%";
    // bodyalarm.style.overflow = "hidden";
  }

  spanalarm.onclick = function () {
    modalalarm.style.display = "none";
    //bodyalarm.style.position = "inherit";
    //bodyalarm.style.height = "auto";
    //bodyalarm.style.overflow = "visible";
  }
}

if (document.getElementById("btnModalpause")) {
  var modalpause = document.getElementById("tvesModalpause");
  var btnpause = document.getElementById("btnModalpause");
  var spanpause = document.getElementsByClassName("close2")[9];
  var bodypause = document.getElementsByTagName("body")[9];

  btnpause.onclick = function () {
    modalpause.style.display = "block";

    bodypause.style.position = "static";
    bodypause.style.height = "100%";
    bodypause.style.overflow = "hidden";
  }

  spanpause.onclick = function () {
    modalpause.style.display = "none";

    bodypause.style.position = "inherit";
    bodypause.style.height = "auto";
    bodypause.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modalpause) {
      modalpause.style.display = "none";

      bodypause.style.position = "inherit";
      bodypause.style.height = "auto";
      bodypause.style.overflow = "visible";
    }
  }
}

if (document.getElementById("btnModalcir")) {
  var modalcir = document.getElementById("tvesModalcir");
  var btncir = document.getElementById("btnModalcir");
  var spancir = document.getElementsByClassName("close2")[8];
  var bodycir = document.getElementsByTagName("body")[8];

  btncir.onclick = function () {
    modalcir.style.display = "block";

    bodycir.style.position = "static";
    bodycir.style.height = "100%";
    bodycir.style.overflow = "hidden";
  }

  spancir.onclick = function () {
    modalcir.style.display = "none";

    bodycir.style.position = "inherit";
    bodycir.style.height = "auto";
    bodycir.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modalcir) {
      modalcir.style.display = "none";

      bodycir.style.position = "inherit";
      bodycir.style.height = "auto";
      bodycir.style.overflow = "visible";
    }
  }
}

if (document.getElementById("btnModalhd")) {
  var modalhd = document.getElementById("tvesModalhd");
  var btnhd = document.getElementById("btnModalhd");
  var spanhd = document.getElementsByClassName("close2")[7];
  var bodyhd = document.getElementsByTagName("body")[7];

  btnhd.onclick = function () {
    modalhd.style.display = "block";

    bodyhd.style.position = "static";
    bodyhd.style.height = "100%";
    bodyhd.style.overflow = "hidden";
  }

  spanhd.onclick = function () {
    modalhd.style.display = "none";

    bodyhd.style.position = "inherit";
    bodyhd.style.height = "auto";
    bodyhd.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modalhd) {
      modalhd.style.display = "none";

      bodyhd.style.position = "inherit";
      bodyhd.style.height = "auto";
      bodyhd.style.overflow = "visible";
    }
  }
}

if (document.getElementById("btnModalupdate")) {
  var modalupdate = document.getElementById("tvesModalupdate");
  var btnupdate = document.getElementById("btnModalupdate");
  var spanupdate = document.getElementsByClassName("close2")[10];
  var bodyupdate = document.getElementsByTagName("body")[10];

  btnupdate.onclick = function () {
    modalupdate.style.display = "block";
    /* 
        bodyupdate.style.position = "static";
        bodyupdate.style.height = "100%";
        bodyupdate.style.overflow = "hidden"; */
  }

  spanupdate.onclick = function () {
    modalupdate.style.display = "none";
    /*     bodyupdate.style.position = "inherit";
        bodyupdate.style.height = "auto";
        bodyupdate.style.overflow = "visible"; */
  }

  window.onclick = function (event) {
    if (event.target == modalupdate) {
      modalupdate.style.display = "none";

      /*       bodyupdate.style.position = "inherit";
            bodyupdate.style.height = "auto";
            bodyupdate.style.overflow = "visible"; */
    }
  }
}

if (document.getElementById("btnModalmss")) {
  var modalmss = document.getElementById("tvesModalmss");
  var btnmss = document.getElementById("btnModalmss");
  var spanmss = document.getElementsByClassName("close2")[11];
  var bodymss = document.getElementsByTagName("body")[11];

  btnmss.onclick = function () {
    modalmss.style.display = "block";

    bodymss.style.position = "static";
    bodymss.style.height = "100%";
    bodymss.style.overflow = "hidden";
  }

  spanmss.onclick = function () {
    modalmss.style.display = "none";

    bodymss.style.position = "inherit";
    bodymss.style.height = "auto";
    bodymss.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modalmss) {
      modalmss.style.display = "none";

      bodymss.style.position = "inherit";
      bodymss.style.height = "auto";
      bodymss.style.overflow = "visible";
    }
  }
}

if (document.getElementById("btnModalstart")) {
  var modalstart = document.getElementById("tvesModalstart");
  var btnstart = document.getElementById("btnModalstart");
  var spanstart = document.getElementsByClassName("close2")[12];
  // var bodystart = document.getElementsByTagName("body")[11];

  btnstart.onclick = function () {
    modalstart.style.display = "block";
    // bodystart.style.position = "static";
    // bodystart.style.height = "100%";
    // bodystart.style.overflow = "hidden";
  }

  spanstart.onclick = function () {
    modalstart.style.display = "none";
    // bodystart.style.position = "inherit";
    // bodystart.style.height = "auto";
    // bodystart.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modalstart) {
      modalstart.style.display = "none";
      // bodystart.style.position = "inherit";
      // bodystart.style.height = "auto";
      // bodystart.style.overflow = "visible";
    }
  }
}

if (document.getElementById("btnModalinfo")) {
  var modalinfo = document.getElementById("tvesModalinfo");
  var btninfo = document.getElementById("btnModalinfo");
  var spaninfo = document.getElementsByClassName("close2")[13];
  var bodyinfo = document.getElementsByTagName("body")[13];

  btninfo.onclick = function () {
    modalinfo.style.display = "block";
    bodyinfo.style.position = "static";
    bodyinfo.style.height = "100%";
    bodyinfo.style.overflow = "hidden";
  }

  spaninfo.onclick = function () {
    modalinfo.style.display = "none";

    bodyinfo.style.position = "inherit";
    bodyinfo.style.height = "auto";
    bodyinfo.style.overflow = "visible";
  }

  window.onclick = function (event) {
    if (event.target == modalinfo) {
      modalinfo.style.display = "none";

      bodyinfo.style.position = "inherit";
      bodyinfo.style.height = "auto";
      bodyinfo.style.overflow = "visible";
    }
  }
}


// BLOQUE PARA CAMBIAR LAS VALVULAS DE CIRCULACION

Circula = $.ajax({
  url: "index_modulo/circuconsul.php",
  dataType: 'text',
  type: "POST",
  async: false
}).responseText;
jscir = JSON.parse(Circula);

var datacirv1 = jscir[0];
var datacirv2 = jscir[1];
var datacirv3 = jscir[2];
var datacirv4 = jscir[3];
var datacirv5 = jscir[4];
var datacirv6 = jscir[5];
var datacirm1 = jscir[6];

var cirv1 = datacirv1[0];
var cirv2 = datacirv2[0];
var cirv3 = datacirv3[0];
var cirv4 = datacirv4[0];
var cirv5 = datacirv5[0];
var cirv6 = datacirv6[0];
var mot1 = datacirm1[0];

var valv1cir = 0;
var valv2cir = 0;
var valv3cir = 0;
var valv4cir = 0;
var valv5cir = 0;
var valv6cir = 0;
var valm1cir = 0;


if (cirv1 == 0) {
  $("#circuval1Off").css({
    "display": "Block"
  });

  $("#circuval1On").css({
    "display": "None"
  });

  document.getElementById('circuval1text').innerText = 'CLOSE';
  valv1cir = 0;
}
else {
  $("#circuval1Off").css({
    "display": "None"
  });

  $("#circuval1On").css({
    "display": "Block"
  });
  document.getElementById('circuval1text').innerText = 'OPEN';
  valv1cir = 1;
}

if (cirv2 == 0) {
  $("#circuval2Off").css({
    "display": "Block"
  });

  $("#circuval2On").css({
    "display": "None"
  });

  document.getElementById('circuval2text').innerText = 'CLOSE';
  valv2cir = 0;
}
else {
  $("#circuval2Off").css({
    "display": "None"
  });

  $("#circuval2On").css({
    "display": "Block"
  });
  document.getElementById('circuval2text').innerText = 'OPEN';
  valv2cir = 1;
}

if (cirv3 == 0) {
  $("#circuval3Off").css({
    "display": "Block"
  });

  $("#circuval3On").css({
    "display": "None"
  });

  document.getElementById('circuval3text').innerText = 'CLOSE';
  valv3cir = 0;
}
else {
  $("#circuval3Off").css({
    "display": "None"
  });

  $("#circuval3On").css({
    "display": "Block"
  });

  document.getElementById('circuval3text').innerText = 'OPEN';
  valv3cir = 0;

}

if (cirv4 == 0) {
  $("#circuval4Off").css({
    "display": "Block"
  });

  $("#circuval4On").css({
    "display": "None"
  });

  document.getElementById('circuval4text').innerText = 'CLOSE';
  valv4cir = 0;
}
else {
  $("#circuval4Off").css({
    "display": "None"
  });

  $("#circuval4On").css({
    "display": "Block"
  });

  document.getElementById('circuval4text').innerText = 'OPEN';
  valv4cir = 0;
}

if (cirv5 == 0) {
  $("#circuval5Off").css({
    "display": "Block"
  });

  $("#circuval5On").css({
    "display": "None"
  });

  document.getElementById('circuval5text').innerText = 'CLOSE';
  valv5cir = 0;
}
else {
  $("#circuval5Off").css({
    "display": "None"
  });

  $("#circuval5On").css({
    "display": "Block"
  });

  document.getElementById('circuval5text').innerText = 'OPEN';
  valv5cir = 0;
}

if (cirv6 == 0) {
  $("#circuval6Off").css({
    "display": "Block"
  });

  $("#circuval6On").css({
    "display": "None"
  });

  document.getElementById('circuval6text').innerText = 'CLOSE';
  valv6cir = 0;
}
else {
  $("#circuval6Off").css({
    "display": "None"
  });

  $("#circuval6On").css({
    "display": "Block"
  });

  document.getElementById('circuval6text').innerText = 'OPEN';
  valv6cir = 0;
}

if (mot1 == 0) {
  $("#circumot1Off").css({
    "display": "Block"
  });

  $("#circumot1On").css({
    "display": "None"
  });

  document.getElementById('circumot1text').innerText = 'OFF';
  valm1cir = 0;
}
else {
  $("#circumot1Off").css({
    "display": "None"
  });

  $("#circumot1On").css({
    "display": "Block"
  });

  document.getElementById('circumot1text').innerText = 'ON';
  valm1cir = 1;
}



function camval1cir() {
  if (valv1cir == 1) {
    $("#circuval1Off").css({
      "display": "Block"
    });

    $("#circuval1On").css({
      "display": "None"
    });

    document.getElementById('circuval1text').innerText = 'CLOSE';
    valv1cir = 0;
  }
  else {
    $("#circuval1Off").css({
      "display": "None"
    });

    $("#circuval1On").css({
      "display": "Block"
    });
    document.getElementById('circuval1text').innerText = 'OPEN';
    valv1cir = 1;
  }

  $.ajax({
    url: "index_modulo/valcir.php",
    data: {
      valv1cir: valv1cir,
    },
    type: "POST"
  })
}

function camval2cir() {
  if (valv2cir == 1) {
    $("#circuval2Off").css({
      "display": "Block"
    });

    $("#circuval2On").css({
      "display": "None"
    });

    document.getElementById('circuval2text').innerText = 'CLOSE';
    valv2cir = 0;
  }
  else {
    $("#circuval2Off").css({
      "display": "None"
    });

    $("#circuval2On").css({
      "display": "Block"
    });
    document.getElementById('circuval2text').innerText = 'OPEN';
    valv2cir = 1;
  }

  $.ajax({
    url: "index_modulo/valcir.php",
    data: {
      valv2cir: valv2cir,
    },
    type: "POST"
  })
}

function camval3cir() {
  if (valv3cir == 1) {
    $("#circuval3Off").css({
      "display": "Block"
    });

    $("#circuval3On").css({
      "display": "None"
    });

    document.getElementById('circuval3text').innerText = 'CLOSE';
    valv3cir = 0;
  }
  else {
    $("#circuval3Off").css({
      "display": "None"
    });

    $("#circuval3On").css({
      "display": "Block"
    });
    document.getElementById('circuval3text').innerText = 'OPEN';
    valv3cir = 1;
  }

  $.ajax({
    url: "index_modulo/valcir.php",
    data: {
      valv3cir: valv3cir,
    },
    type: "POST"
  })
}

function camval4cir() {
  if (valv4cir == 1) {
    $("#circuval4Off").css({
      "display": "Block"
    });

    $("#circuval4On").css({
      "display": "None"
    });

    document.getElementById('circuval4text').innerText = 'CLOSE';
    valv4cir = 0;
  }
  else {
    $("#circuval4Off").css({
      "display": "None"
    });

    $("#circuval4On").css({
      "display": "Block"
    });
    document.getElementById('circuval4text').innerText = 'OPEN';
    valv4cir = 1;
  }

  $.ajax({
    url: "index_modulo/valcir.php",
    data: {
      valv4cir: valv4cir,
    },
    type: "POST"
  })
}

function camval5cir() {
  if (valv5cir == 1) {
    $("#circuval5Off").css({
      "display": "Block"
    });

    $("#circuval5On").css({
      "display": "None"
    });

    document.getElementById('circuval5text').innerText = 'CLOSE';
    valv5cir = 0;
  }
  else {
    $("#circuval5Off").css({
      "display": "None"
    });

    $("#circuval5On").css({
      "display": "Block"
    });
    document.getElementById('circuval5text').innerText = 'OPEN';
    valv5cir = 1;
  }

  $.ajax({
    url: "index_modulo/valcir.php",
    data: {
      valv5cir: valv5cir,
    },
    type: "POST"
  })
}

function camval6cir() {
  if (valv6cir == 1) {
    $("#circuval6Off").css({
      "display": "Block"
    });

    $("#circuval6On").css({
      "display": "None"
    });

    document.getElementById('circuval6text').innerText = 'CLOSE';
    valv6cir = 0;
  }
  else {
    $("#circuval6Off").css({
      "display": "None"
    });

    $("#circuval6On").css({
      "display": "Block"
    });
    document.getElementById('circuval6text').innerText = 'OPEN';
    valv6cir = 1;
  }

  $.ajax({
    url: "index_modulo/valcir.php",
    data: {
      valv6cir: valv6cir,
    },
    type: "POST"
  })
}

function cammot1cir() {
  if (valm1cir == 1) {
    $("#circumot1Off").css({
      "display": "Block"
    });

    $("#circumot1On").css({
      "display": "None"
    });

    document.getElementById('circumot1text').innerText = 'OFF';
    valm1cir = 0;
  }
  else {
    $("#circumot1Off").css({
      "display": "None"
    });

    $("#circumot1On").css({
      "display": "Block"
    });

    document.getElementById('circumot1text').innerText = 'ON';
    valm1cir = 1;
  }

  $.ajax({
    url: "index_modulo/valcir.php",
    data: {
      valm1cir: valm1cir,
    },
    type: "POST"
  })
}


var mostt1 = 1;
var mostt2 = 1;

function mossztva() {

  if (mostt1 == 0) {
    $("#SizeTotalPitVol").css({
      "display": "Block"
    });
    mostt1 = 1;
  }
  else {
    $("#SizeTotalPitVol").css({
      "display": "None"
    });
    mostt1 = 0;
  }
}

function mossztt() {

  if (mostt2 == 0) {
    $("#SizeTotaltripTank").css({
      "display": "Block"
    });
    mostt2 = 1;
  }
  else {
    $("#SizeTotaltripTank").css({
      "display": "None"
    });
    mostt2 = 0;
  }
}

FechaData = $.ajax({
  url: "Modulo_graficas/php/fecha.php",
  dataType: 'text',
  type: "POST",
  async: false
}).responseText;
jsfecha = JSON.parse(FechaData);

DataChar = jsfecha[1];

setTimeout(() => {
  document.getElementById('texcarg').innerText = 'Loading environment';
}, 10000);

setTimeout(() => {
  document.getElementById('texcarg').innerText = 'Loading drill';
}, 20000);

setTimeout(() => {
  document.getElementById('texcarg').innerText = 'Loading data';
}, 30000);

setTimeout(() => {
  document.getElementById('texcarg').innerText = 'Updating environment';
}, 40000);

setTimeout(() => {
  document.getElementById('texcarg').innerText = 'Updating drill';
}, 50000);

setTimeout(() => {
  document.getElementById('texcarg').innerText = 'Updating data';
}, 60000);

setTimeout(() => {
  continue_var = 0;
  document.getElementById("continueprac").value = continue_var;
  actpract = $.ajax({
    url: "Modulo_graficas/php/fecha.php",
    dataType: 'text',
    type: "POST",
    data:
    {
      continue: continue_var
    },
    async: false
  })
}, 600000);

var setinttime

window.addEventListener("load", function () {
  var contenedor = document.getElementById('contenedor_carga');
  contenedor.style.visibility = 'hidden';
  contenedor.style.opacity = '0';

  console.log(perforador.value);

  if (perforador.value == 0) {
    var setinttime2 = setInterval(mostrarTR, /* 333 */  1000);
  }

  setinttime = setInterval(timeri, /* 333 */  250);

  sweet();
  /* Lienzo(); */
  /* Dibujar(); */
  // mover_burbuja();
  //MovimientoDatos();
  cerrar();
  confirmardatosgraf();
  // console.log(countActGraf);
  /* ActualizarGraf(); */
  savegrafconf();
  EstadoB1();
  EstadoB2();
  AnalisisVal();
});

console.log(DataChar);

var contenedorop = document.getElementById('contenedor_opc');
var bot_opc = document.getElementById("bot_opc");
var bot_ops = document.getElementById("bot_ops");
var continue_var = document.getElementById("continueprac").value;




//// SE DEJA COMENTARIO DE LA FUNCION DE NEW PRAC

/* if (continue_var == 1) //// Si ya se inicio una nueva practica no aparece el mensaje de de continuar nuevamente
{
  contenedorop.style.display = "none";
  contenedorop.style.opacity = '0';
  bot_ops.style.display = "none";
}


bot_opc.onclick = function () {
  contenedorop.style.display = "none";
  contenedorop.style.opacity = '0';
  bot_ops.style.display = "none";

  continue_var = 1
  document.getElementById("continueprac").value = continue_var;

  contibtn = $.ajax({
    url: "Modulo_graficas/php/fecha.php",
    dataType: 'text',
    type: "POST",
    data:
    {
      continue: continue_var
    },
    async: false
  }).responseText;

}

bot_ops.onclick = function () {

  // clearInterval(setinttime);

  contenedorop.style.display = "none";
  contenedorop.style.opacity = '0';

  continue_var = 1
  document.getElementById("continueprac").value = continue_var;

  var deep = document.getElementById('deeph').value;
  var bitdeeph = document.getElementById('bitdeeph').value;
  var altura = document.getElementById('altura').value;
  var actprac = 1;

  d40 = document.getElementById("selectGra").value; // Plantillas de graficacion Ejemplo: Drill/WellControl
  Hora = document.getElementById("HoraGraf").value; // Escala de Tiempo
  FechaData = $.ajax({
    url: "Modulo_graficas/php/fecha.php",
    dataType: 'text',
    type: "POST",
    data:
    {
      actprac: actprac,
      continue: continue_var
    },
    async: false
  }).responseText;
  jsfecha = JSON.parse(FechaData);

  FechaActCom = jsfecha[0];

  $.ajax({
    url: "index_modulo/rolactudatos.php",
    data: {
      deep: deep,
      bitdeeph: bitdeeph,
      altura: altura
    },
    type: "POST",
  });


  document.getElementById('cbPause').value = 1;
  var Pausecb = document.getElementById('cbPause').value;

  $("#cbPause").prop("checked", true);
  btnModalpause.style.background = "red";

  $.ajax({
    url: "index_modulo/pause.php",
    data: {
      Pausecb: Pausecb,
    },
    type: "POST"
  })


  //location.reload();

  document.getElementById('block_high').value = altura;
  document.getElementById('bit_depth').value = bitdeeph;
  document.getElementById("show_depth").value = bitdeeph;
  document.getElementById('defval').value = bitdeeph;
  document.getElementById('hole_depth').value = deep;
  document.getElementById('show_hole').value = deep;
  document.getElementById('p1_spm').value = 0;
  document.getElementById('p2_spm').value = 0;
  document.getElementById('total_spm').value = 0;
  document.getElementById('p1_total_spm').value = 0;
  document.getElementById('p2_total_spm').value = 0;
  document.getElementById('fluid_volume').value = 0;
  document.getElementById('pump_pressure').value = 0;
  document.getElementById('total_strokes').value = 0;
  document.getElementById('torque').value = 0;
  document.getElementById('rop').value = 0;
  document.getElementById('cassing_pressure').value = 0;

  var sola = document.getElementById('agujaunohidden').value;
  var solb = document.getElementById('agujadoshidden').value;

  counthoursi = 0;
  countmini = 0;
  countip = 0;


  agujauno.style.transform = "rotate(" + sola + "deg)";
  agujados.style.transform = "rotate(" + ((solb * 0.72) + 180) + "deg)";


  imgdawn = document.getElementById('imgmov');
  block_highcount = document.getElementById("block_high").value;
  sum = block_highcount * 21.21;
  imgdawn.style.marginTop = "" + -sum + "px";

  document.getElementById('myRange').scrollTop = 0;
  document.getElementById('myRange2').scrollTop = 0;
  document.getElementById('myRange3').scrollTop = 0;

  setTimeout(() => {
    document.getElementById('cbPause').value = 0;
    var Pausecb = document.getElementById('cbPause').value;

    $("#cbPause").prop("checked", false);
    btnModalpause.style.background = 'rgba(0,0,300,0.8)';

    $.ajax({
      url: "index_modulo/pause.php",
      data: {
        Pausecb: Pausecb,
      },
      type: "POST",
      succes: location.reload()
    })

  }, 2000);




} */


//36076500=0,0553846153846154




