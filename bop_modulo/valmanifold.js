// funciones para las Valvulas Manuales 


// Funcion para desplegar el scroll
function valmanu1() {

  var nb = document.getElementById('Valmanu1');
  var nb2 = document.getElementById('Valmanu1Sub');

  if (nb.style.display === "none") {
    nb.style.display = "block";
    nb2.style.display = "block";
  }
  else {
    nb.style.display = "none";
    nb2.style.display = "none";
  }
}

//Funcion para actualizat datos del scroll
function actualizarvalman1() {
  datachkact = $.ajax({
    url: "bop_modulo/prevval.php",
    dataType: 'text',
    data: {
      ChkRem1_Val_Activo: 'ChkRem1_Val_Activo',
      ChkRem2_Val_Activo: 'ChkRem2_Val_Activo',
      L5V1_Val_Activo: 'L5V1_Val_Activo',
      L5V2_Val_Activo: 'L5V2_Val_Activo'
    },
    type: "POST",
    async: false
  }).responseText;
  jsv1 = JSON.parse(datachkact);

  ChokeRem1 = jsv1[36];
  ChokeRem2 = jsv1[37];
  ChokeM1 = jsv1[38];
  ChokeM2 = jsv1[39];


  var nb = document.getElementById('Valmanu1');

  var nbs = parseInt(nb.scrollTop / 36);

  var aperchok = 1.6 * nbs / 100;

  if (ChokeRem1 == 'true' || ChokeRem2 == 'true') {
    aperchok = 0;
  }
  else {
    if (ChokeM1 == 'true') {
      $.ajax({
        url: "choque_modulo/choque_guardar.php",
        data: {
          aperchkval: aperchok
        },
        type: "POST",
        success: function (datos) { }
      })
    }
    else {
      aperchok = 0;
    }
  }
  document.getElementById('DatoValmanu1').innerText = nbs;

  $.ajax({
    url: "bop_modulo/valmanual.php",
    data: { valmanu1: nbs },
    type: "POST",
  });
}

// Funcion para desplegar el scroll
function valmanu2() {

  var nb = document.getElementById('Valmanu2');
  var nb2 = document.getElementById('Valmanu2Sub');

  if (nb.style.display === "none") {
    nb.style.display = "block";
    nb2.style.display = "block";
  }
  else {
    nb.style.display = "none";
    nb2.style.display = "none";
  }
}

//Funcion para actualizat datos del scroll
function actualizarvalman2() {
  datachkact = $.ajax({
    url: "bop_modulo/prevval.php",
    dataType: 'text',
    data: {
      ChkRem1_Val_Activo: 'ChkRem1_Val_Activo',
      ChkRem2_Val_Activo: 'ChkRem2_Val_Activo',
      L5V1_Val_Activo: 'L5V1_Val_Activo',
      L5V2_Val_Activo: 'L5V2_Val_Activo'
    },
    type: "POST",
    async: false
  }).responseText;
  jsv1 = JSON.parse(datachkact);

  ChokeRem1 = jsv1[36];
  ChokeRem2 = jsv1[37];
  ChokeM1 = jsv1[38];
  ChokeM2 = jsv1[39];

  var nb = document.getElementById('Valmanu2');

  var nbs = parseInt(nb.scrollTop / 36);

  var aperchok = 1.6 * nbs / 100;

  if (ChokeRem1 == 'true' || ChokeRem2 == 'true' || ChokeM1 == 'true') {
    aperchok = 0;
  }
  else {
    if (ChokeM2 == 'true') {
      $.ajax({
        url: "choque_modulo/choque_guardar.php",
        data: {
          aperchkval: aperchok
        },
        type: "POST",
        success: function (datos) { }
      })
    }
    else {
      aperchok = 0;
    }
  }
  document.getElementById('DatoValmanu2').innerText = nbs;

  $.ajax({
    url: "bop_modulo/valmanual.php",
    data: { valmanu2: nbs },
    type: "POST",
  });
}

// fin funciones valvulas manuales


// funciones de las valvulas para guardar en base de datos el estado abierto o cerrado  y actualiza con un punto rojo o verde dependiendo de el estado de la valvula

function camval1a() {
  if (i == 1) {
    document.images["val1a"].src = vclose.src;
    i = 2;
    box1a.value = i;
  } else {
    document.images["val1a"].src = vopen.src;

    i = 1;
    box1a.value = i;
  }
  AnalisisVal();
  //***************//
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box1a: i },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
function camval1b() {
  if (i2 == 1) {
    document.images["val1b"].src = vclose.src;
    i2 = 2;
    box1b.value = i2;
  } else {
    document.images["val1b"].src = vopen.src;
    i2 = 1;
    box1b.value = i2;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box1b: i2 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
function camval1c() {
  if (i3 == 1) {
    document.images["val1c"].src = vclose.src;
    i3 = 2;
    box1c.value = i3;
  } else {
    document.images["val1c"].src = vopen.src;
    i3 = 1;
    box1c.value = i3;
  } 3
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box1c: i3 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval1d() {
  if (i4 == 1) {
    document.images["val1d"].src = vclose.src;
    i4 = 2;
    box1d.value = i4;
  } else {
    document.images["val1d"].src = vopen.src;
    i4 = 1;
    box1d.value = i4;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box1d: i4 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval1() {
  if (i5 == 1) {
    document.images["val1"].src = vclose.src;
    i5 = 2;
    box.value = i5;
  } else {
    document.images["val1"].src = vopen.src;
    i5 = 1;
    box.value = i5;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box: i5 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval2() {
  if (i6 == 1) {
    document.images["val2"].src = vclose.src;
    i6 = 2;
    box2.value = i6;
  } else {
    document.images["val2"].src = vopen.src;
    i6 = 1;
    box2.value = i6;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box2: i6 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval2a() {
  if (i7 == 1) {
    document.images["val2a"].src = vclose.src;
    i7 = 2;
    box2a.value = i7;
  } else {
    document.images["val2a"].src = vopen.src;
    i7 = 1;
    box2a.value = i7;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box2a: i7 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval3() {
  if (i8 == 1) {
    document.images["val3"].src = vclose.src;
    i8 = 2;
    box3.value = i8;
  } else {
    document.images["val3"].src = vopen.src;
    i8 = 1;
    box3.value = i8;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box3: i8 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval4() {
  if (i9 == 1) {
    document.images["val4"].src = vclose.src;
    i9 = 2;
    box4.value = i9;
  } else {
    document.images["val4"].src = vopen.src;
    i9 = 1;
    box4.value = i9;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box4: i9 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval5() {
  if (i10 == 1) {
    document.images["val5"].src = vclose.src;
    i10 = 2;
    box5.value = i10;
  } else {
    document.images["val5"].src = vopen.src;
    i10 = 1;
    box5.value = i10;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box5: i10 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval6() {
  if (i11 == 1) {
    document.images["val6"].src = vclose.src;
    i11 = 2;
    box6.value = i11;
  } else {
    document.images["val6"].src = vopen.src;
    i11 = 1;
    box6.value = i11;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box6: i11 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval7() {
  if (i12 == 1) {
    document.images["val7"].src = vclose.src;
    i12 = 2;
    box7.value = i12;
  } else {
    document.images["val7"].src = vopen.src;
    i12 = 1;
    box7.value = i12;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box7: i12 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval8() {
  if (i13 == 1) {
    document.images["val8"].src = vclose.src;
    i13 = 2;
    box8.value = i13;
  } else {
    document.images["val8"].src = vopen.src;
    i13 = 1;
    box8.value = i13;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box8: i13 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval9() {
  if (i14 == 1) {
    document.images["val9"].src = vclose.src;
    i14 = 2;
    box9.value = i14;
  } else {
    document.images["val9"].src = vopen.src;
    i14 = 1;
    box9.value = i14;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box9: i14 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval10() {
  if (i15 == 1) {
    document.images["val10"].src = vclose.src;
    i15 = 2;
    box10.value = i15;
  } else {
    document.images["val10"].src = vopen.src;
    i15 = 1;
    box10.value = i15;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box10: i15 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval11() {
  if (i16 == 1) {
    document.images["val11"].src = vclose.src;
    i16 = 2;
    box11.value = i16;
  } else {
    document.images["val11"].src = vopen.src;
    i16 = 1;
    box11.value = i16;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box11: i16 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval12() {
  if (i17 == 1) {
    document.images["val12"].src = vclose.src;
    i17 = 2;
    box12.value = i17;
  } else {
    document.images["val12"].src = vopen.src;
    i17 = 1;
    box12.value = i17;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box12: i17 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval13() {
  if (i18 == 1) {
    document.images["val13"].src = vclose.src;
    i18 = 2;
    box13.value = i18;
  } else {
    document.images["val13"].src = vopen.src;
    i18 = 1;
    box13.value = i18;
  }
  AnalisisVal();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box13: i18 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval14() {
  if (i19 == 1) {
    document.images["val14"].src = vclose.src;
    i19 = 2;
    box14.value = i19;
  } else {
    document.images["val14"].src = vopen.src;
    i19 = 1;
    box14.value = i19;
  }
  EstadoB1();
  EstadoB2();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box14: i19 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval15() {
  if (i20 == 1) {
    document.images["val15"].src = vclose.src;
    i20 = 2;
    box15.value = i20;
  } else {
    document.images["val15"].src = vopen.src;
    i20 = 1;
    box15.value = i20;
  }
  EstadoB1();
  EstadoB2();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box15: i20 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval16() {
  if (i21 == 1) {
    document.images["val16"].src = vclose.src;
    i21 = 2;
    box16.value = i21;
  } else {
    document.images["val16"].src = vopen.src;
    i21 = 1;
    box16.value = i21;
  }
  EstadoB1();
  EstadoB2();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box16: i21 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval17() {
  if (i22 == 1) {
    document.images["val17"].src = vclose.src;
    i22 = 2;
    box17.value = i22;
  } else {
    document.images["val17"].src = vopen.src;
    i22 = 1;
    box17.value = i22;
  }
  EstadoB1();
  EstadoB2();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box17: i22 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval18() {
  if (i23 == 1) {
    document.images["val18"].src = vclose.src;
    i23 = 2;
    box18.value = i23;
  } else {
    document.images["val18"].src = vopen.src;
    i23 = 1;
    box18.value = i23;
  }
  EstadoB1();
  EstadoB2();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box18: i23 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval19() {
  if (i24 == 1) {
    document.images["val19"].src = vclose.src;
    i24 = 2;
    box19.value = i24;
  } else {
    document.images["val19"].src = vopen.src;
    i24 = 1;
    box19.value = i24;
  }
  EstadoB1();
  EstadoB2();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box19: i24 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval20() {
  if (i25 == 1) {
    document.images["val20"].src = vclose.src;
    i25 = 2;
    box20.value = i25;
  } else {
    document.images["val20"].src = vopen.src;
    i25 = 1;
    box20.value = i25;
  }
  EstadoB1();
  EstadoB2();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box20: i25 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval21() {
  if (i26 == 1) {
    document.images["val21"].src = vclose.src;
    i26 = 2;
    box21.value = i26;
  } else {
    document.images["val21"].src = vopen.src;
    i26 = 1;
    box21.value = i26;
  }
  EstadoB1();
  EstadoB2();

  $.ajax({
    url: "bop_modulo/test.php",
    data: { box21: i26 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval22() {
  if (i27 == 1) {
    document.images["val22"].src = vclose.src;
    i27 = 2;
    box22.value = i27;
  } else {
    document.images["val22"].src = vopen.src;
    i27 = 1;
    box22.value = i27;
  }
  EstadoB1();
  EstadoB2();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box22: i27 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}

//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval23() {
  if (i28 == 1) {
    document.images["val23"].src = vclose.src;
    i28 = 2;
    box23.value = i28;
  } else {
    document.images["val23"].src = vopen.src;
    i28 = 1;
    29
  }
  EstadoB1();
  EstadoB2();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box23: i28 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval24() {
  if (i29 == 1) {
    document.images["val24"].src = vclose.src;
    i29 = 2;
    box24.value = i29;
  } else {
    document.images["val24"].src = vopen.src;
    i29 = 1;
    box24.value = i29;
  }
  EstadoB1();
  EstadoB2();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box24: i29 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////
//////////*************************//////////////////////////

function camval25() {
  if (i30 == 1) {
    document.images["val25"].src = vclose.src;
    i30 = 2;
    box25.value = i30;
  } else {
    document.images["val25"].src = vopen.src;
    i30 = 1;
    box25.value = i30;
  }
  EstadoB1();
  EstadoB2();
  $.ajax({
    url: "bop_modulo/test.php",
    data: { box25: i30 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}


///funciones para determinar el estado en la bombas
///funciones para determinar el estado en la bombas
///funciones para determinar el estado en la bombas
/// Box == 2 es igual a open
var estadobomba1 = "";

function EstadoB1() {

  console.log(box21.value);

  if (
    box21.value == 2 &&
    document.images["val16"].src == vclose.src
  ) {
    estadobomba1 = "Desfogue";
  } else {
    if (
      box21.value == 2 &&
      document.images["val16"].src == vclose.src &&
      document.images["val14"].src == vclose.src
    ) {
      estadobomba1 = "Desfogue";
    } else {
      if (
        box21.value == 2 &&
        document.images["val19"].src == vclose.src &&
        document.images["val20"].src == vclose.src &&
        document.images["val18"].src == vclose.src &&
        document.images["val15"].src == vclose.src
      ) {
        estadobomba1 = "Bombeando&Marcando";
      } else {
        if (
          box21.value == 2 &&
          document.images["val17"].src == vclose.src &&
          document.images["val14"].src == vclose.src
        ) {
          estadobomba1 = "Bombeando&Marcando";
        } else {
          if (
            box21.value == 2 && document.images["val14"].src == vclose.src
          ) {
            estadobomba1 = "Bombeando";
          }
          else {
            if (
              box15.value == 2 &&
              box19.value == 2 &&
              box20.value == 2 &&
              box21.value == 2
            ) {
              estadobomba1 = "Bombeando";
            } else {
              estadobomba1 = "Explotion";
            }
          }
        } ///
      }
    }
  }

  $.ajax({
    url: "bop_modulo/estadobomba.php",
    data: { estadobomba1: estadobomba1 },
    type: "POST",

  });
}




function EstadoB2() {

  if (
    document.images["val25"].src == vclose.src &&
    document.images["val16"].src == vclose.src &&
    document.images["val17"].src == vclose.src &&
    document.images["val18"].src == vclose.src
  ) {
    estadobomba2 = "Desfogue";
  } else {
    if (
      document.images["val25"].src == vclose.src &&
      document.images["val20"].src == vclose.src &&
      document.images["val19"].src == vclose.src &&
      document.images["val16"].src == vclose.src
    ) {
      estadobomba2 = "Desfogue";
    } else {
      if (
        document.images["val25"].src == vclose.src &&
        document.images["val15"].src == vclose.src &&
        document.images["val18"].src == vclose.src
      ) {
        estadobomba2 = "Bombeando&Marcando";
      } else {
        if (
          document.images["val25"].src == vclose.src &&
          document.images["val15"].src == vclose.src
        ) {
          estadobomba2 = "Bombeando";
        } else {
          if (
            document.images["val25"].src == vclose.src &&
            document.images["val20"].src == vclose.src &&
            document.images["val19"].src == vclose.src &&
            document.images["val14"].src == vclose.src &&
            document.images["val17"].src == vclose.src
          ) {
            estadobomba2 = "Bombeando&Marcando";
          } else {
            if (
              document.images["val25"].src == vclose.src &&
              document.images["val20"].src == vclose.src &&
              document.images["val19"].src == vclose.src &&
              document.images["val14"].src == vclose.src
            ) {
              estadobomba2 = "Bombeando";
            } else {
              if
                (
                document.images["val25"].src == vclose.src &&
                document.images["val18"].src == vclose.src &&
                document.images["val17"].src == vclose.src &&
                document.images["val14"].src == vclose.src
              ) {
                estadobomba2 = "Bombeando";
              }
              else {
                estadobomba2 = "Explotion";
              }
            }
          }
        }
      }
    }
  }

  $.ajax({
    url: "bop_modulo/estadobomba.php",
    data: { estadobomba2: estadobomba2 },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}



// Inicio de bloque de Valvulas Choke

function AnalisisVal() {
  var OutTotal = "";
  var ChokeRem1_Activo = "";
  var ChokeDesfogue = "";
  var ChokeMan2_Activo = "";
  var ChokeRem2_Activo = "";

  if (box1a.value == 1 && box1b.value == 1 && box1c.value == 1) {
    OutTotal = false;
  } else {
    OutTotal = true;
  }

  if (
    box10.value == 2 &&
    box3.value == 2 &&
    box1d.value == 2 &&
    OutTotal == true
  ) {
    ChokeRem1_Activo = "true";
  } else {
    ChokeRem1_Activo = "false";
  }

  if (
    box10.value == 2 &&
    box8.value == 2 &&
    box9.value == 2 &&
    box7.value == 2 &&
    box2a.value == 2 &&
    OutTotal == true
  ) {
    ChokeRem2_Activo = "true";
  } else {
    ChokeRem2_Activo = "false";
  }

  if (
    box10.value == 2 &&
    box8.value == 2 &&
    box5.value == 2 &&
    OutTotal == true
  ) {
    ChokeDesfogue = "true";
  } else {
    ChokeDesfogue = "false";
  }

  if (
    box10.value == 2 &&
    box.value == 2 &&
    box4.value == 2
  ) {
    ChokeMan1_Activo = "true";
  } else {
    ChokeMan1_Activo = "false";
  }

  if (
    box10.value == 2 &&
    box8.value == 2 &&
    box9.value == 2 &&
    box6.value == 2 &&
    box2.value == 2
  ) {
    ChokeMan2_Activo = "true";
  } else {
    ChokeMan2_Activo = "false";
  }

  $.ajax({
    url: "bop_modulo/estadobomba.php",
    data: {
      ChokeRem1_Activo: ChokeRem1_Activo,
      ChokeRem2_Activo: ChokeRem2_Activo,
      ChokeDesfogue: ChokeDesfogue,
      ChokeMan2_Activo: ChokeMan2_Activo,
      ChokeMan1_Activo: ChokeMan1_Activo
    },
    type: "POST",
    success: function (datos) {
      $("#contenedor").html(datos);
    },
  });
}


////////////////////////////////////////// 
