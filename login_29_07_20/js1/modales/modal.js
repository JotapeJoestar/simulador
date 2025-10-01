/* JS QUE CON FUNCIONES QUE ACTIVAN LOS ESTULOS DE LOS MODALES PARA ABRIRLOS O CERRARLOS */

if (document.getElementById("myBtn")) {
    var myModal = document.getElementById("myModal");
    var myBtn = document.getElementById("myBtn");
    var close1 = document.getElementsByClassName("close1")[0];
    var body = document.getElementsByTagName("body")[0];

    myBtn.onclick = function () {
        myModal.style.display = "block";
        body.style.position = "static";
        body.style.height = "100%";
        body.style.overflow = "hidden";

    }

    close1.onclick = function () {
        myModal.style.display = "none";

        body.style.position = "inherit";
        body.style.height = "auto";
        body.style.overflow = "visible";
    }

    /*     window.onclick = function (event) {
            if (event.target == myModal) {
                myModal.style.display = "none";
    
                body.style.position = "inherit";
                body.style.height = "auto";
                body.style.overflow = "visible";
            }
        } */
}


if (document.getElementById("myBtn2")) {
    var myModal1 = document.getElementById("myModal2");
    var myBtn1 = document.getElementById("myBtn2");
    var close11 = document.getElementsByClassName("close1")[1];
    var body1 = document.getElementsByTagName("body")[1];

    myBtn1.onclick = function () {
        myModal1.style.display = "block";
        body1.style.position = "static";
        body1.style.height = "100%";
        body1.style.overflow = "hidden";
    }

    close11.onclick = function () {
        myModal1.style.display = "none";

        body1.style.position = "inherit";
        body1.style.height = "auto";
        body1.style.overflow = "visible";
    }

    /*     window.onclick = function (event) {
            if (event1.target == myModal1) {
                myModal1.style.display = "none";
                body1.style.position = "inherit";
                body1.style.height = "auto";
                body1.style.overflow = "visible";
            }
        } */
}


if (document.getElementById("myBtn3")) {
    var myModal2 = document.getElementById("myModal3");
    var myBtn2 = document.getElementById("myBtn3");
    var close12 = document.getElementsByClassName("close1")[2];
    var body2 = document.getElementsByTagName("body")[2];

    myBtn2.onclick = function () {
        myModal2.style.display = "block";
        body2.style.position = "static";
        body2.style.height = "100%";
        body2.style.overflow = "hidden";
    }

    close12.onclick = function () {
        myModal2.style.display = "none";

        body2.style.position = "inherit";
        body2.style.height = "auto";
        body2.style.overflow = "visible";
    }

    /*     window.onclick = function (event) {
            if (event2.target == myModal) {
                myModal2.style.display = "none";
    
                body2.style.position = "inherit";
                body2.style.height = "auto";
                body2.style.overflow = "visible";
            }
        } */
}

if (document.getElementById("myBtn4")) {

    var myModal3 = document.getElementById("myModal4");
    var myBtn3 = document.getElementById("myBtn4");
    var close13 = document.getElementsByClassName("close1")[3];
    var body3 = document.getElementsByTagName("body")[3];

    myBtn3.onclick = function () {
        myModal3.style.display = "block";
        body3.style.position = "static";
        body3.style.height = "100%";
        body3.style.overflow = "hidden";
    }

    close13.onclick = function () {
        myModal3.style.display = "none";
        body3.style.position = "inherit";
        body3.style.height = "auto";
        body3.style.overflow = "visible";
    }

    /*     window.onclick = function (event) {
            if (event3.target == myModal) {
                myModal3.style.display = "none";
    
                body3.style.position = "inherit";
                body3.style.height = "auto";
                body3.style.overflow = "visible";
            }
        } */
}


if (document.getElementById("myBtn5")) {
    var myModal4 = document.getElementById("myModal5");
    var myBtn4 = document.getElementById("myBtn5");
    var close14 = document.getElementsByClassName("close1")[4];
    var body4 = document.getElementsByTagName("body")[4];

    myBtn4.onclick = function () {
        myModal4.style.display = "block";

        body4.style.position = "static";
        body4.style.height = "100%";
        body4.style.overflow = "hidden";
    }

    close14.onclick = function () {
        myModal4.style.display = "none";

        body4.style.position = "inherit";
        body4.style.height = "auto";
        body4.style.overflow = "visible";
    }

    /*     window.onclick = function (event) {
            if (event4.target == myModal) {
                myModal4.style.display = "none";
    
                body4.style.position = "inherit";
                body4.style.height = "auto";
                body4.style.overflow = "visible";
            }
        } */
}


if (document.getElementById("myBtn6")) {
    var myModal5 = document.getElementById("myModal6");
    var myBtn5 = document.getElementById("myBtn6");
    var close15 = document.getElementsByClassName("close1")[5];
    var body5 = document.getElementsByTagName("body")[5];

    myBtn5.onclick = function () {
        myModal5.style.display = "block";

        body5.style.position = "static";
        body5.style.height = "100%";
        body5.style.overflow = "hidden";
    }

    close15.onclick = function () {
        myModal5.style.display = "none";

        body5.style.position = "inherit";
        body5.style.height = "auto";
        body5.style.overflow = "visible";
    }

    /*     window.onclick = function (event) {
            if (event5.target == myModal) {
                myModal5.style.display = "none";
    
                body5.style.position = "inherit";
                body5.style.height = "auto";
                body5.style.overflow = "visible";
            }
        } */
}


if (document.getElementById("myBtn7")) {
    var myModal6 = document.getElementById("myModal7");
    var myBtn6 = document.getElementById("myBtn7");
    var close16 = document.getElementsByClassName("close1")[6];
    var body6 = document.getElementsByTagName("body")[6];

    myBtn6.onclick = function () {
        myModal6.style.display = "block";

        body6.style.position = "static";
        body6.style.height = "100%";
        body6.style.overflow = "hidden";
    }

    close16.onclick = function () {
        myModal6.style.display = "none";

        body6.style.position = "inherit";
        body6.style.height = "auto";
        body6.style.overflow = "visible";
    }

    /*     window.onclick = function (event) {
            if (event6.target == myModal) {
                myModal6.style.display = "none";
    
                body6.style.position = "inherit";
                body6.style.height = "auto";
                body6.style.overflow = "visible";
            }
        } */
}

if (document.getElementById("myBtn8")) {
    var myModal7 = document.getElementById("myModal8");
    var myBtn7 = document.getElementById("myBtn8");
    var close17 = document.getElementsByClassName("close1")[7];
    var body7 = document.getElementsByTagName("body")[7];

    myBtn7.onclick = function () {
        myModal7.style.display = "block";

        body7.style.position = "static";
        body7.style.height = "100%";
        body7.style.overflow = "hidden";
    }

    close17.onclick = function () {
        myModal7.style.display = "none";

        body7.style.position = "inherit";
        body7.style.height = "auto";
        body7.style.overflow = "visible";
    }

    /*     window.onclick = function (event) {
            if (event7.target == myModal) {
                myModal7.style.display = "none";
    
                body7.style.position = "inherit";
                body7.style.height = "auto";
                body7.style.overflow = "visible";
            }
        } */
}

if (document.getElementById("myBtnGrafs")) {
    var myModal8 = document.getElementById("myModalGrafs");
    var myBtn8 = document.getElementById("myBtnGrafs");
    var close18 = document.getElementsByClassName("close1")[8];
    var body8 = document.getElementsByTagName("body")[8];

    myBtn8.onclick = function () {
        myModal8.style.display = "block";
        body8.style.position = "static";
        body8.style.height = "100%";
        body8.style.overflow = "hidden";
    }

    close18.onclick = function () {
        myModal8.style.display = "none";
        body8.style.position = "inherit";
        body8.style.height = "auto";
        body8.style.overflow = "visible";
    }

    /*     window.onclick = function (event) {
            if (event8.target == myModal) {
                myModal8.style.display = "none";
                body8.style.position = "inherit";
                body8.style.height = "auto";
                body8.style.overflow = "visible";
            }
        } */
}

if (document.getElementById("myBtnSetup")) {
    var myModal9 = document.getElementById("myModalSetup");
    var myBtn9 = document.getElementById("myBtnSetup");
    var close19 = document.getElementsByClassName("close1")[9];
    var body9 = document.getElementsByTagName("body")[9];

    myBtn9.onclick = function () {
        myModal9.style.display = "block";
        body9.style.position = "static";
        body9.style.height = "100%";
        body9.style.overflow = "hidden";
    }

    close19.onclick = function () {
        myModal9.style.display = "none";
        body9.style.position = "inherit";
        body9.style.height = "auto";
        body9.style.overflow = "visible";
    }
}

//// TRAE DATOS INCIALES DE BTN SETUP
function datasetup() {
    var dataset = $.ajax({
        url: "../../Modulo_graficas/php/setupkit.php",
        dataType: 'text',
        type: "POST",
        async: false
    }).responseText;
    jsset = JSON.parse(dataset);

    dset1 = jsset[0];

    document.getElementById("dataset1").value = dset1;
}

/// GUARDA Y ACTUALIZA DATOS SETUP
function savesetup1(){

    var datasetup1 = document.getElementById("dataset1").value;
    
   data = $.ajax({
        url: "../../Modulo_graficas/php/actusetup.php",
        dataType: 'text',
        data: {
            datasetup1: datasetup1
        },
        type: "POST",
        async: false
    }).responseText;

    alert("Data Update");

}

//Ajax para enviar los datos guardados en los formularios de cada variable (graficas) 
function confirmardatosgraf() {

    Datasel = $.ajax({
        url: "../../Modulo_graficas/php/cargarconfselecgraf.php",
        dataType: 'text',
        data: {
            dato40: "WELL CONTROL"
        },
        type: "POST",
        async: false
    }).responseText;
    jsdac = JSON.parse(Datasel);

    d0 = jsdac[0];
    d1 = jsdac[1];
    d2 = jsdac[2];
    d3 = jsdac[3];
    d4 = jsdac[4];
    d5 = jsdac[5];
    d6 = jsdac[6];
    d7 = jsdac[7];
    d8 = jsdac[8];
    d9 = jsdac[9];
    d10 = jsdac[10];
    d11 = jsdac[11];
    d12 = jsdac[12];
    d13 = jsdac[13];
    d14 = jsdac[14];
    d15 = jsdac[15];
    d16 = jsdac[16];
    d17 = jsdac[17];
    d18 = jsdac[18];
    d19 = jsdac[19];
    d20 = jsdac[20];
    d21 = jsdac[21];
    d22 = jsdac[22];
    d23 = jsdac[23];
    d24 = jsdac[24];
    d25 = jsdac[25];
    d26 = jsdac[26];
    d27 = jsdac[27];
    d28 = jsdac[28];
    d29 = jsdac[29];
    d30 = jsdac[30];
    d31 = jsdac[31];
    d32 = jsdac[32];
    d33 = jsdac[33];
    d34 = jsdac[34];
    d35 = jsdac[35];
    d36 = jsdac[36];
    d37 = jsdac[37];
    d38 = jsdac[38];
    d39 = jsdac[39];

    var1 = d0[0];
    var2 = d5[0];
    var3 = d10[0];
    var4 = d15[0];
    var5 = d20[0];
    var6 = d25[0];
    var7 = d30[0];
    var8 = d35[0];
    DatosVar = jsdac[40];

    console.log(DatosVar);

    colorl1 = d1;
    anchol1 = d2;
    colorl2 = d6;
    anchol2 = d7;
    colorl3 = d11;
    anchol3 = d12;
    colorl4 = d16;
    anchol4 = d17;
    colorl5 = d21;
    anchol5 = d22;
    colorl6 = d26;
    anchol6 = d27;
    colorl7 = d31;
    anchol7 = d32;
    colorl8 = d36;
    anchol8 = d37;


    document.getElementById("select1").value = d0;
    document.getElementById("colorl1").value = d1;
    document.getElementById("anchol1").value = d2;
    document.getElementById("minl1").value = d3;
    document.getElementById("maxl1").value = d4;
    document.getElementById('indata1').innerText = d0;
    $("#datf1l1").css({
        "visibility": "visible",
        "color": d1,
        "background-color": "rgba(255,255,255,1.20)"
    });
    $("#BotonSA1").css({ "background-color": d1 })
    document.getElementById('DatoInput1T').innerText = d0;


    document.getElementById("select2").value = d5;
    document.getElementById("colorl2").value = d6;
    document.getElementById("anchol2").value = d7;
    document.getElementById("minl2").value = d8;
    document.getElementById("maxl2").value = d9;
    document.getElementById('indata2').innerText = d5;
    $("#datf1l2").css({
        "visibility": "visible",
        "color": d6,
        "background-color": "rgba(255,255,255,1.20)"
    });
    $("#BotonSA2").css({ "background-color": d6 })
    document.getElementById('DatoInput2T').innerText = d5;


    document.getElementById("select3").value = d10;
    document.getElementById("colorl3").value = d11;
    document.getElementById("anchol3").value = d12;
    document.getElementById("minl3").value = d13;
    document.getElementById("maxl3").value = d14;
    document.getElementById('indata3').innerText = d10;
    $("#datf1l3").css({
        "visibility": "visible",
        "color": d11,
        "background-color": "rgba(255,255,255,1.20)"
    });
    $("#BotonSA3").css({ "background-color": d11 })
    document.getElementById('DatoInput3T').innerText = d10;


    document.getElementById("select4").value = d15;
    document.getElementById("colorl4").value = d16;
    document.getElementById("anchol4").value = d17;
    document.getElementById("minl4").value = d18;
    document.getElementById("maxl4").value = d19;
    document.getElementById('indata4').innerText = d15;
    $("#datf1l4").css({
        "visibility": "visible",
        "color": d16,
        "background-color": "rgba(255,255,255,1.20)"
    });
    $("#BotonSA4").css({ "background-color": d16 })
    document.getElementById('DatoInput4T').innerText = d15;


    document.getElementById("select5").value = d20;
    document.getElementById("colorl5").value = d21;
    document.getElementById("anchol5").value = d22;
    document.getElementById("minl5").value = d23;
    document.getElementById("maxl5").value = d24;
    document.getElementById('indata5').innerText = d20;
    $("#datf1l5").css({
        "visibility": "visible",
        "color": d21,
        "background-color": "rgba(255,255,255,1.20)"
    });
    $("#BotonSA5").css({ "background-color": d21 })
    document.getElementById('DatoInput5T').innerText = d20;


    document.getElementById("select6").value = d25;
    document.getElementById("colorl6").value = d26;
    document.getElementById("anchol6").value = d27;
    document.getElementById("minl6").value = d28;
    document.getElementById("maxl6").value = d29;
    document.getElementById('indata6').innerText = d25;
    $("#datf1l6").css({
        "visibility": "visible",
        "color": d26,
        "background-color": "rgba(255,255,255,1.20)"
    });
    $("#BotonSA6").css({ "background-color": d26 })
    document.getElementById('DatoInput6T').innerText = d25;


    document.getElementById("select7").value = d30;
    document.getElementById("colorl7").value = d31;
    document.getElementById("anchol7").value = d32;
    document.getElementById("minl7").value = d33;
    document.getElementById("maxl7").value = d34;
    document.getElementById('indata7').innerText = d30;
    $("#datf1l7").css({
        "visibility": "visible",
        "color": d31,
        "background-color": "rgba(255,255,255,1.20)"
    });
    $("#BotonSA7").css({ "background-color": d31 })
    document.getElementById('DatoInput7T').innerText = d30;


    document.getElementById("select8").value = d35;
    document.getElementById("colorl8").value = d36;
    document.getElementById("anchol8").value = d37;
    document.getElementById("minl8").value = d38;
    document.getElementById("maxl8").value = d39;
    document.getElementById('indata8').innerText = d35;
    $("#datf1l8").css({
        "visibility": "visible",
        "color": d36,
        "background-color": "rgba(255,255,255,1.20)"
    });
    $("#BotonSA8").css({ "background-color": d36 })
    document.getElementById('DatoInput8T').innerText = d35;

}

// Funcion que toma la configuracion de las graficas y luego la guarda en base datos 
function savegrafconf() {

    $("#save").click(function () {

        alert('Saved Data');

        //PRIMER FORMULARIO

        var d1 = document.getElementById('select1').value;
        var d2 = document.getElementById('anchol1').value;
        var d3 = document.getElementById('colorl1').value;
        var d4 = document.getElementById('maxl1').value;
        var d5 = document.getElementById('minl1').value;
        var d6 = "WELL CONTROL";
        var d7 = 1;

        $.ajax({
            url: "../../Modulo_graficas/php/InDatosGraf.php",
            data: {
                dato1: d1,
                dato2: d2,
                dato3: d3,
                dato4: d4,
                dato5: d5,
                dato6: d6,
                dato7: d7
            },
            type: "POST",
        });

        // SEGUNDO FORMULARIO

        var d1 = document.getElementById('select2').value;
        var d2 = document.getElementById('anchol2').value;
        var d3 = document.getElementById('colorl2').value;
        var d4 = document.getElementById('maxl2').value;
        var d5 = document.getElementById('minl2').value;
        var d7 = 2;

        $.ajax({
            url: "../../Modulo_graficas/php/InDatosGraf.php",
            data: {
                dato1: d1,
                dato2: d2,
                dato3: d3,
                dato4: d4,
                dato5: d5,
                dato6: d6,
                dato7: d7
            },
            type: "POST",
        });

        // TERCER FORMULARIO

        var d1 = document.getElementById('select3').value;
        var d2 = document.getElementById('anchol3').value;
        var d3 = document.getElementById('colorl3').value;
        var d4 = document.getElementById('maxl3').value;
        var d5 = document.getElementById('minl3').value;
        var d7 = 3;

        $.ajax({
            url: "../../Modulo_graficas/php/InDatosGraf.php",
            data: {
                dato1: d1,
                dato2: d2,
                dato3: d3,
                dato4: d4,
                dato5: d5,
                dato6: d6,
                dato7: d7
            },
            type: "POST",
        });

        //CUARTO FORMULARIO

        var d1 = document.getElementById('select4').value;
        var d2 = document.getElementById('anchol4').value;
        var d3 = document.getElementById('colorl4').value;
        var d4 = document.getElementById('maxl4').value;
        var d5 = document.getElementById('minl4').value;
        var d7 = 4;

        $.ajax({
            url: "../../Modulo_graficas/php/InDatosGraf.php",
            data: {
                dato1: d1,
                dato2: d2,
                dato3: d3,
                dato4: d4,
                dato5: d5,
                dato6: d6,
                dato7: d7
            },
            type: "POST",
        });

        //QUINTO FORMULARIO

        var d1 = document.getElementById('select5').value;
        var d2 = document.getElementById('anchol5').value;
        var d3 = document.getElementById('colorl5').value;
        var d4 = document.getElementById('maxl5').value;
        var d5 = document.getElementById('minl5').value;
        var d7 = 5;

        $.ajax({
            url: "../../Modulo_graficas/php/InDatosGraf.php",
            data: {
                dato1: d1,
                dato2: d2,
                dato3: d3,
                dato4: d4,
                dato5: d5,
                dato6: d6,
                dato7: d7
            },
            type: "POST",
        });

        //SEXTO FORMULARIO

        var d1 = document.getElementById('select6').value;
        var d2 = document.getElementById('anchol6').value;
        var d3 = document.getElementById('colorl6').value;
        var d4 = document.getElementById('maxl6').value;
        var d5 = document.getElementById('minl6').value;
        var d7 = 6;

        $.ajax({
            url: "../../Modulo_graficas/php/InDatosGraf.php",
            data: {
                dato1: d1,
                dato2: d2,
                dato3: d3,
                dato4: d4,
                dato5: d5,
                dato6: d6,
                dato7: d7
            },
            type: "POST",
        });

        // SEPTIMO FORMULARIO

        var d1 = document.getElementById('select7').value;
        var d2 = document.getElementById('anchol7').value;
        var d3 = document.getElementById('colorl7').value;
        var d4 = document.getElementById('maxl7').value;
        var d5 = document.getElementById('minl7').value;
        var d7 = 7;

        $.ajax({
            url: "../../Modulo_graficas/php/InDatosGraf.php",
            data: {
                dato1: d1,
                dato2: d2,
                dato3: d3,
                dato4: d4,
                dato5: d5,
                dato6: d6,
                dato7: d7
            },
            type: "POST",
        });

        // OCTAVO FORMULARIO

        var d1 = document.getElementById('select8').value;
        var d2 = document.getElementById('anchol8').value;
        var d3 = document.getElementById('colorl8').value;
        var d4 = document.getElementById('maxl8').value;
        var d5 = document.getElementById('minl8').value;
        var d7 = 8;

        $.ajax({
            url: "../../Modulo_graficas/php/InDatosGraf.php",
            data: {
                dato1: d1,
                dato2: d2,
                dato3: d3,
                dato4: d4,
                dato5: d5,
                dato6: d6,
                dato7: d7
            },
            type: "POST",
        });
    })
}

var BotonOpcionGra1 = 0;
var BotonOpcionGra2 = 0;
var BotonOpcionGra3 = 0;
var BotonOpcionGra4 = 0;
var BotonOpcionGra5 = 0;
var BotonOpcionGra6 = 0;
var BotonOpcionGra7 = 0;
var BotonOpcionGra8 = 0;

//Funciones para abrir formularios de configuracion de lineas de graficas
$("#BotonSA1").click(function () {
    if (BotonOpcionGra1 == 0) {
        $("#DivOpciones1").css({ "display": "block" });
        $("#DivOpciones2").css({ "display": "none" });
        $("#DivOpciones3").css({ "display": "none" });
        $("#DivOpciones4").css({ "display": "none" });
        $("#DivOpciones5").css({ "display": "none" });
        $("#DivOpciones6").css({ "display": "none" });
        $("#DivOpciones7").css({ "display": "none" });
        $("#DivOpciones8").css({ "display": "none" });
        BotonOpcionGra1 = 1;
        BotonOpcionGra2 = 0;
        BotonOpcionGra3 = 0;
        BotonOpcionGra4 = 0;
        BotonOpcionGra5 = 0;
        BotonOpcionGra6 = 0;
        BotonOpcionGra7 = 0;
        BotonOpcionGra8 = 0;
    }
    else {
        $("#DivOpciones1").css({ "display": "none" });
        BotonOpcionGra1 = 0;
    }

});

$("#BotonSA2").click(function () {
    if (BotonOpcionGra2 == 0) {
        $("#DivOpciones1").css({ "display": "none" });
        $("#DivOpciones2").css({ "display": "block" });
        $("#DivOpciones3").css({ "display": "none" });
        $("#DivOpciones4").css({ "display": "none" });
        $("#DivOpciones5").css({ "display": "none" });
        $("#DivOpciones6").css({ "display": "none" });
        $("#DivOpciones7").css({ "display": "none" });
        $("#DivOpciones8").css({ "display": "none" });
        BotonOpcionGra1 = 0;
        BotonOpcionGra2 = 1;
        BotonOpcionGra3 = 0;
        BotonOpcionGra4 = 0;
        BotonOpcionGra5 = 0;
        BotonOpcionGra6 = 0;
        BotonOpcionGra7 = 0;
        BotonOpcionGra8 = 0;
    }
    else {
        $("#DivOpciones2").css({ "display": "none" });
        BotonOpcionGra2 = 0;
    }

});

$("#BotonSA3").click(function () {
    if (BotonOpcionGra3 == 0) {
        $("#DivOpciones1").css({ "display": "none" });
        $("#DivOpciones2").css({ "display": "none" });
        $("#DivOpciones3").css({ "display": "block" });
        $("#DivOpciones4").css({ "display": "none" });
        $("#DivOpciones5").css({ "display": "none" });
        $("#DivOpciones6").css({ "display": "none" });
        $("#DivOpciones7").css({ "display": "none" });
        $("#DivOpciones8").css({ "display": "none" });
        BotonOpcionGra1 = 0;
        BotonOpcionGra2 = 0;
        BotonOpcionGra3 = 1;
        BotonOpcionGra4 = 0;
        BotonOpcionGra5 = 0;
        BotonOpcionGra6 = 0;
        BotonOpcionGra7 = 0;
        BotonOpcionGra8 = 0;
    }
    else {
        $("#DivOpciones3").css({ "display": "none" });
        BotonOpcionGra3 = 0;
    }
});

$("#BotonSA4").click(function () {
    if (BotonOpcionGra4 == 0) {
        $("#DivOpciones1").css({ "display": "none" });
        $("#DivOpciones2").css({ "display": "none" });
        $("#DivOpciones3").css({ "display": "none" });
        $("#DivOpciones4").css({ "display": "block" });
        $("#DivOpciones5").css({ "display": "none" });
        $("#DivOpciones6").css({ "display": "none" });
        $("#DivOpciones7").css({ "display": "none" });
        $("#DivOpciones8").css({ "display": "none" });
        BotonOpcionGra1 = 0;
        BotonOpcionGra2 = 0;
        BotonOpcionGra3 = 0;
        BotonOpcionGra4 = 1;
        BotonOpcionGra5 = 0;
        BotonOpcionGra6 = 0;
        BotonOpcionGra7 = 0;
        BotonOpcionGra8 = 0;
    }
    else {
        $("#DivOpciones4").css({ "display": "none" });
        BotonOpcionGra4 = 0;
    }
});

$("#BotonSA5").click(function () {
    if (BotonOpcionGra5 == 0) {
        $("#DivOpciones1").css({ "display": "none" });
        $("#DivOpciones2").css({ "display": "none" });
        $("#DivOpciones3").css({ "display": "none" });
        $("#DivOpciones4").css({ "display": "none" });
        $("#DivOpciones5").css({ "display": "block" });
        $("#DivOpciones6").css({ "display": "none" });
        $("#DivOpciones7").css({ "display": "none" });
        $("#DivOpciones8").css({ "display": "none" });
        BotonOpcionGra1 = 0;
        BotonOpcionGra2 = 0;
        BotonOpcionGra3 = 0;
        BotonOpcionGra4 = 0;
        BotonOpcionGra5 = 1;
        BotonOpcionGra6 = 0;
        BotonOpcionGra7 = 0;
        BotonOpcionGra8 = 0;
    }
    else {
        $("#DivOpciones5").css({ "display": "none" });
        BotonOpcionGra5 = 0;
    }
});

$("#BotonSA6").click(function () {
    if (BotonOpcionGra6 == 0) {
        $("#DivOpciones1").css({ "display": "none" });
        $("#DivOpciones2").css({ "display": "none" });
        $("#DivOpciones3").css({ "display": "none" });
        $("#DivOpciones4").css({ "display": "none" });
        $("#DivOpciones5").css({ "display": "none" });
        $("#DivOpciones6").css({ "display": "block" });
        $("#DivOpciones7").css({ "display": "none" });
        $("#DivOpciones8").css({ "display": "none" });
        BotonOpcionGra1 = 0;
        BotonOpcionGra2 = 0;
        BotonOpcionGra3 = 0;
        BotonOpcionGra4 = 0;
        BotonOpcionGra5 = 0;
        BotonOpcionGra6 = 1;
        BotonOpcionGra7 = 0;
        BotonOpcionGra8 = 0;
    }
    else {
        $("#DivOpciones6").css({ "display": "none" });
        BotonOpcionGra6 = 0;
    }

});

$("#BotonSA7").click(function () {
    if (BotonOpcionGra7 == 0) {
        $("#DivOpciones1").css({ "display": "none" });
        $("#DivOpciones2").css({ "display": "none" });
        $("#DivOpciones3").css({ "display": "none" });
        $("#DivOpciones4").css({ "display": "none" });
        $("#DivOpciones5").css({ "display": "none" });
        $("#DivOpciones6").css({ "display": "none" });
        $("#DivOpciones7").css({ "display": "block" });
        $("#DivOpciones8").css({ "display": "none" });
        BotonOpcionGra1 = 0;
        BotonOpcionGra2 = 0;
        BotonOpcionGra3 = 0;
        BotonOpcionGra4 = 0;
        BotonOpcionGra5 = 0;
        BotonOpcionGra6 = 0;
        BotonOpcionGra7 = 1;
        BotonOpcionGra8 = 0;
    }
    else {
        $("#DivOpciones7").css({ "display": "none" });
        BotonOpcionGra7 = 0;
    }
});

$("#BotonSA8").click(function () {
    if (BotonOpcionGra8 == 0) {
        $("#DivOpciones1").css({ "display": "none" });
        $("#DivOpciones2").css({ "display": "none" });
        $("#DivOpciones3").css({ "display": "none" });
        $("#DivOpciones4").css({ "display": "none" });
        $("#DivOpciones5").css({ "display": "none" });
        $("#DivOpciones6").css({ "display": "none" });
        $("#DivOpciones7").css({ "display": "none" });
        $("#DivOpciones8").css({ "display": "block" });
        BotonOpcionGra1 = 0;
        BotonOpcionGra2 = 0;
        BotonOpcionGra3 = 0;
        BotonOpcionGra4 = 0;
        BotonOpcionGra5 = 0;
        BotonOpcionGra6 = 0;
        BotonOpcionGra7 = 0;
        BotonOpcionGra8 = 1;
    }
    else {
        $("#DivOpciones8").css({ "display": "none" });
        BotonOpcionGra8 = 0;
    }
});


// funciones para cambios de variables tome dta y color
function color1() {
    $("#BotonSA1").css({ "background-color": document.getElementById("colorl1").value })
}

function color2() {
    $("#BotonSA2").css({ "background-color": document.getElementById("colorl2").value })
}

function color3() {
    $("#BotonSA3").css({ "background-color": document.getElementById("colorl3").value })
}

function color4() {
    $("#BotonSA4").css({ "background-color": document.getElementById("colorl4").value })
}

function color5() {
    $("#BotonSA5").css({ "background-color": document.getElementById("colorl5").value })
}

function color6() {
    $("#BotonSA6").css({ "background-color": document.getElementById("colorl6").value })
}

function color7() {
    $("#BotonSA7").css({ "background-color": document.getElementById("colorl7").value })
}

function color8() {
    $("#BotonSA8").css({ "background-color": document.getElementById("colorl8").value })
}


function camb1() {
    document.getElementById('indata1').innerText = document.getElementById("select1").value;
    document.getElementById('DatoInput1T').innerText = document.getElementById("select1").value;
}

function camb2() {
    document.getElementById('indata2').innerText = document.getElementById("select2").value;
    document.getElementById('DatoInput2T').innerText = document.getElementById("select2").value;
}

function camb3() {
    document.getElementById('indata3').innerText = document.getElementById("select3").value;
    document.getElementById('DatoInput3T').innerText = document.getElementById("select3").value;
}

function camb4() {
    document.getElementById('indata4').innerText = document.getElementById("select4").value;
    document.getElementById('DatoInput4T').innerText = document.getElementById("select4").value;
}

function camb5() {
    document.getElementById('indata5').innerText = document.getElementById("select5").value;
    document.getElementById('DatoInput5T').innerText = document.getElementById("select5").value;
}

function camb6() {
    document.getElementById('indata6').innerText = document.getElementById("select6").value;
    document.getElementById('DatoInput6T').innerText = document.getElementById("select6").value;
}

function camb7() {
    document.getElementById('indata7').innerText = document.getElementById("select7").value;
    document.getElementById('DatoInput7T').innerText = document.getElementById("select7").value;
}

function camb8() {
    document.getElementById('indata8').innerText = document.getElementById("select8").value;
    document.getElementById('DatoInput8T').innerText = document.getElementById("select8").value;
}

////// FUNCION PARA CUANDO SE DA NUEVA PRACTICA
function reiniciar(){

    Datasel = $.ajax({
        url: "../../index_modulo/rolactudatos.php",
        dataType: 'text',
        type: "POST",
        async: false
    }).responseText;
    jsdac = JSON.parse(Datasel);

}


//funcion de inicio de pagina
window.addEventListener("load", function () {
    confirmardatosgraf();
    savegrafconf();
    datasetup();

    for (i = 0; i < DatosVar.length; i++) {
        document.getElementById("select1").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
    }

    for (i = 0; i < DatosVar.length; i++) {
        document.getElementById("select2").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
    }

    for (i = 0; i < DatosVar.length; i++) {
        document.getElementById("select3").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
    }

    for (i = 0; i < DatosVar.length; i++) {
        document.getElementById("select4").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
    }

    for (i = 0; i < DatosVar.length; i++) {
        document.getElementById("select5").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
    }

    for (i = 0; i < DatosVar.length; i++) {
        document.getElementById("select6").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
    }

    for (i = 0; i < DatosVar.length; i++) {
        document.getElementById("select7").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
    }

    for (i = 0; i < DatosVar.length; i++) {
        document.getElementById("select8").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
    }

    document.getElementById("select1").value = d0;
    document.getElementById("select2").value = d5;
    document.getElementById("select3").value = d10;
    document.getElementById("select4").value = d15;
    document.getElementById("select5").value = d20;
    document.getElementById("select6").value = d25;
    document.getElementById("select7").value = d30;
    document.getElementById("select8").value = d35;

}
)
