<!DOCTYPE html>

<!-- VISTA DEL MODULO DE GRAFICAS -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Modulo_graficas/burbu.css">
    <link rel="stylesheet"  href="Modulo_graficas/css/sweetalert2.css" type="text/css"> </link>
    <link rel="stylesheet"  href="Modulo_graficas/css/sweetalert2.min.css" type="text/css"> </link>
    <script src="Modulo_graficas/js/sweetalert2.all.js"></script>
    <script src="Modulo_graficas/js/sweetalert2.all.min.js"></script>
    <script src="Modulo_graficas/js/sweetalert2.js"></script>
    <script src="Modulo_graficas/js/sweetalert2.min.js" ></script>
    <script src="Modulo_graficas/burbuja.js"></script>
    <?php include('Modulo_graficas/php/datosgraficas.php'); ?>


    <title>Graficas</title>


</head>

<body>

<!--====================================================== index de el modal de graficas burbujas==========================================  -->
    <div class="row">
       
    <input  class="inputGra" style="background-image:url('img/imagenes/graficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;" type="button" id="BotonEsconder"/>
<!--     <input class="inputGra" style="background-image:url('img/imagenes/actualizar graficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;"type="button" id="ActualizarGraf"/> -->
    <input  class="inputGra" style="background-image:url('img/imagenes/coonfgraficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;" type="button" id="BotonConfgra"/>
    <select class="FechasGraf" id="HoraGraf">
        <option value=1> 1 Hour</option>
   <!--      <option value=5> 5 Hour</option>
        <option value=11> 11 Hour</option> -->
    </select>

            
     
<!--====================================================== formulario de informacion ==========================================  -->

<div class="col-3 grafica menu" id="MenuDatos">
        <ul id="BloqueMenu1">
                <li class="variables" id='spp_data'></li>
                <br>
                <li class="variables" id='gainloss_data'></li>
                <br>
                <li class="variables" id='total_strokes_data'></li>
                <br>
                <li class="variables" id='total_spm_data'></li>
                <br>
                <li class="variables" id='Gain LossG'></li>
                <br>
               
        </ul>
        <ul id="BloqueMenu2">        
                <li class="variables"> Depth Ini: <?php echo $nombre_cir;?></li>
                <br>
                <li class="variables"> Depth End: <?php echo $nombre_cir;?></li>
                <br>
                <li class="variables"> New Mud MW: <?php echo $nombre_cir;?></li>
                <br>
        </ul>
        <ul id="BloqueMenu3">
                <li class="variables" id='Depth_data'></li>
                <br>
                <li class="variables" id='BitDepth_Data'></li>
                <br>
                <li class="variables" id='LeakPress_data' ></li>
                <br>
                <li class="variables" id='ShoePress_data'></li>
                <br>
                <li class="variables" id='BottomPress_data'></li>
                <br>
                <li class="variables" id='FormationPress_data'></li>
                <br>


        </ul>
<!--==============================================================los cuatro botones que manejan las lineas de las graficas ==================================================================  -->
        </div>
        <div class="datgraletr">
                                <label id="datf1l1" class="datf1l1"></label>
                                <br>
                                <label id="datf1l2" class="datf1l1"></label>
                                <br>
                                <label id="datf1l3" class="datf1l1"></label>
                                <br>
                                <label id="datf1l4" class="datf1l1"></label>
                                <br>
                                <label id="datf1l5" class="datf1l1"></label>
                                <br>
                                <label id="datf1l6" class="datf1l1"></label>
                                <br>
                                <label id="datf1l7" class="datf1l1"></label>
                                <br>
                                <label id="datf1l8" class="datf1l1"></label>
        </div>
        <div class= "col-2 menu" id='DivEsconder'>
<!--             <div class="peppa">
            </div> -->
            <div class="dibujo-canvas">
                <select class="selectGra" id="selectGra">
                    <option value="WELL CONTROL">WELL CONTROL</option>
                </select>
                <canvas class="lienzx"id="lienzo1" width="250" height="650"></canvas>
            </div> 
        </div>
<!--====================================================== sub modales que se activan con los botones ==========================================  -->
<!--         <div class="col-4" id='DivOpciones' style="background-image:url('img/imagenes/fondograficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <span class="cerrar" id="xgraf">X</span>   
        <h1 class="selecD">Select data</h1>
        
        <button class="botonesBurbujas" id="BotonSA1" style="background-color:Blue">
                <li id="Color1G"> 
                <label id="DatoInput1T">Data 1</label>           
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA2"style="background-color:Blue">
                <li id="Color2G">
                <label id="DatoInput2T">Data 2</label>           
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA3" style="background-color:Blue">
                <li id="Color3G">
                <label id="DatoInput3T">Data 3</label>            
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA4" style="background-color:Blue">
                <li id="Color4G">
                <label id="DatoInput4T">Data 4</label>                
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA5" style="background-color:Blue">
                <li id="Color5G">
                <label id="DatoInput5T">Data 5</label>                
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA6" style="background-color:Blue">
                <li id="Color6G">
                <label id="DatoInput6T">Data 6</label>                
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA7" style="background-color:Blue">
                <li id="Color7G">
                <label id="DatoInput7T">Data 7</label>                
                </li>
        </button>
                <br>
                <br>

        <button class="botonesBurbujas" id="BotonSA8" style="background-color:Blue">
                <li id="Color8G">
                <label id="DatoInput8T">Data 8</label>                
                </li>
        </button>
                <br>
                <br>

                <button id="save" class="savegrafb" style="background-image:url('img/imagenes/guardar.png');background-position: center;background-repeat: no-repeat;background-size: cover;"></button>

        </div>


        <div class="col-4" id='DivOpciones1' style="background-image:url('img/imagenes/fondograficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <span class="cerrar" id="xgraf1">X</span>   
        <h1 class="selecD">Select data 1</h1>
        <p>Data to Graph</p>
        <select id="select1" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol1" >
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl1">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl1">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl1">
        <br>
        <br>
        <button class="ConfGra" style="background-image:url('img/imagenes/Confirmar.png');background-position: center;background-repeat: no-repeat;background-size: cover;" type="submit" class="botonescero" id="Confirmardatos1"></button>
        </div>

        <div class="col-4" id='DivOpciones2' style="background-image:url('img/imagenes/fondograficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <span class="cerrar" id="xgraf2">X</span>   
        <h1 class="selecD">Select data 2</h1>
        <p>Data to Graph</p>
        <select id="select2" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol2">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl2">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl2">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl2">
        <br>
        <br>
        <button class="ConfGra" style="background-image:url('img/imagenes/Confirmar.png');background-position: center;background-repeat: no-repeat;background-size: cover;" type="submit" class="botonescero" id="Confirmardatos2"></button>
        </div>

        <div class="col-4" id='DivOpciones3'style="background-image:url('img/imagenes/fondograficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <span class="cerrar" id="xgraf3">X</span>   
        <h1 class="selecD">Select data 3</h1>
        <p>Data to Graph</p>
        <select id="select3" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol3">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl3">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl3">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl3">
        <br>
        <br>
        <button class="ConfGra" style="background-image:url('img/imagenes/Confirmar.png');background-position: center;background-repeat: no-repeat;background-size: cover;" type="submit" class="botonescero" id="Confirmardatos3"></button>
        </div>

        <div class="col-4" id='DivOpciones4'style="background-image:url('img/imagenes/fondograficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <span class="cerrar" id="xgraf4">X</span>   
        <h1 class="selecD">Select data 4</h1>
        <p>Data to Graph</p>
        <select id="select4" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol4">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl4">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl4">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl4">
        <br>
        <br>
        <button class="ConfGra" style="background-image:url('img/imagenes/Confirmar.png');background-position: center;background-repeat: no-repeat;background-size: cover;" type="submit" class="botonescero" id="Confirmardatos4"></button>
        </div>

        <div class="col-4" id='DivOpciones5'style="background-image:url('img/imagenes/fondograficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <span class="cerrar" id="xgraf5">X</span>   
        <h1 class="selecD">Select data 5</h1>
        <p>Data to Graph</p>
        <select id="select5" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol5">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl5">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl5">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl5">
        <br>
        <br>
        <button class="ConfGra" style="background-image:url('img/imagenes/Confirmar.png');background-position: center;background-repeat: no-repeat;background-size: cover;" type="submit" class="botonescero" id="Confirmardatos5"></button>
        </div>

        <div class="col-4" id='DivOpciones6'style="background-image:url('img/imagenes/fondograficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <span class="cerrar" id="xgraf6">X</span>   
        <h1 class="selecD">Select data 6</h1>
        <p>Data to Graph</p>
        <select id="select6" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol6">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl6">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl6">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl6">
        <br>
        <br>
        <button class="ConfGra" style="background-image:url('img/imagenes/Confirmar.png');background-position: center;background-repeat: no-repeat;background-size: cover;" type="submit" class="botonescero" id="Confirmardatos6"></button>
        </div>

        <div class="col-4" id='DivOpciones7'style="background-image:url('img/imagenes/fondograficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <span class="cerrar" id="xgraf7">X</span>   
        <h1 class="selecD">Select data 7</h1>
        <p>Data to Graph</p>
        <select id="select7" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol7">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl7">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl7">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl7">
        <br>
        <br>
        <button class="ConfGra" style="background-image:url('img/imagenes/Confirmar.png');background-position: center;background-repeat: no-repeat;background-size: cover;" type="submit" class="botonescero" id="Confirmardatos7"></button>
        </div>

        <div class="col-4" id='DivOpciones8'style="background-image:url('img/imagenes/fondograficas.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <span class="cerrar" id="xgraf8">X</span>   
        <h1 class="selecD">Select data 8</h1>
        <p>Data to Graph</p>
        <select id="select8" class="select1">
        <option>None</option>        
        </select>
        <p>Line width</p>
        <input class="datosinput"  type="number" id="anchol8">
        <p>Line color</p>
        <input class="datosinput"  type="color" id="colorl8">
        <p>Maximum</p>
        <input  class="datosinput" type="number" id="maxl8">
        <p>Minimum</p>
        <input  class="datosinput" type="number" id="minl8">
        <br>
        <br>
        <button class="ConfGra" style="background-image:url('img/imagenes/Confirmar.png');background-position: center;background-repeat: no-repeat;background-size: cover;" type="submit" class="botonescero" id="Confirmardatos8"></button>
        </div>
         -->
        <div class="col-6 grafica ">

            <img class="fondo" src="img/imagenes/fondo_casing.png">           
            <img class="gif" id="gif" src="img/imagenes/Gif-broca-corregido.gif">
            <img class="gif" id="gif2" src="img/imagenes/gif lodo en movimiento broca quieta.gif">
            <img class="gif" id="gif3" src="img/imagenes/gif broca moviendose lodo quieto.gif">
            <img style='width:20px;height:120px;margin-top:716px;transform:rotate(-90deg);margin-left:-55px;' class="gif" id="gif4" src="img/imagenes/Flechap.gif">
            <img style='width:20px;height:120px;margin-top:716px;transform:rotate(90deg);margin-left:200px;' class="gif" id="gif5" src="img/imagenes/Flechap.gif">
            <progress value = '0' id="mud1" class="progresbarmud" max="0"> </progress>
            <progress value = '0' id="mud2" class="progresbarnewmud" max="0"> </progress>
        <div class="col-1 grafica ">
            <img class="burbuji" id="burbuja1" src="img/imagenes/burbujas grande.png">
            <img class="burbuji" id="burbuja2" src="img/imagenes/burbujas grande.png"> 
            <img class="burbuji" id="burbuja3" src="img/imagenes/burbujas grande.png">
            <img class="burbuji" id="burbuja4" src="img/imagenes/burbujas grande.png">
            <img class="burbuji" id="burbuja5" src="img/imagenes/burbujas grande.png">
            <img class="burbuji" id="burbuja6" src="img/imagenes/burbujas grande.png">
            <img class="burbuji" id="burbuja7" src="img/imagenes/burbujas grande.png">
            <img class="burbuji" id="burbuja8" src="img/imagenes/burbujas grande.png">
            <img class="burbuji" id="burbuja9" src="img/imagenes/burbujas grande.png">
            <img class="burbuji" id="burbuja10" src="img/imagenes/burbujas grande.png">
        </div>

        </div>

    </div>


    <input type="hidden" id="realtime" value="<?php echo $resultadort; ?>">

<script defer type="text/javascript">


// Java script necesario para ejecucion correcta de archivo burbuja.js

//$(document).ready(FuncionesBurbujas); 
    

// Variables para movimeintos de influjos

    var Maxpx= 1240;
    var puntoMax = -640;
    var puntoMin = 600; 
    document.getElementById('selectGra').value = ""; 

/*     var altoMax = 600;
    var altoMin = 0;   

    var altoMedio = 200;  */

//Variables para graficacion de lineas 
    var EjeX = 250;
    var EjeY = 650;

    
    var FechaAct = document.getElementById('realtime').value;   /// moment().format('YYYY-MM-DD HH:mm:ss');
    console.log(FechaAct);
    var FechaActCom;
    var Pcar=false;
    var Scar=true;
    var DatoX = [0];
    var DatoXMax = [0];
    var DatoX2 = [0];
    var DatoXMax2 = [0];
    var DatoX3 = [0];
    var DatoXMax3 = [0];
    var DatoX4 = [0];
    var DatoXMax4 = [0];
    var DatoX5 = [0];
    var DatoXMax5 = [0];
    var DatoX6 = [0];
    var DatoXMax6 = [0];
    var DatoX7 = [0];
    var DatoXMax7 = [0];
    var DatoX8 = [0];
    var DatoXMax8 = [0];
    var DatoxUlti = 0
    var DatoxUlti2 = 0
    var DatoxUlti3 = 0
    var DatoxUlti4 = 0
    var DatoxUlti5 = 0
    var DatoxUlti6 = 0
    var DatoxUlti7 = 0
    var DatoxUlti8 = 0

// Variables para cierres de menus y datos select 

    var BotonGraficas = 0; 
    var BotonOpcionGra = 0;
    var BotonOpcionGra1 = 0;
    var DatosVar = <?php echo json_encode($DatosVar);?>; 

    // var worker = new window.Worker('Modulo_graficas/worker.js');


</script>

</body>

</html>