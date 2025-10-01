

<?php 

/* <!-- ARCHIVO QUE CONTIENE LA ESTRUCTURA DE TODAS LAS FALLAS BOTTOM --> */

$queryconsul=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleTapada'");
$res=mysqli_fetch_array($queryconsul);
   $tipoFallant=$res['val1'];
   $Tiempo1=$res['Tiempo'];
   $instantaneo=$res['Instantaneo'];
   $Temorizado=$res['Temorizado'];
   $FallaAct=$res['FallaAct'];
   $cantidad=$res['var2'];
$queryconsul2=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='NozzleLavada'");
 $res2=mysqli_fetch_array($queryconsul2);
   $tipoFallant2=$res2['val1'];
   $Tiempo2=$res2['Tiempo'];
   $instantaneo2=$res2['Instantaneo'];
   $Temorizado2=$res2['Temorizado'];
   $FallaAct2=$res2['FallaAct'];
$cantidad2=$res2['var2'];
 ?>
<!--=========================================================variantes fallas nozzles ===========================================================-->
            <table style="background-color:#0CC5C8">
                <tr>
                    <label>Nozzles</label></td>
                </tr>
                <!-- tabla 1-->
                <!-- tabla 1-->
                <!-- tabla 1-->
                <?php   if ($tipoFallant==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="nztapada" id="nztapada" checked>
                        <label>nozzle stuffy</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="nzlavada" id="nzlavada">
                        <label>nozzle washed</label>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Quantity:</label>
                        <select name="canti_dad" id="canti_dad" style="width:70px;">
                            <option selected><?php echo $cantidad ?></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label style="font-weight:bold;">Time Mode</label>
                    </td>
                </tr>


                <?php if ( $instantaneo==1 ){?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins" id="ins" checked>
                        <label>Instant</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="temp" id="temp">
                        <label>Timed</label>
                    </td>
                </tr>

                <?php } ?>
                <?php   if ($Temorizado==1) { ?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins" id="ins">
                        <label>Instant</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="temp" id="temp" checked>
                        <label>Timed</label>
                    </td>
                </tr>
                <tr>
                    <?php  }
 if ($Temorizado==0 AND $instantaneo==0){ ?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins" id="ins">
                        <label>Instant</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="temp" id="temp">
                        <label>Timed</label>
                    </td>
                </tr>
                <tr>
                    <?php     } ?>

                    <td>
                        <label>Time(minut)</label>
                        <select name="timemin" id="timemin" style="width:70px;">
                            <option selected><?php echo $Tiempo1 ?></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                    </td>
                </tr>
                <?php if ($FallaAct==1 ){?>
                <tr>
                    <td>
                        <input type="checkbox" name="fa" id="fa" checked>
                        <label>Falla Actv</label>
                    </td>
                </tr>
                <?php }else{ ?>
                <tr>
                    <td>
                        <input type="checkbox" name="fa" id="fa">
                        <label>Falla Actv</label>
                    </td>
                </tr>
                <?php }} ?>
                <!-- si nz lavada-->
                <?php   if ($tipoFallant2==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="nztapada" id="nztapada">
                        <label>nozzle stuffy</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="nzlavada" id="nzlavada" checked>
                        <label>nozzle lavada</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Quantity:</label>
                        <select name="canti_dad" id="canti_dad" style="width:70px;">
                            <option selected><?php echo $cantidad2 ?></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-weight:bold;">Time Mode</label>
                    </td>
                </tr>
                <?php if ( $instantaneo2==1 ){?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins" id="ins" checked>
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="temp" id="temp">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php } ?>
                <?php   if ($Temorizado2==1) { ?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins" id="ins">
                        <label>Instant</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="temp" id="temp" checked>
                        <label>Timed</label>
                    </td>
                </tr>
                <tr>
                    <?php  }
 if ($Temorizado2==0 AND $instantaneo2==0){ ?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins" id="ins">
                        <label>Instant</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="temp" id="temp">
                        <label>Timed</label>
                    </td>
                </tr>
                <tr>
                    <?php     } ?>

                    <td>
                        <label>Time(minut)</label>
                        <select name="timemin" id="timemin" style="width:70px;">
                            <option selected><?php echo $Tiempo2 ?></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                    </td>
                </tr>
                <?php if ($FallaAct2==1 ){?>
                <tr>
                    <td>
                        <input type="checkbox" name="fa" id="fa" checked>
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php }else{ ?>
                <tr>
                    <td>
                        <input type="checkbox" name="fa" id="fa">
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php }} ?>
                <!-- si estan vacios-->
                <?php   if ($tipoFallant==0 AND $tipoFallant2==0) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="nztapada" id="nztapada">
                        <label>nozzle stuffy</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="nzlavada" id="nzlavada">
                        <label>nozzle lavada</label>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Quantity:</label>
                        <select name="canti_dad" id="canti_dad" style="width:70px;">
                            <option selected><?php echo $cantidad ?></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label style="font-weight:bold;">Time Mode</label>
                    </td>
                </tr>


                <?php if ( $instantaneo==1 ){?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins" id="ins" checked>
                        <label>Instant</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="temp" id="temp">
                        <label>Timed</label>
                    </td>
                </tr>

                <?php } ?>
                <?php   if ($Temorizado==1) { ?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins" id="ins">
                        <label>Instant</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="temp" id="temp" checked>
                        <label>Timed</label>
                    </td>
                </tr>
                <tr>
                    <?php  }
 if ($Temorizado==0 AND $instantaneo==0){ ?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins" id="ins">
                        <label>Instant</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="temp" id="temp">
                        <label>Timed</label>
                    </td>
                </tr>
                <tr>
                    <?php     } ?>

                    <td>
                        <label>Time(minut)</label>
                        <select name="timemin" id="timemin" style="width:70px;">
                            <option selected><?php echo $Tiempo1 ?></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                    </td>
                </tr>
                <?php if ($FallaAct==1 ){?>

                <tr>
                    <td>
                        <input type="checkbox" name="fa" id="fa" checked>
                        <label>Failure Actv</label>
                    </td>
                </tr>

                <?php }else{ ?>

                <tr>
                    <td>
                        <input type="checkbox" name="fa" id="fa">
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php }} ?>
     </table>
            <!-- tabla 2-->
            <?php   

$queryconsul3=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Diferencial'");
$res3=mysqli_fetch_array($queryconsul3);
   $Diferencial=$res3['val1'];
   $Tiempo3=$res3['Tiempo'];
   $instantaneo3=$res3['Instantaneo'];
   $Temorizado3=$res3['Temorizado'];
   $FallaAct3=$res3['FallaAct'];
$queryconsul4=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Empaquetamiento'");
 $res4=mysqli_fetch_array($queryconsul4);
   $Empaquetamiento=$res4['val1'];
   $Tiempo4=$res4['Tiempo'];
   $instantaneo4=$res4['Instantaneo'];
   $Temorizado4=$res4['Temorizado'];
   $FallaAct4=$res4['FallaAct'];
 ?>
            <!-- tabla 2-->
<!--===============================================fallas stup pipe======================================================================-->
            </table>
            <table style="background-color:#0CC5C8;position: absolute;left:265px;top:125px">

                <tr>

                    <label style="position:absolute;top:105px;left:265px">Stup pipe</label></td>

                </tr>

                <?php     if ($Diferencial==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" checked name="Dferencial" id="Dferencial">
                        <label>differential</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="empaquetamiento" id="empaquetamiento">
                        <label>packing</label>
                    </td>
                </tr>

                </tr>
                <tr>
                    <td>
                        <label style="font-weight:bold;">Time Mode</label>
                    </td>
                </tr>

                </tr>
         <?php   if ($instantaneo3==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="Instantaneo" id="Instantaneo" checked>
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="Temporizado" id="Temporizado">
                        <label>Timed</label>
                    </td>
                </tr>
        <?php   } ?>
        <?php   if ($Temorizado3==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="Instantaneo" id="Instantaneo">
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="Temporizado" id="Temporizado" checked>
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>

                <?php   if ($Temorizado3==0 AND $instantaneo3==0 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="Instantaneo" id="Instantaneo">
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="Temporizado" id="Temporizado">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <tr>
                    <td>
                        <label>Time(minut)</label>

                        <select name="timemin2" id="timemin2" style="width:70px;">
                            <option selected><?php echo $Tiempo3 ?></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                    </td>
                </tr>

                <?php  if ( $FallaAct3==1) { ?>
                <tr>
                    <td>
                        <input type="checkbox" name="fa2" id="fa2" checked>
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php   }else{ ?>

                <tr>
                    <td>
                        <input type="checkbox" name="fa2" id="fa2">
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php  } }?>
                <!-- si empaquetamiento-->

                <?php     if ($Empaquetamiento==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="Dferencial" id="Dferencial">
                        <label>packing</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="empaquetamiento" checked id="empaquetamiento">
                        <label>empaquetamiento</label>
                    </td>
                </tr>

                </tr>
                <tr>
                    <td>
                        <label style="font-weight:bold;">Time Mode</label>
                    </td>
                </tr>

                </tr>
                <?php   if ($instantaneo4==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="Instantaneo" id="Instantaneo" checked>
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="Temporizado" id="Temporizado">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>

                <?php   if ($Temorizado4==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="Instantaneo" id="Instantaneo">
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="Temporizado" id="Temporizado" checked>
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>

                <?php   if ($instantaneo4==0 AND $Temorizado4==0 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="Instantaneo" id="Instantaneo">
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="Temporizado" id="Temporizado">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <tr>
                    <td>
                        <label>Time(minut)</label>
                        <select name="timemin2" id="timemin2" style="width:70px;">
                            <option selected><?php echo $Tiempo4 ?></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                    </td>
                </tr>
                <?php  if ( $FallaAct4==1) { ?>
                <tr>
                    <td>
                        <input type="checkbox" name="fa2" id="fa2" checked>
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php   }else{ ?>

                <tr>
                    <td>
                        <input type="checkbox" name="fa2" id="fa2">
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php  }} ?>
                <!-- si estan vacios -->

                <?php     if ($Diferencial==0 AND $Empaquetamiento==0) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="Dferencial" id="Dferencial">
                        <label>Dferencial</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="empaquetamiento" id="empaquetamiento">
                        <label>packing</label>
                    </td>
                </tr>

                </tr>
                <tr>
                    <td>
                        <label style="font-weight:bold;">Time Mode</label>
                    </td>
                </tr>

                </tr>
                <?php   if ($instantaneo3==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="Instantaneo" id="Instantaneo" checked>
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="Temporizado" id="Temporizado">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <?php   if ($Temorizado3==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="Instantaneo" id="Instantaneo">
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="Temporizado" id="Temporizado" checked>
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>

                <?php   if ($Temorizado3==0 AND $instantaneo3==0 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="Instantaneo" id="Instantaneo">
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="Temporizado" id="Temporizado">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <tr>
                    <td>
                        <label>Time(minut)</label>
                        <select name="timemin2" id="timemin2" style="width:70px;">
                            <option selected><?php echo $Tiempo3 ?></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                    </td>
                </tr>

                <?php  if ( $FallaAct3==1) { ?>
                <tr>
                    <td>
                        <input type="checkbox" name="fa2" id="fa2" checked>
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php   }else{ ?>

                <tr>
                    <td>
                        <input type="checkbox" name="fa2" id="fa2">
                        <label>Failure Actv</label>
                    </td>
                </tr>


                <?php  } }?>
                
            </table>
            <input type="submit" name="validarfalla" id="validarfalla" value="SAVE"
                style="position:absolute;top:330px;left:200px;width:100px;height:50px;background-color:#36B5E5;border:10px solid #A3A0B9 ; font-size:1.2em;font-weight:bold;font-color:#ffffff;">
                
           
 <script type="text/javascript">
            
            // window.onload = ajaxcarga();


            var nztapada = document.getElementById('nztapada').checked;
            var nzlavada = document.getElementById('nzlavada').checked;
            var ins = document.getElementById('ins').checked;
            var temp = document.getElementById('temp').checked;
            var timemin = document.getElementById('timemin').value;
            var fa = document.getElementById('fa').checked;
            var Dferencial = document.getElementById('Dferencial').checked;
            var empaquetamiento = document.getElementById('empaquetamiento').checked;
            var Instantaneo = document.getElementById('Instantaneo').checked;
            var Temporizado = document.getElementById('Temporizado').checked;
            var timemin2 = document.getElementById('timemin2').value;
            var fa2 = document.getElementById('fa2').checked;
            var canti_dad = document.getElementById('canti_dad').value;
            $('#nztapada').click(function() {
                document.getElementById('nzlavada').checked = false;
            })
            $('#nzlavada').click(function() {
                document.getElementById('nztapada').checked = false;
            })
            $('#ins').click(function() {
                document.getElementById('temp').checked = false;
            })
            $('#temp').click(function() {
                document.getElementById('ins').checked = false;
            })
            $('#Dferencial').click(function() {
                document.getElementById('empaquetamiento').checked = false;
            })
            $('#empaquetamiento').click(function() {
                document.getElementById('Dferencial').checked = false;
            })
            $('#Instantaneo').click(function() {
                document.getElementById('Temporizado').checked = false;
            })
            $('#Temporizado').click(function() {
                document.getElementById('Instantaneo').checked = false;
            })
            if (nztapada == true) {
                document.getElementById('nzlavada').checked = false;
            }

            $('#validarfalla').click(function() {
                
                var nztapada = document.getElementById('nztapada').checked;
                var nzlavada = document.getElementById('nzlavada').checked;
                var ins = document.getElementById('ins').checked;
                var temp = document.getElementById('temp').checked;
                var timemin = document.getElementById('timemin').value;
                var fa = document.getElementById('fa').checked;
                var Dferencial = document.getElementById('Dferencial').checked;
                var empaquetamiento = document.getElementById('empaquetamiento').checked;
                var Instantaneo = document.getElementById('Instantaneo').checked;
                var Temporizado = document.getElementById('Temporizado').checked;
                var timemin2 = document.getElementById('timemin2').value;
                var fa2 = document.getElementById('fa2').checked;
                var canti_dad = document.getElementById('canti_dad').value;
                if (nztapada == true) {nztapada = 1;}
                if (nztapada == false) {nztapada = 0;}
                if (nzlavada == true) { nzlavada = 1;}
                if (nzlavada == false) {nzlavada = 0;}
                if (ins == true) { ins = 1;}
                if (ins == false) {ins = 0;}
                if (temp == true) { temp = 1;}
                if (temp == false) {temp = 0;}
                if (fa == true) {fa = 1; }
                if (fa == false) { fa = 0; }
                if (Dferencial == true) {Dferencial = 1;}
                if (Dferencial == false) { Dferencial = 0;}
                if (empaquetamiento == true) { empaquetamiento = 1; }
                if (empaquetamiento == false) {empaquetamiento = 0;}
                if (Instantaneo == true) { Instantaneo = 1; }
                if (Instantaneo == false) {Instantaneo = 0; }
                if (Temporizado == true) { Temporizado = 1;}
                if (Temporizado == false) { Temporizado = 0; }
                if (fa2 == true) {  fa2 = 1; }
                if (fa2 == false) { fa2 = 0;}
                if (ins == 1) {
                    $.ajax({
                        url: "index_modulo/fallas.php",
                        data: {
                            nztapada: nztapada,
                            nzlavada: nzlavada,
                            ins: ins,
                            temp: temp,
                            timemin: timemin,
                            canti_dad: canti_dad,
                            fa: fa,
                            Dferencial: Dferencial,
                            empaquetamiento: empaquetamiento,
                            Instantaneo: Instantaneo,
                            Temporizado: Temporizado,
                            timemin2: timemin2,
                            fa2: fa2
                        },
                        type: "POST",
                        success: function(datos) {
                        }
                    })
                }
                var calculo_timemin = timemin * 60000;
                if (temp == 1) {

                    Swal.fire({
                            position: 'bottom-end',
                            icon: 'info',
                            title: 'Update in process',
                            showConfirmButton: false,
                            timer: 1000
                            })    

                    setTimeout(function() {
                        $.ajax({
                            url: "index_modulo/fallas.php",
                            data: {
                                nztapada: nztapada,
                                nzlavada: nzlavada,
                                ins: ins,
                                temp: temp,
                                timemin: timemin,
                                canti_dad: canti_dad,
                                fa: fa,
                                Dferencial: Dferencial,
                                empaquetamiento: empaquetamiento,
                                Instantaneo: Instantaneo,
                                Temporizado: Temporizado,
                                timemin2: timemin2,
                                fa2: fa2
                            },
                            type: "POST",
                            success: function(datos) {
                                // Implementar sweet alert
                            }
                        })
                    }, calculo_timemin);
                }

            })
 </script>