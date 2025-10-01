<div class="sidenav">


<select class="idiomas" name="idioma" onchange="location=this.value"> 
<option>Idioma/Language</option>
<option value="inicio.php">Español/Spanish</option>
<option value="inicio_in.php">Ingles/English</option> 
</select> 






<img  class="logousu"  src="../imagenes/index/foto_usu.png">

<h3 style="position:absolute;top:230px;left:10px;font-size:24px; color:white;"><?php echo $_SESSION['username'];  ?></h3>

  
  <a href="../vista/inicio_in.php">Start</a>
  <a href="../vista/update_data.php">Update data </a>
  <a href="../vista/edit_usuario.php">Create and edit user</a>



<div class="containerlog">
<p class="btnexit"><a  href="../model/salir.php">Close session</a></p>	

<img  class="logo" src="../imagenes/index/LOGO_LATERAL.png">



</div>

</div>
    
<div class="content">
<img  class="logsup" src="../imagenes/index/LOGO_LATERAL.png">
