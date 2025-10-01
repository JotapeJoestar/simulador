<?php 

/* CONEXION A BD

EN ESTA VISTA TENEMOS EL FORMULARIO DE SELECCION DE ROLES (CONTIENE CODIGO JS QUE VALIDA LOS PERMISOS EN BD Y MARCA EN LA VISTA DE USUARIO LOS ROLES)

*/

session_start();
error_reporting(0);
$usuval=$_SESSION['username'];
$_SESSION['pozocon']=$_POST['o_pozo'];
if ($usuval==null||$usuval='') {
echo "Es necesario iniciar sesión/
Login required";
?>
<br>
<br>
<a href="../vista"  style="background:rgb(0,100,150);font-size:75px;">||regresar</a>
<?php  
die();
}else{
include('../vista/template.php');
include('../vista/menu_in.php');
?>

<!--formulario para CONSULTAR datos -->
<body>
  
  <title>roles and permissions</title>
  <h1>roles and permissions|</h1>	
  <h3>Edit roles of <?php echo $_SESSION['username'];  ?></h3>
  <form action="rol_asignado.php" method="POST" style="background-color:white; height:300;width:300px;border-radius:7px;border:1px solid black;">
  <input type="checkbox" id="perforado" name="rol_perforador" value="1" >
  <label for="chek1"> perforador</label><br>
  <input type="checkbox" id="bop" name="rol_bop_remoto" value="1">
  <label for="chek2"> bop remoto</label><br>
  <input type="checkbox" id="choque" name="rol_choque_remoto" value="1">
  <label for="chek3"> choque remoto</label><br>
  <input type="checkbox" id="instructor" name="rol_instructor" value="1">
  <label for="chek4"> instructor</label><br>
  <input type="checkbox" id="visitante" name="rol_visitante" value="1">
  <label for="chek5"> visitante</label><br>
<!--   <input type="text" name="codigo" maxlength="4" required >
  <label for="codigo" > codigo</label><br> -->
  <input type="submit" value="Submit" id="formulario"  style="position:absolute;width:300px;color:white;background-color:blue">
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">

var data_rol = $.ajax({
      type: "POST",
      url: '../vista/consul_rol.php',
      dataType: 'text',
      async: false
    }).responseText;
  js = JSON.parse(data_rol);

  perfo = js[0];
  bop = js[1];
  choque = js[2];
  instruc = js[3];
  visit = js[4]

  perfodata = perfo[0];
  bopdata = bop [0];
  choquedata = choque [0];
  instrucdata = instruc [0];
  visitdata = visit [0];

	var	chek1=document.getElementById('perforado');
	var	chek2=document.getElementById('bop');
	var	chek3=document.getElementById('choque');
	var	chek4=document.getElementById('instructor');
	var	chek5=document.getElementById('visitante');
  

 if (chek1.value==null||chek1.value=='') {
 	chek1.value=0;
 }

  document.getElementById("perforado").disabled = true;
	document.getElementById('bop').disabled = true;
	document.getElementById('choque').disabled = true;
	document.getElementById('instructor').disabled = true;
	document.getElementById('visitante').disabled = true;  
  
 if (perfodata == 1) {
  $("#perforado").prop("checked", true);
}
else {
  $("#perforado").prop("checked", false);
}

if (bopdata == 1) {
  $("#bop").prop("checked", true);
}
else {
  $("#bop").prop("checked", false);
}

if (choquedata == 1) {
  $("#choque").prop("checked", true);
}
else {
  $("#choque").prop("checked", false);
}

if (instrucdata == 1) {
  $("#instructor").prop("checked", true);
}
else {
  $("#instructor").prop("checked", false);
}

if (visitdata == 1) {
  $("#visitante").prop("checked", true);
}
else {
  $("#visitante").prop("checked", false);
}



</script>
</body>
<?php } ?>
<?php include('../vista/fott.php'); ?>

