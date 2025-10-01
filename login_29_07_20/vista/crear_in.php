<?php   
session_start();
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];  
include('../conexion.php');   

include('template.php');
include('menu_in.php');
?>
<form action="#" method="POST"  class="" > 
  <table >
    <tr>
      <td>
        <a href="inicio_in.php" class="actionsis" style="background-image: url('../imagenes/index/EDIT.jpg');"></a>
      </td>
      <td>
        <a href="eliminar_in.php" class="actionsis"  style="background-image: url('../imagenes/index/DELETE.jpg');"></a>
      </td>
    </tr>
  </table>
</form>
<h1>Create Well</h1>
<div class="container">
  <form action="#" method="POST">
      <div class="row">
         <div class="col-25">
           <label for="fname" class="rr">Name of the well</label>
         </div>
         <div class="col-75">
            <input type="text" id="fname" name="nob_pozo" class="rrt" placeholder="name..">
         </div>
     </div>
     <div class="row">
         <input type="submit"  class="actionsis" name="crear_p" style="background-image: url('../imagenes/index/CREATE.jpg');border:1px solid black;" value="">
     </div>
     <br>
   </form>
</div>
 <h1>Current Wells</h1>
<table class="table">
   <tr>
     <th>Well</th>
     <?php 
       
        if (isset($_POST['crear_p'])) {
           $pozo_consul=$_POST['nob_pozo'];

          $verificarpozo=mysqli_query($conexion,"SELECT * FROM `drillingrig` WHERE `Usuario`='$usuval' AND`pozo`='$pozo_consul' ");

           if (mysqli_num_rows($verificarpozo)>0|| $pozo_consul=="Defaull"||$pozo_consul==""||$pozo_consul==null) {
             ?>
<h1 class="eliminar">THE CONSULTED WELL ALREADY EXISTS OR THE FIELD IS EMPTY OR I TRY TO CREATE THE WELL WITH THE NAME "Defaull"</h1>
          <?php 

           }else{

           $result_well=mysqli_query($conexion,"CALL CrearPozo(1,0, 'Factory','Defaull', '', '', '', '', '', '', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '$usuval', '$pozo_consul', 0, 0)");

           $result_well2=mysqli_query($conexion,"CALL CrearPozoSetup(1,0, 'Factory','Defaull', '', '', '', '', '', '', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '$usuval', '$pozo_consul', 0, 0)");

           $result_well3=mysqli_query($conexion,"CALL CrearSetupProcess(1,0,'Factory','Defaull', '','','','','','', '', '', '', '', '$usuval','$pozo_consul', 0, 0)");

           $result_well4=mysqli_query($conexion,"CALL CrearProcess(1,0,'Factory','Defaull', '','','','','','', '', '', '', '', '$usuval','$pozo_consul', 0, 0);");

           $conexion2=mysqli_connect("localhost","root","","simulador");
           $result_bit=mysqli_query($conexion2,"CALL `CrearBit`(1,0,'Factory','Defaull' , '','','','','','','','','','','','','','','','','','','','', '$usuval', '$pozo_consul',0)");

           $conexion3=mysqli_connect("localhost","root","","simulador");
           $result_const=mysqli_query($conexion3," CALL `CrearVar_constantes`(1,'','Factory', 'Defaull','','','','','','', '$usuval','$pozo_consul',0)");

           $conexionSv=mysqli_connect("localhost","root","","simulador");
           $result_constsv=mysqli_query($conexionSv," CALL `CrearSetupVar_constantes`(1,'','Factory', 'Defaull','','','','','','', '$usuval','$pozo_consul',0)");
           
           $conexion4=mysqli_connect("localhost","root","","simulador");
           $result_fallas=mysqli_query($conexion4,"CALL `CrearFallas`(1,'', '', 'Factory', 'Defaull','','','','','','','','','','', '$usuval', '$pozo_consul',0,0)");
           
           $conexion5=mysqli_connect("localhost","root","","simulador");
           $result_hardware=mysqli_query($conexion5," CALL `CrearhardwareTD`(1, '', 'Factory','Defaull', '', '', '', '', '', '','$usuval', '$pozo_consul',0,0)");
           
           $conexion6=mysqli_connect("localhost","root","","simulador");
           $result_setup=mysqli_query($conexion6,"CALL `Crearsetupvar_rt`(1,'', 'Factory', 'Defaull','','','','','','', '$usuval','$pozo_consul',0,0)");
           
           $conexion7=mysqli_connect("localhost","root","","simulador");
           $result_var=mysqli_query($conexion7," CALL `Crearva_rt`(1,'', 'Factory', 'Defaull','','','','','','', '$usuval','$pozo_consul',0,0)");
         }
         ?>
           <script >
           alert('The well was successfully created under the name of <?php echo $pozo_consul; ?> ');
           </script>
    <?php }
           $query ="SELECT Pozo FROM drillingrig WHERE Usuario='Factory' OR Usuario='$usuval' GROUP BY Pozo ";
           $crear_tablas=mysqli_query($conexion,$query);
           while ($row_well=mysqli_fetch_array($crear_tablas)) {
                 $pozo = $row_well['Pozo'];
          ?>
     </tr>
     <tr>
        <td><?php   echo $pozo; ?></td>
  <?php  }   ?>
     </tr>
     <tr>
</table>
</div>