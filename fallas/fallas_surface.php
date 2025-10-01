

<?php
 
/*  <!-- ARCHIVO QUE CONTIENE LA ESTRUCTURA DE TODAS LAS FALLAS SURFACE --> */

$queryconsul5=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='ApagadoParcial' AND  componente='PUMPNo1'");
$res5=mysqli_fetch_array($queryconsul5);
   $apagadoParcial=$res5['val1'];
   $Tiempo5=$res5['Tiempo'];
   $instantaneo5=$res5['Instantaneo'];
   $Temorizado5=$res5['Temorizado'];
   $FallaAct5=$res5['FallaAct'];

$queryconsul6=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Apagado Total' AND  componente='PUMPNo1'");
$res6=mysqli_fetch_array($queryconsul6);
   $apagadototal=$res6['val1'];
   $Tiempo6=$res6['Tiempo'];
   $instantaneo6=$res6['Instantaneo'];
   $Temorizado6=$res6['Temorizado'];
   $FallaAct6=$res6['FallaAct'];


 ?>
            <table style="background-color:#0CC5C8;position: absolute;left:130px;top:108px">
                <tr>
                    <td>
                        <label>Pump 1</label>
                    </td>
                </tr>
 <?php if ( $apagadoParcial==1) { ?>
                <tr>
                    <td> <input type="checkbox" name="apaga" id="apaga" checked>
                        <label>partial shutdown</label>
                    </td>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="apagatotal" id="apagatotal">
                        <label>total shutdown</label>
                    </td>
                </tr>

                </tr>

                <tr>
                    <td>
                        <label>Time Mode</label>
                    </td>

                </tr>

                </tr>
                <?php if ($instantaneo5==1) {?>
                <tr>
                    <td> <input type="checkbox" name="insta" id="insta" checked>
                        <label>Instant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temporalz" id="temporalz">
                        <label>Temporizado</label>
                    </td>

                </tr>
                <?php } ?>



                <?php if ($Temorizado5==1) {?>
                <tr>
                    <td> <input type="checkbox" name="insta" id="insta">
                        <label>Instant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temporalz" id="temporalz" checked>
                        <label>Temporizado</label> 
                    </td>

                </tr>
                <?php } ?> 


                <?php if ($instantaneo5==0 AND $Temorizado5==0 ) {?>
                <tr>
                    <td> <input type="checkbox" name="insta" id="insta">
                        <label>Instant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temporalz" id="temporalz">
                        <label>Temporizado</label>
                    </td>

                </tr>
                <?php } ?>
                </tr>
                <tr>
                    <td>
                        <label>Time(minut)</label>

                        <select name="timetre" id="timetre" style="width:70px;">
                            <option selected><?php echo $Tiempo5 ?></option>
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
                </tr>
                <?php if ($FallaAct5==1) { ?>
                <tr>
                    <td> <input type="checkbox" name="fallatre" id="fallatre" checked>
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php }else{?>
                <tr>
                    <td> <input type="checkbox" name="fallatre" id="fallatre">
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php } ?>
                <?php } ?>
                
                
    <?php if($apagadototal==1) { ?>
                <tr>
                    <td> <input type="checkbox" name="apaga" id="apaga">
                        <label>partial shutdown</label>
                    </td>
                </tr>
                <tr>
                    <td> <input type="checkbox" name="apagatotal" id="apagatotal" checked>
                        <label>total shutdown</label>
                    </td>
                </tr>

                </tr>

                <tr>
                    <td>
                        <label>Time Mode</label>
                    </td>

                </tr>

                </tr>
             <?php if($instantaneo6==1){?>
                <tr>
                    <td> <input type="checkbox" name="insta" id="insta" checked>
                        <label>Instant</label>
                    </td>

                </tr>

                <tr>
                
                    <td> <input type="checkbox" name="temporalz" id="temporalz">
                        <label>Temporizado</label>
                    </td>

                </tr>
                <?php } ?>
                <?php if($Temorizado6==1){?>
                <tr>
                    <td> <input type="checkbox" name="insta" id="insta">
                        <label>Instant</label>
                    </td>

                </tr>
                <?php if($instantaneo6==0 AND $Temorizado6==0){?>
                <tr>
                    <td> <input type="checkbox" name="insta" id="insta">
                        <label>Instant</label>
                    </td>

                </tr>
                <tr>
                    <td> <input type="checkbox" name="temporalz" id="temporalz">
                        <label>Temporizado</label>
                    </td>

                </tr>
                <?php } ?>
                <tr>
                    <td> <input type="checkbox" name="temporalz" id="temporalz" checked>
                        <label>Temporizado</label>
                    </td>

                </tr>
                <?php } ?>
                
                
                
                <?php if ($instantaneo6==0 AND $Temorizado6==0) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="insta" id="insta">
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="temporalz" id="temporalz">
                        <label>Temporizado</label>
                    </td>
                </tr>
                <?php } ?>
                
                
                

                </tr>

                <tr>
                    <td>
                        <label>Time(minut)</label>

                        <select name="timetre" id="timetre" style="width:70px;">
                            <option selected><?php echo $Tiempo6 ?></option>
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
                </tr>
                <?php if ($FallaAct6==1) { ?>
                <tr>
                    <td> <input type="checkbox" name="fallatre" id="fallatre" checked>
                        <label>Failure Actv</label>
                    </td>

                </tr>
                <?php }else{?>
                <tr>
                    <td> <input type="checkbox" name="fallatre" id="fallatre">
                        <label>Failure Actv</label>
                    </td>

                </tr>
                <?php } ?>
                <?php } ?>
                <!-- si estan vacios-->
                <?php if ( $apagadototal==0 AND $apagadoParcial==0) { ?>
                <tr>
                    <td>
                        <input type="checkbox" name="apaga" id="apaga">
                        <label>partial shutdown</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="apagatotal" id="apagatotal">
                        <label>total shutdown</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Time Mode</label>
                    </td>
                </tr>
                <?php if ($instantaneo6==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="insta" id="insta" checked>
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="temporalz" id="temporalz">
                        <label>Temporizado</label>
                    </td>
                </tr>
                <?php }if ($Temorizado6==1) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="insta" id="insta">
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="temporalz" id="temporalz" checked>
                        <label>Temporizado</label>
                    </td>
                </tr>
                <?php } ?>
                <?php if ($instantaneo6==0 AND $Temorizado6==0) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="insta" id="insta">
                        <label>Instant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="temporalz" id="temporalz">
                        <label>Temporizado</label>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td>
                        <label>Time(minut)</label>
                        <select name="timetre" id="timetre" style="width:70px;">
                            <option selected><?php echo $Tiempo6 ?></option>
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
                <?php if ($FallaAct6==1){?>
                <tr>
                    <td>
                        <input type="checkbox" name="fallatre" id="fallatre" checked>
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php }else{?>
                <tr>
                    <td>
                        <input type="checkbox" name="fallatre" id="fallatre">
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php } ?>
                <?php } ?>

            </table>

            <?php   


$queryconsul7=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='ApagadoParcial' AND  componente='PUMPNo2'");
$res7=mysqli_fetch_array($queryconsul7);
   $apagadoParcial7=$res7['val1'];
   $Tiempo7=$res7['Tiempo'];
   $instantaneo7=$res7['Instantaneo'];
   $Temorizado7=$res7['Temorizado'];
   $FallaAct7=$res7['FallaAct'];
$queryconsul8=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Apagado Total' AND  componente='PUMPNo2'");
$res8=mysqli_fetch_array($queryconsul8);
   $apagadototal8=$res8['val1'];
   $Tiempo8=$res8['Tiempo'];
   $instantaneo8=$res8['Instantaneo'];
   $Temorizado8=$res8['Temorizado'];
   $FallaAct8=$res8['FallaAct'];
 ?>
<!--========================================================================================================================================-->
<!--================================================falla pump 2=======================================================================-->
            <table style="background-color:#0CC5C8;position: absolute;left:300px;top:108px">
            
                <tr>
                    <td>
                        <label>Pump 2</label>
                    </td>
                </tr>
                <?php  if ( $apagadoParcial7==1) { ?>
                <tr>
                    <td> <input type="checkbox" name="apagadop2" id="apagadop2" checked>
                        <label>partial shutdown</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="apagatotap2" id="apagatotap2">
                        <label>total shutdown</label>
                    </td>

                </tr>

                </tr>

                <tr>
                    <td>
                        <label>Time Mode</label>
                    </td>

                </tr>
                <?php if ($instantaneo7==1) {?>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="ins4" id="ins4" checked>
                        <label>Instantant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp4" id="temp4">
                        <label>Timed</label>
                    </td>

                </tr>

                <?php  } ?>


                <?php if ($Temorizado7==1) {?>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="ins4" id="ins4">
                        <label>instant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp4" id="temp4" checked>
                        <label>Timed</label>
                    </td>

                </tr>

                <?php  } ?>


                <?php if ($Temorizado7==0 AND $instantaneo7==0) {?>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="ins4" id="ins4">
                        <label>Instantant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp4" id="temp4">
                        <label>Timed</label>
                    </td>

                </tr>

                <?php  } ?>

                </tr>

                <tr>
                    <td>
                        <label>Time(minut)</label>
                        <select name="timemin3" id="timemin3" style="width:70px;">
                            <option selected><?php echo $Tiempo7 ?></option>
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
                </tr>

                </tr>
                <?php  if ($FallaAct7==1) { ?>
                <tr>
                    <td> <input type="checkbox" name="falla3" id="falla3" checked>
                        <label>Failure Actv</label>
                    </td>

                </tr>
                <?php }
             if ($FallaAct7==0) {
             ?>
                <tr>
                    <td> <input type="checkbox" name="falla3" id="falla3">
                        <label>Failure Actv</label>
                    </td>

                </tr>

                <?php } ?>

                <?php } ?>
                <?php  if ( $apagadototal8==1) { ?>
                <tr>
                    <td> <input type="checkbox" name="apagadop2" id="apagadop2">
                        <label>partial shutdown</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="apagatotap2" id="apagatotap2" checked>
                        <label>total shutdown</label>
                    </td>

                </tr>

                </tr>

                <tr>
                    <td>
                        <label>Time Mode</label>
                    </td>

                </tr>

                <?php if ($instantaneo8==1) {?>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="ins4" id="ins4" checked>
                        <label>Instantant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp4" id="temp4">
                        <label>Timed</label>
                    </td>

                </tr>

                <?php  } ?>


                <?php if ($Temorizado8==1) {?>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="ins4" id="ins4">
                        <label>Instantant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp4" id="temp4" checked>
                        <label>Timed</label>
                    </td>

                </tr>

                <?php  } ?>


                <?php if ($Temorizado8==0 AND $instantaneo8==0) {?>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="ins4" id="ins4">
                        <label>Instantant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp4" id="temp4">
                        <label>Timed</label>
                    </td>

                </tr>

                <?php  } ?>

                </tr>

                <tr>
                    <td>
                        <label>Time(minut)</label>
                           <select name="timemin3" id="timemin3" style="width:70px;">
                            <option selected><?php echo $Tiempo7 ?></option>
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

                </tr>
                <?php  if ($FallaAct8==1) { ?>
                <tr>
                    <td> <input type="checkbox" name="falla3" id="falla3" checked>
                        <label>Failure Actv</label>
                    </td>

                </tr>
                <?php }
             if ($FallaAct8==0) {
             ?>
                <tr>
                    <td> <input type="checkbox" name="falla3" id="falla3">
                        <label>Failure Actv</label>
                    </td>

                </tr>

                <?php } ?>

                <?php } ?>


                <!--si estan vacios -->
                <?php  if ( $apagadototal8==0 AND $apagadoParcial7==0) { ?>
                <tr>
                    <td> <input type="checkbox" name="apagadop2" id="apagadop2">
                        <label>partial shutdown</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="apagatotap2" id="apagatotap2">
                        <label>total shutdown</label>
                    </td>

                </tr>

                </tr>

                <tr>
                    <td>
                        <label>Time Mode</label>
                    </td>

                </tr>

                <?php if ($instantaneo8==1) {?>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="ins4" id="ins4" checked>
                        <label>Instantant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp4" id="temp4">
                        <label>Timed</label>
                    </td>

                </tr>

                <?php  } ?>


                <?php if ($Temorizado8==1) {?>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="ins4" id="ins4">
                        <label>Instantant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp4" id="temp4" checked>
                        <label>Timed</label>
                    </td>

                </tr>

                <?php  } ?>


                <?php if ($Temorizado8==0 AND $instantaneo8==0) {?>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="ins4" id="ins4">
                        <label>Instantant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp4" id="temp4">
                        <label>Timed</label>
                    </td>

                </tr>

                <?php  } ?>

                </tr>

                <tr>
                    <td>
                        <label>Time(minut)</label>

                        <select name="timemin3" id="timemin3" style="width:70px;">
                            <option selected><?php echo $Tiempo8 ?></option>
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

                </tr>

                </tr>
                <?php  if ($FallaAct8==1) { ?>
                <tr>
                    <td> <input type="checkbox" name="falla3" id="falla3" checked>
                        <label>Failure Actv</label>
                    </td>

                </tr>
                <?php }
             if ($FallaAct8==0) {
             ?>
                <tr>
                    <td> <input type="checkbox" name="falla3" id="falla3">
                        <label>Failure Actv</label>
                    </td>

                </tr>

                <?php } ?>

                <?php } ?>



            </table>
<!--========================================================================================================================================-->
<!--==============================================falla  choque ==========================================================================-->
            <?php   

$queryconsul9=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='ChokeTapado'");
$res9=mysqli_fetch_array($queryconsul9);
   $Tapado=$res9['val1'];
   $Choqueno=$res9['var2'];
   $porsent=$res9['var3'];
   $insta=$res9['Instantaneo']; 
   $Temor=$res9['Temorizado'];
   $Tiem=$res9['Tiempo'];
   $fallass=$res9['FallaAct'];

$queryconsul10=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Choke Lavada'");
$res10=mysqli_fetch_array($queryconsul10);
   $Lavada=$res10['val1'];
   $Choqueno2=$res10['var2'];
   $porsent2=$res10['var3'];
   $insta2=$res10['Instantaneo']; 
   $Temor2=$res10['Temorizado'];
   $Tiem2=$res10['Tiempo'];
   $fallass2=$res10['FallaAct'];

 ?>

            <table style="background-color:#0CC5C8;position: absolute;left:130px;top:308px">
                <tr>
                    <td>
                        <label>Choke</label>
                    </td>
                </tr>
                <?php if ($Tapado==1) { ?>
                <tr>
                    <td>
                        <input type="checkbox" name="cht" id="cht" checked>
                        <label>Choke tapada</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chl" id="chl">
                        <label>Choke washed</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Choque No</label>
                        <input type="text" name="choqueno" id="choqueno" value="<?php echo $Choqueno ?>"
                            style="width:70px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>porcent</label>
                        <input type="text" name="porcentge" id="porcentge" value="<?php echo $porsent ?>"
                            style="width:70px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Time Mode</label>
                    </td>
                </tr>
                <?php   if ($insta==1 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins5" id="ins5" checked>
                        <label>Instantant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="temp5" id="temp5">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <?php   if ($Temor==1 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins5" id="ins5">
                        <label>Instantant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="temp5" id="temp5" checked>
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <?php   if ($Temor==0 AND $insta==0 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins5" id="ins5">
                        <label>Instantant</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="temp5" id="temp5">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <tr>
                    <td>
                        <label>Time(minut)</label>

                        <select name="timemin4" id="timemin4" style="width:70px;">
                            <option selected><?php echo $Tiem ?></option>
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
                <?php     if ($fallass==1 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="fallault" id="fallault" checked>
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php } ?>
                <?php     if ($fallass==0 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="fallault" id="fallault">
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php } ?>
                <?php } ?>
                <!--2-->
                <!--2-->
                <!--2-->
                <!--2-->
                <!--2-->
                <?php if ($Lavada==1) { ?>
                <tr>
                    <td>
                        <input type="checkbox" name="cht" id="cht">
                        <label>Choke tapada</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chl" id="chl" checked>
                        <label>Choke washed</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Choque No</label>
                        <input type="text" name="choqueno" id="choqueno" value="<?php echo $Choqueno2 ?>"
                            style="width:70px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>porcent</label>
                        <input type="text" name="porcentge" id="porcentge" value="<?php echo $porsent2 ?>"
                            style="width:70px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Time Mode</label>
                    </td>
                </tr>
                <?php   if ($insta2==1 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins5" id="ins5" checked>
                        <label>Instantant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="temp5" id="temp5">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <?php   if ($Temor2==1 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins5" id="ins5">
                        <label>Instantant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="temp5" id="temp5" checked>
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <?php   if ($Temor2==0 AND $insta2==0 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins5" id="ins5">
                        <label>Instantant</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="temp5" id="temp5">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <tr>
                    <td>
                        <label>Time(minut)</label>
                       

                        <select name="timemin4" id="timemin4" style="width:70px;">
                            <option selected><?php echo $Tiem2 ?></option>
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
                <?php     if ($fallass2==1 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="fallault" id="fallault" checked>
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php } ?>
                <?php     if ($fallass2==0 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="fallault" id="fallault">
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php } ?>
                <?php } ?>


                <!-- si estan vacios -->
                <!-- si estan vacios -->
                <!-- si estan vacios -->
                <!-- si estan vacios -->

                <?php if ($Lavada==0 AND $Tapado==0) { ?>
                <tr>
                    <td>
                        <input type="checkbox" name="cht" id="cht">
                        <label>Choke tapada</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chl" id="chl">
                        <label>Choke washed</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Choque No</label>
                        <input type="text" name="choqueno" id="choqueno" value="<?php echo $Choqueno ?>"
                            style="width:70px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>porcent</label>
                        <input type="text" name="porcentge" id="porcentge" value="<?php echo $porsent ?>"
                            style="width:70px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Time Mode</label>
                    </td>
                </tr>
                <?php   if ($insta==1 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins5" id="ins5" checked>
                        <label>Instantant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="temp5" id="temp5">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <?php   if ($Temor==1 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins5" id="ins5">
                        <label>Instantant</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="temp5" id="temp5" checked>
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <?php   if ($Temor==0 AND $insta==0 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="ins5" id="ins5">
                        <label>Instantant</label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="temp5" id="temp5">
                        <label>Timed</label>
                    </td>
                </tr>
                <?php   } ?>
                <tr>
                    <td>
                        <label>Time(minut)</label>
                        <select name="timemin4" id="timemin4" style="width:70px;">
                            <option selected><?php echo $Tiem ?></option>
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
                <?php     if ($fallass==1 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="fallault" id="fallault" checked>
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php } ?>
                <?php     if ($fallass==0 ) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="fallault" id="fallault">
                        <label>Failure Actv</label>
                    </td>
                </tr>
                <?php } ?>
                <?php } ?>
            </table>
<!--========================================================================================================================================-->
<!--==================================================== falla   bop=============================================================================-->

            <table style="background-color:#0CC5C8;position: absolute;left:300px;top:308px">
                <tr>
                    <td>
                        <label>BOP</label>
                    </td>
                </tr>
                <?php   
$queryconsul9=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Goteo'");
$res9=mysqli_fetch_array($queryconsul9);
   $goteo=$res9['val1'];
   $Choqueno=$res9['var2'];
   $porsenta=$res9['var3'];
   $insta=$res9['Instantaneo']; 
   $Temor=$res9['Temorizado'];
   $Tiem=$res9['Tiempo'];
   $fallass=$res9['FallaAct'];


 ?> <?php  
if ($goteo==1) {?>
                <tr>
                    <td> <input type="checkbox" name="goteo" id="goteo" checked>
                        <label>Drip</label>
                    </td>
                </tr>
                <tr>
                    <?php    } ?>



                    <?php  
if ($goteo==0) {?>
                <tr>
                    <td>
                        <input type="checkbox" name="goteo" id="goteo">
                        <label>Drip</label>
                    </td>
                </tr>
                <tr>
                    <?php    } ?>



                    <td>
                        <label>porcent</label>
                        <input type="text" name="porcent" id="porcent" value="<?php echo $porsenta ?>"
                            style="width:70px;">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Time Mode</label>
                    </td>

                </tr>

                </tr>
                <?php   if ($insta==1) {?>
                <tr>
                    <td> <input type="checkbox" name="ins6" id="ins6" checked>
                        <label>Instantant</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp6" id="temp6">
                        <label>Timed</label>
                    </td>

                </tr>
                </tr>
                <?php  } ?>


                <?php   if ($Temor==1) {?>
                <tr>
                    <td> <input type="checkbox" name="ins6" id="ins6">
                        <label>Instantaneo</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp6" id="temp6" checked>
                        <label>Timed</label>
                    </td>

                </tr>
                </tr>
                <?php  } ?>

                <?php   if ($Temor==0 AND $insta==0) {?>
                <tr>
                    <td> <input type="checkbox" name="ins6" id="ins6">
                        <label>Instantaneo</label>
                    </td>

                </tr>

                <tr>
                    <td> <input type="checkbox" name="temp6" id="temp6">
                        <label>Timed</label>
                    </td>

                </tr>
                </tr>
                <?php  } ?>

                <tr>
                    <td>
                        <label>Time(minut)</label>
                        <select name="timemin5" id="timemin5" style="width:70px;">
                            <option selected><?php echo $Tiem ?></option>
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

                </tr>

                <?php  if ($fallass==1) { ?>
                <tr>
                    <td> <input type="checkbox" name="fallaultimate" id="fallaultimate" checked>
                        <label>Failure Actv</label>
                    </td>

                </tr>
                <?php   } ?>
                <?php  if ($fallass==0) { ?>
                <tr>
                    <td> <input type="checkbox" name="fallaultimate" id="fallaultimate">
                        <label>Failure Actv</label>
                    </td>

                </tr>
                <?php   } ?>
            </table>

            <input type="submit" name="validarfalla2" id="validarfalla2" value="SAVE"
                style="position:absolute;top:550px;left:230px;width:100px;height:50px;background-color:#36B5E5;border:10px solid #A3A0B9 ; font-size:1.2em;font-weight:bold;font-color:#ffffff;">



            <script type="text/javascript" src="fallas/fallas.js"></script>
