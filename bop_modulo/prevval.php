<?php 

/* <!-- ARCHIVO QUE CONSULTA EL ESTADO DE LAS VALVULAS DE LA OPCION DE BOP --> */

error_reporting(0);

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

$usuval=$_SESSION['username'];

$pozo=$_SESSION['pozocon'];

if($pozo=="Defaull"){
    $usuval="Factory";
}


if ($val1a=$_POST['val1a']) {
    $consulval1a="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L7V1_Open';";
    $resultado=mysqli_query($conexion,$consulval1a);
    while($rows = mysqli_fetch_array($resultado)) 
     {
     $resultadoval1[]= $rows['valor1'];
     }
}

if ($val1b=$_POST['val1b']) {
    $consulval1b="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L7V2_Open';";
    $resultado=mysqli_query($conexion,$consulval1b);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval2[]= $rows['valor1'];
    }
}
    
if ($val1c=$_POST['val1c']) {
    $consulval1c="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L7V3_Open';";
    $resultado=mysqli_query($conexion,$consulval1c);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval3[]= $rows['valor1'];
    }
}

if ($val1d=$_POST['val1d']) {
    $consulval1d="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L6V1_Open';";
    $resultado=mysqli_query($conexion,$consulval1d);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval4[]= $rows['valor1'];
    }
}

if ($val1=$_POST['val1']) {
    $consulval1="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L6V2_Open';";
    $resultado=mysqli_query($conexion,$consulval1);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval5[]= $rows['valor1'];
    }
}

if ($val2=$_POST['val2']) {
    $consulval2="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L6V3_Open';";
    $resultado=mysqli_query($conexion,$consulval2);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval6[]= $rows['valor1'];
    }
}

if ($val2a=$_POST['val2a']) {
    $consulval2a="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L6V4_Open';";
    $resultado=mysqli_query($conexion,$consulval2a);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval7[]= $rows['valor1'];
    }
}

if ($val3=$_POST['val3']) {
    $consulval3="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L4V1_Open';";
    $resultado=mysqli_query($conexion,$consulval3);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval8[]= $rows['valor1'];
    }
}

if ($val4=$_POST['val4']) {
    $consulval4="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L4V2_Open';";
    $resultado=mysqli_query($conexion,$consulval4);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval9[]= $rows['valor1'];
    }
}

if ($val5=$_POST['val5']) {
    $consulval5="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L4V3_Open';";
    $resultado=mysqli_query($conexion,$consulval5);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval10[]= $rows['valor1'];
    }
}

if ($val6=$_POST['val6']) {
    $consulval6="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L4V4_Open';";
    $resultado=mysqli_query($conexion,$consulval6);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval11[]= $rows['valor1'];
    }
}

if ($val7=$_POST['val7']) {
    $consulval7="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L4V5_Open';";
    $resultado=mysqli_query($conexion,$consulval7);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval12[]= $rows['valor1'];
    }
}

if ($val8=$_POST['val8']) {
    $consulval8="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L3V1_Open';";
    $resultado=mysqli_query($conexion,$consulval8);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval13[]= $rows['valor1'];
    }
}

if ($val9=$_POST['val9']) {
    $consulval9="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L3V2_Open';";
    $resultado=mysqli_query($conexion,$consulval9);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval14[]= $rows['valor1'];
    }
}

if ($val10=$_POST['val10']) {
    $consulval10="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L2V1_Open';";
    $resultado=mysqli_query($conexion,$consulval10);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval15[]= $rows['valor1'];
    }
}

if ($val11=$_POST['val11']) {
    $consulval11="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L2V2_Open';";
    $resultado=mysqli_query($conexion,$consulval11);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval16[]= $rows['valor1'];
    }
}

if ($val12=$_POST['val12']) {
    $consulval12="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L1V1_Open';";
    $resultado=mysqli_query($conexion,$consulval12);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval17[]= $rows['valor1'];
    }
}

if ($val13=$_POST['val13']) {
    $consulval13="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L1V2_Open';";
    $resultado=mysqli_query($conexion,$consulval13);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval18[]= $rows['valor1'];
    }
}

if ($val14=$_POST['val14']) {
    $consulval14="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='B1B_Open';";
    $resultado=mysqli_query($conexion,$consulval14);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval19[]= $rows['valor1'];
    }
}

if ($val15=$_POST['val15']) {
    $consulval15="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='B2B_Open';";
    $resultado=mysqli_query($conexion,$consulval15);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval20[]= $rows['valor1'];
    }
}

if ($val16=$_POST['val16']) {
    $consulval16="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='BL_2A_Open';";
    $resultado=mysqli_query($conexion,$consulval16);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval21[]= $rows['valor1'];
    }
}

if ($val17=$_POST['val17']) {
    $consulval17="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='BL_2B_Open';";
    $resultado=mysqli_query($conexion,$consulval17);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval22[]= $rows['valor1'];
    }
}

if ($val18=$_POST['val18']) {
    $consulval18="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='BL_2C_Open';";
    $resultado=mysqli_query($conexion,$consulval18);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval23[]= $rows['valor1'];
    }
}

if ($val19=$_POST['val19']) {
    $consulval19="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='BL_1A_Open';";
    $resultado=mysqli_query($conexion,$consulval19);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval24[]= $rows['valor1'];
    }
}

if ($val20=$_POST['val20']) {
    $consulval20="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='BL_1B_Open';";
    $resultado=mysqli_query($conexion,$consulval20);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval25[]= $rows['valor1'];
    }
}

if ($val21=$_POST['val21']) {
    $consulval21="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='B1A_Open';";
    $resultado=mysqli_query($conexion,$consulval21);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval26[]= $rows['valor1'];
    }
}

if ($val22=$_POST['val22']) {
    $consulval22="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='B_CementHeadOpen';";
    $resultado=mysqli_query($conexion,$consulval22);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval27[]= $rows['valor1'];
    }
}

if ($val23=$_POST['val23']) {
    $consulval23="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='B_CementPumpOpen';";
    $resultado=mysqli_query($conexion,$consulval23);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval28[]= $rows['valor1'];
    }
}

if ($val24=$_POST['val24']) {
    $consulval24="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='B_ToChokeOpen';";
    $resultado=mysqli_query($conexion,$consulval24);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval29[]= $rows['valor1'];
    }
}

if ($val25=$_POST['val25']) {
    $consulval25="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='B2A_open';";
    $resultado=mysqli_query($conexion,$consulval25);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval30[]= $rows['valor1'];
    }
}
////////////////////////////////////////////////////////
if ($AnnularAbierto=$_POST['AnnularAbierto']) {
    $consulAnnularAbierto="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='AnnularAbierto';";
    $resultado=mysqli_query($conexion,$consulAnnularAbierto);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval31[]= $rows['valor1'];
    }
}

if ($UpperAbierto=$_POST['UpperAbierto']) {
    $consulUpperAbierto="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='UpperAbierto';";
    $resultado=mysqli_query($conexion,$consulUpperAbierto);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval32[]= $rows['valor1'];
    }
}

if ($BlindAbierto=$_POST['BlindAbierto']) {
    $consulBlindAbierto="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='BlindAbierto';";
    $resultado=mysqli_query($conexion,$consulBlindAbierto);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval33[]= $rows['valor1'];
    }
}

if ($LowerAbierto=$_POST['LowerAbierto']) {
    $consulLowerAbierto="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='LowerAbierto';";
    $resultado=mysqli_query($conexion,$consulLowerAbierto);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval34[]= $rows['valor1'];
    }
}

if ($KillAbierto=$_POST['KillAbierto']) {
    $consulKillAbierto="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='KillAbierto';";
    $resultado=mysqli_query($conexion,$consulKillAbierto);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval35[]= $rows['valor1'];
    }
}

if ($chokeAbierto=$_POST['chokeAbierto']) {
    $consulchokeAbierto="SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='chokeAbierto';";
    $resultado=mysqli_query($conexion,$consulchokeAbierto);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval36[]= $rows['valor1'];
    }
}

///////

if ($ChkRem1_Val_Activo=$_POST['ChkRem1_Val_Activo']) {
    $consulChkRem1_Val_Activo="SELECT Descrip FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ChkRem1_Val_Activo';";
    $resultado=mysqli_query($conexion,$consulChkRem1_Val_Activo);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval37[]= $rows['Descrip'];
    }
}

if ($ChkRem2_Val_Activo=$_POST['ChkRem2_Val_Activo']) {
    $consulChkRem2_Val_Activo="SELECT descrip FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ChkRem2_Val_Activo';";
    $resultado=mysqli_query($conexion,$consulChkRem2_Val_Activo);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval38[]= $rows['descrip'];
    }
}

if ($L5V1_Val_Activo=$_POST['L5V1_Val_Activo']) {
    $consulL5V1_Val_Activo="SELECT descrip FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L5V1_Val_Activo';";
    $resultado=mysqli_query($conexion,$consulL5V1_Val_Activo);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval39[]= $rows['descrip'];
    }
}

if ($L5V2_Val_Activo=$_POST['L5V2_Val_Activo']) {
    $consulL5V2_Val_Activo="SELECT descrip FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='L5V2_Val_Activo';";
    $resultado=mysqli_query($conexion,$consulL5V2_Val_Activo);
    while($rows = mysqli_fetch_array($resultado)) 
    {
    $resultadoval40[]= $rows['descrip'];
    }
}

$arrayval= array($resultadoval1,$resultadoval2,$resultadoval3,$resultadoval4,$resultadoval5,$resultadoval6,$resultadoval7,$resultadoval8,$resultadoval9,$resultadoval10,$resultadoval11,$resultadoval12,$resultadoval13,$resultadoval14,$resultadoval15,$resultadoval16,$resultadoval17,$resultadoval18,$resultadoval19,$resultadoval20,$resultadoval21,$resultadoval22,$resultadoval23,$resultadoval24,$resultadoval25,$resultadoval26,$resultadoval27,$resultadoval28,$resultadoval29,$resultadoval30,$resultadoval31,$resultadoval32,$resultadoval33,$resultadoval34,$resultadoval35,$resultadoval36,$resultadoval37,$resultadoval38,$resultadoval39,$resultadoval40);

echo json_encode($arrayval);


?>