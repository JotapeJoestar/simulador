<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="graficas.css">
    <title>Graficas</title>
</head>

<body>

    <div class="header">
        <img class="bannerGran" src="../imagenes/graficas/grande.gif">
        <img class="bannerMed" src="../imagenes/graficas/mediano.gif">
        <img class="bannerPeq" src="../imagenes/graficas/pequeño.gif">
    </div>


    <div class="row">
        <div class="col-1 menu">
            <ul>
                <li id="azul"> <label>DEPTH</label>
                    <input id="depth" class="dis " type="text" name="depth" value="<?php echo  $val; ?>">
                </li>
                <li id="azul"><label>BIT DEPTH</label>
                    <input id="bit" class="dis " type="text" name="bit" value="<?php echo  $md; ?>">
                </li>
                <li id="verde"><label>R O P</label>
                    <input id="rop" class="dis" type="text" name="rop" value="200">
                </li>
                <li id="azulclaro"> <label>W O B</label>
                    <input id="wob" class="dis" type="text" name="wob" value="300">
                </li>
                <li id="rojo"> <label>S P P</label>
                    <input id="spp" class="dis" type="text" name="spp" value="400">
                </li>
                <li id="rosado"> <label>FLOW IN</label>
                    <input id="flow" class="dis" type="text" name="flow" value="500">
                </li>
                <li id="azul"> <label>HOOK LOAD</label>
                    <input id="hook" class="dis" type="text" name="hook" value="500">
                </li>
                <li id="azul"> <label>E C D</label>
                    <input id="ecd" class="dis" type="text" name="ecd" value="500">
                </li>
            </ul>
        </div>
        <div class="col-3 grafica">
            <div class="peppa">
                <h6 style="color:#EA220E">ROP</h6>
                <h6 style="color:#3355FF">WOB</h6>
                <h6 style="color:#0CBB21">SPP</h6>
                <h6 style="color:#3355FF">FLOW IN</h6>
            </div>
            <div class="dibujo-canvas">
                <canvas id="lienzo1" width="300" height="500"></canvas>
            </div>

        </div>
        <div class="col-1 menu">
            <ul>
                <li id="azul"> <label>T V D</label>
                    <input class="dis " type="text" name="tvd" value="1500">
                </li>
                <li id="verde"><label>R P M</label>
                    <input class="dis " type="text" name="rpm" value="1000">
                </li>
                <li id="azul"><label>TORQUE</label>
                    <input class="dis" type="text" name="torque" value="2000">
                </li>
                <li id="rojo"> <label>SPM TOTAL</label>
                    <input class="dis" type="text" name="spm_total" value="1000">
                </li>
                <li id="rosado"> <label>GAIN/LOSS</label>
                    <input class="dis" type="text" name="gain_loss" value="9040">
                </li>

            </ul>
        </div>
        <div class="col-3 grafica">
            <div class="peppa">
                <h6 style="color:#EA220E">R P M</h6>
                <h6 style="color:#3355FF">TORQUE</h6>
                <h6 style="color:#0CBB21">SPM TOTAL</h6>
                <h6 style="color:#3355FF">GAIN/LOSS</h6>
            </div>

            <div class="dibujo-canvas">
                <canvas id="lienzo2" width="300" height="500"></canvas>
            </div>


        </div>
        <div class="col-1 menu">
            <ul>
                <li id="azul"> <label>DEPTH</label>
                    <input class="dis " type="text" name="dis1" value="1500">
                </li>
                <li id="rojo"><label>BIT DEPTH</label>
                    <input class="dis " type="text" name="dis2" value="1000">
                </li>
                <li id="verde"><label>R O P</label>
                    <input class="dis" type="text" name="dis3" value="2000">
                </li>
                <li id="azul"> <label>W O B</label>
                    <input class="dis" type="text" name="dis4" value="1000">
                </li>
                <li id="verde"> <label>S P P</label>
                    <input class="dis" type="text" name="dis4" value="1000">
                </li>
                <li id="rojo"> <label>FLOW IN</label>
                    <input class="dis" type="text" name="dis6" value="500">
                </li>
                <li id="verde"> <label>HOOK LOAD</label>
                    <input class="dis" type="text" name="dis6" value="500">
                </li>
                <li id="azul"> <label>E C D</label>
                    <input class="dis" type="text" name="dis6" value="500">
                </li>
            </ul>
        </div>
        <div class="col-3 grafica">
            <div class="peppa">
                <h6 style="color:#EA220E">ROP</h6>
                <h6 style="color:#3355FF">WOB</h6>
                <h6 style="color:#0CBB21">SPP</h6>
                <h6 style="color:#3355FF">FLOW IN</h6>
            </div>
            <div class="dibujo-canvas">
                <canvas id="lienzo3" width="300" height="500"></canvas>
            </div>
        </div>
    </div>



    <script type="text/javascript">
    ejercicio1();

    function ejercicio1() {
        ej1 = document.getElementById("lienzo1");
        p1 = document.getElementById("depth").value;
        p2 = document.getElementById("bit").value;
        lienzo1 = ej1.getContext("2d");
        lienzo1.lineWidth = 0.8;
        lienzo1.strokeStyle = '#5C5F68';
        lienzo1.lineJoin = "miter";
        lienzo1.strokeRect(0, 0, 300, 500);

        Xant = 0;
        Yant = 0;


        lienzo1.beginPath();
        lienzo1.moveTo(Xant, Yant);
        lienzo1.lineTo(p1, p2);
        lienzo1.strokeStyle = '#000000';
        lienzo1.stroke();
        lienzo1.closePath();
        //EJEX
        lienzo1.beginPath();
        lienzo1.moveTo(150, 0);
        lienzo1.lineTo(150, 500);
        lienzo1.strokeStyle = '#000000';
        lienzo1.stroke();
        lienzo1.closePath();
        <?php 
   
     $phpArray = array(
          0 => 10, 
          1 => 20, 
          2 => 100, 
          3 => 40,
          4 => 50,
          5 => 60,
          6 => 70,
          7 => 80,
          8 => 90, 
          9 => 100, 
          10 => 90,
          11 => 80
    )
?>

        var puntos = <?php echo json_encode($phpArray ); ?>;
       
        puntos.forEach(myFunction);

        function myFunction() {

            for (i = 1; i < 21; i++) {

                lienzo1.strokeStyle = "#5C5F68";
                lienzo1.beginPath();
                lienzo1.moveTo(puntos[i - 1], i);
                lienzo1.lineTo(puntos[i], i + 1);
                lienzo1.stroke();

                // Xant=X........ 
                // Yant=y......... 


            }
        }

        // x....base md
        // y .... base Vaalor



        for (i = 0; i < 5; i++) {
            lienzo1.setLineDash([3, 5]);
            lienzo1.strokeStyle = "#5C5F68";
            lienzo1.beginPath();
            lienzo1.moveTo(0, 0 + (0 + i) * 100);
            lienzo1.lineTo(500, 0 + (0 + i) * 100);
            lienzo1.stroke();
        }

        for (i = 0; i < 8; i++) {
            lienzo1.strokeStyle = "#5C5F68";
            lienzo1.beginPath();
            lienzo1.moveTo(0 + (0 + i) * 50, 0);
            lienzo1.lineTo(0 + (0 + i) * 50, 500);
            lienzo1.stroke();
        }
        ej2 = document.getElementById("lienzo2");
        lienzo2 = ej2.getContext("2d");
        lienzo2.lineWidth = 0.8;
        lienzo2.strokeStyle = '#5C5F68';
        lienzo2.lineJoin = "miter";
        lienzo2.strokeRect(0, 0, 300, 500);

        //EJEX
        lienzo2.beginPath();
        lienzo2.moveTo(150, 0);
        lienzo2.lineTo(150, 500);
        lienzo2.strokeStyle = '#000000';
        lienzo2.stroke();
        lienzo2.closePath();

        for (i = 0; i < 5; i++) {
            lienzo2.setLineDash([3, 5]);
            lienzo2.strokeStyle = "#5C5F68";
            lienzo2.beginPath();
            lienzo2.moveTo(0, 0 + (0 + i) * 100);
            lienzo2.lineTo(500, 0 + (0 + i) * 100);
            lienzo2.stroke();
        }
        for (i = 0; i < 7; i++) {
            lienzo2.strokeStyle = "#5C5F68";
            lienzo2.beginPath();
            lienzo2.moveTo(0 + (0 + i) * 50, 0);
            lienzo2.lineTo(0 + (0 + i) * 50, 500);
            lienzo2.stroke();
        }
        ej3 = document.getElementById("lienzo3");
        lienzo3 = ej3.getContext("2d");
        lienzo3.lineWidth = 0.8;
        lienzo3.strokeStyle = '#5C5F68';
        lienzo3.lineJoin = "miter";
        lienzo3.strokeRect(0, 0, 300, 500);

        //EJEX
        lienzo3.beginPath();
        lienzo3.moveTo(150, 0);
        lienzo3.lineTo(150, 500);
        lienzo3.strokeStyle = '#000000';
        lienzo3.stroke();
        lienzo3.closePath();

        for (i = 0; i < 5; i++) {
            lienzo3.setLineDash([3, 5]);
            lienzo3.strokeStyle = "#5C5F68";
            lienzo3.beginPath();
            lienzo3.moveTo(0, 0 + (0 + i) * 100);
            lienzo3.lineTo(500, 0 + (0 + i) * 100);
            lienzo3.stroke();
        }
        for (i = 0; i < 7; i++) {
            lienzo3.strokeStyle = "#5C5F68";
            lienzo3.beginPath();
            lienzo3.moveTo(0 + (0 + i) * 50, 0);
            lienzo3.lineTo(0 + (0 + i) * 50, 500);
            lienzo3.stroke();
        }

    }
    </script>

</body>

</html>