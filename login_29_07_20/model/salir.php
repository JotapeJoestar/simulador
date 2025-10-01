<?php
//archivo para cerrar sesion 
session_start();
session_destroy();
header('location:../vista/index.php');

?>