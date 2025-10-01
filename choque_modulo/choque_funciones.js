/* ESTE ARRCHIVO CONTIENE EL CODIGO JS DE LA OPCION DE CHOKE */


var choque1 = document.getElementById('choque1');
var choque2 = document.getElementById('choque2');
var choque3 = document.getElementById('choque3');
var choque4 = document.getElementById('choque4');
var choque5 = document.getElementById('choque5');
var choque6 = document.getElementById('choque6');
var choque7 = document.getElementById('choque7');
var choque8 = document.getElementById('choque8');
var choque9 = document.getElementById('choque9');
var hold = document.getElementById('hold');
var chokepos = document.getElementById('chokepos');
var nb = document.getElementById('nb');
var oni = 1;
var choqueaudio = new Audio('audio/SndChk1.wav');
var oni = 1;
var oni2 = 1; // Cambio var choke
var oni3 = 1;
var oni4 = 1;
var dataglobalbar;

//si el valor de choque estado es igual a 0 entonces se esta usando el choque uno si el valor es uno entonces se esta usando el 2
var choque_estado = 0;
//CONTROL DE EL AIRE PARA QUE SE PUEDA O NO ACTIVAR LA PALANCA QUE AUMENTA O RESTA PRECION EN COQUE POSITION

var stateclose = document.getElementById('choque8data').value;

if (stateclose == 0) {
  document.getElementById('choque8').style.transform = "rotate(-90deg)";
  document.getElementById('choque8').style.marginLeft = '0';
  document.getElementById('choque8').style.marginTop = '  0';
} else {
  document.getElementById('choque8').style.transform = "rotate(-180deg)";
  document.getElementById('choque8').style.marginLeft = '-50';
  document.getElementById('choque8').style.marginTop = '50';
}

$('#choque8').click(function () {
  if (stateclose == 0) {
    document.getElementById('choque8').style.transform = "rotate(-180deg)";
    document.getElementById('choque8').style.marginLeft = '-50';
    document.getElementById('choque8').style.marginTop = '50';
    stateclose = 1;
  } else {
    document.getElementById('choque8').style.transform = "rotate(-90deg)";
    document.getElementById('choque8').style.marginLeft = '0';
    document.getElementById('choque8').style.marginTop = '  0';
    stateclose = 0;
  }

  $.ajax({
    url: "choque_modulo/choque_guardar.php",
    data: {
      stateclose: stateclose
    },
    type: "POST",
    success: function (datos) { }
  })
})
// FIN DE CONTROL DE EL AIRE PARA QUE SE PUEDA O NO ACTIVAR LA PALANCA QUE AUMENTA O RESTA PRECION EN COQUE POSITION

//PENDIENTE POR USO 
/* function onchoquecontrol() {

  var choke_controlop = oni3;

  $.ajax({
    url: "choque_modulo/choque_guardar.php",
    data: {
      choke_controlop: choke_controlop
    },
    type: "POST",
    success: function (datos) { }
  })

} */
//PENDIENTE POR USO 

//apertura de la palanca suma al choque position en base al scrool de velocidad 
var sumvalcho13 = (valorspp3 * 1.60) + 90;
var counta;
var countados;
var summos;
var summostrar;
var estadocuenta;
var estadocuentados;
var aperchkval;
choque3.style.transform = "rotate(0deg)";
var datachoke = 0;
// Funcion para show de choke
$('#datashowchk').mousedown(function () {
  if (datachoke == 0) {
    document.getElementById('tabBP').style.display = "block";
    document.getElementById('tabBP2').style.display = "block";
    datachoke = 1;
  }
  else {
    document.getElementById('tabBP').style.display = "none";
    document.getElementById('tabBP2').style.display = "none";
    datachoke = 0;
  }
})
// fin funcion show de choke


$('#open').mousedown(function () {

  datachkact = $.ajax({
    url: "bop_modulo/prevval.php",
    dataType: 'text',
    data: {
      ChkRem1_Val_Activo: 'ChkRem1_Val_Activo',
      ChkRem2_Val_Activo: 'ChkRem2_Val_Activo'
    },
    type: "POST",
    async: false
  }).responseText;
  jsv1 = JSON.parse(datachkact);

  ChokeRem1 = jsv1[36];
  ChokeRem2 = jsv1[37];

  if (document.getElementById('inc').value >= 1) {
    if (stateclose == 1) {
      if (choque_estado == 0) {
        if (sumval3 >= -87) {
          dataglobalbar = dataglobalbar;
          counta = (10 * dataglobalbar / 100);
          sumval3 -= counta;
          estadocuenta = sumval3 -= counta;
          var aumn;
          aumn = (-sumval3 + 90);
          var totalaumm = parseInt(aumn * 100 / 180);
          choque3.style.transform = "rotate(" + sumval3 + "deg)";
          document.getElementById('choquedata').value = totalaumm + "%";
          choqueaudio.play();
          if (ChokeRem1 == 'true' || ChokeRem2 == 'true') {
            aperchkval = 1.6 * (aumn * 100 / 180) / 100;
          } else {
            aperchkval = 0
          }
        } else {
          sumval3 = -90;
        }
      } else {
        if (sumval3val >= -87) {
          dataglobalbar = dataglobalbar;
          countados = (10 * dataglobalbar / 100);
          sumval3val -= countados;
          estadocuentados = sumval3val -= countados;
          var acuma;
          acuma = (-sumval3val + 90);
          var totalaumma = parseInt(acuma * 100 / 180);
          choque3.style.transform = "rotate(" + sumval3val + "deg)";
          document.getElementById('choquedata').value = totalaumma + "%";
          choqueaudio.play();
          if (ChokeRem1 == 'true' || ChokeRem2 == 'true') {
            aperchkval = 1.6 * (acuma * 100 / 180) / 100;
          } else {
            aperchkval = 0
          }
        } else {
          sumval3val = -90;
        }
      }
    }
  }
  choque9.src = "img/ChokeOpen.png";
  oni = 1;
  timecountfun();
  guardarestadol();
})

//fin de apertura de la palanca suma al choque position en base al scrool de velocidad 

//apertura de la palanca resta al choque position en base al scrool de velocidad 
$('#close').mousedown(function () {

  datachkact = $.ajax({
    url: "bop_modulo/prevval.php",
    dataType: 'text',
    data: {
      ChkRem1_Val_Activo: 'ChkRem1_Val_Activo',
      ChkRem2_Val_Activo: 'ChkRem2_Val_Activo'
    },
    type: "POST",
    async: false
  }).responseText;
  jsv1 = JSON.parse(datachkact);

  ChokeRem1 = jsv1[36];
  ChokeRem2 = jsv1[37];

  if (document.getElementById('inc').value >= 1) {
    if (stateclose == 1) {
      if (choque_estado == 0) {
        if (sumval3 <= 90) {
          dataglobalbar = dataglobalbar;
          counta = (10 * dataglobalbar / 100);
          sumval3 += counta;
          estadocuenta = sumval3 += counta;
          var aumn;
          aumn = (-sumval3 + 90);
          var totalaumm = parseInt(aumn * 100 / 180);
          choque3.style.transform = "rotate(" + sumval3 + "deg)";
          document.getElementById('choquedata').value = totalaumm + "%";
          choqueaudio.play();
          if (ChokeRem1 == 'true' || ChokeRem2 == 'true') {
            aperchkval = 1.6 * (aumn * 100 / 180) / 100;
          } else {
            aperchkval = 0
          }
        }

      } else {
        if (sumval3val <= 90) {
          dataglobalbar = dataglobalbar;
          countados = (10 * dataglobalbar / 100);
          sumval3val += countados;
          estadocuentados = sumval3val += countados;
          var acuma;
          acuma = (-sumval3val + 90);
          var totalaumma = parseInt(acuma * 100 / 180);
          choque3.style.transform = "rotate(" + sumval3val + "deg)";
          document.getElementById('choquedata').value = totalaumma + "%";
          choqueaudio.play();
          if (ChokeRem1 == 'true' || ChokeRem2 == 'true') {
            aperchkval = 1.6 * (acuma * 100 / 180) / 100;
          } else {
            aperchkval = 0
          }
        }
      }
    }
  }
  oni = 2;
  choque9.src = "img/ChokeClose.png";
  timecountfun();
  guardarestadol();
})
//fin de apertura de la palanca resta al choque position en base al scrool de velocidad 

//regresa al primer estado de la palanca despues de 1 seg dando ilucion de rebote 
function timecountfun() {
  setTimeout(function () {
    choque9.src = "img/ChokeHold.png";
  }, 200);
}

var choquedatarec = document.getElementById('choquedata').value;

function guardarestadol() {


  choquedatarec = document.getElementById('choquedata').value;

/*   if (globaluno == 1) {
    if (globalchoque == 1) {
      if (choque_estado == 0) {
             alert(globalporcentge);
            alert('ch1'); 

      }
    }
    if (globalchoque == 2) {
      if (choque_estado == 1) {
                  alert(globalporcentge);
                  alert('ch2'); 
      }
    }
  }


  if (globaldos == 1) {
    if (globalchoque == 1) {
      if (choque_estado == 0) {
            alert('b'); 
      }
    }
  } */


  $.ajax({
    url: "choque_modulo/choque_guardar.php",
    data: {
      choquedatarec: choquedatarec,
      aperchkval: aperchkval
    },
    type: "POST",
    success: function (datos) { }
  })


}




//fin de regresa al primer estado de la palanca despues de 1 seg dando ilucion de rebote 

//acomoda las agujas con datos de la bd
var valorspp1;
var valorspp2;
var valorspp3;
/*var intervalagu1=setInterval(function(){*/
var sumval1;
var sumval2;


var sumval3 = ((parseInt(choquedatarec) * 1.8) - 90) * -1;
var sumval3val = ((parseInt(choquedatarec) * 1.8) - 90) * -1;
choque3.style.transform = "rotate(" + sumval3 + "deg)";


var statevel;
var primerclick = 0;
//boton que abre el acceso a la perilla y esconde el marcador cuando se hace click por fuera
$('#chokepos').click(function () {
  if (nb.style.display === "none") {
    if (primerclick == 0) {
      nb.style.display = "block";
      statevel = true;
      nb.scrollTop = (datainc*36.6);
      primerclick = 1;
    }
    else {
      nb.style.display = "block";
      statevel = true;
    }
  }
  else {
    nb.style.display = "none";
    statevel = true;
  }
})
$('.modalbg').click(function () {
  nb.style.display = "none";
})
//fin boton que abre el acceso a la perilla y esconde el marcador cuando se hace click por fuera
var entrot;

// carga los datos correspondientes para que no inicien vacios ni con errores 
window.onload = function () {
  if (!estadocuenta) {
    estadocuenta = 90;
  }
  if (!estadocuentados) {
    estadocuentados = 90;
  }

  datainc = document.getElementById('inc').value;
  dataglobalbar = datainc;
  entrot = parseInt((datainc*36.6)/20);
  chokepos.style.transform = "rotate(" + entrot + "deg)";
  
}
// fin  carga los datos correspondientes para que no inicien vacios ni con errores 

var datamoostrar;

//scrool que aparece cuando se oprime la perillla mostrando un indicador de 1 a 100 que determina la var dataglobalbar
function barchoke() {
  entrot = parseInt(nb.scrollTop / 20);
  if (entrot == 0) {
    entrot = 2.5;
  }

  chokepos.style.transform = "rotate(" + entrot + "deg)";
  datamoostrar = parseInt(entrot / 1.79);
  document.getElementById('inc').value = datamoostrar;
  dataglobalbar = datamoostrar;
  var choke_speedop = datamoostrar;
  choquespedat = document.getElementById('inc').value;
  $.ajax({
    url: "choque_modulo/choque_guardar.php",
    data: {
      choke_speedop: datamoostrar,
      choquespedat: choquespedat
    },
    type: "POST",
    success: function (datos) {

    }
  })
}

//fin  scrool que aparece cuando se oprime la perillla mostrando un indicador de 1 a 100 que determina la var dataglobalbar
choque_estado = document.getElementById('choque1o2').value;

if (choque_estado == 1) {
  choque7.src = "img/SelectChoke2.png";
  choque_estado = 1;
  choque3.style.transform = "rotate(" + estadocuentados + "deg)";
} else {
  choque7.src = "img/SelectChoke1.png";
  choque7.style.marginLeft = '-10';
  choque_estado = 0;
  choque3.style.transform = "rotate(" + estadocuenta + "deg)";
}

//boton para elegir el choque que se desea usar tambien cambia los valores el el porcentaje y en la aguja de choque position
$('#choque7').click(function () {
  var choquedatarec = document.getElementById('choquedata').value;

  if (oni2 == 1) {
    choque7.src = "img/SelectChoke2.png";
    choque_estado = 1;
    oni2 = 2;
    choque3.style.transform = "rotate(" + estadocuentados + "deg)";
    var acumpor;
    acumpor = (-estadocuentados + 90);
    var totalaummpor = parseInt(acumpor * 100 / 180);
    document.getElementById('choquedata').value = totalaummpor + "%";
  } else {
    choque7.src = "img/SelectChoke1.png";
    choque7.style.marginLeft = '-10';
    choque_estado = 0;
    choque3.style.transform = "rotate(" + estadocuenta + "deg)";
    var acumpordos;
    acumpordos = (-estadocuenta + 90);
    var totalaummpordos = parseInt(acumpordos * 100 / 180);
    document.getElementById('choquedata').value = totalaummpordos + "%";
    datamoostrar + 1;
    oni2 = 1;
  }
  if (!estadocuenta) {
    estadocuenta = 90;
  }
  if (!estadocuentados) {
    estadocuentados = 90;
  }
  $.ajax({
    url: "choque_modulo/choque_guardar.php",
    data: {
      choque_estado: choque_estado,
      choquedatarec: choquedatarec
    },
    type: "POST",
    success: function (datos) { }
  })


})
//fin //boton para elegir el choque que se desea usar tambien cambia los valores el el porcentaje y en la aguja de choque position

//funcion para consultar el valor de las fallas 
/* function consulfallas(){
var fallasData =
  $.ajax({
    url: 'choque_modulo/chokefallas.php',
    dataType: 'text',
    async: false
  }).responseText;
jsfallas = JSON.parse(fallasData);

} */


//funcion para consultar el valor de las fallas 



/*
Presion 1 = GgblPressBottonAnn
Dejar un ECD = Var_rt

// cassing pre
CPP

//Well head


Dep
Bit
Shoe Press// var process
Botton pres// gbl pres
Gain loss
*/

