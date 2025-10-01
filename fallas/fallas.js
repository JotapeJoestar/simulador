/// CODIGO JAVA SCRIPT DE FALLAS (VARIABLES/FUNCIONES) 

var apaga = document.getElementById('apaga').checked;
var apagatotal = document.getElementById('apagatotal').checked;
var insta = document.getElementById('insta').checked;
var temporalz = document.getElementById('temporalz').checked;
var timetre = document.getElementById('timetre').value;
var fallatre = document.getElementById('fallatre').checked;


var apagadop2 = document.getElementById('apagadop2').checked;
var apagatotap2 = document.getElementById('apagatotap2').checked;
var ins4 = document.getElementById('ins4').checked;
var temp4 = document.getElementById('temp4').checked;
var timemin3 = document.getElementById('timemin3').value;
var falla3 = document.getElementById('falla3').checked;
//

var cht = document.getElementById('cht').checked;
var chl = document.getElementById('chl').checked;
var choqueno = document.getElementById('choqueno').value;
var porcentge = document.getElementById('porcentge').value;
var ins5 = document.getElementById('ins5').checked;
var temp5 = document.getElementById('temp5').checked;
var timemin4 = document.getElementById('timemin4').value;
var fallault = document.getElementById('fallault').checked;


var goteo = document.getElementById('goteo').checked;
var porcent = document.getElementById('porcent').value;
var ins6 = document.getElementById('ins6').checked;
var temp6 = document.getElementById('temp6').checked;
var timemin5 = document.getElementById('timemin5').value;
var fallaultimate = document.getElementById('fallaultimate').checked;


$('#apaga').click(function() {

    document.getElementById('apagatotal').checked = false;
    console.log('SISDKFSJDF');

})
$('#apagatotal').click(function() {

    document.getElementById('apaga').checked = false;

})
$('#insta').click(function() {

    document.getElementById('temporalz').checked = false;

})
$('#temporalz').click(function() {

    document.getElementById('insta').checked = false;

})



$('#apagadop2').click(function() {

    document.getElementById('apagatotap2').checked = false;

})
$('#apagatotap2').click(function() {

    document.getElementById('apagadop2').checked = false;

})
$('#ins4').click(function() {

    document.getElementById('temp4').checked = false;

})
$('#temp4').click(function() {

    document.getElementById('ins4').checked = false;

})


$('#cht').click(function() {

    document.getElementById('chl').checked = false;

})
$('#chl').click(function() {

    document.getElementById('cht').checked = false;

})
$('#ins5').click(function() {

    document.getElementById('temp5').checked = false;

})
$('#temp5').click(function() {

    document.getElementById('ins5').checked = false;

})


$('#ins6').click(function() {

    document.getElementById('temp6').checked = false;

})
$('#temp6').click(function() {

    document.getElementById('ins6').checked = false;

})

var globaluno;
var globaldos;
var globalporcentge;
var globalchoque;

$('#validarfalla2').click(function() {
    var apaga = document.getElementById('apaga').checked;
    var apagatotal = document.getElementById('apagatotal').checked;
    var insta = document.getElementById('insta').checked;
    var temporalz = document.getElementById('temporalz').checked;
    var timetre = document.getElementById('timetre').value;
    var fallatre = document.getElementById('fallatre').checked;


    var apagadop2 = document.getElementById('apagadop2').checked;
    var apagatotap2 = document.getElementById('apagatotap2').checked;
    var ins4 = document.getElementById('ins4').checked;
    var temp4 = document.getElementById('temp4').checked;
    var timemin3 = document.getElementById('timemin3').value;
    var falla3 = document.getElementById('falla3').checked;
    

    var cht = document.getElementById('cht').checked;
    var chl = document.getElementById('chl').checked;
    var choqueno = document.getElementById('choqueno').value;
    var porcentge = document.getElementById('porcentge').value;
    var ins5 = document.getElementById('ins5').checked;
    var temp5 = document.getElementById('temp5').checked;
    var timemin4 = document.getElementById('timemin4').value;
    var fallault = document.getElementById('fallault').checked;


    var goteo = document.getElementById('goteo').checked;
    var porcent = document.getElementById('porcent').value;
    var ins6 = document.getElementById('ins6').checked;
    var temp6 = document.getElementById('temp6').checked;
    var timemin5 = document.getElementById('timemin5').value;
    var fallaultimate = document.getElementById('fallaultimate').checked;


    var calculo_timemin_surface = timetre * 60000;
    var calculo_timemin_surface2 = timemin3 * 60000;
    

    if (apaga == true) {
        apaga = 1;
    } else {
        apaga = 0;
    }

    if (apagatotal == true) {
        apagatotal = 1;
    } else {
        apagatotal = 0;
    }
    if (insta == true) {
        insta = 1;
    } else {
        insta = 0;
    }
    if (temporalz == true) {
        temporalz = 1;
    } else {
        temporalz = 0;
    }
    if (fallatre == true) {
        fallatre = 1;
    } else {
        fallatre = 0;
    }
    if (apagadop2 == true) {
        apagadop2 = 1;
    } else {
        apagadop2 = 0;
    }

    if (apagatotap2 == true) {
        apagatotap2 = 1;
    } else {
        apagatotap2 = 0;
    }

    if (ins4 == true) {
        ins4 = 1;
    } else {
        ins4 = 0;
    }
    if (temp4 == true) {
        temp4 = 1;
    } else {
        temp4 = 0;
    }
    if (falla3 == true) {
        falla3 = 1;
    } else {
        falla3 = 0;
    }
    if (cht == true) {
        cht = 1;
        globaluno=1;
    } else {
        cht = 0;
        globaluno=0;
    }
    if (chl == true) {
        chl = 1;
        globaldos=1;
    } else {
        chl = 0;
        globaldos=0;
    }
    if (ins5 == true) {
        ins5 = 1;
    } else {
        ins5 = 0;
    }
    if (temp5 == true) {
        temp5 = 1;
    } else {
        temp5 = 0;
    }
    if (fallault == true) {
        fallault = 1;
    } else {
        fallault = 0;
    }
    if (goteo == true) {
        goteo = 1;
    } else {
        goteo = 0;
    }

    if (ins6 == true) {
        ins6 = 1;
    } else {
        ins6 = 0;
    }

    if (temp6 == true) {
        temp6 = 1;
    } else {
        temp6 = 0;
    }
    if (fallaultimate == true) {
        fallaultimate = 1;
    } else {
        fallaultimate = 0;
    }
    
    globalchoque=choqueno;
    globalporcentge=porcentge;
                    
    
    if (temp4==0)
    {
        $.ajax({
        url: "index_modulo/fallas2.php",
        data: {

            apaga: apaga,
            apagatotal: apagatotal,
            insta: insta,
            temporalz: temporalz,
            timetre: timetre,
            fallatre: fallatre,

            apagadop2: apagadop2,
            apagatotap2: apagatotap2,
            ins4: ins4,
            temp4: temp4,
            timemin3: timemin3,
            falla3: falla3,

            cht: cht,
            chl: chl,
            choqueno: choqueno,
            porcentge: porcentge,
            ins5: ins5,
            temp5: temp5,
            timemin4: timemin4,
            fallault: fallault,

            goteo: goteo,
            porcent: porcent,
            ins6: ins6,
            temp6: temp6,
            timemin5: timemin5,
            fallaultimate: fallaultimate

        },
        type: "POST",
        success: function(datos) {
            $("#rchan").value = 'holakase';
        }
    })

    if (apagatotap2==1 && falla3==1 ) {
    document.getElementById('p2_spm').value = 0;
     document.getElementById('myRange2').scrollTop = 0;                  
    }
    
    
    if (apagadop2==1 && falla3==1) {
      var decrementdos= document.getElementById('myRange2').scrollTop;
       setInterval(function(){
            if (decrementdos>0) {
                decrementdos--;
                document.getElementById('myRange2').scrollTop =decrementdos;
            }
        }, 250);
 
    }
    }

    else
    {
        Swal.fire({
                position: 'bottom-end',
                icon: 'info',
                title: 'Update in process',
                showConfirmButton: false,
                timer: 1000
                })    

    setTimeout(function() {
    $.ajax({
        url: "index_modulo/fallas2.php",
        data: {

            apaga: apaga,
            apagatotal: apagatotal,
            insta: insta,
            temporalz: temporalz,
            timetre: timetre,
            fallatre: fallatre,

            apagadop2: apagadop2,
            apagatotap2: apagatotap2,
            ins4: ins4,
            temp4: temp4,
            timemin3: timemin3,
            falla3: falla3,

            cht: cht,
            chl: chl,
            choqueno: choqueno,
            porcentge: porcentge,
            ins5: ins5,
            temp5: temp5,
            timemin4: timemin4,
            fallault: fallault,

            goteo: goteo,
            porcent: porcent,
            ins6: ins6,
            temp6: temp6,
            timemin5: timemin5,
            fallaultimate: fallaultimate

        },
        type: "POST",
        success: function(datos) {
            $("#rchan").value = 'holakase';

        }
    })

    
    if (apagatotal==1 &&  fallatre==1) {
        document.getElementById('p1_spm').value = 0;
        document.getElementById('myRange').scrollTop = 0;               
    }
    
    
    if (apagatotap2==1 && falla3==1 ) {
        document.getElementById('p2_spm').value = 0;
     document.getElementById('myRange2').scrollTop = 0;                  
    }
    
    
    if (apagadop2==1 && falla3==1) {
      var decrementdos= document.getElementById('myRange2').scrollTop;
       setInterval(function(){
            if (decrementdos>0) {
                decrementdos--;
                document.getElementById('myRange2').scrollTop =decrementdos;
            }
        }, 250);
 
    }

        },calculo_timemin_surface2);
    }



    
    if (temporalz==0) {
    $.ajax({
        url: "index_modulo/fallas2.php",
        data: {

            apaga: apaga,
            apagatotal: apagatotal,
            insta: insta,
            temporalz: temporalz,
            timetre: timetre,
            fallatre: fallatre,

            apagadop2: apagadop2,
            apagatotap2: apagatotap2,
            ins4: ins4,
            temp4: temp4,
            timemin3: timemin3,
            falla3: falla3,

            cht: cht,
            chl: chl,
            choqueno: choqueno,
            porcentge: porcentge,
            ins5: ins5,
            temp5: temp5,
            timemin4: timemin4,
            fallault: fallault,

            goteo: goteo,
            porcent: porcent,
            ins6: ins6,
            temp6: temp6,
            timemin5: timemin5,
            fallaultimate: fallaultimate

        },
        type: "POST",
        success: function(datos) {
            $("#rchan").value = 'holakase';

        }
    })

                    
    if (apagatotal==1 &&  fallatre==1) {
        document.getElementById('p1_spm').value = 0;
        document.getElementById('myRange').scrollTop = 0;                    
    }
    
    
    if (apaga==1 && fallatre==1) {
        
       
      var decrement=  document.getElementById('myRange').scrollTop;
       setInterval(function(){
            if (decrement>0) {
                decrement-=2;
                document.getElementById('myRange').scrollTop =decrement ;
                console.log(decrement);
            }
 
        }, 250);
 
    }

}
 else 

 {
    Swal.fire({
                position: 'bottom-end',
                icon: 'info',
                title: 'Update in process',
                showConfirmButton: false,
                timer: 1000
                })    

    setTimeout(function() {
    $.ajax({
        url: "index_modulo/fallas2.php",
        data: {

            apaga: apaga,
            apagatotal: apagatotal,
            insta: insta,
            temporalz: temporalz,
            timetre: timetre,
            fallatre: fallatre,

            apagadop2: apagadop2,
            apagatotap2: apagatotap2,
            ins4: ins4,
            temp4: temp4,
            timemin3: timemin3,
            falla3: falla3,

            cht: cht,
            chl: chl,
            choqueno: choqueno,
            porcentge: porcentge,
            ins5: ins5,
            temp5: temp5,
            timemin4: timemin4,
            fallault: fallault,

            goteo: goteo,
            porcent: porcent,
            ins6: ins6,
            temp6: temp6,
            timemin5: timemin5,
            fallaultimate: fallaultimate

        },
        type: "POST",
        success: function(datos) {
            $("#rchan").value = 'holakase';

        }
    })

    
    if (apagatotal==1 &&  fallatre==1) {
        document.getElementById('p1_spm').value = 0;
        document.getElementById('myRange').scrollTop = 0;               
    }
    
    
    if (apaga==1 && fallatre==1) {
        
       
      var decrement=  document.getElementById('myRange').scrollTop;
       setInterval(function(){
            if (decrement>0) {
                decrement-=2;
                document.getElementById('myRange').scrollTop =decrement ;
                console.log(decrement);
            }
 
        }, 250);
 
    }
        },calculo_timemin_surface);
        
 }

 })