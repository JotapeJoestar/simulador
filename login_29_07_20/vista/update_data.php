
<?php 

session_start();
error_reporting(0);
$usuval=$_SESSION['username'];
if ($usuval==null||$usuval='') {
  echo "Es necesario iniciar sesión/
Login required";
}else{



include('../vista/template.php'); ?>

<?php 
include('../conexion.php');
include('../vista/template.php');
include('../vista/menu_esp.php'); 

$nameusuario=$_SESSION['username'];

$query_data="SELECT idusuario, username, pass_usu, time_login, time_logout, documentoid_usu, nombre_usu, apellido_usu, celular_usu, estado, mail, fecha_inicio, fecha_ven, ciudad_actu, pais_actu FROM usuario WHERE username='$nameusuario'";
$result_query=mysqli_query($conexion,$query_data);
while ($row=mysqli_fetch_assoc($result_query)) {
     $idusuario=             $row['idusuario'];
     $username=              $row['username'];
     $pass_usu=              $row['pass_usu'];
     $time_login=            $row['time_login'];
     $time_logout=           $row['time_logout'];
     $documentoid_usu=       $row['documentoid_usu'];
     $nombre_usu=            $row['nombre_usu'];
     $apellido_usu=          $row['apellido_usu'];
     $celular_usu=           $row['celular_usu'];
     $estado=                $row['estado'];
     $mail=                  $row['mail'];
     $fecha_inicio=          $row['fecha_inicio'];
     $fecha_ven=             $row['fecha_ven'];
     $ciudad_actu=           $row['ciudad_actu'];
     $pais_actu=             $row['pais_actu'];
}

if (isset($_POST['actualizar'])) {
   $usuario=$_POST['nombreusu'];
       $clave=$_POST['clave'];
       $celtel=$_POST['celtel'];
       $mailusu=$_POST['mailusu'];
       $paisa=$_POST['paisa'];
       $ciuda=$_POST['ciuda'];
       
       $savedata=mysqli_query($conexion,"UPDATE usuario SET pass_usu='$clave',celular_usu='$celtel',mail='$mailusu',ciudad_actu='$ciuda',pais_actu='$paisa' WHERE username='$usuario'");
     if ($savedata) {
?>
<script type="text/javascript">
  alert('DATOS ACTUALIZADOS/UPDATED DATA ');
  window.location="../vista/inicio.php";
</script>

<?php 
   }
}
  
 ?>

  <h2>Actualizar datos</h2>
  <p>formulario de actualizacion de datos</p>


<div>
  <form action="#" method="POST"> 
  <div>
      <label for="fname" class="labelform">Nombre de usuario:</label><br>
      <input type="text" id="nombreusu"class="inputform" name="nombreusu"placeholder="Nombre de usuario" value="<?php echo $nameusuario ;?>" readonly=""><br>
      <label for="fname" class="labelform">Clave:</label><br>
      <input type="password" id="clave"   class="inputform" name="clave"    placeholder="Clave"  value="<?php echo $pass_usu; ?>" ><br>  
      <label for="fname" class="labelform">Documento:</label><br>
      <input type="text" id="docuusu" class="inputform" name="docuusu"  placeholder="Documento" value="<?php echo $documentoid_usu; ?>"  readonly=""><br>  
      <label for="fname" class="labelform">Nombres:</label><br>
      <input type="text" id="nombres"class="inputform" name="nombres"placeholder="Nombres"value="<?php echo $nombre_usu;?>"  readonly=""> <br>
      <label for="fname" class="labelform">Apellidos:</label><br>
      <input type="text"id="apellidosu"class="inputform"name="apellidosu"placeholder="Apellidos"value="<?php echo$apellido_usu;?>"  readonly=""><br>
      <label for="fname" class="labelform">Telefono celular:</label><br>
      <input type="text" id="celtel"   class="inputform" name="celtel" placeholder="Telefono celular" value="<?php echo  $celular_usu; ?>"><br>  
  </div>

  <div style="position: absolute;left:700px;top:90px"> 
    
     <label for="fname" class="labelform">Correo electronico:</label><br>
     <input type="text" id="mailusu" class="inputform" name="mailusu"  placeholder="Correo electronico" value="<?php echo $mail;?>"><br> 
     <label for="fname" class="labelform">Pais:</label><br>
     <input type="text" id="paisa"   class="inputform" name="paisa"  placeholder="Pais" value="<?php echo $pais_actu;?>"><br> 
     <label for="fname" class="labelform">Ciudad:</label><br>
     <input type="text" id="ciuda"   class="inputform" name="ciuda" placeholder="Ciudad" value="<?php echo $ciudad_actu;?>"><br>
     <label for="fname" class="labelform">Fecha de inicio:</label><br>
     <input type="text" id="fechai"   class="inputform" name="fechai" placeholder="Fecha de inicio" value="<?php echo $fecha_inicio; ?>"  readonly=""><br>    
     <label for="fname" class="labelform">Fecha de vencimiento:</label><br>
     <input type="text" id="fechav"   class="inputform" name="fechav" placeholder="Fecha de vencimiento" value="<?php echo  $fecha_ven; ?>"  readonly=""><br> 
  </div>
   
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 
<input type="submit"id="actualizar" name="actualizar" class="inputsubmit">
</div>
</form>


<?php include('../vista/fott.php'); 

}?>
