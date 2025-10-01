
<?php



session_start();
include('../conexion.php');

$usuval=$_SESSION['username'];
$idusu=$_SESSION['idusuario'];
	

error_reporting('0');	         
$codigo_rol=$_SESSION['idusuario'];
/* $buscar_codigo=mysqli_query($conexion,"SELECT * FROM `roles` WHERE `codigo`='$idusu'");
$resul_codigo=mysqli_num_rows($buscar_codigo); */
/* if ($resul_codigo > 0) {
	$rol_perforador = $_POST['rol_perforador'];
	$rol_bop_remoto = $_POST['rol_bop_remoto'];
	$rol_choque_remoto = $_POST['rol_choque_remoto'];
	$rol_instructor = $_POST['rol_instructor'];
	$rol_visitante = $_POST['rol_visitante'];



		$actualizar_rol = mysqli_query($conexion,"UPDATE `roles` SET `rol_perforador`='$rol_perforador' ,`rol_bop_remoto`='$rol_bop_remoto',`rol_choque_remoto`='$rol_choque_remoto' ,`rol_instructor`='$rol_instructor' ,`rol_visitante`='$rol_visitante'  WHERE codigo='$idusu'");

		if ($rol_perforador==1) {
				}
		if ($rol_bop_remoto==1) {
		
		}
		if ($rol_choque_remoto==1) {
				}
		if ($rol_instructor==1) {
				}
		if ($rol_visitante==1) {
				}
		if ($rol_perforador==0 && $rol_bop_remoto==0 && $rol_choque_remoto==0 && $rol_instructor==0 && $rol_visitante==0 ) {
		$rol_visitante=1;
				$actualizar_rol = mysqli_query($conexion,"UPDATE `roles` SET `rol_perforador`='$rol_perforador' ,`rol_bop_remoto`='$rol_bop_remoto',`rol_choque_remoto`='$rol_choque_remoto' ,`rol_instructor`='$rol_instructor' ,`rol_visitante`='$rol_visitante'  WHERE codigo='$idusu'");

		} */
		$_SESSION['codigo_rol']=$codigo_rol;
	
		header('location:inicio_in.php');
/* 		}
		
	else {
		echo 'usted no es un visitante el codigo no existe ';
	} */
           
/* else{

	echo 'No ha ingresado el codigo';
// 	$mostrar_perforador = mysqli_query($conexion,"SELECT rol FROM `roles` WHERE `nombre`='francisco' AND  `apellido`='sevilla'");
//    $data = mysqli_fetch_array($mostrar_perforador);       

// 			   $rol = $data['rol'];
		   
        

}
 */

?>"