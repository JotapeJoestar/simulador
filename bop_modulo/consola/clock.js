/* ARCHIVO DE LOS RELOJES DE LA OPCION DE BOP (TODOS LOS RELOJES DE LA PARTE IZQUIERDA AL ABRIR LA OPCION DE BOP) */

var boxcell1 = document.getElementById('boxcell1').value;
var boxcell2 = document.getElementById('boxcell2').value;
var boxcell3 = document.getElementById('boxcell3').value;
var boxcell4 = document.getElementById('boxcell4').value;
var rel1 = boxcell1 * 0.054 + grados;
agu1.style.transform = "rotate(" + rel1 + "deg)";
rel2 = boxcell4 * 0.09 + grados;
agu4.style.transform = "rotate(" + rel2 + "deg)";
rel3 = boxcell3 * 0.09 + grados;
agu3.style.transform = "rotate(" + rel3 + "deg)";


/*variables de entrada de datos */
var limite_acumulador = 2700;
var limit_acum = 3000;
var velacu = 0.5;

/* calculo de movimiento de las agujas */

/*
velocidad de acumulador =5 == velocidad de el anular=30//6 
velocidad de acumulador =2 == velocidad de el anular=12//12
velocidad de acumulador =1.3 == velocidad de el anular=8//18 
velocidad de acumulador =0.8 == velocidad de el anular=5//28  

*/




//mueve el acumulador 
window.onload = acumulador();

var veloacu;

function restart() {
    limit_acum = limit_acum - 75;

}

function acumulador() {


    var intervalo_acumulador = setInterval(function () {
        if (boxcell1 > limite_acumulador) {
            if (boxcell1 > limit_acum) {
                document.getElementById('boxcell1').value = boxcell1 -= veloacu;
                rel1 = boxcell1 * 0.054 + grados;
                agu1.style.transform = "rotate(" + rel1 + "deg)";
            }
        } else {
            audioair.play();
            settempo();
            clearInterval(intervalo_acumulador);
        }

        var velo = document.getElementById('timexd').value;
        const vlef = Math.abs(velo);

        if (vlef == 30) {
            veloacu = 5;
        }
        if (vlef == 12) {
            veloacu = 2;
        }
        if (vlef == 8) {
            veloacu = 1.3;
        }
        if (vlef == 5) {
            veloacu = 0.8;
        }
    }, 300);



}


//intervalo que se ejecuta cunado termina de cargar el aire
function settempo() {
    var newint = setInterval(function () {
        if (boxcell1 < 3000) {


            document.getElementById('boxcell1').value = boxcell1 += velacu;
            relt = boxcell1 * 0.054 + grados;
            agu1.style.transform = "rotate(" + relt + "deg)";

            airwich.play();
            if (boxcell4 >= 1500) {
                velacu = 2;
            }
        }
        if (boxcell1 >= 3000) {
            boxcell1 = 3000;
            limit_acum = 3000;
            acumulador();
            clearInterval(newint);
            airwich.pause();
        }
    }, 300);
}



//anular que se activa simultaneo  con el air 
function intervalo_anular() {
    var inter_anul = setInterval(function () {

        var velo = document.getElementById('timexd').value;
        const vlef = Math.abs(velo);

        if (boxcell1 > limite_acumulador) {
            if (boxcell4 < 1500) {
                document.getElementById('boxcell4').value = boxcell4 += vlef;
                rel2 = boxcell4 * 0.09 + grados;
                agu4.style.transform = "rotate(" + rel2 + "deg)";
                accionanular.disabled = true;
                accionuper.disabled = true
                accionblind.disabled = true;
                acctionlower.disabled = true;
                document.getElementById('estadoair').value = 1;
                velacu = 0.5;
            } else {
                document.getElementById('estadoair').value = 0;
            }
            if (boxcell4 >= 1500) {
                document.getElementById('boxcell4').value = 1500;
                document.getElementById('estadoair').value = 0;
                clearInterval(inter_anul);
                ajaxguardaestados();
            }
        } else {
            velo = 12;
        }
        ajaxguardaestados();

    }, 250)
}
function restart_anular() {
    boxcell4 = 915;
}

function concat_fun_anular() {
    intervalo_anular();
    restart();
    restart_anular();
    document.getElementById('estadoair').value = 0;
}
document.getElementById('accionanular').addEventListener("click", concat_fun_anular);
//


function restartuper() {
    limit_acum = limit_acum - 37;

}


function intervalo_uper() {
    var inter_uper = setInterval(function () {
        var velo = document.getElementById('timexd').value;
        const vlef = Math.abs(velo);



        if (boxcell1 > limite_acumulador) {
            if (boxcell3 < 1500) {
                document.getElementById('boxcell3').value = boxcell3 += vlef;
                rel2 = boxcell3 * 0.09 + grados;
                agu3.style.transform = "rotate(" + rel2 + "deg)";
                accionanular.disabled = true;
                accionuper.disabled = true
                accionblind.disabled = true;
                acctionlower.disabled = true;
                document.getElementById('estadoair').value = 1;
                velacu = 0.5;
            }
            if (boxcell3 >= 1500) {
                document.getElementById('boxcell3').value = 1500;
                document.getElementById('estadoair').value = 0;
                clearInterval(inter_uper);
                ajaxguardaestados();
            }
        } else {
            velo = 12;
        }
        ajaxguardaestados();
    }, 250)
}
function restart_uper() {
    boxcell3 = 1200;
}

function concat_fun_uper() {
    intervalo_uper();
    restartuper();
    restart_uper();
    document.getElementById('estadoair').value = 0;
}


document.getElementById('accionuper').addEventListener("click", concat_fun_uper);

//blind
function restartblind() {
    limit_acum = limit_acum - 37;

}

function intervalo_blind() {

    var inter_blind = setInterval(function () {
        var velo = document.getElementById('timexd').value;
        const vlef = Math.abs(velo);

        if (boxcell1 > limite_acumulador) {
            if (boxcell3 < 1500) {
                document.getElementById('boxcell3').value = boxcell3 += vlef;
                rel3 = boxcell3 * 0.09 + grados;
                agu3.style.transform = "rotate(" + rel3 + "deg)";
                accionanular.disabled = true;
                accionuper.disabled = true
                accionblind.disabled = true;
                acctionlower.disabled = true;
                document.getElementById('estadoair').value = 1;
                velacu = 0.5;
            }
            if (boxcell3 >= 1500) {
                document.getElementById('boxcell3').value = 1500;
                document.getElementById('estadoair').value = 0;
                clearInterval(inter_blind);
                ajaxguardaestados();
            }
        } else {
            velo = 12;
        }
        ajaxguardaestados();

    }, 250)
}
function restart_blind() {
    boxcell3 = 1200;
}



function concat_fun_blind() {
    intervalo_blind();
    restartblind();
    restart_blind();
    document.getElementById('estadoair').value = 0;
}

document.getElementById('accionblind').addEventListener("click", concat_fun_blind);



//lower

//blind

function restartlower() {
    limit_acum = limit_acum - 37;

}

function intervalo_lower() {

    var inter_lower = setInterval(function () {
        var velo = document.getElementById('timexd').value;
        const vlef = Math.abs(velo);

        console.log('xd' + vlef);

        if (boxcell1 > limite_acumulador) {
            if (boxcell3 < 1500) {
                document.getElementById('boxcell3').value = boxcell3 += vlef;
                rel5 = boxcell3 * 0.09 + grados;
                agu3.style.transform = "rotate(" + rel5 + "deg)";
                accionanular.disabled = true;
                accionuper.disabled = true
                accionblind.disabled = true;
                acctionlower.disabled = true;
                document.getElementById('estadoair').value = 1;
            }
            if (boxcell3 >= 1500) {
                document.getElementById('boxcell3').value = 1500;
                document.getElementById('estadoair').value = 0;
                clearInterval(inter_lower);
                velacu = 0.5;
                ajaxguardaestados();
            }
        } else {
            velo = 12;
        }
        ajaxguardaestados();
    }, 250)
}
function restart_lower() {
    boxcell3 = 1200;
}



function concat_fun_lower() {
    intervalo_lower();
    restart_lower();
    restartlower();
    document.getElementById('estadoair').value = 0;
}





document.getElementById('acctionlower').addEventListener("click", concat_fun_lower);

//




function restartkill() {
    limit_acum = limit_acum - 8;
    console.log(limit_acum);
}



/* var estado_palanca1;
 estado_palanca1=1; */

function pr() {

    if (estado_palanca1 == 1) {
        palanca1.src = "img/Airlevelarriba.png";
        document.getElementById('palanca1').src = "img/Palancaclose.png";
        document.getElementById('palanca1').style.left = "185px";
        document.getElementById('estadoair').value = 0;
        estado_palanca1 = 0
        document.getElementById('hostkill').value = 1;
    } else {
        palanca1.src = "img/Airlevelarriba.png";
        document.getElementById('palanca1').src = "img/Palancaopen.png";
        document.getElementById('palanca1').style.left = "175px";
        document.getElementById('estadoair').value = 0;
        estado_palanca1 = 1
        document.getElementById('hostkill').value = 2;
    }
}
function restart_kill() {
    boxcell3 = 1400;
}
function interkill() {

    var inter_lower = setInterval(function () {
        var velo = document.getElementById('timexd').value;
        const vlef = Math.abs(velo);

        console.log('xd' + vlef);

        if (boxcell1 > limite_acumulador) {
            if (boxcell3 < 1500) {
                document.getElementById('boxcell3').value = boxcell3 += vlef;
                rel5 = boxcell3 * 0.09 + grados;
                agu3.style.transform = "rotate(" + rel5 + "deg)";
                accionanular.disabled = true;
                accionuper.disabled = true
                accionblind.disabled = true;
                acctionlower.disabled = true;
                document.getElementById('estadoair').value = 1;

            }
            if (boxcell3 >= 1500) {
                document.getElementById('boxcell3').value = 1500;
                document.getElementById('estadoair').value = 0;
                clearInterval(inter_lower);

            }
        } else {
            velo = 12;
        }

    }, 250)
}

function sunfun() {
    if (document.getElementById('estadoair').value == 1) {
        pr();
        restartkill();
        restart_kill();
        interkill();

        $.ajax({
            url: "./bop_modulo/guardar_palancas.php",
            data: {
                killopen: estado_palanca1
            },
            type: "POST",
            success: function (datos) {
            }
        })
    }
}

document.getElementById('palanca1').addEventListener("click", sunfun);




//



function restartchoke() {
    limit_acum = limit_acum - 8;
    console.log(limit_acum);
}


/* var estado_palanca2;
estado_palanca2=1; */

function prchoke() {

    if (estado_palanca2 == 1) {
        palanca1.src = "img/Airlevelarriba.png";
        document.getElementById('palanca2').src = "img/Palancaclose.png";
        document.getElementById('palanca2').style.left = "460px";
        document.getElementById('estadoair').value = 0;
        estado_palanca2 = 0;
        document.getElementById('hostchoque').value = 1;

    } else {
        palanca1.src = "img/Airlevelarriba.png";
        document.getElementById('palanca2').src = "img/Palancaopen.png";
        document.getElementById('palanca2').style.left = "450px";
        document.getElementById('estadoair').value = 0;
        document.getElementById('hostchoque').value = 2;
        estado_palanca2 = 1;
    }
}
function restart_choke() {
    boxcell3 = 1400;
}
function interchoke() {
    var inter_choke = setInterval(function () {
        var velo = document.getElementById('timexd').value;
        const vlef = Math.abs(velo);
        console.log('xd' + vlef);
        if (boxcell1 > limite_acumulador) {
            if (boxcell3 < 1500) {
                document.getElementById('boxcell3').value = boxcell3 += vlef;
                rel5 = boxcell3 * 0.09 + grados;
                agu3.style.transform = "rotate(" + rel5 + "deg)";
                accionanular.disabled = true;
                accionuper.disabled = true
                accionblind.disabled = true;
                acctionlower.disabled = true;
                document.getElementById('estadoair').value = 1;

            }
            if (boxcell3 >= 1500) {
                document.getElementById('boxcell3').value = 1500;
                document.getElementById('estadoair').value = 0;
                clearInterval(inter_choke);

            }
        } else {
            velo = 12;
        }

    }, 250)
}

function sunfunchoke() {
    if (document.getElementById('estadoair').value == 1) {
        prchoke();
        restartchoke();
        restart_choke();
        interchoke();

        $.ajax({
            url: "./bop_modulo/guardar_palancas.php",
            data: {
                choqueline: estado_palanca2
            },
            type: "POST",
            success: function (datos) {
            }
        })
    }

}

document.getElementById('palanca2').addEventListener("click", sunfunchoke);
