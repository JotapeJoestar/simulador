/* ARCHIVO QUE CONTIENE VARIABLES GLOBALES USADAS PARA DISTINTOS ARCHIVOS */
/* ARCHIVO QUE CONTIENE FUNCIONES DE JS RELACIONADAS A LOS ESTADOS DEL BOP (LOWER, UPPER, ANULAR... ) */



var grados = -135;

/* 
var green1 = document.getElementById("ledgreenanular");
green1.style.backgroundColor = "green";
var green2 = document.getElementById("ledgreenuper");
green2.style.backgroundColor = "green";
var green3 = document.getElementById("ledgreenblind");
green3.style.backgroundColor = "green";
var green4 = document.getElementById("ledgreenlower");
green4.style.backgroundColor = "green";

var accionuper = document.getElementById("accionuper");
var accionblind = document.getElementById("accionblind");
var acctionlower = document.getElementById("acctionlower");
 */

var xd = document.getElementById("xd");

////////////////////////////////////////////Fin de control de aire   "//////////////////////////////////
//////  esta parte se encarga de recibir parametros par calcular la posicion de las agujas "//////////////////////////////////
//variables posicion final

valorate = document.getElementById("valorate").value;
boxcell4.innerHTML = valorate;
valoruperent = document.getElementById("valoruperent").value;
boxcell1.innerHTML = valoruperent;
//carga el contador de el switch air y crea las variables para pasar el tiempo y el audio de la explocion"//////////////////////////////////

var timeup;
var timeupactu;
var audioair = new Audio('audio/ValvulaBOP.wav');
var airwich = new Audio('audio/CargandoAccu.wav');

var palanca1 = document.getElementById("air");


/* 
var ledgreenanular = document.getElementById("ledgreenanular");
var ledredanular = document.getElementById("ledredanular");
var accionanular = document.getElementById("accionanular");
//
var agu1 = document.getElementById("agu1");
var ledgreenuper = document.getElementById("ledgreenuper");
var ledreduper = document.getElementById("ledreduper");
var accionuper = document.getElementById("accionuper");
//
var agu2 = document.getElementById("agu2");
var  ledgreenblind= document.getElementById("ledgreenblind");
var ledredblind = document.getElementById("ledredblind");
var accionblind = document.getElementById("accionblind");
//
var agu3 = document.getElementById("agu3");
var ledgreenlower = document.getElementById("ledgreenlower");
var ledredlower = document.getElementById("ledredlower");
var acctionlower = document.getElementById("acctionlower"); */



//
var agu4 = document.getElementById("agu4");
var agu2 = document.getElementById("agu2");

var countair = document.getElementById('estadoair').value;
// var grados = -135;
//======================================FUNCIONES DE EL MODULO DE BOP PARA EL MANEJO DE PALANCAS Y RELOGE
// inicia en verde el estado de la valvula 


function air() {
  var palanca1 = document.getElementById("air");
  if (document.getElementById('estadoair').value == 0) {
    palanca1.src = "img/Airleverabajo.png";

    accionanular.disabled = false;
    accionuper.disabled = false;
    accionblind.disabled = false;
    acctionlower.disabled = false;

    document.getElementById('estadoair').value = 1;
    audioair.play();

  } else{

  }

}

/* var countswch = 0; */

$('#accionanular').click(function(){

  palanca1.src = "img/Airlevelarriba.png";
  console.log (countsuper);
  //condicionales para el encendido y apagado de el anular
  //manejo de el switch evaluar si esta encendido o apagado
  if (countswch == 0) {
    ledgreenanular.style.backgroundColor = "black";
    ledredanular.style.backgroundColor = "red";
    accionanular.style.backgroundColor = "red";
    countswch = 1;
    accionanular.disabled = true;
    estado_anular=0;
    document.getElementById('hostanular').value=1;
  } else {
    ledgreenanular.style.backgroundColor = "green";
    ledredanular.style.backgroundColor = "black";
    accionanular.style.backgroundColor = "green";
    document.getElementById('hostanular').value=2;
    estado_anular=1;
    countswch = 0;
  }
})

/* var countsuper=0; */

var estado_upper = 1;
$('#accionuper').click(function(){
  palanca1.src = "img/Airlevelarriba.png";
  console.log (countsuper);
  if (countsuper == 0) {
    ledgreenuper.style.backgroundColor = "black";
    ledreduper.style.backgroundColor = "red";
    accionuper.style.backgroundColor = "red";
    countsuper = 1;
    accionanular.disabled = true;
    accionuper.disabled = true
    acctionlower.disabled = true;
    accionblind.disabled = true;
    estado_upper=0;
    
    document.getElementById('hostuper').value=1;
  } else {
    ledgreenuper.style.backgroundColor = "green";
    ledreduper.style.backgroundColor = "black";
    accionuper.style.backgroundColor = "green";
    document.getElementById('hostuper').value=2;
    estado_upper=1;
    countsuper = 0;
  }
})


/* var countsblind=0; */

var estado_blind = 1;
$('#accionblind').click(function(){
  palanca1.src = "img/Airlevelarriba.png";
  if (countsblind == 0) {
    ledgreenblind.style.backgroundColor = "black";
    ledredblind.style.backgroundColor = "red";
    accionblind.style.backgroundColor = "red";
    countsblind = 1;
    accionanular.disabled = true;
    accionuper.disabled = true
    accionblind.disabled = true;
    acctionlower.disabled = true;
    estado_blind=0;
    document.getElementById('hostblind').value=1;

  } else {
    ledgreenblind.style.backgroundColor = "green";
    ledredblind.style.backgroundColor = "black";
    accionblind.style.backgroundColor = "green";
    document.getElementById('hostblind').value=2;
    countsblind = 0;
    estado_blind = 1;
  }
})


/* var countslower= 0;*/

var estado_lower = 1;
$('#acctionlower').click(function(){
  palanca1.src = "img/Airlevelarriba.png";
  if (countslower == 0) {
    ledgreenlower.style.backgroundColor = "black";
    ledredlower.style.backgroundColor = "red";
    acctionlower.style.backgroundColor = "red";
    countslower = 1;
    accionanular.disabled = true;
    accionuper.disabled = true
    accionblind.disabled = true;
    acctionlower.disabled = true;
    document.getElementById('hostlower').value=1;
    estado_lower=0;

  } else {
    ledgreenlower.style.backgroundColor = "green";
    ledredlower.style.backgroundColor = "black";
    acctionlower.style.backgroundColor = "green";
    document.getElementById('hostlower').value=2;
    estado_lower=1;
    countslower = 0;
  }
})
var limit_acumkill=document.getElementById('boxcell1');
function restkill() {
  limit_acumkill=limit_acumkill-4;
}

function acumuladorkill(){
    var intervalo_acumulador=setInterval(function(){
       
            if (boxcell1.value>limit_acumkill){
                boxcell1.value=boxcell1.value-=0.9;
                rel1 = boxcell1.value * 0.054 + grados;
                agu1.style.transform = "rotate(" + rel1 + "deg)";
                accionanular.disabled = true;
                accionuper.disabled = true;
                accionblind.disabled = true;
                acctionlower.disabled = true;
            }
    },300);
}


$('#openkill').click(function(){
  restkill() ;
  acumuladorkill();
})


function ajaxguardaestados() {

  $.ajax({
    url: "./bop_modulo/guardar_bop.php",
    data: {
      estado_anular:estado_anular,
      estado_upper:estado_upper,
      estado_blind:estado_blind,
      estado_lower:estado_lower
    },
    type: "POST",
    success: function (datos) {
    }
  })

  
}