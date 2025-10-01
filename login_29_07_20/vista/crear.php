<?php  
//item para crear pozo  
session_start();
error_reporting(0);
$usuval=$_SESSION['username'];
?>
<?php
include('../vista/template.php');
include('../vista/menu_esp.php');
?>
<form action="#" method="POST"  class="" > 
  <table >
    <tr>
      <td>
        <a href="inicio.php" class="actionsis">Editar</a>
      </td>
      <td>
        <a href="eliminar.php" class="actionsis">Eliminar</a>
      </td>
    </tr>
  </table>
</form>
<h1>Crear Pozo</h1>
<div class="container">
  <form action="#" method="POST">
      <div class="row">
         <div class="col-25">
           <label for="fname" class="rr">Nombre de el pozo</label>
         </div>
         <div class="col-75">
            <input type="text" id="fname" name="nob_pozo" class="rrt" placeholder="name..">
         </div>
     </div>
     <div class="row">
         <input type="submit" style="border:1px solid black;" class="actionsis" name="crear_p" value="Crear">
     </div>
     <br>
   </form>
</div>
 <h1>Pozos actuales</h1>
<table class="table">
   <tr>
     <th>Pozo</th>
     <?php 
        include('../conexion.php');   
        if (isset($_POST['crear_p'])) {
           $pozo_consul=$_POST['nob_pozo'];

          $verificarpozo=mysqli_query($conexion,"SELECT * FROM `drillingrig` WHERE `Usuario`='$usuval' AND`pozo`='$pozo_consul' ");

           if (mysqli_num_rows($verificarpozo)>0|| $pozo_consul=="Defaull"||$pozo_consul==""||$pozo_consul==null) {
             ?>
<h1 class="eliminar">THE CONSULTED WELL ALREADY EXISTS OR THE FIELD IS EMPTY OR I TRY TO CREATE THE WELL WITH THE NAME "Defaull"</h1>
          <?php 

           }else{

           $result_well=mysqli_query($conexion,"CALL CrearPozo(1,0, 'Factory','Defaull', '', '', '', '', '', '', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '$usuval', '$pozo_consul', 0, 0)");
/* 
           $result_well2=mysqli_query($conexion,"CALL CrearPozo(2,0, 'Factory','Defaull', '', '', '', '', '', '', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '$usuval', '$pozo_consul', 0, 0)");

           $result_well3=mysqli_query($conexion,"CALL Crearsetupvar_process(1,0,'Factory','Defaull','', '','', '', '', '', '', '', '', '', '$usuval', '$pozo_consul', 0, 0)"); */

           $conexion2=mysqli_connect("localhost","root","","simulador");
           $result_bit=mysqli_query($conexion2,"CALL `CrearBit`(1,0,'Factory','Defaull','','','','','','','','','','','','','','','','','','','','', '$usuval', '$pozo_consul',0)");

           $conexion3=mysqli_connect("localhost","root","","simulador");
           $result_const=mysqli_query($conexion3," CALL `CrearVar_constantes`(1,'', 'Factory', 'Defaull','','','','','','', '$usuval','$pozo_consul',0)");
           
           $conexion4=mysqli_connect("localhost","root","","simulador");
           $result_fallas=mysqli_query($conexion4,"CALL `CrearFallas`(1,'', '', 'Factory', 'Defaull','','','','','','','', '$usuval', '$pozo_consul',0,0)");
           
           $conexion5=mysqli_connect("localhost","root","","simulador");
           $result_hardware=mysqli_query($conexion5," CALL `CrearhardwareTD`(1, '', 'Factory','Defaull', '', '', '', '', '', '','$usuval', '$pozo_consul',0,0)");
           
           $conexion6=mysqli_connect("localhost","root","","simulador");
           $result_setup=mysqli_query($conexion6,"CALL `Crearsetupvar_rt`(1,'', 'Factory', 'Defaull','','','','','','', '$usuval','$pozo_consul',0,0)");
           
           $conexion7=mysqli_connect("localhost","root","","simulador");
           $result_var=mysqli_query($conexion7," CALL `Crearva_rt`(1,'', 'Factory', 'Defaull','','','','','','', '$usuval','$pozo_consul',0,0)");
         }
         ?>
           <script >
           alert('el pozo se croeo con exito con el nombre de <?php echo $pozo_consul; ?> ');
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