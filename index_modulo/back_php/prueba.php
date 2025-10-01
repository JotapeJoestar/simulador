
<?php 

/* <!-- ARCHIVO QUE ACTUALIZA LOS VALORES EN BASE DE DATOS DE ACUERDO A LO QUE SE TENGA ACTUALMENTE EN WEB -->
<!-- EJECUTA PROCEDIMIENTOS ALMACENADOS DE ACTUALIZA (CADA UNO SE ENCUENTRA COMENTARIADO EN LA PARTE INFERIOR DEL CODIGO) --> */

/* Crea la conexion de a la base de datos */

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

$cod_usuario=$_SESSION['codigo_rol'];
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
  $usuval="Factory";
}
//variables de displays
// $p1=$_POST['p1'];
// $p2=$_POST['p2'];

// Actualiza rt_Time cada 10 segundos con los datos de Var_rt
if (isset($_POST['time'])) {
  $valorrttime=" CALL `CalTVar_funciones`(102, '$usuval', '$pozo', 0, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12);"; // Inserta un nuevo registro en la tabla var rt cada n segundos.El valor de n segundos esta en la tabla var constante en la variable TimeScan valor_1
  mysqli_query($conexion,$valorrttime);
}

//Actualiza 1) B1 en var_rt, y al cambiar el valor de B1 actualiza 2) SPM TOTAL Y FLOWACT. 3) PLBIT,  SPP 4) VALOR DEL ANULAR ECD
if (isset($_POST['p1'])) {
    $p1=$_POST['p1'];
    $p1data="UPDATE var_rt SET valor1='$p1' WHERE Namevar='SPMB1' AND NombreDB='$pozo'  AND Usuario='$usuval'"; // Actualiza el valor de Bomba1 en var_rt
    mysqli_query($conexion,$p1data);

    //ACTUALIZA SPM TOTAL Y FLOWACT SE COMENTA POR CALCULO DE GANACIA 
    $flujoBombas="CALL `CalTDrillingRig`(25, @p1,'$usuval', '$pozo', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);";  // Calcula el flujo de las bombas 

    mysqli_query($conexion,$flujoBombas);
    // ACTUALIZA EL VALOR PLBIT EN VAR PROCESS, ACTUALIZA  EL VALOR  EL VALOR DE SPP,
    $presion=" CALL `CalTVar_funciones`(101,'$usuval', '$pozo', @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12);"; // Actualiza variables de Hidraulica segun cambios de flujo y presion
    mysqli_query($conexion,$presion);
    //ACTUALIZA  EL VALOR DE SPP
    $valorSpp="CALL `CalTDrillingRig`(26, @p1,'$usuval', '$pozo', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);"; // Calcula el valor de las perdidas de presion
    mysqli_query($conexion,$valorSpp);
    //ACTUALIZA  EL VALOR DEL ANULAR ECD
    $valorEcd="CALL `CalTDrillingRig`(27, @p1,'$usuval', '$pozo', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);"; // Calcula el valor de las perdidas de presion con anular
    mysqli_query($conexion,$valorEcd);
}

//Actualiza 1) B2 en var_rt, y al cambiar el valor de B2 actualiza 2) SPM TOTAL Y FLOWACT. 3) PLBIT,  SPP 4) VALOR DEL ANULAR ECD
if (isset($_POST['p2'])) {
  $p2=$_POST['p2'];
  $p2data="UPDATE var_rt SET valor1='$p2' WHERE  Namevar='SPMB2' AND NombreDB='$pozo'  AND Usuario='$usuval'"; // Actualiza el valor de Bomba2 en var_rt
  mysqli_query($conexion,$p2data);


  //ACTUALIZA SPM TOTAL Y FLOWACT SE COMENTA POR CALCULO DE GANACIA 
 $flujoBombas="CALL `CalTDrillingRig`(25, @p1,'$usuval', '$pozo', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22,@p23, @p24, @p25, @p26);"; // Calcula el flujo de las bombas 


  mysqli_query($conexion,$flujoBombas);
  // ACTUALIZA EL VALOR PLBIT EN VAR PROCESS, ACTUALIZA  EL VALOR  EL VALOR DE SPP,
  $presion=" CALL `CalTVar_funciones`(101,'$usuval', '$pozo', @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12);"; // Actualiza variables de Hidraulica segun cambios de flujo y presion
  mysqli_query($conexion,$presion);
  //ACTUALIZA  EL VALOR DE SPP
  $valorSpp="CALL `CalTDrillingRig`(26, @p1,'$usuval', '$pozo', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);"; // Calcula el valor de las perdidas de presion
  mysqli_query($conexion,$valorSpp);
    //ACTUALIZA  EL VALOR DEL ANULAR ECD
    $valorEcd="CALL `CalTDrillingRig`(27, @p1,'$usuval', '$pozo', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);"; // Calcula el valor de las perdidas de presion con anular
  mysqli_query($conexion,$valorEcd);
}

/// WOB PARA AGU1 Y AGU2
if (isset($_POST['WOBteorico'])) {
  $sumwobxar=$_POST['WOBteorico']; // Aguja de wob
  $Hlaux=$_POST['Hlaux'];     // aguja de HL
  $wobfisico=$_POST['wobfisico'];
  $zeroWob=$_POST['zeroWob'];
  
  
  $sumwobxardata="UPDATE var_constantes SET valor1='$sumwobxar' WHERE Namevar='agu1' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $wobxardata="UPDATE var_rt SET valor1='$sumwobxar' WHERE Namevar='WOBTeorico' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $Hlauxdata="UPDATE var_rt SET valor1='$Hlaux' WHERE Namevar='HLAux' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $wobfisicodata="UPDATE var_rt SET valor1='$wobfisico' WHERE Namevar='WOB' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $zeroWobdata="UPDATE var_rt SET valor1='$zeroWob' WHERE Namevar='zeroWob' AND NombreDB='$pozo'  AND Usuario='$usuval'";

  mysqli_query($conexion,$sumwobxardata);
  mysqli_query($conexion,$wobxardata);
  mysqli_query($conexion,$wobfisicodata);
  mysqli_query($conexion,$zeroWobdata);
  mysqli_query($conexion,$Hlauxdata);
}

//Actualiza STKB1, STKB2, STKTotal, SPMtotal, agu1 WOB, agu2 hl
if (isset($_POST['totalskt'])) {
  $p1total=$_POST['p1total'];
  $p2total=$_POST['p2total'];
  $totalskt=$_POST['totalskt'];
  $stpmt=$_POST['stpmt'];
  $sumwobxar=$_POST['a']; // Aguja de wob
  $Hlaux=$_POST['b'];     // aguja de HL

  $p1totaldata="UPDATE var_rt SET valor1='$p1total' WHERE  Namevar='STKB1' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $p2totaldata="UPDATE var_rt SET valor1='$p2total' WHERE  Namevar='STKB2' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $totalsktdata="UPDATE var_rt SET valor1='$totalskt' WHERE  Namevar='STKTotal' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $stpmtdata="UPDATE var_rt SET valor1='$stpmt' WHERE  Namevar='SPMtotal' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $sumwobxardata="UPDATE var_constantes SET valor1='$sumwobxar' WHERE Namevar='agu1' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $Hlauxdata="UPDATE var_constantes SET valor1='$Hlaux' WHERE Namevar='agu2' AND NombreDB='$pozo'  AND Usuario='$usuval'";

  mysqli_query($conexion,$p1totaldata);
  mysqli_query($conexion,$p2totaldata);
  mysqli_query($conexion,$stpmtdata);
  mysqli_query($conexion,$totalsktdata);
  mysqli_query($conexion,$sumwobxardata);
  mysqli_query($conexion,$Hlauxdata);
}
// altura de bloque despues de hacer la conexion (ini)
if (isset($_POST['action'])) { 
  $action=$_POST['action'];
  $actiondata="UPDATE var_rt SET valor1='90' WHERE  Namevar='AlturaBloque' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  //$dato12=" CALL `mani_pro`(@p0, '$usuval ','$pozo', @p3, @p4, @p5, '2000', @p7, @p8, 'val47')";
  mysqli_query($conexion,$actiondata);
}
  // COMENTARIOADO NUEVO
    /* if (isset($_POST['bitactual'])) { // Previsto o pensado // diferentes usuarios  
    $bitactual=$_POST['bitactual'];
    $bitactualdata=" UPDATE var_rt SET valor1='$bitactual' WHERE  Namevar='BitDepth' AND NombreDB='$pozo'  AND Usuario='$usuval'";
    //$dato12=" CALL `mani_pro`(@p0, '$usuval ','$pozo', @p3, @p4, @p5, '2000', @p7, @p8, 'val47')";
    mysqli_query($conexion,$bitactualdata);
    } */

// Actualiza EstadoBlockConecc
if (isset($_POST['estadocon'])) {  // 1 ----- 0 Siempre queda en 1
  $estadocon=$_POST['estadocon'];
  $estadocondata="UPDATE var_rt SET valor1='$estadocon' WHERE  Namevar='EstadoBlockConecc' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  //$dato12=" CALL `mani_pro`(@p0, '$usuval ','$pozo', @p3, @p4, @p5, '2000', @p7, @p8, 'val47')";
  mysqli_query($conexion,$estadocondata);
}

// Actualiza EstadoBlockConecc en valor 2 para ejecucion de gif con diferente roles
if (isset($_POST['estadocon2'])) {  // 1 ----- 0 Siempre queda en 1
  $estadocon=$_POST['estadocon2'];
  $estadocondata="UPDATE var_rt SET valor2='$estadocon' WHERE  Namevar='EstadoBlockConecc' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  //$dato12=" CALL `mani_pro`(@p0, '$usuval ','$pozo', @p3, @p4, @p5, '2000', @p7, @p8, 'val47')";
  mysqli_query($conexion,$estadocondata);
}

//Actualliza funcion de cuñas
if (isset($_POST['cuñasdata'])) {
  $cuñas=$_POST['cuñasdata'];
  $dato12=" CALL `mani_pro`(@p0, '$usuval ','$pozo', @p3, @p4, @p5, '$cuñas', @p7, @p8, 'val47')";
  //$dato12=" CALL `mani_pro`(@p0, '$usuval ','$pozo', @p3, @p4, @p5, '2000', @p7, @p8, 'val47')";
  mysqli_query($conexion,$dato12);
}
// Actualiza hole_depth, block_high, hole_depth, rop, bit_depth. 2)  Actualiza el estado mecanico del pozo y corre HYD
if (isset($_POST['hole_depth'])){
  $block_high=$_POST['block_high'];
  $hole_depth=$_POST['hole_depth'];
  $rop=$_POST['rop'];
  $bit_depth=$_POST['bit_depth'];
  //$action=$_POST['action'];
  //$bitactual=$_POST['bitactual']; // pensado para los que no son perforadores 
  //$estadocon=$_POST['estadocon'];
  $block_highdata="UPDATE var_rt SET valor1='$block_high' WHERE  Namevar='AlturaBloque' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $hole_depthdata="UPDATE var_rt SET valor1='$hole_depth' WHERE  Namevar='Depth' AND NombreDB='$pozo'  AND Usuario='$usuval'"; 
  $ropdata="UPDATE var_rt SET valor1='$rop' WHERE  Namevar='ROP' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $bit_depthdata="UPDATE var_rt SET valor1='$bit_depth' WHERE  Namevar='BitDepth' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  //$actiondata="UPDATE var_rt SET valor1='$action' WHERE  Namevar='AlturaBloque' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  //$bitactualdata="UPDATE var_rt SET valor1='$bitactual' WHERE  Namevar='BitDepth' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  //$estadocondata="UPDATE var_rt SET valor1='$estadocon' WHERE  Namevar='EstadoBlockConecc' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  mysqli_query($conexion,$block_highdata);
  mysqli_query($conexion,$hole_depthdata);
  mysqli_query($conexion,$ropdata);
  mysqli_query($conexion,$bit_depthdata);
  //mysqli_query($conexion,$actiondata);
  //mysqli_query($conexion,$bitactualdata);
  //mysqli_query($conexion,$estadocondata);

  //Procedimientos de presion y profundidad
  // Corre PROCEDIMIENTOS ALMACENADOS los cuales con el avance de la profundidad recalcula la longitud del DP y salva este valor en base de datos en tabla drillingRig reg componente='DrillPipe' and tipo= 'BHANo1'
  // Actualiza el estado mecanico del pozo, ACTUALIZA VALORES DEL ANULAR, DRILLPIPE y OPENHOLE CUANDO CAMBIA LA PROFUNDIDAD DEL BHA,  relacion DP-Casg, DP-hopenHole,HW-hopenHole, DC-hopenHole
  // ACTUALIZA VALORES DE  VOLUMEN DE BHA Y Geometria
  $profundidad=" CALL `CalTVar_funciones`(100,'$usuval', '$pozo', @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12);";
  mysqli_query($conexion,$profundidad); 
  // Corre PROCEDIMIENTOS ALMACENADOS: ACTUALIZA VALORES DE VELOCIDAD DE BHA Y EsatadoMecanico reg(Valor8)
  //  ACTUALIZA VALORES DE VELOCIDAD DE BHA Y EsatadoMecanico reg(Valor8), ACTUALIZA VALORES DE REYNOLDS DE BHA Y GEOMETRIA  (reg 9),  ACTUALIZA VALORES DE  F DE BHA Y GEOMETRIA (reg 10)
  // ACTUALIZA VALORES DE  PERDIDA DE PRESION DE BHA Y GEOMETRIA (reg 11), ACTUALIZA VALORES DE CAPACIDAD DE BHA VS GEOMETRIA (reg 12), ACTUALIZA VALORES DE VOLUMEN DE BHA VS GEOMETRIA (reg 7)
  // ACTUALIZA VALORES DE VELOCIDAD ANULAR DE BHA Y GEOMETRIA (reg 8), ACTUALIZA VALORES PERDIDA DE PRESION DE BHA VS GEOMETRIA ,  ACTUALIZA F DE BHA VS GEOMETRIA (Valor11)
}
// Actualiza RPM
if (isset($_POST['rpm'])){
  $rpm=$_POST['rpm'];
  $rpmdata="UPDATE var_rt SET valor1='$rpm' WHERE  Namevar='RPM' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  mysqli_query($conexion,$rpmdata);
}
//ACTUALIZA Well Control  
if (isset($_POST['well'])){
  $wellcontrol=" CALL `CalTVar_funciones`(1, '$usuval', '$pozo', 0, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12);";
  mysqli_query($conexion,$wellcontrol); 

  $flujoBombas="CALL `CalTDrillingRig`(25, @p1,'$usuval', '$pozo', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);";  // Calcula el flujo de las bombas
  mysqli_query($conexion,$flujoBombas);
}


// bLAOQUE COMENTARIADPO QUE SIRVE DE REFERENCIA NO ESTA OPERACIONAL 
if (isset($_POST['nada'])){

  $p1total=$_POST['p1total'];
  $p2total=$_POST['p2total'];
  $totalskt=$_POST['totalskt'];
  $stpmt=$_POST['stpmt'];
  $block_high=$_POST['block_high'];
  $hole_depth=$_POST['hole_depth'];
  $rop=$_POST['rop'];
  $bit_depth=$_POST['bit_depth'];
  $fluid_volume=$_POST['fluid_volume'];
  $torque=$_POST['torque'];
  $time=$_POST['time'];
  $action=$_POST['action'];
  $bitactual=$_POST['bitactual'];
  $cuñas=$_POST['cuñas'];
  $rpm=$_POST['rpm'];
  $sumwobxar=$_POST['a'];
  $Hlaux=$_POST['b'];
  $pause=$_POST['pause'];

  $p1totaldata="UPDATE var_rt SET valor1='$p1total' WHERE  Namevar='STKB1' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $p2totaldata="UPDATE var_rt SET valor1='$p2total' WHERE  Namevar='STKB2' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $totalsktdata="UPDATE var_rt SET valor1='$totalskt' WHERE  Namevar='STKTotal' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $stpmtdata="UPDATE var_rt SET valor1='$stpmt' WHERE  Namevar='SPMtotal' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $block_highdata="UPDATE var_rt SET valor1='$block_high' WHERE  Namevar='AlturaBloque' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $hole_depthdata="UPDATE var_rt SET valor1='$hole_depth' WHERE  Namevar='Depth' AND NombreDB='$pozo'  AND Usuario='$usuval'"; 
  $ropdata="UPDATE var_rt SET valor1='$rop' WHERE  Namevar='ROP' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $bit_depthdata="UPDATE var_rt SET valor1='$bit_depth' WHERE  Namevar='BitDepth' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $fluid_volumedata="UPDATE var_rt SET valor1='$fluid_volume' WHERE  Namevar='FlowAct' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $torquedata="UPDATE var_rt SET valor1='$torque' WHERE  Namevar='TQ' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $timedata="UPDATE var_rt SET valor1='$time' WHERE  Namevar='glbTime4min' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $actiondata="UPDATE var_rt SET valor1='$action' WHERE  Namevar='AlturaBloque' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $bitactualdata="UPDATE var_rt SET valor1='$bitactual' WHERE  Namevar='BitDepth' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $rpmdata="UPDATE var_rt SET valor1='$rpm' WHERE  Namevar='RPM' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $sumwobxardata="UPDATE var_constantes SET valor1='$sumwobxar' WHERE Namevar='agu1' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $Hlauxdata="UPDATE var_constantes SET valor1='$Hlaux' WHERE Namevar='agu2' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $ndata="UPDATE var_constantes SET valor1='$p1' WHERE Namevar='n' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  $kdata="UPDATE var_constantes SET valor1='$p2' WHERE Namevar='k' AND NombreDB='$pozo'  AND Usuario='$usuval'";


  // -------------------------------------------------------------------- DETENER ------------------------------------------------------------------------------//

  /* Bloque que ejecuta las actualizaciones en la base de datos */

  if ($pause==0) {

  // mysqli_query($conexion,$p1data);
  // mysqli_query($conexion,$p2data);
  /* mysqli_query($conexion,$p1totaldata);
  mysqli_query($conexion,$p2totaldata);
  mysqli_query($conexion,$stpmtdata);
  mysqli_query($conexion,$totalsktdata); */
  mysqli_query($conexion,$block_highdata);
  mysqli_query($conexion,$hole_depthdata);
  mysqli_query($conexion,$ropdata);
  mysqli_query($conexion,$bit_depthdata);
  mysqli_query($conexion,$fluid_volumedata);
  mysqli_query($conexion,$torquedata);
  mysqli_query($conexion,$timedata);
  mysqli_query($conexion,$rpmdata);
  mysqli_query($conexion,$sumwobxardata);
  mysqli_query($conexion,$Hlauxdata);
  mysqli_query($conexion,$ndata);
  mysqli_query($conexion,$kdata);

  //funcion de cuñas
  if (isset($_POST['cuñas'])) {
  $cuñas=$_POST['cuñas'];
  $dato12=" CALL `mani_pro`(@p0, '$usuval ','$pozo', @p3, @p4, @p5, '$cuñas', @p7, @p8, 'val47')";
  //$dato12=" CALL `mani_pro`(@p0, '$usuval ','$pozo', @p3, @p4, @p5, '2000', @p7, @p8, 'val47')";
  mysqli_query($conexion,$dato12);
  }

  //Procedimientos de presion y peofundidad
  // Corre PROCEDIMIENTOS ALMACENADOS los cuales con e avance de la profundidad reclacula la longitud del DP y salva este valor en base de datos en tabla drillingRig reg componente='DrillPipe' and tipo= 'BHANo1'
  // Actualiza el estado mecanico del pozo, ACTUALIZA VALORES DEL ANULAR, DRILLPIPE y OPENHOLE CUANDO CAMBIA LA PROFUNDIDAD DEL BHA,  relacion DP-Casg, DP-hopenHole,HW-hopenHole, DC-hopenHole
  // ACTUALIZA VALORES DE  VOLUMEN DE BHA Y Geometria
  $profundidad=" CALL `CalTVar_funciones`(100,'$usuval', '$pozo', @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12);";
  mysqli_query($conexion,$profundidad);
  // Corre PROCEDIMIENTOS ALMACENADOS: ACTUALIZA VALORES DE VELOCIDAD DE BHA Y EsatadoMecanico reg(Valor8)
  //  ACTUALIZA VALORES DE VELOCIDAD DE BHA Y EsatadoMecanico reg(Valor8), ACTUALIZA VALORES DE REYNOLDS DE BHA Y GEOMETRIA  (reg 9),  ACTUALIZA VALORES DE  F DE BHA Y GEOMETRIA (reg 10)
  // ACTUALIZA VALORES DE  PERDIDA DE PRESION DE BHA Y GEOMETRIA (reg 11), ACTUALIZA VALORES DE CAPACIDAD DE BHA VS GEOMETRIA (reg 12), ACTUALIZA VALORES DE VOLUMEN DE BHA VS GEOMETRIA (reg 7)
  // ACTUALIZA VALORES DE VELOCIDAD ANULAR DE BHA Y GEOMETRIA (reg 8), ACTUALIZA VALORES PERDIDA DE PRESION DE BHA VS GEOMETRIA ,  ACTUALIZA F DE BHA VS GEOMETRIA (Valor11)


  /* COMENTARIO PROCESOS CON B1 Y B2
  /////////////////////////////////////**************************************** 
  // ACTUALIZA EL VALOR PLBIT EN VAR PROCESS, ACTUALIZA  EL VALOR  EL VALOR DE SPP,
  $presion=" CALL `CalTVar_funciones`(101,'$usuval', '$pozo', @p3, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12);";
  mysqli_query($conexion,$presion);
  //ACTUALIZA SPM TOTAL Y FLOWACT
  $flujoBombas="CALL `CalTDrillingRig`(25, @p1,'$usuval', '$pozo', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);";
  mysqli_query($conexion,$flujoBombas);
  //ACTUALIZA  EL VALOR DE SPP
  $valorSpp="CALL `CalTDrillingRig`(26, @p1,'$usuval', '$pozo', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);";
  mysqli_query($conexion,$valorSpp);
  //ACTUALIZA  EL VALOR DEL ANULAR ECD
  $valorEcd="CALL `CalTDrillingRig`(27, @p1,'$usuval', '$pozo', @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13, @p14, @p15, @p16, @p17, @p18, @p19, @p20, @p21, @p22, @p23, @p24, @p25, @p26);";
  mysqli_query($conexion,$valorEcd);
  /////////////////////////////////////**************************************** 
    FIN COMENTARIO PROCESOS CON B1 */


  /* //ACTUALIZA LA TABLA TIME_RT CON LOS VALORES DE VAR_RT CADA X TIEMPO
  $valorrttime=" CALL `CalTVar_funciones`(102, '$usuval', '$pozo', 0, @p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12);";
  mysqli_query($conexion,$valorrttime);
  */

 


  if (isset($_POST['action'])) {
    $action=$_POST['action'];
  $actiondata="UPDATE var_rt SET valor1='90' WHERE  Namevar='AlturaBloque' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  //$dato12=" CALL `mani_pro`(@p0, '$usuval ','$pozo', @p3, @p4, @p5, '2000', @p7, @p8, 'val47')";
  mysqli_query($conexion,$actiondata);
  }

  if (isset($_POST['bitactual'])) {
    $bitactual=$_POST['bitactual'];
  $bitactualdata=" UPDATE var_rt SET valor1='$bitactual' WHERE  Namevar='BitDepth' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  //$dato12=" CALL `mani_pro`(@p0, '$usuval ','$pozo', @p3, @p4, @p5, '2000', @p7, @p8, 'val47')";
  mysqli_query($conexion,$bitactualdata);
  }
  if (isset($_POST['estadocon'])) {
    $estadocon=$_POST['estadocon'];
  $estadocondata="UPDATE var_rt SET valor1='$estadocon' WHERE  Namevar='EstadoBlockConecc' AND NombreDB='$pozo'  AND Usuario='$usuval'";
  //$dato12=" CALL `mani_pro`(@p0, '$usuval ','$pozo', @p3, @p4, @p5, '2000', @p7, @p8, 'val47')";
  mysqli_query($conexion,$estadocondata);
  }

  }

}


// ---------------------------------------------------------- FIN DETENER ---------------------------------------------------------//


 ?>
