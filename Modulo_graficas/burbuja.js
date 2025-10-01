/// JS QUE CONTIENE LAS FUNCIONES RELACIONADAS AL MODULO DE GRAFICAS

// Variable de Hora para medir la division de datos en grafica
//var Hora = document.getElementById("HoraGraf").value;

//Ajax para enviar los datos guardados en los formularios de cada variable (graficas) 
function confirmardatosgraf() {

  /*   $("#HoraGraf").change(function () {

        Hora = document.getElementById("HoraGraf").value;

        Datasel = $.ajax({
            url: "Modulo_graficas/php/cargaycambio.php",
            dataType: 'text',
            data: {
                Hora: Hora
            },
            type: "POST",
            async: false
        }).responseText;

        lienzo1.clearRect(0, 0, 250, 650);
        Lienzo();

    });

    if (Hora == 1)
    {
        dtavt = 2
    } */
/* 
    else if (Hora == 5)
    {
        dtavt = 10
    }

    else
    {
        dtavt = 20
    } */

    $("#selectGra").change(function () {


        lienzo1.clearRect(0, 0, 250, 650);
        Lienzo();
        Datasel = $.ajax({
            url: "Modulo_graficas/php/cargarconfselecgraf.php",
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

        FechaData = $.ajax({
            url: "Modulo_graficas/php/fecha.php",
            dataType: 'text',
            type: "POST",
            async: false
        }).responseText;
        jsfecha = JSON.parse(FechaData);

        FechaActCom = jsfecha[0];
        FechaAct = moment(FechaActCom).subtract(1, 'hours').format('YYYY-MM-DD HH:mm:ss');



        Datagra = $.ajax({
            url: "Modulo_graficas/php/Procedimientosgraf.php",
            dataType: 'text',
            data: {
                FechaAct: FechaActCom,
                FechaRes: FechaAct,
                dato1: var1,
                dato2: var2,
                dato3: var3,
                dato4: var4,
                dato5: var5,
                dato6: var6,
                dato7: var7,
                dato8: var8
            },
            type: "POST",
            async: false
        }).responseText;
        jsdl = JSON.parse(Datagra);


        RangoY = DatoX.length;
        RangoY2 = DatoX2.length;
        RangoY3 = DatoX3.length;
        RangoY4 = DatoX4.length;
        RangoY5 = DatoX5.length;
        RangoY6 = DatoX6.length;
        RangoY7 = DatoX7.length;
        RangoY8 = DatoX8.length;
        /////////////// PRIMERA CONSULTA DE DATOS 

        DatoxUlti = jsdl[0];

        if (DatoxUlti[(DatoxUlti.length - 1)] == -9999) {
            if (RangoY.length >= 650) {

                DatoX.splice(0, dtavt)
                DatoX.push(DatoX[DatoX.length - 1]);
                DatoXMax.splice(0, dtavt)
                DatoXMax.push(DatoXMax[DatoXMax.length - 1]);
            }
            else {

                DatoX.push(DatoX[DatoX.length - 1]);
                DatoXMax.push(DatoXMax[DatoXMax.length - 1]);
            }
        }
        else {

            if (DatoxUlti[0] != DatoxUlti[(DatoxUlti.length - 1)]) {
                if (RangoY.length >= 650) {
                    DatoX.splice(0, dtavt)
                    DatoX.push(DatoxUlti[0]);
                    DatoXMax.splice(0, dtavt)
                    DatoXMax.push(DatoxUlti[0]);
                }
                else {


                    DatoX = jsdl[0];
                    DatoXMax = jsdl[0];
                    //DatoX.push(DatoxUlti[0]);
                    //DatoXMax.push(DatoxUlti[0]);
                    //Array.prototype.push.apply(DatoX, jsdl[0]);
                    //Array.prototype.push.apply(DatoXMax, jsdl[0]);
                }

            }
            else {
                if (RangoY.length >= 650) {

                    DatoX.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX, jsdl[0]);
                    DatoXMax.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax, jsdl[0]);
                }
                else {
                    Array.prototype.push.apply(DatoX, jsdl[0]);
                    Array.prototype.push.apply(DatoXMax, jsdl[0]);
                }
            }

        }


        //////////////// SEGUNDA CONSULTA DE DATOS
        DatoxUlti2 = jsdl[1];

        if (DatoxUlti2[(DatoxUlti2.length - 1)] == -9999) {
            if (RangoY2.length >= 650) {
                DatoX2.splice(0, dtavt)
                DatoX2.push(DatoX2[DatoX2.length - 1]);
                DatoXMax2.splice(0, dtavt)
                DatoXMax2.push(DatoX2[DatoXMax2.length - 1]);
            }
            else {
                DatoX2.push(DatoX2[DatoX2.length - 1]);
                DatoXMax2.push(DatoX2[DatoXMax2.length - 1]);
            }

        }
        else {
            if (DatoxUlti2[0] != DatoxUlti2[(DatoxUlti2.length - 1)]) {
                if (RangoY2.length >= 650) {
                    DatoX2.splice(0, dtavt)
                    DatoX2.push(DatoxUlti2[0]);
                    DatoXMax2.splice(0, dtavt)
                    DatoXMax2.push(DatoxUlti2[0]);
                }
                else {

                    DatoX2 = jsdl[1];
                    DatoXMax2 = jsdl[1];
                    // DatoX2.push(DatoxUlti2[0]);
                    // DatoXMax2.push(DatoxUlti2[0]);
                    // Array.prototype.push.apply(DatoX2, jsdl[1]);
                    // Array.prototype.push.apply(DatoXMax2, jsdl[1]);
                }
            }
            else {
                if (RangoY2.length >= 650) {

                    DatoX2.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX2, jsdl[1]);
                    DatoXMax2.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax2, jsdl[1]);
                }
                else {
                    Array.prototype.push.apply(DatoX2, jsdl[1]);
                    Array.prototype.push.apply(DatoXMax2, jsdl[1]);
                }
            }

        }




        /////////////////// TERCERA CONSULTA DE DATOS
        DatoxUlti3 = jsdl[2];

        if (DatoxUlti3[(DatoxUlti3.length - 1)] == -9999) {
            if (RangoY3.length >= 650) {
                DatoX3.splice(0, dtavt)
                DatoX3.push(DatoX3[DatoX3.length - 1]);
                DatoXMax3.splice(0, dtavt)
                DatoXMax3.push(DatoX3[DatoXMax3.length - 1]);

                console.log('Primera Salida X3')

            }
            else {
                DatoX3.push(DatoX3[DatoX3.length - 1]);
                DatoXMax3.push(DatoX3[DatoXMax3.length - 1]);

                console.log('Segunda Salida X3')
            }

        }
        else {
            if (DatoxUlti3[0] != DatoxUlti3[(DatoxUlti3.length - 1)]) {
                if (RangoY3.length >= 650) {
                    DatoX3.splice(0, dtavt)
                    DatoX3.push(DatoxUlti3[0]);
                    DatoXMax3.splice(0, dtavt)
                    DatoXMax3.push(DatoxUlti3[0]);
                    console.log('Tercera Salida X3')
                }
                else {

                    DatoX3 = jsdl[2];
                    DatoXMax3 = jsdl[2];
                    //DatoX3.push(DatoxUlti3[0]);
                    //DatoXMax3.push(DatoxUlti3[0]);
                    //Array.prototype.push.apply(DatoX3, jsdl[2]);
                    //Array.prototype.push.apply(DatoXMax3, jsdl[2]);
                    console.log('Cuarta Salida X3')
                }
            }
            else {
                if (RangoY3.length >= 650) {

                    DatoX3.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX3, jsdl[2]);
                    DatoXMax3.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax3, jsdl[2]);
                    console.log('Quinta Salida X3')
                }
                else {
                    Array.prototype.push.apply(DatoX3, jsdl[2]);
                    Array.prototype.push.apply(DatoXMax3, jsdl[2]);
                    console.log('Sexta Salida X3')
                }
            }

        }

        ////////////// CUARTA CONSULTA DE DATOS
        DatoxUlti4 = jsdl[3];

        if (DatoxUlti4[(DatoxUlti4.length - 1)] == -9999) {
            if (RangoY4.length >= 650) {
                DatoX4.splice(0, dtavt)
                DatoX4.push(DatoX4[DatoX4.length - 1]);
                DatoXMax4.splice(0, dtavt)
                DatoXMax4.push(DatoX4[DatoXMax4.length - 1]);
            }
            else {
                DatoX4.push(DatoX4[DatoX4.length - 1]);
                DatoXMax4.push(DatoX4[DatoXMax4.length - 1]);
            }

        }
        else {
            if (DatoxUlti4[0] != DatoxUlti4[(DatoxUlti4.length - 1)]) {
                if (RangoY4.length >= 650) {
                    DatoX4.splice(0, dtavt)
                    DatoX4.push(DatoxUlti4[0]);
                    DatoXMax4.splice(0, dtavt)
                    DatoXMax4.push(DatoxUlti4[0]);
                }
                else {

                    DatoX4 = jsdl[3];
                    DatoXMax4 = jsdl[3];
                    // DatoX4.push(DatoxUlti4[0]);
                    // DatoXMax4.push(DatoxUlti4[0]);
                    // Array.prototype.push.apply(DatoX4, jsdl[3]);
                    // Array.prototype.push.apply(DatoXMax4, jsdl[3]);
                }
            }
            else {
                if (RangoY4.length >= 650) {

                    DatoX4.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX4, jsdl[3]);
                    DatoXMax4.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax4, jsdl[3]);
                }
                else {
                    Array.prototype.push.apply(DatoX4, jsdl[3]);
                    Array.prototype.push.apply(DatoXMax4, jsdl[3]);
                }
            }

        }


        /////////////////////// QUINTA CONSULTA DE DATOS
        DatoxUlti5 = jsdl[4];

        if (DatoxUlti5[(DatoxUlti5.length - 1)] == -9999) {
            if (RangoY5.length >= 650) {
                DatoX5.splice(0, dtavt)
                DatoX5.push(DatoX5[DatoX5.length - 1]);
                DatoXMax5.splice(0, dtavt)
                DatoXMax5.push(DatoX5[DatoXMax5.length - 1]);
            }
            else {
                DatoX5.push(DatoX5[DatoX5.length - 1]);
                DatoXMax5.push(DatoX5[DatoXMax5.length - 1]);
            }

        }
        else {
            if (DatoxUlti5[0] != DatoxUlti5[(DatoxUlti5.length - 1)]) {
                if (RangoY5.length >= 650) {
                    DatoX5.splice(0, dtavt)
                    DatoX5.push(DatoxUlti5[0]);
                    DatoXMax5.splice(0, dtavt)
                    DatoXMax5.push(DatoxUlti5[0]);
                }
                else {
                    DatoX5 = jsdl[4];
                    DatoXMax5 = jsdl[4];
                    // DatoX5.push(DatoxUlti5[0]);
                    // DatoXMax5.push(DatoxUlti5[0]);
                    // Array.prototype.push.apply(DatoX5, jsdl[4]);
                    // Array.prototype.push.apply(DatoXMax5, jsdl[4]);
                }
            }
            else {
                if (RangoY5.length >= 650) {

                    DatoX5.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX5, jsdl[4]);
                    DatoXMax5.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax5, jsdl[4]);
                }
                else {
                    Array.prototype.push.apply(DatoX5, jsdl[4]);
                    Array.prototype.push.apply(DatoXMax5, jsdl[4]);
                }
            }

        }



        //////////////////// SEXTA CONSULTA DE DATOS
        DatoxUlti6 = jsdl[5];

        if (DatoxUlti6[(DatoxUlti6.length - 1)] == -9999) {
            if (RangoY6.length >= 650) {
                DatoX6.splice(0, dtavt)
                DatoX6.push(DatoX6[DatoX6.length - 1]);
                DatoXMax6.splice(0, dtavt)
                DatoXMax6.push(DatoX6[DatoXMax6.length - 1]);
            }
            else {
                DatoX6.push(DatoX6[DatoX6.length - 1]);
                DatoXMax6.push(DatoX6[DatoXMax6.length - 1]);
            }

        }
        else {
            if (DatoxUlti6[0] != DatoxUlti6[(DatoxUlti6.length - 1)]) {
                if (RangoY6.length >= 650) {
                    DatoX6.splice(0, dtavt)
                    DatoX6.push(DatoxUlti6[0]);
                    DatoXMax6.splice(0, dtavt)
                    DatoXMax6.push(DatoxUlti6[0]);
                }
                else {
                    DatoX6 = jsdl[5];
                    DatoXMax6 = jsdl[5];
                    // DatoX6.push(DatoxUlti6[0]);
                    // DatoXMax6.push(DatoxUlti6[0]);
                    // Array.prototype.push.apply(DatoX6, jsdl[5]);
                    // Array.prototype.push.apply(DatoXMax6, jsdl[5]);
                }
            }
            else {
                if (RangoY6.length >= 650) {

                    DatoX6.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX6, jsdl[5]);
                    DatoXMax6.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax6, jsdl[5]);
                }
                else {
                    Array.prototype.push.apply(DatoX6, jsdl[5]);
                    Array.prototype.push.apply(DatoXMax6, jsdl[5]);
                }
            }

        }



        /////// SEPTIMA CONSULTA DE DATOS

        DatoxUlti7 = jsdl[6];

        if (DatoxUlti7[(DatoxUlti7.length - 1)] == -9999) {
            if (RangoY7.length >= 650) {
                DatoX7.splice(0, dtavt)
                DatoX7.push(DatoX7[DatoX7.length - 1]);
                DatoXMax7.splice(0, dtavt)
                DatoXMax7.push(DatoX7[DatoXMax7.length - 1]);
            }
            else {
                DatoX7.push(DatoX7[DatoX7.length - 1]);
                DatoXMax7.push(DatoX7[DatoXMax7.length - 1]);
            }

        }
        else {
            if (DatoxUlti7[0] != DatoxUlti7[(DatoxUlti7.length - 1)]) {
                if (RangoY7.length >= 650) {
                    DatoX7.splice(0, dtavt)
                    DatoX7.push(DatoxUlti7[0]);
                    DatoXMax7.splice(0, dtavt)
                    DatoXMax7.push(DatoxUlti7[0]);
                }
                else {
                    DatoX7 = jsdl[6];
                    DatoXMax7 = jsdl[6];
                    // DatoX7.push(DatoxUlti7[0]);
                    // DatoXMax7.push(DatoxUlti7[0]);
                    // Array.prototype.push.apply(DatoX7, jsdl[6]);
                    // Array.prototype.push.apply(DatoXMax7, jsdl[6]);
                }
            }
            else {
                if (RangoY7.length >= 650) {

                    DatoX7.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX7, jsdl[6]);
                    DatoXMax7.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax7, jsdl[6]);
                }
                else {
                    Array.prototype.push.apply(DatoX7, jsdl[6]);
                    Array.prototype.push.apply(DatoXMax7, jsdl[6]);
                }
            }

        }



        ////////////////// OCTAVA CONSULTA DE DATOS
        DatoxUlti8 = jsdl[7];

        if (DatoxUlti8[(DatoxUlti8.length - 1)] == -9999) {
            if (RangoY8.length >= 650) {
                DatoX8.splice(0, dtavt)
                DatoX8.push(DatoX8[DatoX8.length - 1]);
                DatoXMax8.splice(0, dtavt)
                DatoXMax8.push(DatoX8[DatoXMax8.length - 1]);
            }
            else {
                DatoX8.push(DatoX8[DatoX8.length - 1]);
                DatoXMax8.push(DatoX8[DatoXMax8.length - 1]);
            }

        }
        else {
            if (DatoxUlti8[0] != DatoxUlti8[(DatoxUlti8.length - 1)]) {
                if (RangoY8.length >= 650) {
                    DatoX8.splice(0, dtavt)
                    DatoX8.push(DatoxUlti8[0]);
                    DatoXMax8.splice(0, dtavt)
                    DatoXMax8.push(DatoxUlti8[0]);
                }
                else {
                    DatoX8 = jsdl[7];
                    DatoXMax8 = jsdl[7];
                    // DatoX8.push(DatoxUlti8[0]);
                    // DatoXMax8.push(DatoxUlti8[0]);
                    // Array.prototype.push.apply(DatoX8, jsdl[7]);
                    // Array.prototype.push.apply(DatoXMax8, jsdl[7]);
                }
            }
            else {
                if (RangoY8.length >= 650) {

                    DatoX8.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX8, jsdl[7]);
                    DatoXMax8.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax8, jsdl[7]);
                }
                else {
                    Array.prototype.push.apply(DatoX8, jsdl[7]);
                    Array.prototype.push.apply(DatoXMax8, jsdl[7]);
                }
            }

        }


        RangoY = DatoX.length;
        RangoY2 = DatoX2.length;
        RangoY3 = DatoX3.length;
        RangoY4 = DatoX4.length;
        RangoY5 = DatoX5.length;
        RangoY6 = DatoX6.length;
        RangoY7 = DatoX7.length;
        RangoY8 = DatoX8.length;


        MaxDatoX = Math.max.apply(Math, DatoX);
        MaxDatoX2 = Math.max.apply(Math, DatoX2);
        MaxDatoX3 = Math.max.apply(Math, DatoX3);
        MaxDatoX4 = Math.max.apply(Math, DatoX4);
        MaxDatoX5 = Math.max.apply(Math, DatoX5);
        MaxDatoX6 = Math.max.apply(Math, DatoX6);
        MaxDatoX7 = Math.max.apply(Math, DatoX7);
        MaxDatoX8 = Math.max.apply(Math, DatoX8);

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

        lienzo1.clearRect(0, 0, 250, 650);
        Lienzo();
        Dibujar();

        console.log(DatoX3, 'Tercera Salida');
        Pcar = true;
        Scar = false;

/*         document.getElementById("select1").value = d0;
        document.getElementById("colorl1").value = d1;
        document.getElementById("anchol1").value = d2;
        document.getElementById("minl1").value = d3;
        document.getElementById("maxl1").value = d4; */
        $("#datf1l1").css({
            "visibility": "visible",
            "color": d1,
            "background-color": "rgba(255,255,255,1.20)"
        });
        $("#BotonSA1").css({ "background-color": d1 })
        //document.getElementById('DatoInput1T').innerText = d0;


/*         document.getElementById("select2").value = d5;
        document.getElementById("colorl2").value = d6;
        document.getElementById("anchol2").value = d7;
        document.getElementById("minl2").value = d8;
        document.getElementById("maxl2").value = d9; */
        $("#datf1l2").css({
            "visibility": "visible",
            "color": d6,
            "background-color": "rgba(255,255,255,1.20)"
        });
        $("#BotonSA2").css({ "background-color": d6 })
        //document.getElementById('DatoInput2T').innerText = d5;


  /*       document.getElementById("select3").value = d10;
        document.getElementById("colorl3").value = d11;
        document.getElementById("anchol3").value = d12;
        document.getElementById("minl3").value = d13;
        document.getElementById("maxl3").value = d14; */
        $("#datf1l3").css({
            "visibility": "visible",
            "color": d11,
            "background-color": "rgba(255,255,255,1.20)"
        });
        $("#BotonSA3").css({ "background-color": d11 })
        //document.getElementById('DatoInput3T').innerText = d10;


 /*        document.getElementById("select4").value = d15;
        document.getElementById("colorl4").value = d16;
        document.getElementById("anchol4").value = d17;
        document.getElementById("minl4").value = d18;
        document.getElementById("maxl4").value = d19; */
        $("#datf1l4").css({
            "visibility": "visible",
            "color": d16,
            "background-color": "rgba(255,255,255,1.20)"
        });
        $("#BotonSA4").css({ "background-color": d16 })
        //document.getElementById('DatoInput4T').innerText = d15;


/*         document.getElementById("select5").value = d20;
        document.getElementById("colorl5").value = d21;
        document.getElementById("anchol5").value = d22;
        document.getElementById("minl5").value = d23;
        document.getElementById("maxl5").value = d24; */
        $("#datf1l5").css({
            "visibility": "visible",
            "color": d21,
            "background-color": "rgba(255,255,255,1.20)"
        });
        $("#BotonSA5").css({ "background-color": d21 })
        //document.getElementById('DatoInput5T').innerText = d20;


 /*        document.getElementById("select6").value = d25;
        document.getElementById("colorl6").value = d26;
        document.getElementById("anchol6").value = d27;
        document.getElementById("minl6").value = d28;
        document.getElementById("maxl6").value = d29; */
        $("#datf1l6").css({
            "visibility": "visible",
            "color": d26,
            "background-color": "rgba(255,255,255,1.20)"
        });
        $("#BotonSA6").css({ "background-color": d26 })
        //document.getElementById('DatoInput6T').innerText = d25;


/*         document.getElementById("select7").value = d30;
        document.getElementById("colorl7").value = d31;
        document.getElementById("anchol7").value = d32;
        document.getElementById("minl7").value = d33;
        document.getElementById("maxl7").value = d34; */
        $("#datf1l7").css({
            "visibility": "visible",
            "color": d31,
            "background-color": "rgba(255,255,255,1.20)"
        });
        $("#BotonSA7").css({ "background-color": d31 })
        //document.getElementById('DatoInput7T').innerText = d30;


/*         document.getElementById("select8").value = d35;
        document.getElementById("colorl8").value = d36;
        document.getElementById("anchol8").value = d37;
        document.getElementById("minl8").value = d38;
        document.getElementById("maxl8").value = d39; */
        $("#datf1l8").css({
            "visibility": "visible",
            "color": d36,
            "background-color": "rgba(255,255,255,1.20)"
        });
        $("#BotonSA8").css({ "background-color": d36 })
        //document.getElementById('DatoInput8T').innerText = d35;

    });

    /* //PRIMER FORMULARIO

    $("#Confirmardatos1").click(function () {
        var d1 = document.getElementById('select1').value;
        var d2 = document.getElementById('anchol1').value;
        var d3 = document.getElementById('colorl1').value;
        var d4 = document.getElementById('maxl1').value;
        var d5 = document.getElementById('minl1').value;

        if (d1 === '' || d2 === '' || d3 === '' || d4 === '' || d5 === '') {
            alert('Please complete all the data or verify that the maximum is not less than the minimum');
        }
        else {
            $("#DivOpciones1").css({ "display": "none" });
            $("#BotonSA1").css({ "background-color": d3 })
            document.getElementById('DatoInput1T').innerText = d1;
            BotonOpcionGra1 = 0;

            if (d1 == "" || d1 == "None") {
                $("#datf1l1").css({
                    "visibility": "hidden",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l1").innerText = d1 + ': ' + dv1;
            }
            else {
                $("#datf1l1").css({
                    "visibility": "visible",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l1").innerText = d1 + ': ' + dv1;
            }
        }

    });

    // SEGUNDO FORMULARIO

    $("#Confirmardatos2").click(function () {
        var d1 = document.getElementById('select2').value;
        var d2 = document.getElementById('anchol2').value;
        var d3 = document.getElementById('colorl2').value;
        var d4 = document.getElementById('maxl2').value;
        var d5 = document.getElementById('minl2').value;

        if (d1 === '' || d2 === '' || d3 === '' || d4 === '' || d5 === '') {
            alert('Please complete all the data or verify that the maximum is not less than the minimum');
        }
        else {
            $("#DivOpciones2").css({ "display": "none" });
            $("#BotonSA2").css({ "background-color": d3 })
            document.getElementById('DatoInput2T').innerText = d1;
            BotonOpcionGra1 = 0;

            if (d1 == "" || d1 == "None") {
                $("#datf1l2").css({
                    "visibility": "hidden",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l2").innerText = d1 + ': ' + dv2;
            }
            else {
                $("#datf1l2").css({
                    "visibility": "visible",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l2").innerText = d1 + ': ' + dv2;
            }

        }
    });


    // TERCER FORMULARIO

    $("#Confirmardatos3").click(function () {
        var d1 = document.getElementById('select3').value;
        var d2 = document.getElementById('anchol3').value;
        var d3 = document.getElementById('colorl3').value;
        var d4 = document.getElementById('maxl3').value;
        var d5 = document.getElementById('minl3').value;

        if (d1 === '' || d2 === '' || d3 === '' || d4 === '' || d5 === '') {
            alert('Please complete all the data or verify that the maximum is not less than the minimum')
        }
        else {
            $("#DivOpciones3").css({ "display": "none" });
            $("#BotonSA3").css({ "background-color": d3 })
            document.getElementById('DatoInput3T').innerText = d1;
            BotonOpcionGra1 = 0;

            if (d1 == "" || d1 == "None") {
                $("#datf1l3").css({
                    "visibility": "hidden",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l3").innerText = d1 + ': ' + dv3;
            }
            else {
                $("#datf1l3").css({
                    "visibility": "visible",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l3").innerText = d1 + ': ' + dv3;
            }

        }
    });

    //CUARTO FORMULARIO

    $("#Confirmardatos4").click(function () {
        var d1 = document.getElementById('select4').value;
        var d2 = document.getElementById('anchol4').value;
        var d3 = document.getElementById('colorl4').value;
        var d4 = document.getElementById('maxl4').value;
        var d5 = document.getElementById('minl4').value;

        if (d1 === '' || d2 === '' || d3 === '' || d4 === '' || d5 === '') {
            alert('Please complete all the data or verify that the maximum is not less than the minimum')
        }
        else {
            $("#DivOpciones4").css({ "display": "none" });
            $("#BotonSA4").css({ "background-color": d3 })
            document.getElementById('DatoInput4T').innerText = d1;
            BotonOpcionGra1 = 0;

            if (d1 == "" || d1 == "None") {
                $("#datf1l4").css({
                    "visibility": "hidden",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l4").innerText = d1 + ': ' + dv4;
            }
            else {
                $("#datf1l4").css({
                    "visibility": "visible",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l4").innerText = d1 + ': ' + dv4;
            }
        }
    });

    //QUINTO FORMULARIO

    $("#Confirmardatos5").click(function () {
        var d1 = document.getElementById('select5').value;
        var d2 = document.getElementById('anchol5').value;
        var d3 = document.getElementById('colorl5').value;
        var d4 = document.getElementById('maxl5').value;
        var d5 = document.getElementById('minl5').value;

        if (d1 === '' || d2 === '' || d3 === '' || d4 === '' || d5 === '') {
            alert('Please complete all the data or verify that the maximum is not less than the minimum')
        }
        else {
            $("#DivOpciones5").css({ "display": "none" });
            $("#BotonSA5").css({ "background-color": d3 })
            document.getElementById('DatoInput5T').innerText = d1;
            BotonOpcionGra1 = 0;

            if (d1 == "" || d1 == "None") {
                $("#datf1l5").css({
                    "visibility": "hidden",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l5").innerText = d1 + ': ' + dv5;
            }
            else {
                $("#datf1l5").css({
                    "visibility": "visible",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l5").innerText = d1 + ': ' + dv5;
            }

        }
    });

    //SEXTO FORMULARIO

    $("#Confirmardatos6").click(function () {
        var d1 = document.getElementById('select6').value;
        var d2 = document.getElementById('anchol6').value;
        var d3 = document.getElementById('colorl6').value;
        var d4 = document.getElementById('maxl6').value;
        var d5 = document.getElementById('minl6').value;

        if (d1 === '' || d2 === '' || d3 === '' || d4 === '' || d5 === '') {
            alert('Please complete all the data or verify that the maximum is not less than the minimum')
        }
        else {
            $("#DivOpciones6").css({ "display": "none" });
            $("#BotonSA6").css({ "background-color": d3 })
            document.getElementById('DatoInput6T').innerText = d1;
            BotonOpcionGra1 = 0;

            if (d1 == "" || d1 == "None") {
                $("#datf1l6").css({
                    "visibility": "hidden",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l6").innerText = d1 + ': ' + dv6;
            }
            else {
                $("#datf1l6").css({
                    "visibility": "visible",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l6").innerText = d1 + ': ' + dv6;
            }
        }
    });

    // SEPTIMO FORMULARIO

    $("#Confirmardatos7").click(function () {
        var d1 = document.getElementById('select7').value;
        var d2 = document.getElementById('anchol7').value;
        var d3 = document.getElementById('colorl7').value;
        var d4 = document.getElementById('maxl7').value;
        var d5 = document.getElementById('minl7').value;

        if (d1 === '' || d2 === '' || d3 === '' || d4 === '' || d5 === '') {
            alert('Please complete all the data or verify that the maximum is not less than the minimum')
        }
        else {
            $("#DivOpciones7").css({ "display": "none" });
            $("#BotonSA7").css({ "background-color": d3 })
            document.getElementById('DatoInput7T').innerText = d1;
            BotonOpcionGra1 = 0;

            if (d1 == "" || d1 == "None") {
                $("#datf1l7").css({
                    "visibility": "hidden",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l7").innerText = d1 + ': ' + dv7;
            }
            else {
                $("#datf1l7").css({
                    "visibility": "visible",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l7").innerText = d1 + ': ' + dv7;
            }
        }
    });

    // OCTAVO FORMULARIO

    $("#Confirmardatos8").click(function () {
        var d1 = document.getElementById('select8').value;
        var d2 = document.getElementById('anchol8').value;
        var d3 = document.getElementById('colorl8').value;
        var d4 = document.getElementById('maxl8').value;
        var d5 = document.getElementById('minl8').value;

        if (d1 === '' || d2 === '' || d3 === '' || d4 === '' || d5 === '') {
            alert('Please complete all the data or verify that the maximum is not less than the minimum')
        }
        else {
            $("#DivOpciones8").css({ "display": "none" });
            $("#BotonSA8").css({ "background-color": d3 })
            document.getElementById('DatoInput8T').innerText = d1;
            BotonOpcionGra1 = 0;

            if (d1 == "" || d1 == "None") {
                $("#datf1l8").css({
                    "visibility": "hidden",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l8").innerText = d1 + ': ' + dv8;
            }
            else {
                $("#datf1l8").css({
                    "visibility": "visible",
                    "color": d3,
                    "background-color": "rgba(255,255,255,1.20)"
                });
                document.getElementById("datf1l8").innerText = d1 + ': ' + dv8;
            }
        }
    }); */
}

//Funcion para cerrar formularios 
function cerrar() {

    $("#xgraf").click(function () {
        $("#DivOpciones").css({ "display": "none" });
        BotonOpcionGra = 0;
    });

    $("#xgraf1").click(function () {
        $("#DivOpciones1").css({ "display": "none" });
        BotonOpcionGra1 = 0;
    });

    $("#xgraf2").click(function () {
        $("#DivOpciones2").css({ "display": "none" });
        BotonOpcionGra1 = 0;
    });

    $("#xgraf3").click(function () {
        $("#DivOpciones3").css({ "display": "none" });
        BotonOpcionGra1 = 0;
    });

    $("#xgraf4").click(function () {
        $("#DivOpciones4").css({ "display": "none" });
        BotonOpcionGra1 = 0;
    });

    $("#xgraf5").click(function () {
        $("#DivOpciones5").css({ "display": "none" });
        BotonOpcionGra1 = 0;
    });

    $("#xgraf6").click(function () {
        $("#DivOpciones6").css({ "display": "none" });
        BotonOpcionGra1 = 0;
    });

    $("#xgraf7").click(function () {
        $("#DivOpciones7").css({ "display": "none" });
        BotonOpcionGra1 = 0;
    });

    $("#xgraf8").click(function () {
        $("#DivOpciones8").css({ "display": "none" });
        BotonOpcionGra1 = 0;
    });

}

//Funcion que toma el valor de los botones y se usa posteriormente para ejecutar la funcion dibujar con estos valores que se reciben 
function sweet() {

    $("#BotonConfgra").click(function () {
        if (BotonOpcionGra == 0) {
            $("#DivOpciones").css({ "display": "block" });
            BotonOpcionGra = 1;
        }
        else {
            $("#DivOpciones").css({ "display": "none" });
            BotonOpcionGra = 0;
        }

    });

    $("#BotonSA1").click(function () {
        if (BotonOpcionGra1 == 0) {
            $("#DivOpciones1").css({ "display": "block" });
            BotonOpcionGra1 = 1;
        }
        else {
            $("#DivOpciones1").css({ "display": "none" });
            BotonOpcionGra1 = 0;
        }


        for (i = 0; i < DatosVar.length; i++) {
            document.getElementById("select1").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
        }

        document.getElementById("select1").value = d0;

    });

    $("#BotonSA2").click(function () {
        if (BotonOpcionGra1 == 0) {
            $("#DivOpciones2").css({ "display": "block" });
            BotonOpcionGra1 = 1;
        }
        else {
            $("#DivOpciones2").css({ "display": "none" });
            BotonOpcionGra1 = 0;
        }

        for (i = 0; i < DatosVar.length; i++) {
            document.getElementById("select2").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
        }

        document.getElementById("select2").value = d5;

    });

    $("#BotonSA3").click(function () {
        if (BotonOpcionGra1 == 0) {
            $("#DivOpciones3").css({ "display": "block" });
            BotonOpcionGra1 = 1;
        }
        else {
            $("#DivOpciones3").css({ "display": "none" });
            BotonOpcionGra1 = 0;
        }

        for (i = 0; i < DatosVar.length; i++) {
            document.getElementById("select3").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
        }

        document.getElementById("select3").value = d10;
    });

    $("#BotonSA4").click(function () {
        if (BotonOpcionGra1 == 0) {
            $("#DivOpciones4").css({ "display": "block" });
            BotonOpcionGra1 = 1;
        }
        else {
            $("#DivOpciones4").css({ "display": "none" });
            BotonOpcionGra1 = 0;
        }

        for (i = 0; i < DatosVar.length; i++) {
            document.getElementById("select4").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
        }

        document.getElementById("select4").value = d15;
    });

    $("#BotonSA5").click(function () {
        if (BotonOpcionGra1 == 0) {
            $("#DivOpciones5").css({ "display": "block" });
            BotonOpcionGra1 = 1;
        }
        else {
            $("#DivOpciones5").css({ "display": "none" });
            BotonOpcionGra1 = 0;
        }

        for (i = 0; i < DatosVar.length; i++) {
            document.getElementById("select5").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
        }

        document.getElementById("select5").value = d20;
    });

    $("#BotonSA6").click(function () {
        if (BotonOpcionGra1 == 0) {
            $("#DivOpciones6").css({ "display": "block" });
            BotonOpcionGra1 = 1;
        }
        else {
            $("#DivOpciones6").css({ "display": "none" });
            BotonOpcionGra1 = 0;
        }

        for (i = 0; i < DatosVar.length; i++) {
            document.getElementById("select6").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
        }

        document.getElementById("select6").value = d25;

    });

    $("#BotonSA7").click(function () {
        if (BotonOpcionGra1 == 0) {
            $("#DivOpciones7").css({ "display": "block" });
            BotonOpcionGra1 = 1;
        }
        else {
            $("#DivOpciones7").css({ "display": "none" });
            BotonOpcionGra1 = 0;
        }

        for (i = 0; i < DatosVar.length; i++) {
            document.getElementById("select7").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
        }

        document.getElementById("select7").value = d30;
    });

    $("#BotonSA8").click(function () {
        if (BotonOpcionGra1 == 0) {
            $("#DivOpciones8").css({ "display": "block" });
            BotonOpcionGra1 = 1;
        }
        else {
            $("#DivOpciones8").css({ "display": "none" });
            BotonOpcionGra1 = 0;
        }

        for (i = 0; i < DatosVar.length; i++) {
            document.getElementById("select8").innerHTML += "<option value='" + DatosVar[i] + "'>" + DatosVar[i] + "</option>";
        }

        document.getElementById("select8").value = d35;
    });

}

//Funcion para mover los datos cuando se despliega la opcion de graficas
function MovimientoDatos() {

    timerActGU2 = setInterval(workertimer, 10000);

    $("#BotonEsconder").click(function () {
        if (BotonGraficas == 0) {

            $("#MenuDatos").css({
                "font-size": "200%",
                "left": "59%",
                "background-color": "transparent",
                "margin-top": "-52%"
            });

            $("#DivEsconder").css({ "display": "block" });

            $("#BloqueMenu1").css({ "visibility": "collapse" });

            $("#BloqueMenu2").css({ "visibility": "collapse" });

            $("#BloqueMenu3").css({ "visibility": "collapse" });

            $(".variables").css({
                "font-size": "17px",
                "background-color": "transparent"
            });

            BotonGraficas = 1;
            // timerActGU = setInterval(ActualizarGraf,30000);
            
        }
        else {
            $("#DivEsconder").css("display", "none");

            $("#MenuDatos").css({
                "width": "200%",
                "position:": "relative",
                "left": "0%",
                "background-color": "transparent",
                "margin-top": "10%"
            });

            $("#BloqueMenu1").css({ "visibility": "visible" });

            $("#BloqueMenu2").css({ "visibility": "visible" });

            $("#BloqueMenu3").css({ "visibility": "visible" });

            $(".variables").css({
                "font-size": "17px",
                "background-color": "rgba(0,0, 0, 0.4)"
            });
            BotonGraficas = 0;
            // clearInterval(timerActGU);
            //clearInterval(timerActGU2);

        }


    });
}

//Funcion para dibujar el lienzo de canvas 
function Lienzo() {

    Can = document.getElementById("lienzo1");
    lienzo1 = Can.getContext("2d");
    lienzo1.setLineDash([0, 0]);
    lienzo1.lineWidth = 0.8;
    lienzo1.strokeStyle = 'Yellow';
    lienzo1.lineJoin = "miter";
    lienzo1.strokeRect(0, 0, 250, 650);
    //EJEX
    lienzo1.beginPath();
    lienzo1.moveTo(250, 0);
    lienzo1.lineTo(250, 650);
    lienzo1.strokeStyle = 'Yellow';
    lienzo1.stroke();
    lienzo1.closePath();

    // Dibuja en X
    for (i = 0; i < 6; i++) {
        lienzo1.setLineDash([3, 5]);
        lienzo1.strokeStyle = "Yellow";
        lienzo1.beginPath();
        lienzo1.moveTo(0, (0 + i) * 130);
        lienzo1.lineTo(250, (0 + i) * 130);
        lienzo1.stroke();

    }
    // Dibuja en Y
    for (i = 0; i < 10; i++) {
        lienzo1.strokeStyle = "Yellow";
        lienzo1.beginPath();
        lienzo1.moveTo((0 + i) * 25, 0);
        lienzo1.lineTo((0 + i) * 25, 650);
        lienzo1.stroke();
    }

}

// Funcion encargada de dibujar las lineas con los datos que viene de la funcion workertimer
function Dibujar() {

    Escala1 = d4 - d3; // d3 =min d4 =max
    d3 = Math.abs(d3);

    RangoY = DatoX.length;
    Xini = 0;
    Yini = 0;

    for (i = 0; i < RangoY; i++) {
        if (Yini == 0) {
            lienzo1.setLineDash([]);
            lienzo1.strokeStyle = colorl1;
            lienzo1.lineWidth = anchol1;
            lienzo1.beginPath();
            lienzo1.moveTo(Xini, Yini);
            DatoXD = (parseInt(DatoX[i]) + parseInt(d3));
            DatoXMaxD = (parseInt(DatoXMax[i]) + parseInt(d3));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            console.log(DatoXMaxD, DatoXD);
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
            Yini = [i];
        }
        else {
            DatoXD = (parseInt(DatoX[i]) + parseInt(d3));
            DatoXMaxD = (parseInt(DatoXMax[i]) + parseInt(d3));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            console.log(DatoXMaxD, DatoXD);
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
        }
    }

    // SEGUNDA LINEA

    Escala1 = d9 - d8; // d8 =min d9 =max
    d8 = Math.abs(d8);

    RangoY2 = DatoX2.length;
    Xini2 = 0;
    Yini2 = 0;
    for (i = 0; i < RangoY2; i++) {
        if (Yini2 == 0) {
            lienzo1.setLineDash([]);
            lienzo1.strokeStyle = colorl2;
            lienzo1.lineWidth = anchol2;
            lienzo1.beginPath();
            lienzo1.moveTo(Xini2, Yini2);
            DatoXD = (parseInt(DatoX2[i]) + parseInt(d8));
            DatoXMaxD = (parseInt(DatoXMax2[i]) + parseInt(d8));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
            Yini2 = [i];
        }
        else {
            DatoXD = (parseInt(DatoX2[i]) + parseInt(d8));
            DatoXMaxD = (parseInt(DatoXMax2[i]) + parseInt(d8));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
        }
    }


    // TERCERA LINEA

    Escala1 = d14 - d13; // d13 =min d14 =max
    d13 = Math.abs(d13);

    RangoY3 = DatoX3.length;
    Xini3 = 0;
    Yini3 = 0;
    for (i = 0; i < RangoY3; i++) {
        if (Yini3 == 0) {
            lienzo1.setLineDash([]);
            lienzo1.strokeStyle = colorl3;
            lienzo1.lineWidth = anchol3;
            lienzo1.beginPath();
            lienzo1.moveTo(Xini3, Yini3);
            DatoXD = (parseInt(DatoX3[i]) + parseInt(d13));
            DatoXMaxD = (parseInt(DatoXMax3[i]) + parseInt(d13));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
            Yini3 = [i];
        }
        else {
            DatoXD = (parseInt(DatoX3[i]) + parseInt(d13));
            DatoXMaxD = (parseInt(DatoXMax3[i]) + parseInt(d13));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
        }
    }

    // CUARTA LINEA 

    Escala1 = d19 - d18; // d18 =min d19 =max
    d18 = Math.abs(d18);

    RangoY4 = DatoX4.length;
    Xini4 = 0;
    Yini4 = 0;
    for (i = 0; i < RangoY4; i++) {
        if (Yini4 == 0) {
            lienzo1.setLineDash([]);
            lienzo1.strokeStyle = colorl4;
            lienzo1.lineWidth = anchol4;
            lienzo1.beginPath();
            lienzo1.moveTo(Xini4, Yini4);
            DatoXD = (parseInt(DatoX4[i]) + parseInt(d18));
            DatoXMaxD = (parseInt(DatoXMax4[i]) + parseInt(d18));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
            Yini4 = [i];
        }
        else {
            DatoXD = (parseInt(DatoX4[i]) + parseInt(d18));
            DatoXMaxD = (parseInt(DatoXMax4[i]) + parseInt(d18));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
        }
    }

    // QUINTA LINEA

    Escala1 = d24 - d23; // d23 =min d24 =max
    d23 = Math.abs(d23);

    RangoY5 = DatoX5.length;
    Xini5 = 0;
    Yini5 = 0;
    for (i = 0; i < RangoY5; i++) {
        if (Yini5 == 0) {
            lienzo1.setLineDash([]);
            lienzo1.strokeStyle = colorl5;
            lienzo1.lineWidth = anchol5;
            lienzo1.beginPath();
            lienzo1.moveTo(Xini5, Yini5);
            DatoXD = (parseInt(DatoX5[i]) + parseInt(d23));
            DatoXMaxD = (parseInt(DatoXMax5[i]) + parseInt(d23));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
            Yini5 = [i];
        }
        else {
            DatoXD = (parseInt(DatoX5[i]) + parseInt(d23));
            DatoXMaxD = (parseInt(DatoXMax5[i]) + parseInt(d23));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
        }
    }

    // SEXTA LINEA

    Escala1 = d29 - d28; // d28 =min d29 =max
    d28 = Math.abs(d28);

    RangoY6 = DatoX6.length;
    Xini6 = 0;
    Yini6 = 0;
    for (i = 0; i < RangoY6; i++) {
        if (Yini6 == 0) {
            lienzo1.setLineDash([]);
            lienzo1.strokeStyle = colorl6;
            lienzo1.lineWidth = anchol6;
            lienzo1.beginPath();
            lienzo1.moveTo(Xini6, Yini6);
            DatoXD = (parseInt(DatoX6[i]) + parseInt(d28));
            DatoXMaxD = (parseInt(DatoXMax6[i]) + parseInt(d28));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            console.log(DatoXMaxD, DatoXD);
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
            Yini6 = [i];
        }
        else {
            DatoXD = (parseInt(DatoX6[i]) + parseInt(d28));
            DatoXMaxD = (parseInt(DatoXMax6[i]) + parseInt(d28));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            console.log(DatoXMaxD, DatoXD);
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
        }
    }

    // SEPTIMA LINEA

    Escala1 = d34 - d33; // d33 =min d34 =max
    d33 = Math.abs(d33);

    RangoY7 = DatoX7.length;
    Xini7 = 0;
    Yini7 = 0;
    for (i = 0; i < RangoY7; i++) {
        if (Yini7 == 0) {
            lienzo1.setLineDash([]);
            lienzo1.strokeStyle = colorl7;
            lienzo1.lineWidth = anchol7;
            lienzo1.beginPath();
            lienzo1.moveTo(Xini7, Yini7);
            DatoXD = (parseInt(DatoX7[i]) + parseInt(d33));
            DatoXMaxD = (parseInt(DatoXMax7[i]) + parseInt(d33));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
            Yini7 = [i];
        }
        else {
            DatoXD = (parseInt(DatoX7[i]) + parseInt(d33));
            DatoXMaxD = (parseInt(DatoXMax7[i]) + parseInt(d33));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
        }
    }

    // OCTAVA LINEA

    Escala1 = d39 - d38; // d38 =min d39 =max
    d38 = Math.abs(d38);

    RangoY8 = DatoX8.length;
    Xini8 = 0;
    Yini8 = 0;
    for (i = 0; i < RangoY8; i++) {
        if (Yini8 == 0) {
            lienzo1.setLineDash([]);
            lienzo1.strokeStyle = colorl8;
            lienzo1.lineWidth = anchol8;
            lienzo1.beginPath();
            lienzo1.moveTo(Xini8, Yini8);
            DatoXD = (parseInt(DatoX8[i]) + parseInt(d38));
            DatoXMaxD = (parseInt(DatoXMax8[i]) + parseInt(d38));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
            Yini8 = [i];
        }
        else {
            DatoXD = (parseInt(DatoX8[i]) + parseInt(d38));
            DatoXMaxD = (parseInt(DatoXMax8[i]) + parseInt(d38));
            DatoXD = DatoXD * EjeX / Escala1;
            DatoXMaxD = DatoXMaxD * EjeX / Escala1;
            lienzo1.lineTo(DatoXD, [i]);
            lienzo1.lineTo(DatoXMaxD, [i]);
            lienzo1.stroke();
        }

    }

}

// Funcion que trae informacion de la base de datos para dibujar las graficas
function workertimer() {

    if (Hora == 1)
    {
        dtavt = 2
    }

    /* else if (Hora == 5)
    {
        dtavt = 10
    }

    else
    {
        dtavt = 20
    } */

    if (Pcar == false) {
        // console.time("t1");

        d40 = document.getElementById("selectGra").value; // Plantillas de graficacion Ejemplo: Drill/WellControl
        Hora = document.getElementById("HoraGraf").value; // Escala de Tiempo
        FechaData = $.ajax({
            url: "Modulo_graficas/php/fecha.php",
            dataType: 'text',
            type: "POST",
            async: false
        }).responseText;
        jsfecha = JSON.parse(FechaData);

        FechaActCom = jsfecha[0];

        console.log(FechaActCom); //moment().format('YYYY-MM-DD HH:mm:ss'); // Fecha en ejecucion

        if (Scar == true) {

            Datasel = $.ajax({
                url: "Modulo_graficas/php/cargarconfselecgraf.php",
                dataType: 'text',
                data: {
                    dato40: d40
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


            console.log(FechaActCom, FechaAct);

            Datagra = $.ajax({
                url: "Modulo_graficas/php/Procedimientosgraf.php",
                dataType: 'text',
                data: {
                    FechaAct: FechaActCom,
                    FechaRes: FechaAct,
                    dato1: var1,
                    dato2: var2,
                    dato3: var3,
                    dato4: var4,
                    dato5: var5,
                    dato6: var6,
                    dato7: var7,
                    dato8: var8
                },
                type: "POST",
                async: false
            }).responseText;
            jsdl = JSON.parse(Datagra);


            RangoY = DatoX.length;
            RangoY2 = DatoX2.length;
            RangoY3 = DatoX3.length;
            RangoY4 = DatoX4.length;
            RangoY5 = DatoX5.length;
            RangoY6 = DatoX6.length;
            RangoY7 = DatoX7.length;
            RangoY8 = DatoX8.length;
            /////////////// PRIMERA CONSULTA DE DATOS 

            DatoxUlti = jsdl[0];

            if (DatoxUlti[(DatoxUlti.length - 1)] == -9999) {
                if (RangoY.length >= 650) {

                    DatoX.splice(0, dtavt)
                    DatoX.push(DatoX[DatoX.length - 1]);
                    DatoXMax.splice(0, dtavt)
                    DatoXMax.push(DatoXMax[DatoXMax.length - 1]);
                }
                else {

                    DatoX.push(DatoX[DatoX.length - 1]);
                    DatoXMax.push(DatoXMax[DatoXMax.length - 1]);
                }
            }
            else {

                if (DatoxUlti[0] != DatoxUlti[(DatoxUlti.length - 1)]) {
                    if (RangoY.length >= 650) {
                        DatoX.splice(0, dtavt)
                        DatoX.push(DatoxUlti[0]);
                        DatoXMax.splice(0, dtavt)
                        DatoXMax.push(DatoxUlti[0]);
                    }
                    else {


                        DatoX = jsdl[0];
                        DatoXMax = jsdl[0];
                        //DatoX.push(DatoxUlti[0]);
                        //DatoXMax.push(DatoxUlti[0]);
                        //Array.prototype.push.apply(DatoX, jsdl[0]);
                        //Array.prototype.push.apply(DatoXMax, jsdl[0]);
                    }

                }
                else {
                    if (RangoY.length >= 650) {

                        DatoX.splice(0, dtavt)
                        Array.prototype.push.apply(DatoX, jsdl[0]);
                        DatoXMax.splice(0, dtavt)
                        Array.prototype.push.apply(DatoXMax, jsdl[0]);
                    }
                    else {
                        Array.prototype.push.apply(DatoX, jsdl[0]);
                        Array.prototype.push.apply(DatoXMax, jsdl[0]);
                    }
                }

            }


            //////////////// SEGUNDA CONSULTA DE DATOS
            DatoxUlti2 = jsdl[1];

            if (DatoxUlti2[(DatoxUlti2.length - 1)] == -9999) {
                if (RangoY2.length >= 650) {
                    DatoX2.splice(0, dtavt)
                    DatoX2.push(DatoX2[DatoX2.length - 1]);
                    DatoXMax2.splice(0, dtavt)
                    DatoXMax2.push(DatoX2[DatoXMax2.length - 1]);
                }
                else {
                    DatoX2.push(DatoX2[DatoX2.length - 1]);
                    DatoXMax2.push(DatoX2[DatoXMax2.length - 1]);
                }

            }
            else {
                if (DatoxUlti2[0] != DatoxUlti2[(DatoxUlti2.length - 1)]) {
                    if (RangoY2.length >= 650) {
                        DatoX2.splice(0, dtavt)
                        DatoX2.push(DatoxUlti2[0]);
                        DatoXMax2.splice(0, dtavt)
                        DatoXMax2.push(DatoxUlti2[0]);
                    }
                    else {

                        DatoX2 = jsdl[1];
                        DatoXMax2 = jsdl[1];
                        // DatoX2.push(DatoxUlti2[0]);
                        // DatoXMax2.push(DatoxUlti2[0]);
                        // Array.prototype.push.apply(DatoX2, jsdl[1]);
                        // Array.prototype.push.apply(DatoXMax2, jsdl[1]);
                    }
                }
                else {
                    if (RangoY2.length >= 650) {

                        DatoX2.splice(0, dtavt)
                        Array.prototype.push.apply(DatoX2, jsdl[1]);
                        DatoXMax2.splice(0, dtavt)
                        Array.prototype.push.apply(DatoXMax2, jsdl[1]);
                    }
                    else {
                        Array.prototype.push.apply(DatoX2, jsdl[1]);
                        Array.prototype.push.apply(DatoXMax2, jsdl[1]);
                    }
                }

            }




            /////////////////// TERCERA CONSULTA DE DATOS
            DatoxUlti3 = jsdl[2];

            if (DatoxUlti3[(DatoxUlti3.length - 1)] == -9999) {
                if (RangoY3.length >= 650) {
                    DatoX3.splice(0, dtavt)
                    DatoX3.push(DatoX3[DatoX3.length - 1]);
                    DatoXMax3.splice(0, dtavt)
                    DatoXMax3.push(DatoX3[DatoXMax3.length - 1]);

                    console.log('Primera Salida X3')

                }
                else {
                    DatoX3.push(DatoX3[DatoX3.length - 1]);
                    DatoXMax3.push(DatoX3[DatoXMax3.length - 1]);

                    console.log('Segunda Salida X3')
                }

            }
            else {
                if (DatoxUlti3[0] != DatoxUlti3[(DatoxUlti3.length - 1)]) {
                    if (RangoY3.length >= 650) {
                        DatoX3.splice(0, dtavt)
                        DatoX3.push(DatoxUlti3[0]);
                        DatoXMax3.splice(0, dtavt)
                        DatoXMax3.push(DatoxUlti3[0]);
                        console.log('Tercera Salida X3')
                    }
                    else {

                        DatoX3 = jsdl[2];
                        DatoXMax3 = jsdl[2];
                        //DatoX3.push(DatoxUlti3[0]);
                        //DatoXMax3.push(DatoxUlti3[0]);
                        //Array.prototype.push.apply(DatoX3, jsdl[2]);
                        //Array.prototype.push.apply(DatoXMax3, jsdl[2]);
                        console.log('Cuarta Salida X3')
                    }
                }
                else {
                    if (RangoY3.length >= 650) {

                        DatoX3.splice(0, dtavt)
                        Array.prototype.push.apply(DatoX3, jsdl[2]);
                        DatoXMax3.splice(0, dtavt)
                        Array.prototype.push.apply(DatoXMax3, jsdl[2]);
                        console.log('Quinta Salida X3')
                    }
                    else {
                        Array.prototype.push.apply(DatoX3, jsdl[2]);
                        Array.prototype.push.apply(DatoXMax3, jsdl[2]);
                        console.log('Sexta Salida X3')
                    }
                }

            }

            ////////////// CUARTA CONSULTA DE DATOS
            DatoxUlti4 = jsdl[3];

            if (DatoxUlti4[(DatoxUlti4.length - 1)] == -9999) {
                if (RangoY4.length >= 650) {
                    DatoX4.splice(0, dtavt)
                    DatoX4.push(DatoX4[DatoX4.length - 1]);
                    DatoXMax4.splice(0, dtavt)
                    DatoXMax4.push(DatoX4[DatoXMax4.length - 1]);
                }
                else {
                    DatoX4.push(DatoX4[DatoX4.length - 1]);
                    DatoXMax4.push(DatoX4[DatoXMax4.length - 1]);
                }

            }
            else {
                if (DatoxUlti4[0] != DatoxUlti4[(DatoxUlti4.length - 1)]) {
                    if (RangoY4.length >= 650) {
                        DatoX4.splice(0, dtavt)
                        DatoX4.push(DatoxUlti4[0]);
                        DatoXMax4.splice(0, dtavt)
                        DatoXMax4.push(DatoxUlti4[0]);
                    }
                    else {

                        DatoX4 = jsdl[3];
                        DatoXMax4 = jsdl[3];
                        // DatoX4.push(DatoxUlti4[0]);
                        // DatoXMax4.push(DatoxUlti4[0]);
                        // Array.prototype.push.apply(DatoX4, jsdl[3]);
                        // Array.prototype.push.apply(DatoXMax4, jsdl[3]);
                    }
                }
                else {
                    if (RangoY4.length >= 650) {

                        DatoX4.splice(0, dtavt)
                        Array.prototype.push.apply(DatoX4, jsdl[3]);
                        DatoXMax4.splice(0, dtavt)
                        Array.prototype.push.apply(DatoXMax4, jsdl[3]);
                    }
                    else {
                        Array.prototype.push.apply(DatoX4, jsdl[3]);
                        Array.prototype.push.apply(DatoXMax4, jsdl[3]);
                    }
                }

            }


            /////////////////////// QUINTA CONSULTA DE DATOS
            DatoxUlti5 = jsdl[4];

            if (DatoxUlti5[(DatoxUlti5.length - 1)] == -9999) {
                if (RangoY5.length >= 650) {
                    DatoX5.splice(0, dtavt)
                    DatoX5.push(DatoX5[DatoX5.length - 1]);
                    DatoXMax5.splice(0, dtavt)
                    DatoXMax5.push(DatoX5[DatoXMax5.length - 1]);
                }
                else {
                    DatoX5.push(DatoX5[DatoX5.length - 1]);
                    DatoXMax5.push(DatoX5[DatoXMax5.length - 1]);
                }

            }
            else {
                if (DatoxUlti5[0] != DatoxUlti5[(DatoxUlti5.length - 1)]) {
                    if (RangoY5.length >= 650) {
                        DatoX5.splice(0, dtavt)
                        DatoX5.push(DatoxUlti5[0]);
                        DatoXMax5.splice(0, dtavt)
                        DatoXMax5.push(DatoxUlti5[0]);
                    }
                    else {
                        DatoX5 = jsdl[4];
                        DatoXMax5 = jsdl[4];
                        // DatoX5.push(DatoxUlti5[0]);
                        // DatoXMax5.push(DatoxUlti5[0]);
                        // Array.prototype.push.apply(DatoX5, jsdl[4]);
                        // Array.prototype.push.apply(DatoXMax5, jsdl[4]);
                    }
                }
                else {
                    if (RangoY5.length >= 650) {

                        DatoX5.splice(0, dtavt)
                        Array.prototype.push.apply(DatoX5, jsdl[4]);
                        DatoXMax5.splice(0, dtavt)
                        Array.prototype.push.apply(DatoXMax5, jsdl[4]);
                    }
                    else {
                        Array.prototype.push.apply(DatoX5, jsdl[4]);
                        Array.prototype.push.apply(DatoXMax5, jsdl[4]);
                    }
                }

            }



            //////////////////// SEXTA CONSULTA DE DATOS
            DatoxUlti6 = jsdl[5];

            if (DatoxUlti6[(DatoxUlti6.length - 1)] == -9999) {
                if (RangoY6.length >= 650) {
                    DatoX6.splice(0, dtavt)
                    DatoX6.push(DatoX6[DatoX6.length - 1]);
                    DatoXMax6.splice(0, dtavt)
                    DatoXMax6.push(DatoX6[DatoXMax6.length - 1]);
                }
                else {
                    DatoX6.push(DatoX6[DatoX6.length - 1]);
                    DatoXMax6.push(DatoX6[DatoXMax6.length - 1]);
                }

            }
            else {
                if (DatoxUlti6[0] != DatoxUlti6[(DatoxUlti6.length - 1)]) {
                    if (RangoY6.length >= 650) {
                        DatoX6.splice(0, dtavt)
                        DatoX6.push(DatoxUlti6[0]);
                        DatoXMax6.splice(0, dtavt)
                        DatoXMax6.push(DatoxUlti6[0]);
                    }
                    else {
                        DatoX6 = jsdl[5];
                        DatoXMax6 = jsdl[5];
                        // DatoX6.push(DatoxUlti6[0]);
                        // DatoXMax6.push(DatoxUlti6[0]);
                        // Array.prototype.push.apply(DatoX6, jsdl[5]);
                        // Array.prototype.push.apply(DatoXMax6, jsdl[5]);
                    }
                }
                else {
                    if (RangoY6.length >= 650) {

                        DatoX6.splice(0, dtavt)
                        Array.prototype.push.apply(DatoX6, jsdl[5]);
                        DatoXMax6.splice(0, dtavt)
                        Array.prototype.push.apply(DatoXMax6, jsdl[5]);
                    }
                    else {
                        Array.prototype.push.apply(DatoX6, jsdl[5]);
                        Array.prototype.push.apply(DatoXMax6, jsdl[5]);
                    }
                }

            }



            /////// SEPTIMA CONSULTA DE DATOS

            DatoxUlti7 = jsdl[6];

            if (DatoxUlti7[(DatoxUlti7.length - 1)] == -9999) {
                if (RangoY7.length >= 650) {
                    DatoX7.splice(0, dtavt)
                    DatoX7.push(DatoX7[DatoX7.length - 1]);
                    DatoXMax7.splice(0, dtavt)
                    DatoXMax7.push(DatoX7[DatoXMax7.length - 1]);
                }
                else {
                    DatoX7.push(DatoX7[DatoX7.length - 1]);
                    DatoXMax7.push(DatoX7[DatoXMax7.length - 1]);
                }

            }
            else {
                if (DatoxUlti7[0] != DatoxUlti7[(DatoxUlti7.length - 1)]) {
                    if (RangoY7.length >= 650) {
                        DatoX7.splice(0, dtavt)
                        DatoX7.push(DatoxUlti7[0]);
                        DatoXMax7.splice(0, dtavt)
                        DatoXMax7.push(DatoxUlti7[0]);
                    }
                    else {
                        DatoX7 = jsdl[6];
                        DatoXMax7 = jsdl[6];
                        // DatoX7.push(DatoxUlti7[0]);
                        // DatoXMax7.push(DatoxUlti7[0]);
                        // Array.prototype.push.apply(DatoX7, jsdl[6]);
                        // Array.prototype.push.apply(DatoXMax7, jsdl[6]);
                    }
                }
                else {
                    if (RangoY7.length >= 650) {

                        DatoX7.splice(0, dtavt)
                        Array.prototype.push.apply(DatoX7, jsdl[6]);
                        DatoXMax7.splice(0, dtavt)
                        Array.prototype.push.apply(DatoXMax7, jsdl[6]);
                    }
                    else {
                        Array.prototype.push.apply(DatoX7, jsdl[6]);
                        Array.prototype.push.apply(DatoXMax7, jsdl[6]);
                    }
                }

            }



            ////////////////// OCTAVA CONSULTA DE DATOS
            DatoxUlti8 = jsdl[7];

            if (DatoxUlti8[(DatoxUlti8.length - 1)] == -9999) {
                if (RangoY8.length >= 650) {
                    DatoX8.splice(0, dtavt)
                    DatoX8.push(DatoX8[DatoX8.length - 1]);
                    DatoXMax8.splice(0, dtavt)
                    DatoXMax8.push(DatoX8[DatoXMax8.length - 1]);
                }
                else {
                    DatoX8.push(DatoX8[DatoX8.length - 1]);
                    DatoXMax8.push(DatoX8[DatoXMax8.length - 1]);
                }

            }
            else {
                if (DatoxUlti8[0] != DatoxUlti8[(DatoxUlti8.length - 1)]) {
                    if (RangoY8.length >= 650) {
                        DatoX8.splice(0, dtavt)
                        DatoX8.push(DatoxUlti8[0]);
                        DatoXMax8.splice(0, dtavt)
                        DatoXMax8.push(DatoxUlti8[0]);
                    }
                    else {
                        DatoX8 = jsdl[7];
                        DatoXMax8 = jsdl[7];
                        // DatoX8.push(DatoxUlti8[0]);
                        // DatoXMax8.push(DatoxUlti8[0]);
                        // Array.prototype.push.apply(DatoX8, jsdl[7]);
                        // Array.prototype.push.apply(DatoXMax8, jsdl[7]);
                    }
                }
                else {
                    if (RangoY8.length >= 650) {

                        DatoX8.splice(0, dtavt)
                        Array.prototype.push.apply(DatoX8, jsdl[7]);
                        DatoXMax8.splice(0, dtavt)
                        Array.prototype.push.apply(DatoXMax8, jsdl[7]);
                    }
                    else {
                        Array.prototype.push.apply(DatoX8, jsdl[7]);
                        Array.prototype.push.apply(DatoXMax8, jsdl[7]);
                    }
                }

            }


            RangoY = DatoX.length;
            RangoY2 = DatoX2.length;
            RangoY3 = DatoX3.length;
            RangoY4 = DatoX4.length;
            RangoY5 = DatoX5.length;
            RangoY6 = DatoX6.length;
            RangoY7 = DatoX7.length;
            RangoY8 = DatoX8.length;


            MaxDatoX = Math.max.apply(Math, DatoX);
            MaxDatoX2 = Math.max.apply(Math, DatoX2);
            MaxDatoX3 = Math.max.apply(Math, DatoX3);
            MaxDatoX4 = Math.max.apply(Math, DatoX4);
            MaxDatoX5 = Math.max.apply(Math, DatoX5);
            MaxDatoX6 = Math.max.apply(Math, DatoX6);
            MaxDatoX7 = Math.max.apply(Math, DatoX7);
            MaxDatoX8 = Math.max.apply(Math, DatoX8);

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

            console.log(DatoX3, 'Tercera Salida');
            Pcar = true;
            Scar = false;
        }
        else {

            var FechaRes = moment(FechaAct).subtract(1, 'hours').format('YYYY-MM-DD HH:mm:ss');

            Datasel = $.ajax({
                url: "Modulo_graficas/php/cargarconfselecgraf.php",
                dataType: 'text',
                data: {
                    dato40: d40
                },
                type: "POST",
                async: false
            }).responseText;
            jsdac = JSON.parse(Datasel);

            d0 = jsdac[0]; // var name 1
            d1 = jsdac[1]; // color 1
            d2 = jsdac[2]; // ancho linea 1
            d3 = jsdac[3]; // Min 1
            d4 = jsdac[4]; // Max 1
            d5 = jsdac[5]; // var name 2
            d6 = jsdac[6]; // color 2
            d7 = jsdac[7]; // ... y asi continua para las 8  variables
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

            var1 = d0[0]; // var name 1 
            var2 = d5[0]; // var name 2 
            var3 = d10[0];
            var4 = d15[0];
            var5 = d20[0];
            var6 = d25[0];
            var7 = d30[0];
            var8 = d35[0];

            console.log(var1);

            console.timeEnd("t1");


            console.time("t2");
            Datagra = $.ajax({
                url: "Modulo_graficas/php/Procedimientosgraf.php",
                dataType: 'text',
                data: {
                    FechaAct: FechaAct,
                    FechaRes: FechaRes,
                    dato1: var1,
                    dato2: var2,
                    dato3: var3,
                    dato4: var4,
                    dato5: var5,
                    dato6: var6,
                    dato7: var7,
                    dato8: var8
                },
                type: "POST",
                async: false
            }).responseText;
            jsdl = JSON.parse(Datagra);

            console.log(FechaAct, FechaRes);

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


            DatoX = jsdl[0];
            DatoXMax = jsdl[0];
                   DatoXp = jsdl[0];
                  DatoXMaxp = jsdl[0];
                  for1 =  5;
                  
                      for (i = 0; i < for1; i++) {
                          DatoX.splice([i], 0, DatoXp[i]);
                          DatoXMax.splice([i], 0, DatoXMaxp[i]);
                      } 

            //DatoX2 = jsdl[1];
            //DatoXMax2 = jsdl[1];
            /*   DatoX2p = jsdl[1];
              DatoXMax2p = jsdl[1];
              for2 =  5;
              
                  for (i = 0; i < for2; i++) {
                      DatoX2.splice([i], 0, DatoX2p[i]);
                      DatoXMax2.splice([i], 0, DatoXMax2p[i]);
                  } */

            //DatoX3 = jsdl[2];
            //DatoXMax3 = jsdl[2];
            /*      DatoX3p = jsdl[2];
                 DatoXMax3p = jsdl[2];
                 for3 = 5;
     
                     for (i = 0; i < for3; i++) {
                         DatoX3.splice([i], 0, DatoX3p[i]);
                         DatoXMax3.splice([i], 0, DatoXMax3p[i]);
                         console.log(DatoX3);
                     } */


            //DatoX4 = jsdl[3];
            //DatoXMax4 = jsdl[3];
            /*  DatoX4p = jsdl[3];
             DatoXMax4p = jsdl[3];
             for4 =  5;
             
                 for (i = 0; i < for4; i++) {
                     DatoX4.splice([i], 0, DatoX4p[i]);
                     DatoXMax4.splice([i], 0, DatoXMax4p[i]);
                 }
  */
            //DatoX5 = jsdl[4];
            //DatoXMax5 = jsdl[4];
            /*   DatoX5p = jsdl[4];
              DatoXMax5p = jsdl[4];
              for5 =  5;
              
                  for (i = 0; i < for5; i++) {
                      DatoX5.splice([i], 0, DatoX5p[i]);
                      DatoXMax5.splice([i], 0, DatoXMax5p[i]);
                  } */

            //DatoX6 = jsdl[5];
            //DatoXMax6 = jsdl[5];
            /* DatoX6p = jsdl[5];
            DatoXMax6p = jsdl[5];
            for6 =  5;
            
                for (i = 0; i < for6; i++) {
                    DatoX6.splice([i], 0, DatoX6p[i]);
                    DatoXMax6.splice([i], 0, DatoXMax6p[i]);
                } */

            //DatoX7 = jsdl[6];
            //DatoXMax7 = jsdl[6];
            /*   DatoX7p = jsdl[6];
              DatoXMax7p = jsdl[6];
              for7 =  5;
              
                  for (i = 0; i < for7; i++) {
                      DatoX7.splice([i], 0, DatoX7p[i]);
                      DatoXMax7.splice([i], 0, DatoXMax7p[i]);
                  } */

            // DatoX8 = jsdl[7];
            // DatoXMax8 = jsdl[7];
            /*  DatoX8p = jsdl[7];
             DatoXMax8p = jsdl[7];
             for8 =  5;
             
                 for (i = 0; i < for8; i++) {
                     DatoX8.splice([i], 0, DatoX8p[i]);
                     DatoXMax8.splice([i], 0, DatoXMax8p[i]);
                 } */

            MaxDatoX = Math.max.apply(Math, DatoX);
            MaxDatoX2 = Math.max.apply(Math, DatoX2);
            MaxDatoX3 = Math.max.apply(Math, DatoX3);
            MaxDatoX4 = Math.max.apply(Math, DatoX4);
            MaxDatoX5 = Math.max.apply(Math, DatoX5);
            MaxDatoX6 = Math.max.apply(Math, DatoX6);
            MaxDatoX7 = Math.max.apply(Math, DatoX7);
            MaxDatoX8 = Math.max.apply(Math, DatoX8);

            DatoY = DatoX.length;

            DatoxUlti = DatoX[DatoX.length - 1];

            if (DatoxUlti[(DatoxUlti.length - 1)] == -9999) {
                DatoxUlti = 0;
            }

            DatoxUlti2 = DatoX2[DatoX2.length - 1];

            if (DatoxUlti2[(DatoxUlti2.length - 1)] == -9999) {
                DatoxUlti2 = 0;
            }

            DatoxUlti3 = DatoX3[DatoX3.length - 1];

            if (DatoxUlti3[(DatoxUlti3.length - 1)] == -9999) {
                DatoxUlti3 = 0;
            }

            DatoxUlti4 = DatoX4[DatoX4.length - 1];

            if (DatoxUlti4[(DatoxUlti4.length - 1)] == -9999) {
                DatoxUlti4 = 0;
            }

            DatoxUlti5 = DatoX5[DatoX5.length - 1];

            if (DatoxUlti5[(DatoxUlti5.length - 1)] == -9999) {
                DatoxUlti5 = 0;
            }

            DatoxUlti6 = DatoX6[DatoX6.length - 1];

            if (DatoxUlti6[(DatoxUlti6.length - 1)] == -9999) {
                DatoxUlti6 = 0;
            }

            DatoxUlti7 = DatoX7[DatoX7.length - 1];

            if (DatoxUlti7[(DatoxUlti7.length - 1)] == -9999) {
                DatoxUlti7 = 0;
            }

            DatoxUlti8 = DatoX8[DatoX8.length - 1];

            if (DatoxUlti8[(DatoxUlti8.length - 1)] == -9999) {
                DatoxUlti8 = 0;
            }

            console.log(DatoX3, 'Primera Salida');
            console.timeEnd("t2");
            Scar = true;
        }
    }

    else {

        FechaData = $.ajax({
            url: "Modulo_graficas/php/fecha.php",
            dataType: 'text',
            type: "POST",
            async: false
        }).responseText;
        jsfecha = JSON.parse(FechaData);

        // Hora = document.getElementById("HoraGraf").value;
        d40 = document.getElementById("selectGra").value;
        FechaActNew = moment(FechaActCom).add(10, 'seconds').format('YYYY-MM-DD HH:mm:ss');// moment().format('YYYY-MM-DD HH:mm:ss');
        FechaRes = moment(FechaActNew).subtract(20, 'seconds').format('YYYY-MM-DD HH:mm:ss');
        FechaActCom = jsfecha[0];

        console.log(FechaActNew, FechaRes)

        Datasel = $.ajax({
            url: "Modulo_graficas/php/cargarconfselecgraf.php",
            dataType: 'text',
            data: {
                dato40: d40
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



        Datagra = $.ajax({
            url: "Modulo_graficas/php/Procedimientosgraf.php",
            dataType: 'text',
            data: {
                FechaAct: FechaActNew,
                FechaRes: FechaRes,
                dato1: var1,
                dato2: var2,
                dato3: var3,
                dato4: var4,
                dato5: var5,
                dato6: var6,
                dato7: var7,
                dato8: var8
            },
            type: "POST",
            async: false
        }).responseText;
        jsdl = JSON.parse(Datagra);

        /////////////// PRIMERA CONSULTA DE DATOS 

        DatoxUlti = jsdl[0];

        if (DatoxUlti[(DatoxUlti.length - 1)] == -9999) {
            if (RangoY.length >= 650) {

                DatoX.splice(0, dtavt)
                DatoX.push(DatoX[DatoX.length - 1]);
                DatoXMax.splice(0, dtavt)
                DatoXMax.push(DatoXMax[DatoXMax.length - 1]);
            }
            else {

                DatoX.push(DatoX[DatoX.length - 1]);
                DatoXMax.push(DatoXMax[DatoXMax.length - 1]);
            }
        }
        else {

            if (DatoxUlti[0] != DatoxUlti[(DatoxUlti.length - 1)]) {
                if (RangoY.length >= 650) {
                    DatoX.splice(0, dtavt)
                    DatoX.push(DatoxUlti[(DatoxUlti.length - 1)]);
                    DatoXMax.splice(0, dtavt)
                    DatoXMax.push(DatoxUlti[(DatoxUlti.length - 1)]);
                }
                else {

                    DatoX.push(DatoxUlti[(DatoxUlti.length - 1)]);
                    DatoXMax.push(DatoxUlti[(DatoxUlti.length - 1)]);
                }

            }
            else {
                if (RangoY.length >= 650) {

                    DatoX.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX, jsdl[0]);
                    DatoXMax.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax, jsdl[0]);
                }
                else {
                    Array.prototype.push.apply(DatoX, jsdl[0]);
                    Array.prototype.push.apply(DatoXMax, jsdl[0]);
                }
            }

        }


        //////////////// SEGUNDA CONSULTA DE DATOS
        DatoxUlti2 = jsdl[1];

        if (DatoxUlti2[(DatoxUlti2.length - 1)] == -9999) {
            if (RangoY2.length >= 650) {
                DatoX2.splice(0, dtavt)
                DatoX2.push(DatoX2[DatoX2.length - 1]);
                DatoXMax2.splice(0, dtavt)
                DatoXMax2.push(DatoX2[DatoXMax2.length - 1]);
            }
            else {
                DatoX2.push(DatoX2[DatoX2.length - 1]);
                DatoXMax2.push(DatoX2[DatoXMax2.length - 1]);
            }

        }
        else {
            if (DatoxUlti2[0] != DatoxUlti2[(DatoxUlti2.length - 1)]) {
                if (RangoY2.length >= 650) {
                    DatoX2.splice(0, dtavt)
                    DatoX2.push(DatoxUlti2[0]);
                    DatoXMax2.splice(0, dtavt)
                    DatoXMax2.push(DatoxUlti2[0]);
                }
                else {

                    DatoX2.push(DatoxUlti2[0]);
                    DatoXMax2.push(DatoxUlti2[0]);
                }
            }
            else {
                if (RangoY2.length >= 650) {

                    DatoX2.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX2, jsdl[1]);
                    DatoXMax2.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax2, jsdl[1]);
                }
                else {
                    Array.prototype.push.apply(DatoX2, jsdl[1]);
                    Array.prototype.push.apply(DatoXMax2, jsdl[1]);
                }
            }

        }


        /////////////////// TERCERA CONSULTA DE DATOS
        DatoxUlti3 = jsdl[2];

        if (DatoxUlti3[(DatoxUlti3.length - 1)] == -9999) {
            if (RangoY3.length >= 650) {
                DatoX3.splice(0, dtavt)
                DatoX3.push(DatoX3[DatoX3.length - 1]);
                DatoXMax3.splice(0, dtavt)
                DatoXMax3.push(DatoX3[DatoXMax3.length - 1]);
            }
            else {
                DatoX3.push(DatoX3[DatoX3.length - 1]);
                DatoXMax3.push(DatoX3[DatoXMax3.length - 1]);
            }

        }
        else {
            if (DatoxUlti3[0] != DatoxUlti3[(DatoxUlti3.length - 1)]) {
                if (RangoY3.length >= 650) {
                    DatoX3.splice(0, dtavt)
                    DatoX3.push(DatoxUlti3[0]);
                    DatoXMax3.splice(0, dtavt)
                    DatoXMax3.push(DatoxUlti3[0]);
                }
                else {

                    DatoX3.push(DatoxUlti3[0]);
                    DatoXMax3.push(DatoxUlti3[0]);
                }
            }
            else {
                if (RangoY3.length >= 650) {

                    DatoX3.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX3, jsdl[2]);
                    DatoXMax3.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax3, jsdl[2]);
                }
                else {
                    Array.prototype.push.apply(DatoX3, jsdl[2]);
                    Array.prototype.push.apply(DatoXMax3, jsdl[2]);
                }
            }

        }

        ////////////// CUARTA CONSULTA DE DATOS
        DatoxUlti4 = jsdl[3];

        if (DatoxUlti4[(DatoxUlti4.length - 1)] == -9999) {
            if (RangoY4.length >= 650) {
                DatoX4.splice(0, dtavt)
                DatoX4.push(DatoX4[DatoX4.length - 1]);
                DatoXMax4.splice(0, dtavt)
                DatoXMax4.push(DatoX4[DatoXMax4.length - 1]);
            }
            else {
                DatoX4.push(DatoX4[DatoX4.length - 1]);
                DatoXMax4.push(DatoX4[DatoXMax4.length - 1]);
            }

        }
        else {
            if (DatoxUlti4[0] != DatoxUlti4[(DatoxUlti4.length - 1)]) {
                if (RangoY4.length >= 650) {
                    DatoX4.splice(0, dtavt)
                    DatoX4.push(DatoxUlti4[0]);
                    DatoXMax4.splice(0, dtavt)
                    DatoXMax4.push(DatoxUlti4[0]);
                }
                else {

                    DatoX4.push(DatoxUlti4[0]);
                    DatoXMax4.push(DatoxUlti4[0]);
                }
            }
            else {
                if (RangoY4.length >= 650) {

                    DatoX4.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX4, jsdl[3]);
                    DatoXMax4.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax4, jsdl[3]);
                }
                else {
                    Array.prototype.push.apply(DatoX4, jsdl[3]);
                    Array.prototype.push.apply(DatoXMax4, jsdl[3]);
                }
            }

        }


        /////////////////////// QUINTA CONSULTA DE DATOS
        DatoxUlti5 = jsdl[4];

        if (DatoxUlti5[(DatoxUlti5.length - 1)] == -9999) {
            if (RangoY5.length >= 650) {
                DatoX5.splice(0, dtavt)
                DatoX5.push(DatoX5[DatoX5.length - 1]);
                DatoXMax5.splice(0, dtavt)
                DatoXMax5.push(DatoX5[DatoXMax5.length - 1]);
            }
            else {
                DatoX5.push(DatoX5[DatoX5.length - 1]);
                DatoXMax5.push(DatoX5[DatoXMax5.length - 1]);
            }

        }
        else {
            if (DatoxUlti5[0] != DatoxUlti5[(DatoxUlti5.length - 1)]) {
                if (RangoY5.length >= 650) {
                    DatoX5.splice(0, dtavt)
                    DatoX5.push(DatoxUlti5[0]);
                    DatoXMax5.splice(0, dtavt)
                    DatoXMax5.push(DatoxUlti5[0]);
                }
                else {

                    DatoX5.push(DatoxUlti5[0]);
                    DatoXMax5.push(DatoxUlti5[0]);
                }
            }
            else {
                if (RangoY5.length >= 650) {

                    DatoX5.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX5, jsdl[4]);
                    DatoXMax5.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax5, jsdl[4]);
                }
                else {
                    Array.prototype.push.apply(DatoX5, jsdl[4]);
                    Array.prototype.push.apply(DatoXMax5, jsdl[4]);
                }
            }

        }



        //////////////////// SEXTA CONSULTA DE DATOS
        DatoxUlti6 = jsdl[5];

        if (DatoxUlti6[(DatoxUlti6.length - 1)] == -9999) {
            if (RangoY6.length >= 650) {
                DatoX6.splice(0, dtavt)
                DatoX6.push(DatoX6[DatoX6.length - 1]);
                console.log('holi' + DatoX6[DatoX6.length - 1]);
                DatoXMax6.splice(0, dtavt)
                DatoXMax6.push(DatoX6[DatoXMax6.length - 1]);
            }
            else {
                DatoX6.push(DatoX6[DatoX6.length - 1]);
                DatoXMax6.push(DatoX6[DatoXMax6.length - 1]);
            }
        }
        else {
            if (DatoxUlti6[0] != DatoxUlti6[(DatoxUlti6.length - 1)]) {
                if (RangoY6.length >= 650) {
                    DatoX6.splice(0, dtavt)
                    DatoX6.push(DatoxUlti6[0]);
                    DatoXMax6.splice(0, dtavt)
                    DatoXMax6.push(DatoxUlti6[0]);
                }
                else {

                    DatoX6.push(DatoxUlti6[0]);
                    DatoXMax6.push(DatoxUlti6[0]);
                }
            }
            else {
                if (RangoY6.length >= 650) {

                    DatoX6.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX6, jsdl[5]);
                    DatoXMax6.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax6, jsdl[5]);
                }
                else {
                    Array.prototype.push.apply(DatoX6, jsdl[5]);
                    Array.prototype.push.apply(DatoXMax6, jsdl[5]);
                }
            }

        }



        /////// SEPTIMA CONSULTA DE DATOS

        DatoxUlti7 = jsdl[6];

        if (DatoxUlti7[(DatoxUlti7.length - 1)] == -9999) {
            if (RangoY7.length >= 650) {
                DatoX7.splice(0, dtavt)
                DatoX7.push(DatoX7[DatoX7.length - 1]);
                DatoXMax7.splice(0, dtavt)
                DatoXMax7.push(DatoX7[DatoXMax7.length - 1]);
            }
            else {
                DatoX7.push(DatoX7[DatoX7.length - 1]);
                DatoXMax7.push(DatoX7[DatoXMax7.length - 1]);
            }

        }
        else {
            if (DatoxUlti7[0] != DatoxUlti7[(DatoxUlti7.length - 1)]) {
                if (RangoY7.length >= 650) {
                    DatoX7.splice(0, dtavt)
                    DatoX7.push(DatoxUlti7[0]);
                    DatoXMax7.splice(0, dtavt)
                    DatoXMax7.push(DatoxUlti7[0]);
                }
                else {

                    DatoX7.push(DatoxUlti7[0]);
                    DatoXMax7.push(DatoxUlti7[0]);
                }
            }
            else {
                if (RangoY7.length >= 650) {

                    DatoX7.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX7, jsdl[6]);
                    DatoXMax7.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax7, jsdl[6]);
                }
                else {
                    Array.prototype.push.apply(DatoX7, jsdl[6]);
                    Array.prototype.push.apply(DatoXMax7, jsdl[6]);
                }
            }

        }



        ////////////////// OCTAVA CONSULTA DE DATOS
        DatoxUlti8 = jsdl[7];

        if (DatoxUlti8[(DatoxUlti8.length - 1)] == -9999) {
            if (RangoY8.length >= 650) {
                DatoX8.splice(0, dtavt)
                DatoX8.push(DatoX8[DatoX8.length - 1]);
                DatoXMax8.splice(0, dtavt)
                DatoXMax8.push(DatoX8[DatoXMax8.length - 1]);
            }
            else {
                DatoX8.push(DatoX8[DatoX8.length - 1]);
                DatoXMax8.push(DatoX8[DatoXMax8.length - 1]);
            }

        }
        else {
            if (DatoxUlti8[0] != DatoxUlti8[(DatoxUlti8.length - 1)]) {
                if (RangoY8.length >= 650) {
                    DatoX8.splice(0, dtavt)
                    DatoX8.push(DatoxUlti8[0]);
                    DatoXMax8.splice(0, dtavt)
                    DatoXMax8.push(DatoxUlti8[0]);
                }
                else {

                    DatoX8.push(DatoxUlti8[0]);
                    DatoXMax8.push(DatoxUlti8[0]);
                }
            }
            else {
                if (RangoY8.length >= 650) {

                    DatoX8.splice(0, dtavt)
                    Array.prototype.push.apply(DatoX8, jsdl[7]);
                    DatoXMax8.splice(0, dtavt)
                    Array.prototype.push.apply(DatoXMax8, jsdl[7]);
                }
                else {
                    Array.prototype.push.apply(DatoX8, jsdl[7]);
                    Array.prototype.push.apply(DatoXMax8, jsdl[7]);
                }
            }

        }

        MaxDatoX = Math.max.apply(Math, DatoX);
        MaxDatoX2 = Math.max.apply(Math, DatoX2);
        MaxDatoX3 = Math.max.apply(Math, DatoX3);
        MaxDatoX4 = Math.max.apply(Math, DatoX4);
        MaxDatoX5 = Math.max.apply(Math, DatoX5);
        MaxDatoX6 = Math.max.apply(Math, DatoX6);
        MaxDatoX7 = Math.max.apply(Math, DatoX7);
        MaxDatoX8 = Math.max.apply(Math, DatoX8);

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

        console.log(DatoX3, 'Segunda Salida');
    }

    console.time("t3");
    lienzo1.clearRect(0, 0, 250, 650);
    Lienzo();
    Dibujar();
    console.timeEnd("t3");
    // worker.postMessage([Hora]);
}

// Funcion que toma la configuracion de las graficas y luego la guarda en base datos 
function savegrafconf() {

    $("#save").click(function () {

        //PRIMER FORMULARIO

        var d1 = document.getElementById('select1').value;
        var d2 = document.getElementById('anchol1').value;
        var d3 = document.getElementById('colorl1').value;
        var d4 = document.getElementById('maxl1').value;
        var d5 = document.getElementById('minl1').value;
        var d6 = document.getElementById('selectGra').value;
        var d7 = 1;

        $.ajax({
            url: "Modulo_graficas/php/InDatosGraf.php",
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
            url: "Modulo_graficas/php/InDatosGraf.php",
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
            url: "Modulo_graficas/php/InDatosGraf.php",
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
            url: "Modulo_graficas/php/InDatosGraf.php",
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
            url: "Modulo_graficas/php/InDatosGraf.php",
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
            url: "Modulo_graficas/php/InDatosGraf.php",
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
            url: "Modulo_graficas/php/InDatosGraf.php",
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
            url: "Modulo_graficas/php/InDatosGraf.php",
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

        $("#DivOpciones").css({ "display": "none" });
        BotonOpcionGra = 0;
    })
}


