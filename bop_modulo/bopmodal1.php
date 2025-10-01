   
<?php   
//======================================FUNCIONES DE EL MODULO DE BOP PARA EL MANEJO DE PALANCAS Y RELOJES

error_reporting(0);
 
$usuval=$_SESSION['username'];

$pozo=$_SESSION['pozocon'];


if($pozo=="Defaull"){
  $usuval="Factory";
}

//consultas manillares  a la bd (funcionan);
//CALL mani_pro(0,'$usuval','$pozo','','Depth','','','','','con_var')



$boxconsul1a="SELECT valor1 FROM `var_rt`WHERE Namevar='L7V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval' ";

 
$boxconsul1b="SELECT valor1 FROM `var_rt`WHERE Namevar='L7V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval' ";


$boxconsul1c="SELECT valor1 FROM `var_rt`WHERE Namevar='L7V3_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul1d="SELECT valor1 FROM `var_rt`WHERE Namevar='L6V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul1="SELECT valor1 FROM `var_rt`WHERE Namevar='L6V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul2="SELECT valor1 FROM `var_rt`WHERE Namevar='L6V3_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul2a="SELECT valor1 FROM `var_rt`WHERE Namevar='L6V4_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul3="SELECT valor1 FROM `var_rt`WHERE Namevar='L4V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul4="SELECT valor1 FROM `var_rt`WHERE Namevar='L4V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul5="SELECT valor1 FROM `var_rt`WHERE Namevar='L4V3_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul6="SELECT valor1 FROM `var_rt`WHERE Namevar='L4V4_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul7="SELECT valor1 FROM `var_rt`WHERE Namevar='L4V5_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul8="SELECT valor1 FROM `var_rt`WHERE Namevar='L3V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul9="SELECT valor1 FROM `var_rt`WHERE Namevar='L3V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul10="SELECT valor1 FROM `var_rt`WHERE Namevar='L2V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul11="SELECT valor1 FROM `var_rt`WHERE Namevar='L2V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul12="SELECT valor1 FROM `var_rt`WHERE Namevar='L1V1_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul13="SELECT valor1 FROM `var_rt`WHERE Namevar='L7V2_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul14="SELECT valor1 FROM `var_rt`WHERE Namevar='B1B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";




$boxconsul15="SELECT valor1 FROM `var_rt`WHERE Namevar='B2B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";



$boxconsul16="SELECT valor1 FROM `var_rt`WHERE Namevar='BL_2A_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";



$boxconsul17="SELECT valor1 FROM `var_rt`WHERE Namevar='BL_2B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul18="SELECT valor1 FROM `var_rt`WHERE Namevar='BL_2C_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";



$boxconsul19="SELECT valor1 FROM `var_rt`WHERE Namevar='BL_1A_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";
 

$boxconsul20="SELECT valor1 FROM `var_rt`WHERE Namevar='BL_1B_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul21="SELECT valor1 FROM `var_rt`WHERE Namevar='B1A_Open' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul22="SELECT valor1 FROM `var_rt`WHERE Namevar='B_CementHeadOpen' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul23="SELECT valor1 FROM `var_rt`WHERE Namevar='B_CementPumpOpen' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsul24="SELECT valor1 FROM `var_rt`WHERE Namevar='B_ToChokeOpen' AND NombreDB='$pozo'  AND Usuario='$usuval'";


$boxconsu1="SELECT valor1 FROM  var_rt WHERE Namevar='AnnularAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsu2="SELECT valor1 FROM  var_rt WHERE Namevar='UpperAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsu3="SELECT valor1 FROM  var_rt WHERE Namevar='BlindAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsu4="SELECT valor1 FROM  var_rt WHERE Namevar='LowerAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsu5="SELECT valor1 FROM  var_rt WHERE Namevar='killAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsu6="SELECT valor1 FROM  var_rt WHERE Namevar='chokeAbierto' AND NombreDB='$pozo'  AND Usuario='$usuval'";


//consuttaba de setupvar
$boxconsul25="SELECT valor1 FROM `var_rt`WHERE Namevar='B2A_open' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsul26="SELECT valor1 FROM `var_rt`WHERE Namevar='Depth' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsul27="SELECT valor1 FROM `var_rt`WHERE Namevar='ROP' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsul28="SELECT valor1 FROM `var_rt`WHERE Namevar='BitDepth' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsul29="SELECT valor1 FROM `var_rt`WHERE Namevar='CPP' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsul30="SELECT valor1 FROM `var_rt`WHERE Namevar='FlowAct' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsul31="SELECT valor1 FROM `var_rt`WHERE Namevar='SPP' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsul32="SELECT valor1 FROM `var_rt`WHERE Namevar='RPM' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsul33="SELECT valor1 FROM `var_rt`WHERE Namevar='TQ' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsul34="SELECT val1 FROM `setupvar_process`WHERE Namevar='glbTime4Min' AND Pozo='$pozo'  AND Usuario='$usuval'";
$boxconsul35="SELECT valor1 FROM `var_rt`WHERE Namevar='AlturaBloque' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsul36="SELECT valor1 FROM `var_rt`WHERE Namevar='BitDepth' AND NombreDB='$pozo'  AND Usuario='$usuval'";
$boxconsul37="SELECT valor1 FROM var_rt WHERE `Usuario`='$usuval' and `NombreDB`='$pozo' and Namevar='HL'";
//consuttaba de setupvar


$boxconsul38="SELECT `valor1` FROM `var_rt` WHERE `Usuario`='$usuval' and `NombreDB`='$pozo' and `Namevar`='Cuñas'";


$boxconsul39="SELECT valor1 FROM `var_constantes` where  Usuario='$usuval' and NombreDB='$pozo' and Namevar='pesoBloque'";


$boxconsul40="SELECT valor1 FROM `var_constantes` WHERE `Usuario`='$usuval' and `NombreDB`='$pozo' and `Namevar`='durezaRoca'";


$boxconsul41="SELECT valor1 FROM `var_constantes` WHERE `Usuario`='$usuval' and `NombreDB`='$pozo' and `Namevar`='ctePer' ";


$boxconsul42="SELECT valor2 FROM setupdrillingrig where Usuario='$usuval' and pozo='$pozo' and tipo='Geometria' and componente='Open Hole' ";


$boxconsul43="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='EstadoBlockConecc' ";


$boxconsul45="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='ECD' ";


$boxconsul46="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='FlowRet' ";


$boxconsul47="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='GainLoss' ";


$boxconsul48="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='SPMtotal' ";


$boxconsul49="SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='glbPressBottonAnn'";


$boxconsul50="SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='PressLeak'";


$boxconsul51="SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='PressShoe'";


$boxconsul52="SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='PressFormation'";

$boxconsul53="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='L5V1ValvulaManual_Val' ";

$boxconsul54="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='L5V2ValvulaManual_Val' ";


$boxconsul55="SELECT val1 FROM fallas WHERE  Usuario='$usuval' and NombreDB='$pozo' and componente='FlowRet' and tipofalla='alertaHigh'";

$boxconsul56="SELECT val1 FROM fallas WHERE  Usuario='$usuval' and NombreDB='$pozo' and componente='FlowRet' and tipofalla='alertaLow' ";

$boxconsul57="SELECT val1 FROM fallas WHERE  Usuario='$usuval' and NombreDB='$pozo' and componente='GainLoss' and tipofalla='alertaHigh'";

$boxconsul58="SELECT val1 FROM fallas WHERE  Usuario='$usuval' and NombreDB='$pozo' and componente='GainLoss' and tipofalla='alertaLow' ";

$boxconsul59="SELECT FallaAct FROM fallas WHERE  Usuario='$usuval' and NombreDB='$pozo' and componente='FlowRet' and tipofalla='alertaHigh' ";

$boxconsul60="SELECT FallaAct FROM fallas WHERE  Usuario='$usuval' and NombreDB='$pozo' and componente='FlowRet' and tipofalla='alertaLow' ";

$boxconsul61="SELECT FallaAct FROM fallas WHERE  Usuario='$usuval' and NombreDB='$pozo' and componente='GainLoss' and tipofalla='alertaHigh' ";

$boxconsul62="SELECT FallaAct FROM fallas WHERE  Usuario='$usuval' and NombreDB='$pozo' and componente='GainLoss' and tipofalla='alertaLow' ";

$boxconsul63="SELECT FallaAct FROM fallas WHERE  Usuario='$usuval' and NombreDB='$pozo' and componente='Pause' and tipofalla='Pause' ";

$boxconsul64="SELECT valor2 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='choke_speed'";

$boxconsul65="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='choke_speed'";

$boxconsul66="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='Val_Aire_chk'"; 

$boxconsul67="SELECT val3 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='Choke_Act'";

$boxconsul68="SELECT valor1 FROM var_constantes WHERE `Usuario`='$usuval' and `NombreDB`='$pozo' and `Namevar`='NewPract' ";

$boxconsul69="SELECT valor1 FROM var_constantes WHERE `Usuario`='$usuval' and `NombreDB`='$pozo' and `Namevar`='agu1' ";

$boxconsul70="SELECT valor1 FROM var_constantes WHERE `Usuario`='$usuval' and `NombreDB`='$pozo' and `Namevar`='agu2' ";

$boxconsul71="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='HLaux'";

$boxconsul72="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='WOB'";

$boxconsul73="SELECT valor1 FROM var_rt WHERE  Usuario='$usuval' and NombreDB='$pozo' and Namevar='zeroWob'";

$realtime="SELECT NOW() AS FECHA";

$resultado1a= mysqli_query($conexion,$boxconsul1a);
$resultado1b= mysqli_query($conexion,$boxconsul1b);
$resultado1c= mysqli_query($conexion,$boxconsul1c);
$resultado1d= mysqli_query($conexion,$boxconsul1d);
$resultado1= mysqli_query($conexion,$boxconsul1);

$resulcon1= mysqli_query($conexion,$boxconsu1);
$resulcon2= mysqli_query($conexion,$boxconsu2);
$resulcon3= mysqli_query($conexion,$boxconsu3);
$resulcon4= mysqli_query($conexion,$boxconsu4);
$resulcon5= mysqli_query($conexion,$boxconsu5);
$resulcon6= mysqli_query($conexion,$boxconsu6);





$resultado2= mysqli_query($conexion,$boxconsul2);
$resultado2a= mysqli_query($conexion,$boxconsul2a);




$resultado3= mysqli_query($conexion,$boxconsul3);
$resultado4= mysqli_query($conexion,$boxconsul4);
$resultado5= mysqli_query($conexion,$boxconsul5);
$resultado6= mysqli_query($conexion,$boxconsul6);
$resultado7= mysqli_query($conexion,$boxconsul7);
$resultado8= mysqli_query($conexion,$boxconsul8);
$resultado9= mysqli_query($conexion,$boxconsul9);
$resultado10= mysqli_query($conexion,$boxconsul10);
$resultado11= mysqli_query($conexion,$boxconsul11);
$resultado12= mysqli_query($conexion,$boxconsul12);
$resultado13= mysqli_query($conexion,$boxconsul13);
$resultado14= mysqli_query($conexion,$boxconsul14);
$resultado15= mysqli_query($conexion,$boxconsul15);
$resultado16= mysqli_query($conexion,$boxconsul16);
$resultado17= mysqli_query($conexion,$boxconsul17);
$resultado18= mysqli_query($conexion,$boxconsul18);
$resultado19= mysqli_query($conexion,$boxconsul19);
$resultado20= mysqli_query($conexion,$boxconsul20);
$resultado21= mysqli_query($conexion,$boxconsul21);
$resultado22= mysqli_query($conexion,$boxconsul22);
$resultado23= mysqli_query($conexion,$boxconsul23); 
$resultado24= mysqli_query($conexion,$boxconsul24);
$resultado25= mysqli_query($conexion,$boxconsul25); 




$resultado26= mysqli_query($conexion,$boxconsul26); 
$resultado27= mysqli_query($conexion,$boxconsul27); 
$resultado28= mysqli_query($conexion,$boxconsul28); 
$resultado29= mysqli_query($conexion,$boxconsul29); 
$resultado30= mysqli_query($conexion,$boxconsul30); 
$resultado31= mysqli_query($conexion,$boxconsul31); 
$resultado32= mysqli_query($conexion,$boxconsul32); 
$resultado33= mysqli_query($conexion,$boxconsul33); 
$resultado34= mysqli_query($conexion,$boxconsul34); 
$resultado35= mysqli_query($conexion,$boxconsul35);  
$resultado36= mysqli_query($conexion,$boxconsul36);  
$resultado37= mysqli_query($conexion,$boxconsul37);  
$resultado38= mysqli_query($conexion,$boxconsul38);  
$resultado39= mysqli_query($conexion,$boxconsul39);  
$resultado40= mysqli_query($conexion,$boxconsul40);  
$resultado41= mysqli_query($conexion,$boxconsul41);  
$resultado42= mysqli_query($conexion,$boxconsul42);  
$resultado43= mysqli_query($conexion,$boxconsul43);  
$resultado45= mysqli_query($conexion,$boxconsul45);  
$resultado46= mysqli_query($conexion,$boxconsul46);  
$resultado47= mysqli_query($conexion,$boxconsul47);  
$resultado48= mysqli_query($conexion,$boxconsul48);  
$resultado49= mysqli_query($conexion,$boxconsul49); 
$resultado50= mysqli_query($conexion,$boxconsul50); 
$resultado51= mysqli_query($conexion,$boxconsul51); 
$resultado52= mysqli_query($conexion,$boxconsul52); 
$resultado53= mysqli_query($conexion,$boxconsul53); 
$resultado54= mysqli_query($conexion,$boxconsul54);
$resultado55= mysqli_query($conexion,$boxconsul55); 
$resultado56= mysqli_query($conexion,$boxconsul56); 
$resultado57= mysqli_query($conexion,$boxconsul57); 
$resultado58= mysqli_query($conexion,$boxconsul58); 
$resultado59= mysqli_query($conexion,$boxconsul59); 
$resultado60= mysqli_query($conexion,$boxconsul60); 
$resultado61= mysqli_query($conexion,$boxconsul61); 
$resultado62= mysqli_query($conexion,$boxconsul62);  
$resultado63= mysqli_query($conexion,$boxconsul63); 
$resultado64= mysqli_query($conexion,$boxconsul64); 
$resultado65= mysqli_query($conexion,$boxconsul65);
$resultado66= mysqli_query($conexion,$boxconsul66);
$resultado67= mysqli_query($conexion,$boxconsul67);
$resultado68= mysqli_query($conexion,$boxconsul68);
$resultado69= mysqli_query($conexion,$boxconsul69);
$resultado70= mysqli_query($conexion,$boxconsul70);
$resultado71= mysqli_query($conexion,$boxconsul71);
$resultado72= mysqli_query($conexion,$boxconsul72);
$resultado73= mysqli_query($conexion,$boxconsul73);
$resultadort1= mysqli_query($conexion,$realtime);

while ($rt1 = mysqli_fetch_assoc($resultadort1)) {
  $resultadort = $rt1["FECHA"];
}

while ($row1a = mysqli_fetch_assoc($resultado1a)) {
  $foo1a = $row1a["valor1"];
}
while ($row1b = mysqli_fetch_assoc($resultado1b)) {
  $foo1b = $row1b["valor1"];
}
while ($row1c = mysqli_fetch_assoc($resultado1c)) {
  $foo1c = $row1c["valor1"];
}
while ($row1d = mysqli_fetch_assoc($resultado1d)) {
  $foo1d = $row1d["valor1"];
}
while ($row1 = mysqli_fetch_assoc($resultado1)) {
  $foo1 = $row1["valor1"];
}



while ($row1 = mysqli_fetch_assoc($resulcon1)) {
  $food1 = $row1["valor1"];
}
while ($row1 = mysqli_fetch_assoc($resulcon2)) {
  $food2 = $row1["valor1"];
}
while ($row1 = mysqli_fetch_assoc($resulcon3)) {
  $food3 = $row1["valor1"];
}
while ($row1 = mysqli_fetch_assoc($resulcon4)) {
  $food4 = $row1["valor1"];
}
while ($row1 = mysqli_fetch_assoc($resulcon5)) {
  $food5 = $row1["valor1"];
}
while ($row1 = mysqli_fetch_assoc($resulcon6)) {
  $food6 = $row1["valor1"];
}



while ($row2 = mysqli_fetch_assoc($resultado2)) {
  $foo2 = $row2["valor1"];
}
while ($row2a = mysqli_fetch_assoc($resultado2a)) {
  $foo2a = $row2a["valor1"];
}




while ($row3 = mysqli_fetch_assoc($resultado3)) {
  $foo3=$row3["valor1"];
}
while ($row4 = mysqli_fetch_assoc($resultado4)) {
  $foo4 = $row4["valor1"];
}

while ($row5 = mysqli_fetch_assoc($resultado5)) {
  $foo5 = $row5["valor1"];
}
while ($row6 = mysqli_fetch_assoc($resultado6)) {
  $foo6 = $row6["valor1"];
}
while ($row7 = mysqli_fetch_assoc($resultado7)) {
  $foo7 = $row7["valor1"];
}

while ($row8 = mysqli_fetch_assoc($resultado8)) {
  $foo8 = $row8["valor1"];
}
while ($row9 = mysqli_fetch_assoc($resultado9)) {
  $foo9 = $row9["valor1"];
}
while ($row10 = mysqli_fetch_assoc($resultado10)) {
  $foo10 = $row10["valor1"];
}
while ($row11 = mysqli_fetch_assoc($resultado11)) {
  $foo11 = $row11["valor1"];
}
while ($row12 = mysqli_fetch_assoc($resultado12)) {
  $foo12 = $row12["valor1"];
}
while ($row13 = mysqli_fetch_assoc($resultado13)) {
  $foo13 = $row13["valor1"];
}
while ($row14 = mysqli_fetch_assoc($resultado14)) {
  $foo14 = $row14["valor1"];
}
while ($row15 = mysqli_fetch_assoc($resultado15)) {
  $foo15 = $row15["valor1"];
}
while ($row16 = mysqli_fetch_assoc($resultado16)) {
  $foo16 = $row16["valor1"];
}
while ($row17 = mysqli_fetch_assoc($resultado17)) {
  $foo17 = $row17["valor1"];
}
while ($row18 = mysqli_fetch_assoc($resultado18)) {
  $foo18 = $row18["valor1"];
}
while ($row19 = mysqli_fetch_assoc($resultado19)) {
  $foo19 = $row19["valor1"];
}
while ($row20 = mysqli_fetch_assoc($resultado20)) {
  $foo20 = $row20["valor1"];
}
while ($row21 = mysqli_fetch_assoc($resultado21)) {
  $foo21 = $row21["valor1"];
}
while ($row22 = mysqli_fetch_assoc($resultado22)) {
  $foo22 = $row22["valor1"];
}
while ($row23 = mysqli_fetch_assoc($resultado23)) {
  $foo23 = $row23["valor1"];
}
while ($row24 = mysqli_fetch_assoc($resultado24)) {
  $foo24 = $row24["valor1"];
}


while ($row25 = mysqli_fetch_assoc($resultado25)) {
  $foo25 = $row25["valor1"];
}


while ($row26 = mysqli_fetch_assoc($resultado26)) {
  $foo26 = $row26["valor1"];
}

while ($row27 = mysqli_fetch_assoc($resultado27)) {
  $foo27 = $row27["valor1"];
}



while ($row28 = mysqli_fetch_assoc($resultado28)) {
  $foo28 = $row28["valor1"];
}
while ($row29 = mysqli_fetch_assoc($resultado29)) {
  $foo29 = $row29["valor1"];
}
while ($row30 = mysqli_fetch_assoc($resultado30)) {
  
  $foo30 = $row30["valor1"];
}
while ($row31 = mysqli_fetch_assoc($resultado31)) {
  $foo31 = $row31["valor1"];
}
while ($row32 = mysqli_fetch_assoc($resultado32)) {
  $foo32 = $row32["valor1"];
}
while ($row33 = mysqli_fetch_assoc($resultado33)) {
  $foo33 = $row33["valor1"];
}
while ($row34 = mysqli_fetch_assoc($resultado34)) {
  $foo34 = $row34["val1"];
}
while ($row35 = mysqli_fetch_assoc($resultado35)) {
  $foo35 = $row35["valor1"];
}

while ($row36 = mysqli_fetch_assoc($resultado36)) {
  $foo36 = $row36["valor1"];
}

while ($row37 = mysqli_fetch_assoc($resultado37)) {
  $foo37 = $row37["valor1"];
}

while ($row38 = mysqli_fetch_assoc($resultado38)) {
  $foo38 = $row38["valor1"];
}

while ($row39 = mysqli_fetch_assoc($resultado39)) {
  $foo39 = $row39["valor1"];
}

while ($row40 = mysqli_fetch_assoc($resultado40)) {
  $foo40 = $row40["valor1"];
}

while ($row41 = mysqli_fetch_assoc($resultado41)) {
  $foo41 = $row41["valor1"];
}

while ($row42 = mysqli_fetch_assoc($resultado42)) {
  $foo42 = $row42["valor2"];
}

while ($row43 = mysqli_fetch_assoc($resultado43)) {
  $foo43 = $row43["valor1"];
}

while ($row45 = mysqli_fetch_assoc($resultado45)) {
  $foo45 = $row45["valor1"];
}
while ($row46 = mysqli_fetch_assoc($resultado46)) {
  $foo46 = $row46["valor1"];
}
while ($row47 = mysqli_fetch_assoc($resultado47)) {
  $foo47 = $row47["valor1"];
}
while ($row48 = mysqli_fetch_assoc($resultado48)) {
  $foo48 = $row48["valor1"];
}
while ($row49 = mysqli_fetch_assoc($resultado49)) {
  $foo49 = $row49["val1"];
}
while ($row50 = mysqli_fetch_assoc($resultado50)) {
  $foo50 = $row50["val1"];
}
while ($row51 = mysqli_fetch_assoc($resultado51)) {
  $foo51 = $row51["val1"];
}
while ($row52 = mysqli_fetch_assoc($resultado52)) {
  $foo52 = $row52["val1"];
}
while ($row53 = mysqli_fetch_assoc($resultado53)) {
  $foo53 = $row53["valor1"];
}
while ($row54 = mysqli_fetch_assoc($resultado54)) {
  $foo54 = $row54["valor1"];
}

while ($row55 = mysqli_fetch_assoc($resultado55)) {
  $foo55 = $row55["val1"];
}
while ($row56 = mysqli_fetch_assoc($resultado56)) {
  $foo56 = $row56["val1"];
}
while ($row57 = mysqli_fetch_assoc($resultado57)) {
  $foo57 = $row57["val1"];
}
while ($row58 = mysqli_fetch_assoc($resultado58)) {
  $foo58 = $row58["val1"];
}
while ($row59 = mysqli_fetch_assoc($resultado59)) {
  $foo59 = $row59["FallaAct"];
}
while ($row60 = mysqli_fetch_assoc($resultado60)) {
  $foo60 = $row60["FallaAct"];
}
while ($row61 = mysqli_fetch_assoc($resultado61)) {
  $foo61 = $row61["FallaAct"];
}
while ($row62 = mysqli_fetch_assoc($resultado62)) {
  $foo62 = $row62["FallaAct"];
}
while ($row63 = mysqli_fetch_assoc($resultado63)) {
  $foo63 = $row63["FallaAct"];
}
while ($row64 = mysqli_fetch_assoc($resultado64)) {
  $foo64 = $row64["valor2"];
}
while ($row65 = mysqli_fetch_assoc($resultado65)) {
  $foo65 = $row65["valor1"];
}
while ($row66 = mysqli_fetch_assoc($resultado66)) {
  $foo66 = $row66["valor1"];
}
while ($row67 = mysqli_fetch_assoc($resultado67)) {
  $foo67 = $row67["val3"];
}
while ($row68 = mysqli_fetch_assoc($resultado68)) {
  $foo68 = $row68["valor1"];
}
while ($row69 = mysqli_fetch_assoc($resultado69)) {
  $foo69 = $row69["valor1"];
}
while ($row70 = mysqli_fetch_assoc($resultado70)) {
  $foo70 = $row70["valor1"];
}
while ($row71 = mysqli_fetch_assoc($resultado71)) {
  $foo71 = $row71["valor1"];
}
while ($row72 = mysqli_fetch_assoc($resultado72)) {
  $foo72 = $row72["valor1"];
}
while ($row73 = mysqli_fetch_assoc($resultado73)) {
  $foo73 = $row73["valor1"];
}




if(!isset($foo1)){
  $foo1=1;
}
if(!isset($foo2)){
  $foo2=1;
}
if(!isset($foo3)){
  $foo3=1;
}
if(!isset($foo4)){
  $foo4=1;
}
if(!isset($foo5)){
  $foo5=1;
}
if(!isset($foo6)){
  $foo6=1;
}
if(!isset($foo7)){
  $foo7=1;
}
if(!isset($foo8)){
  $foo8=1;
}
if(!isset($foo9)){
  $foo9=1;
}
if(!isset($foo10)){
  $foo10=1;
}
if(!isset($foo11)){
  $foo11=1;
}

if(!isset($foo12)){
  $foo12=1;
}
if(!isset($foo13)){
  $foo13=1;
}
if(!isset($foo14)){
  $foo14=1;
}
if(!isset($foo15)){
  $foo15=1;
}
if(!isset($foo16)){
  $foo16=1;
}
if(!isset($foo17)){
  $foo17=1;
}
if(!isset($foo18)){
  $foo18=1;
}
if(!isset($foo19)){
  $foo19=1;
}
if(!isset($foo20)){
  $foo20=1;
}
if(!isset($foo21)){
  $foo21=1;
}
if(!isset($foo22)){
  $foo22=1;
}
if(!isset($foo23)){
  $foo23=1;
}
if(!isset($foo24)){
  $foo24=1;
}
if(!isset($foo25)){
  $foo25=1;
}
if(!isset($foo53)){
  $foo53=0;
}
if(!isset($foo54)){
  $foo54=0;
}
 ?>


<style type="text/css"></style>

            <?php
          
          if ($rol_bop_remoto==0 OR $rol_instructor==0) {
            ?>
            <h1 style="position:absolute;left:611px;top:0px;
  color: white;font-size: 15px;line-height: 20px;background-color: #198951;">No  control</h1>
   <?php
          }
          ?>
<script type="text/javascript"></script>

 <?php include('bop_modulo/boptab.php'); ?>
<!--fin bop-->
<!--manifold  php-->

 <img class="mani1" src="img/manifold1.png" >

<br>
<form  method="POST">
<input type="text" style="position:absolute;" name="box1a" id="box1a" value="0" hidden="" ><br>


<?php   
if ($foo1a==3){?>
<img class="valvula1a" name="val1a" id="val1a" onMousedown="camval1a()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo1a==1) {?>
<img class="valvula1a" name="val1a" id="val1a" onMousedown="camval1a()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo1a==2) {?>
<img class="valvula1a" name="val1a" id="val1a" onMousedown="camval1a()" src="img/valvulaon.png" ><br>
<?php   } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb1a" id="resdb1a" value="<?php echo $foo1a;  ?>">
</form>
<div id="contenedor"></div>


 
<form  method="POST">
<input type="text" style="position:absolute;" name="box1b" id="box1b" value="0" hidden="" ><br>
<?php   
if ($foo1b==3){?>
<img class="valvula1b" name="val1b" id="val1b" onMousedown="camval1b()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo1b==1) {?>
<img class="valvula1b" name="val1b" id="val1b" onMousedown="camval1b()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo1b==2) {?>
<img class="valvula1b" name="val1b" id="val1b" onMousedown="camval1b()" src="img/valvulaon.png" ><br>
<?php   } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb1b" id="resdb1b" value="<?php echo $foo1b;  ?>">
</form>
<div id="contenedor"></div>


 
<form  method="POST">
<input type="text" style="position:absolute;" name="box1c" id="box1c" value="0" hidden="" ><br>


<?php   
if ($foo1c==3){?>
<img class="valvula1c" name="val1c" id="val1c" onMousedown="camval1c()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo1c==1) {?>
<img class="valvula1c" name="val1c" id="val1c" onMousedown="camval1c()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo1c==2) {?>
<img class="valvula1c" name="val1c" id="val1c" onMousedown="camval1c()" src="img/valvulaon.png" ><br>
<?php   } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb1c" id="resdb1c" value="<?php echo $foo1c;  ?>">
</form>
<div id="contenedor"></div>




<form  method="POST">
<input type="text" style="position:absolute;" name="box1d" id="box1d" value="0" hidden="" ><br>
<?php   
if ($foo1d==3){?>
<img class="valvula1d" name="val1d" id="val1d" onMousedown="camval1d()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo1d==1) {?>
<img class="valvula1d" name="val1d" id="val1d" onMousedown="camval1d()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo1d==2) {?>
<img class="valvula1d" name="val1d" id="val1d" onMousedown="camval1d()" src="img/valvulaon.png" ><br>
<?php   } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb1d" id="resdb1" value="<?php echo $foo1d;  ?>">
</form>
<div id="contenedor"></div>






<form  method="POST">
<input type="text" style="position:absolute;" name="box2a" id="box2a" value="0" hidden="" ><br>
<?php   
if ($foo2a==3){?>
<img class="valvula2a" name="val2d" id="val2a" onMousedown="camval2a()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo2a==1) {?>
<img class="valvula2a" name="val2a" id="val2a" onMousedown="camval2a()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo2a==2) {?>
<img class="valvula2a" name="val2a" id="val2a" onMousedown="camval2a()" src="img/valvulaon.png" ><br>
<?php   } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb2a" id="resdb2a" value="<?php echo $foo2a;  ?>">
</form>
<div id="contenedor"></div>

<form  method="POST">
<input type="text" style="position:absolute;" name="box" id="box" value="0" hidden="" ><br>
<?php   
if ($foo1==3){?>
<img class="valvula1" name="val1" id="val1" onMousedown="camval1()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo1==1) {?>
<img class="valvula1" name="val1" id="val1" onMousedown="camval1()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo1==2) {?>
<img class="valvula1" name="val1" id="val1" onMousedown="camval1()" src="img/valvulaon.png" ><br>
<?php   } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb" id="resdb" value="<?php echo $foo1;  ?>">
</form>
<div id="contenedor"></div>



<input type="button" id="valman1" style="position:absolute;margin-left:877px;margin-top:-1148px;width:38px;background-color:#7F0D01;"  onClick="valmanu1()"> 
<label id="DatoValmanu1"><?php echo $foo53;  ?></label>      
</input><br>

<div id="Valmanu1" onscroll="actualizarvalman1()">
          <div id="Valmanu1Sub">   
             </div>
          </div> 

          
<input  type="button" id="valman2" style="position:absolute;margin-left:1091px;margin-top:-1167px;width:40px;background-color:#7F0D01;" onClick="valmanu2()">
<label id="DatoValmanu2"><?php echo $foo54;  ?></label>      
</input><br>
<div id="Valmanu2" onscroll="actualizarvalman2()">
          <div id="Valmanu2Sub">   
             </div>
          </div> 


<form  method="POST">
<input type="text" style="position:absolute;" name="box2" id="box2" value="0" hidden="" ><br>
<?php   
if ($foo2==3) {
 ?>
<img class="valvula2" name="val2" id="val2" onMousedown="camval2()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo2==1) {
 ?>
<img class="valvula2" name="val2" id="val2" onMousedown="camval2()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo2==2) {
?>
<img class="valvula2" name="val2" id="val2" onMousedown="camval2()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb2" id="resdb2" value="<?php echo $foo2; ?>">
</form>






<form  method="POST">
<input type="text" style="position:absolute;" name="box3" id="box3" value="0" hidden="" ><br>
<?php   
if ($foo3==3) {
 ?>
<img class="valvula3" name="val3" id="val3" onMousedown="camval3()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo3==1) {
 ?>
<img class="valvula3" name="val3" id="val3" onMousedown="camval3()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo3==2) {
?>
<img class="valvula3" name="val3" id="val3" onMousedown="camval3()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb3" id="resdb3" value="<?php echo $foo3; ?>">
</form>




<form  method="POST">
<input type="text" style="position:absolute;" name="box4" id="box4" value="0" hidden="" ><br>
<?php   
if ($foo4==3) {
 ?>
<img class="valvula4" name="val4" id="val4" onMousedown="camval4()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo4==1) {
 ?>
<img class="valvula4" name="val4" id="val4" onMousedown="camval4()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo4==2) {
?>
<img class="valvula4" name="val4" id="val4" onMousedown="camval4()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb4" id="resdb4" value="<?php echo $foo4; ?>">

</form>

  
   
<form  method="POST">
<input type="text" style="position:absolute;" name="box5" id="box5" value="0" hidden="" ><br>
<?php   
if ($foo5==3) {
 ?>
<img class="valvula5" name="val5" id="val5" onMousedown="camval5()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo5==1) {
 ?>
<img class="valvula5" name="val5" id="val5" onMousedown="camval5()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo5==2) {
?>
<img class="valvula5" name="val5" id="val5" onMousedown="camval5()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb5" id="resdb5" value="<?php echo $foo5; ?>">
</form>



<form  method="POST">
<input type="text" style="position:absolute;" name="box6" id="box6" value="0" hidden="" ><br>
<?php   
if ($foo6==3) {
 ?>
<img class="valvula6" name="val6" id="val6" onMousedown="camval6()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo6==1) {
 ?>
<img class="valvula6" name="val6" id="val6" onMousedown="camval6()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo6==2) {
?>
<img class="valvula6" name="val6" id="val6" onMousedown="camval6()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb6" id="resdb6" value="<?php echo $foo6; ?>">
</form>



<form  method="POST">
<input type="text" style="position:absolute;" name="box7" id="box7" value="0" hidden="" ><br>
<?php   
if ($foo7==3) {
 ?>
<img class="valvula7" name="val7" id="val7" onMousedown="camval7()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo7==1) {
 ?>
<img class="valvula7" name="val7" id="val7" onMousedown="camval7()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo7==2) {
?>
<img class="valvula7" name="val7" id="val7" onMousedown="camval7()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb7" id="resdb7" value="<?php echo $foo7; ?>">
</form>


<form  method="POST">
<input type="text" style="position:absolute;" name="box8" id="box8" value="0" hidden="" ><br>
<?php   
if ($foo8==3) {
 ?>
<img class="valvula8" name="val8" id="val8" onMousedown="camval8()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo8==1) {
 ?>
<img class="valvula8" name="val8" id="val8" onMousedown="camval8()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo8==2) {
?>
<img class="valvula8" name="val8" id="val8" onMousedown="camval8()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb8" id="resdb8" value="<?php echo $foo8; ?>">
</form>


<form  method="POST">
<input type="text" style="position:absolute;" name="box9" id="box9" value="0" hidden="" ><br>
<?php   
if ($foo9==3) {
 ?>
<img class="valvula9" name="val9" id="val9" onMousedown="camval9()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo9==1) {
 ?>
<img class="valvula9" name="val9" id="val9" onMousedown="camval9()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo9==2) {
?>
<img class="valvula9" name="val9" id="val9" onMousedown="camval9()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb9" id="resdb9" value="<?php echo $foo9; ?>">
</form>
   






<form  method="POST">
<input type="text" style="position:absolute;" name="box10" id="box10" value="0" hidden="" ><br>
<?php   
if ($foo10==3) {
 ?>
<img class="valvula10" name="val10" id="val10" onMousedown="camval10()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo10==1) {
 ?>
<img class="valvula10" name="val10" id="val10" onMousedown="camval10()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo10==2) {
?>
<img class="valvula10" name="val10" id="val10" onMousedown="camval10()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb10" id="resdb10" value="<?php echo $foo10; ?>">
</form>


<form  method="POST">
<input type="text" style="position:absolute;" name="box11" id="box11" value="0" hidden="" ><br>
<?php   
if ($foo11==3) {
 ?>
<img class="valvula11" name="val11" id="val11" onMousedown="camval11()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo11==1) {
 ?>
<img class="valvula11" name="val11" id="val11" onMousedown="camval11()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo11==2) {
?>
<img class="valvula11" name="val11" id="val11" onMousedown="camval11()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb11" id="resdb11" value="<?php echo $foo11; ?>">
</form>
  





<form  method="POST">
<input type="text" style="position:absolute;" name="box12" id="box12" value="0" hidden="" ><br>
<?php   
if ($foo12==3) {
 ?>
<img class="valvula12" name="val12" id="val12" onMousedown="camval12()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo12==1) {
 ?>
<img class="valvula12" name="val12" id="val12" onMousedown="camval12()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo12==2) {
?>
<img class="valvula12" name="val12" id="val12" onMousedown="camval12()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb12" id="resdb12" value="<?php echo $foo12; ?>">
</form>





<form  method="POST">
<input type="text" style="position:absolute;" name="box13" id="box13" value="0" hidden="" ><br>
<?php   
if ($foo13==3) {
 ?>
<img class="valvula13" name="val13" id="val13" onMousedown="camval13()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo13==1) {
 ?>
<img class="valvula13" name="val13" id="val13" onMousedown="camval13()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo13==2) {
?>
<img class="valvula13" name="val13" id="val13" onMousedown="camval13()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb13" id="resdb13" value="<?php echo $foo13; ?>">
</form>


 <img class="mani2" src="img/manifold2.png">
<form  method="POST">
<input type="text" style="position:absolute;" name="box14" id="box14" value="0" hidden="" ><br>
<?php   
if ($foo14==3) {
 ?>
<img class="valvula14" name="val14" id="val14" onMousedown="camval14()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo14==1) {
 ?>
<img class="valvula14" name="val14" id="val14" onMousedown="camval14()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo14==2) {
?>
<img class="valvula14" name="val14" id="val14" onMousedown="camval14()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb14" id="resdb14" value="<?php echo $foo14; ?>">
</form>




 <form  method="POST">
<input type="text" style="position:absolute;" name="box15" id="box15" value="0" hidden="" ><br>
<?php   
if ($foo15==3) {
 ?>
<img class="valvula15" name="val15" id="val15" onMousedown="camval15()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo15==1) {
 ?>
<img class="valvula15" name="val15" id="val15" onMousedown="camval15()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo15==2) {
?>
<img class="valvula15" name="val15" id="val15" onMousedown="camval15()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb15" id="resdb15" value="<?php echo $foo15; ?>">
</form>



 <form  method="POST">
<input type="text" style="position:absolute;" name="box16" id="box16" value="0" hidden="" ><br>
<?php   
if ($foo16==3) {
 ?>
<img class="valvula16" name="val16" id="val16" onMousedown="camval16()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo16==1) {
 ?>
<img class="valvula16" name="val16" id="val16" onMousedown="camval16()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo16==2) {
?>
<img class="valvula16" name="val16" id="val16" onMousedown="camval16()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb16" id="resdb16" value="<?php echo $foo16; ?>">
</form>


     
 <form  method="POST">
<input type="text" style="position:absolute;" name="box17" id="box17" value="0" hidden="" ><br>
<?php   
if ($foo17==3) {
 ?>
<img class="valvula17" name="val17" id="val17" onMousedown="camval17()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo17==1) {
 ?>
<img class="valvula17" name="val17" id="val17" onMousedown="camval17()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo17==2) {
?>
<img class="valvula17" name="val17" id="val17" onMousedown="camval17()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb17" id="resdb17" value="<?php echo $foo17; ?>">
</form>



 <form  method="POST">
<input type="text" style="position:absolute;" name="box18" id="box18" value="0" hidden="" ><br>
<?php   
if ($foo18==3) {
 ?>
<img class="valvula18" name="val18" id="val18" onMousedown="camval18()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo18==1) {
 ?>
<img class="valvula18" name="val18" id="val18" onMousedown="camval18()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo18==2) {
?>
<img class="valvula18" name="val18" id="val18" onMousedown="camval18()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb18" id="resdb18" value="<?php echo $foo18; ?>">
</form>



 <form  method="POST">
<input type="text" style="position:absolute;" name="box19" id="box19" value="0" hidden="" ><br>
<?php   
if ($foo19==3) {
 ?>
<img class="valvula19" name="val19" id="val19" onMousedown="camval19()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo19==1) {
 ?>
<img class="valvula19" name="val19" id="val19" onMousedown="camval19()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo19==2) {
?>
<img class="valvula19" name="val19" id="val19" onMousedown="camval19()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb19" id="resdb19" value="<?php echo $foo18; ?>">
</form>



 <form  method="POST">
<input type="text" style="position:absolute;" name="box20" id="box20" value="0" hidden="" ><br>
<?php   
if ($foo20==3) {
 ?>
<img class="valvula20" name="val20" id="val20" onMousedown="camval20()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo20==1) {
 ?>
<img class="valvula20" name="val20" id="val20" onMousedown="camval20()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo20==2) {
?>
<img class="valvula20" name="val20" id="val20" onMousedown="camval20()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb20" id="resdb20" value="<?php echo $foo20; ?>">
</form>



 <form  method="POST">
<input type="text" style="position:absolute;" name="box21" id="box21" value="0" hidden="" ><br>
<?php   
if ($foo21==3) {
 ?>
<img class="valvula21" name="val21" id="val21" onMousedown="camval21()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo21==1) {
 ?>
<img class="valvula21" name="val21" id="val21" onMousedown="camval21()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo21==2) {
?>
<img class="valvula21" name="val21" id="val21" onMousedown="camval21()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb21" id="resdb21" value="<?php echo $foo21; ?>">
</form>



 <form  method="POST">
<input type="text" style="position:absolute;" name="box22" id="box22" value="0" hidden="" ><br>
<?php   
if ($foo22==3) {
 ?>
<img class="valvula22" name="val22" id="val22" onMousedown="camval22()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo22==1) {
 ?>
<img class="valvula22" name="val22" id="val22" onMousedown="camval22()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo22==2) {
?>
<img class="valvula22" name="val22" id="val22" onMousedown="camval22()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb22" id="resdb22" value="<?php echo $foo22; ?>">
</form>



 <form  method="POST">
<input type="text" style="position:absolute;" name="box23" id="box23" value="0" hidden="" ><br>
<?php   
if ($foo23==3) {
 ?>
<img class="valvula23" name="val23" id="val23" onMousedown="camval23()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo23==1) {
 ?>
<img class="valvula23" name="val23" id="val23" onMousedown="camval23()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo23==2) {
?>
<img class="valvula23" name="val23" id="val23" onMousedown="camval23()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb23" id="resdb23" value="<?php echo $foo23; ?>">
</form>




 <form  method="POST">
<input type="text" style="position:absolute;" name="box24" id="box24" value="0" hidden="" ><br>
<?php   
if ($foo24==3) {
 ?>
<img class="valvula24" name="val24" id="val24" onMousedown="camval24()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo24==1) {
 ?>
<img class="valvula24" name="val24" id="val24" onMousedown="camval24()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo24==2) {
?>
<img class="valvula24" name="val24" id="val24" onMousedown="camval24()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb24" id="resdb24" value="<?php echo $foo24; ?>">
</form>



 <form  method="POST">
<input type="text" style="position:absolute;" name="box25" id="box25" value="0" hidden="" ><br>
<?php   
if ($foo25==3) {
 ?>
<img class="valvula25" name="val25" id="val25" onMousedown="camval25()" src="img/valvula.png" ><br>
<?php   } ?>
<?php   
if ($foo25==1) {
 ?>
<img class="valvula25" name="val25" id="val25" onMousedown="camval25()" src="img/valvulaoff.png" ><br>
<?php   } ?>
<?php   
if ($foo25==2) {
?>
<img class="valvula25" name="val25" id="val25" onMousedown="camval25()" src="img/valvulaon.png" ><br>
<?php } ?>
<input style="background-color:red;position:absolute;"  type="text" hidden="" name="resdb25" id="resdb25" value="<?php echo $foo25; ?>">
</form>




   </div>

  </div>


  <!-- BLOQUE QUE TRAE LOS VALORES DE LAS VALVULAS PARA QUE SE ACTUALICEN UNA VEZ INICIADA O RECARGADA LA PAGINA -->
  <script>

//crea y recoje el estado de los botones para ser evaluados despues

var accionuper = document.getElementById("accionuper");
var accionblind = document.getElementById("accionblind");
var acctionlower = document.getElementById("acctionlower");

var green1 = document.getElementById("ledgreenanular");
green1.style.backgroundColor = "green";
var green2 = document.getElementById("ledgreenuper");
green2.style.backgroundColor = "green";
var green3 = document.getElementById("ledgreenblind");
green3.style.backgroundColor = "green";
var green4 = document.getElementById("ledgreenlower");
green4.style.backgroundColor = "green";


//variables temporales que se usan solo en esta funcion

var ledgreenanular = document.getElementById("ledgreenanular");
var ledredanular = document.getElementById("ledredanular");
var accionanular = document.getElementById("accionanular");
//
var agu1 = document.getElementById("agu1");
var ledgreenuper = document.getElementById("ledgreenuper");
var ledreduper = document.getElementById("ledreduper");
var accionuper = document.getElementById("accionuper");
//
var agu2 = document.getElementById("agu2");
var  ledgreenblind= document.getElementById("ledgreenblind");
var ledredblind = document.getElementById("ledredblind");
var accionblind = document.getElementById("accionblind");
//
var agu3 = document.getElementById("agu3");
var ledgreenlower = document.getElementById("ledgreenlower");
var ledredlower = document.getElementById("ledredlower");
var acctionlower = document.getElementById("acctionlower");


// Trae los datos de bd para luego asignarlos a las valvulas, botones y palancas del BOP

      val1dataprev = $.ajax({
        url: "bop_modulo/prevval.php",
        dataType:'text',
        data: {
            val1a: 'val1a',
            val1b: 'val1b',
            val1c: 'val1c',
            val1d: 'val1d',
            val1: 'val1',
            val2: 'val2',
            val2a: 'val2a',
            val3: 'val3',
            val4: 'val4',
            val5: 'val5',
            val6: 'val6',
            val7: 'val7',
            val8: 'val8',
            val9: 'val9',
            val10: 'val10',
            val11: 'val11',
            val12: 'val12',
            val13: 'val13',
            val14: 'val14',
            val15: 'val15',
            val16: 'val16',
            val17: 'val17',
            val18: 'val18',
            val19: 'val19',
            val20: 'val20',
            val21: 'val21',
            val22: 'val22',
            val23: 'val23',
            val24: 'val24',
            val25: 'val25',
            AnnularAbierto:'AnnularAbierto',
            UpperAbierto:'UpperAbierto',
            BlindAbierto:'BlindAbierto',
            LowerAbierto:'LowerAbierto',
            KillAbierto:'killAbierto',
            chokeAbierto:'chokeAbierto'            
            },
        type: "POST",
        async:false
        }).responseText;
        jsv1=JSON.parse(val1dataprev);  

        ival = jsv1[0];
        i= ival[0];
        i2val = jsv1[1];
        i2 = i2val[0];
        i3val = jsv1[2];
        i3 = i3val[0];
        i4val = jsv1[3];
        i4 = i4val[0];
        i5val = jsv1[4];
        i5 = i5val[0];
        i6val = jsv1[5];
        i6 = i6val[0];
        i7val = jsv1[6];
        i7 = i7val[0];
        i8val = jsv1[7];
        i8 = i8val[0];
        i9val = jsv1[8];
        i9 = i9val[0];
        i10val = jsv1[9];
        i10 = i10val[0];
        i11val = jsv1[10];
        i11 = i11val[0];
        i12val = jsv1[11];
        i12 = i12val[0];
        i13val = jsv1[12];
        i13 = i13val[0];
        i14val = jsv1[13];
        i14 = i14val[0];
        i15val = jsv1[14];
        i15 = i15val[0];
        i16val = jsv1[15];
        i16 = i16val[0];
        i17val = jsv1[16];
        i17 = i17val[0];
        i18val = jsv1[17];
        i18 = i18val[0];
        i19val = jsv1[18];
        i19 = i19val[0];
        i20val = jsv1[19];
        i20 = i20val[0];
        i21val = jsv1[20];
        i21 = i21val[0];
        i22val = jsv1[21];
        i22 = i22val[0];
        i23val = jsv1[22];
        i23 = i23val[0];
        i24val = jsv1[23];
        i24 = i24val[0];
        i25val = jsv1[24];
        i25 = i25val[0];
        i26val = jsv1[25];
        i26 = i26val[0];
        i27val = jsv1[26];
        i27 = i27val[0];
        i28val = jsv1[27];
        i28 = i28val[0];
        i29val = jsv1[28];
        i29 = i29val[0];
        i30val = jsv1[29];
        i30 = i30val[0];
      
        var countswch = jsv1[30]; //Estado Anular

        if (countswch == 0) {
        ledgreenanular.style.backgroundColor = "black";
        ledredanular.style.backgroundColor = "red";
        accionanular.style.backgroundColor = "red";
        countswch = 1;
        accionanular.disabled = true;
        estado_anular=0;
        document.getElementById('hostanular').value=1;
        }else {
        ledgreenanular.style.backgroundColor = "green";
        ledredanular.style.backgroundColor = "black";
        accionanular.style.backgroundColor = "green";
        document.getElementById('hostanular').value=2;
        estado_anular=1;
        countswch = 0;
        }

        var countsuper = jsv1[31]; //Estado upper

        if (countsuper == 0) {
        ledgreenuper.style.backgroundColor = "black";
        ledreduper.style.backgroundColor = "red";
        accionuper.style.backgroundColor = "red";
        countsuper = 1;
        accionanular.disabled = true;
        accionuper.disabled = true
        acctionlower.disabled = true;
        accionblind.disabled = true;
        estado_upper=0;

        document.getElementById('hostuper').value=1;
        } else {
        ledgreenuper.style.backgroundColor = "green";
        ledreduper.style.backgroundColor = "black";
        accionuper.style.backgroundColor = "green";
        document.getElementById('hostuper').value=2;
        estado_upper=1;
        countsuper = 0;
        }    

        var countsblind = jsv1[32]; //Estado blind

        if (countsblind == 0) {
        ledgreenblind.style.backgroundColor = "black";
        ledredblind.style.backgroundColor = "red";
        accionblind.style.backgroundColor = "red";
        countsblind = 1;
        accionanular.disabled = true;
        accionuper.disabled = true
        accionblind.disabled = true;
        acctionlower.disabled = true;
        estado_blind=0;
        document.getElementById('hostblind').value=1;
        } else {
        ledgreenblind.style.backgroundColor = "green";
        ledredblind.style.backgroundColor = "black";
        accionblind.style.backgroundColor = "green";
        document.getElementById('hostblind').value=2;
        countsblind = 0;
        estado_blind = 1;
        }

        var countslower = jsv1[33]; //Estado lower

        if (countslower == 0) {
        ledgreenlower.style.backgroundColor = "black";
        ledredlower.style.backgroundColor = "red";
        acctionlower.style.backgroundColor = "red";
        countslower = 1;
        accionanular.disabled = true;
        accionuper.disabled = true
        accionblind.disabled = true;
        acctionlower.disabled = true;
        document.getElementById('hostlower').value=1;
        estado_lower=0;

        } else {
        ledgreenlower.style.backgroundColor = "green";
        ledredlower.style.backgroundColor = "black";
        acctionlower.style.backgroundColor = "green";
        document.getElementById('hostlower').value=2;
        estado_lower=1;
        countslower = 0;
        }

        var estado_palanca1 = jsv1[34]; //Estado Palanca Kill
        
        /* var estado_palanca1;
        estado_palanca1=1;
 */
        if(estado_palanca1==1){
        document.getElementById('palanca1').src="img/Palancaopen.png";
        document.getElementById('palanca1').style.left="176px";
        }else{
        document.getElementById('palanca1').src="img/Palancaclose.png";
        document.getElementById('palanca1').style.left="188px";  
        }
        
        var estado_palanca2 = jsv1[35]; //Estado Palanca Choque

        if(estado_palanca2==1){
        document.getElementById('palanca2').src="img/Palancaopen.png";
        document.getElementById('palanca2').style.left="450px";
        }else{
        document.getElementById('palanca2').src="img/Palancaclose.png";
        document.getElementById('palanca2').style.left="460px";
        }

        box1a.value = i;
        box1b.value = i2;
        box1c.value = i3;
        box1d.value = i4;
        box.value = i5;
        box2.value = i6;
        box2a.value = i7;
        box3.value = i8;
        box4.value = i9;
        box5.value = i10;
        box6.value = i11;
        box7.value = i12;
        box8.value = i13;
        box9.value = i14;
        box10.value = i15;
        box11.value = i16;
        box12.value = i17;
        box13.value = i18;
        box14.value = i19;
        box15.value = i20;
        box16.value = i21;
        box17.value = i22;
        box18.value = i23;
        box19.value = i24;
        box20.value = i25;
        box21.value = i26;
        box22.value = i27;
        box23.value = i28;
        box24.value = i29;
        box25.value = i30;

  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.20/lodash.min.js"></script>
<!--   <script type="text/javascript"src="bop_funciones.js"></script>
 -->