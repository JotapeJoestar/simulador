<!-- REDIRECCIONES DEL LOGIN -->

<?php   

session_start();
$alert ='';

if (!empty($_SESSION['active'])) 
{
 header('location:login_29_07_20/vista/inicio_in.php');
}else{
if (!empty($_POST)) {

if (empty($_POST['usuario'])|| empty($_POST['pass'])) {

   $alert = 'ingrese su usuario y su clave';

}else{
    include('conexion.php');
    $user=$_POST['usuario'];
    $pass=$_POST['pass'];
    $select="SELECT * FROM usuario WHERE username= '$user' AND  pass_usu='$pass'";
    
    $query = mysqli_query($conexion,$select);
    $result= mysqli_num_rows($query);
    if ($result >0) {

       $data= mysqli_fetch_array($query);     
       $_SESSION['active'] = true;
       $_SESSION['idusuario']               =$data['idusuario'];
       $_SESSION['username']                =$data['username'];
       $_SESSION['time_login']              =$data['time_login'];
       $_SESSION['time_logout']             =$data['time_logout'];
       $_SESSION['documentoid_usu']         =$data['documentoid_usu'];
       $_SESSION['nombre_usu']              =$data['nombre_usu'];
       $_SESSION['apellido_usu']            =$data['apellido_usu'];
       //$_SESSION['correo_usu']              =$data['correo_usu'];
       $_SESSION['celular_usu']             =$data['celular_usu'];
       //$_SESSION['foto_usu']                =$data['foto_usu']; 
       $_SESSION['estado']                  =$data['estado'];


     
      header('location:login_29_07_20/vista/edit_usuario.php');

      mysqli_close($conexion);
    }else{
        ?>
<script>
alert('incorrect user or password');
window.history.go(-2);
</script>
<?php    
session_destroy();
    }
  }
}
}

 ?>