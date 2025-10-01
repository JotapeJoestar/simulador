<?php   
session_start();

$usuval=$_SESSION['username'];

?>



<?php
include('../vista/template.php');
include('../vista/menu_esp.php');
 ?>




<form action="" method="POST"  class="" > 
  <table >
    <tr>
      <td>
  <a href="inicio.php" class="actionsis">Editar</a></td>
  <td>
    <a href="crear.php" class="actionsis">Crear</a>
    </td>
  </tr>
  </table>
</form>




<div class="container">
 <h1>
Eliminar pozo |</h1>
<table class="table">
  <tr>
    <th>Pozo</th>
    <th>Eliminar</th>
   
  </tr>
 

    <?php   
include('../conexion.php');


if (isset($_POST['eliminarp'])) {
  $namepozo=$_POST['pozoe'];
  if ($namepozo=="Defaull") {
  ?>


<h1 class="eliminar">EL POZO POR DEFECTO NO SE PUEDE BORRAR/
THE WELL BY DEFAULT CANNOT BE DELETED</h1>

  <?php 
  }else{

  $query_eli ="CALL dbo_drillingrig(0,'$usuval','$namepozo','','','','','','','','','','','','','','','','','','','','','','','eliminar_pozo')";
  $elimi=mysqli_query($conexion,$query_eli);

   $conexion2=mysqli_connect("localhost","root","","simulador");
  $query_eli2 ="CALL dbo_drillingrig(0,'$usuval','$namepozo','','','','','','','','','','','','','','','','','','','','','','','eliminar_pozo2')";
  $elimi2=mysqli_query($conexion2,$query_eli2);



 $conexion3=mysqli_connect("localhost","root","","simulador");
  $query_eli3 ="CALL dbo_drillingrig(0,'$usuval','$namepozo','','','','','','','','','','','','','','','','','','','','','','','eliminar_pozo3')";
  $elimi3=mysqli_query($conexion3,$query_eli3);



 $conexion4=mysqli_connect("localhost","root","","simulador");
  $query_eli4 ="CALL dbo_drillingrig(0,'$usuval','$namepozo','','','','','','','','','','','','','','','','','','','','','','','eliminar_pozo4')";
  $elimi4=mysqli_query($conexion4,$query_eli4);



 $conexion5=mysqli_connect("localhost","root","","simulador");
  $query_eli5 ="CALL dbo_drillingrig(0,'$usuval','$namepozo','','','','','','','','','','','','','','','','','','','','','','','eliminar_pozo5')";
  $elimi5=mysqli_query($conexion5,$query_eli5);



 $conexion6=mysqli_connect("localhost","root","","simulador");
  $query_eli6 ="CALL dbo_drillingrig(0,'$usuval','$namepozo','','','','','','','','','','','','','','','','','','','','','','','eliminar_pozo6')";
  $elimi6=mysqli_query($conexion6,$query_eli6);


 $conexion7=mysqli_connect("localhost","root","","simulador");
  $query_eli7 ="CALL dbo_drillingrig(0,'$usuval','$namepozo','','','','','','','','','','','','','','','','','','','','','','','eliminar_pozo7')";
  $elimi7=mysqli_query($conexion7,$query_eli7);

}

  ?>
  <script >
    
  alert('datos eliminados');
  
  
  </script>
  
  <?php 
  }
$query ="CALL dbo_drillingrig(0,'$usuval','','','','','','','','','','','','','','','','','','','','','','','','pozo')";
$select_pozo=mysqli_query($conexion,$query);


while ($row_well=mysqli_fetch_array($select_pozo)) {

  $pozo = $row_well['Pozo'];

 ?>
  <tr>
    <form action="#" method="POST">  
  <input type="hidden" name="usernameglobal" id="usernameglobal" value="<?php echo $_SESSION['username']; ?>">
      <td >
        <select name="pozoe">
        <option value="<?php  echo $pozo; ?>"><?php  echo $pozo; ?> </option>
      </select>
  </td>

    <td><input type="submit" name="eliminarp" class="eliminar" value="Eliminar"></td>

 

    </form>
  <?php  } ?>
   
 
    
  </tr>
  
</table>
</div>

