<?php 

/* SELECCIONA EN TIEMPO REAL LOS DATOS DE LA BASE DE DATOS Y LOS DEJA EN UN ARREGLO PARA QUE PUEDAN SER CARGADOS EN LA WEB */
/* $array= array($fluid_volume,$spp,$ecd,$estadobombastd,$estadobombadosstd,$falla1_par1,$falla1_to1,$falla2_par1,$falla2_to1); */

session_start();

include('../conexion.php');
$usuval=$_SESSION['username'];
$pozo=$_SESSION['pozocon'];
if($pozo=="Defaull"){
    $usuval="Factory";
  }
  
if (isset($_POST['cosult1'])) {
    $queri1=mysqli_query($conexion,"SELECT (SELECT ROUND(valor1, 0) FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='FlowAct') as valor1");
    $res1=mysqli_fetch_assoc($queri1);
    
    $queri2=mysqli_query($conexion,"SELECT (SELECT ROUND(valor1, 0) FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPP') as valor1");
    $res2=mysqli_fetch_assoc($queri2);
    
    $queri3=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ECD'");
    $res3=mysqli_fetch_assoc($queri3);

    $gain=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='GainLoss'");
    while($rows = mysqli_fetch_array($gain)) 
    {
    $gainresult[]= $rows['valor1'];
    }

    $flowRet=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='FlowRet'");
    while($rows = mysqli_fetch_array($flowRet)) 
    {
    $flowRetresult[]= $rows['valor1'];
    }

    $fluid_volume=$res1['valor1'];
    $spp=$res2['valor1']; 
    $ecd=$res3['valor1'];  



    $estadobomba=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Namevar='EstadoBomba1' AND NombreDB='$pozo'  AND Usuario='$usuval'");
    $estadobombast=mysqli_fetch_assoc($estadobomba);

    $estadobombados=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Namevar='EstadoBomba2' AND NombreDB='$pozo'  AND Usuario='$usuval'");
    $estadobombadosst=mysqli_fetch_assoc($estadobombados);

    $estadobombastd=$estadobombast['Descrip']; 
    $estadobombadosstd=$estadobombadosst['Descrip']; 
    

    $cpp=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='CPP'");
    while($rows = mysqli_fetch_array($cpp)) 
    {
    $cppresult[]= $rows['valor1'];
    }


    //// CONSULTA INFLUJOS
    $query17=mysqli_query($conexion,"SELECT * FROM drillingrig WHERE Usuario='$usuval' AND Pozo='$pozo' AND tipo='Circulacion' AND caracteristica='Anular' AND Tipodeflujo = 'Influjo' LIMIT 3 ");
    while($rows = mysqli_fetch_array($query17)) 
     {
     $resdataD1[]=$rows['valor1'];
     $resdataD2[]=$rows['valor2'];
     $resdataD3[]=$rows['valor7'];
     $resdataD4[]=$rows['valor8'];
     $resdataD5[]=$rows['valor10'];
     $resdataD6[]=$rows['valor11'];
     }

     if(empty($resdataD1))
     {
         $resdataD1[]=0;
     }
     if(empty($resdataD2))
     {
         $resdataD2[]=0;
     }
     if(empty($resdataD3))
     {
         $resdataD3[]=0;
     }
     if(empty($resdataD4))
     {
         $resdataD4[]=0;
     }
     if(empty($resdataD5))
     {
         $resdataD5[]=0;
     }
     if(empty($resdataD6))
     {
         $resdataD6[]=0;
     }

    
    $array= array($fluid_volume,$spp,$ecd,$gainresult,$estadobombastd,$estadobombadosstd,$flowRetresult,$cppresult,$resdataD1,$resdataD2,$resdataD3,$resdataD4,$resdataD5,$resdataD6);
    
    echo json_encode($array);
    
    }




if (isset($_POST['p1'])) {
$queri1=mysqli_query($conexion,"SELECT (SELECT ROUND(valor1, 0) FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='FlowAct') as valor1");
$res1=mysqli_fetch_assoc($queri1);

$queri2=mysqli_query($conexion,"SELECT (SELECT ROUND(valor1, 0) FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPP') as valor1");
$res2=mysqli_fetch_assoc($queri2);

$queri3=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ECD'");
$res3=mysqli_fetch_assoc($queri3);

$fluid_volume=$res1['valor1'];
/* if ($fluid_volume==0) {
  $fluid_volume='';
} */
$spp=$res2['valor1']; 
/* if ($spp==0) {
  $spp='';
}   */
$ecd=$res3['valor1'];  

$array= array($fluid_volume,$spp,$ecd);

echo json_encode($array);

}

if (isset($_POST['p2'])) {
$queri1=mysqli_query($conexion,"SELECT (SELECT ROUND(valor1, 0) FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='FlowAct') as valor1");
$res1=mysqli_fetch_assoc($queri1);
    
$queri2=mysqli_query($conexion,"SELECT (SELECT ROUND(valor1, 0) FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPP') as valor1");
$res2=mysqli_fetch_assoc($queri2);
    
$queri3=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ECD'");
$res3=mysqli_fetch_assoc($queri3);
    
$fluid_volume=$res1['valor1'];
/* if ($fluid_volume==0) {
  $fluid_volume='';
} */
$spp=$res2['valor1']; 
/* if ($spp==0) {
  $spp='';
}   */
$ecd=$res3['valor1'];  
    
$array= array($fluid_volume,$spp,$ecd);

echo json_encode($array);    
}

if (isset($_POST['grafs'])) {

$gain=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='GainLoss'");
while($rows = mysqli_fetch_array($gain)) 
{
$gainresult[]= $rows['valor1'];
}
$dataPB=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='glbPressBottonAnn'");
$resdatapb=mysqli_fetch_array($dataPB);

$dataPL=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='PressLeak'");
$resdatapl=mysqli_fetch_array($dataPL);

$dataPS=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='PressShoe'");
$resdataps=mysqli_fetch_array($dataPS);

$dataPF=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='PressFormation'");
$resdatapf=mysqli_fetch_array($dataPF);

$dataFact=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='InflujoActv'");
$resdatafact=mysqli_fetch_array($dataFact);

$bhanm=mysqli_query($conexion,"SELECT valor2 FROM drillingrig WHERE Usuario='$usuval' AND Pozo='$pozo' AND tipo='Circulacion' AND caracteristica='BHA' AND tipodeflujo='NewMud'");
$resbhanm=mysqli_fetch_array($bhanm); 

$anunm=mysqli_query($conexion,"SELECT valor1 FROM drillingrig WHERE Usuario='$usuval' AND Pozo='$pozo' AND tipo='Circulacion' AND caracteristica='Anular' AND tipodeflujo='NewMud'");
$resanunm=mysqli_fetch_array($anunm); 

if(empty($resbhanm))
{
    $resbhanm[]=0;
}
if(empty($resanunm))
{
    $resanunm[]=0;
}


$array= array($gainresult,$resdatapb,$resdatapl,$resdatapf,$resdataps,$resdatafact,$resbhanm,$resanunm);

echo json_encode($array);    

}


if (isset($_POST['datarol'])) {

  $queri1=mysqli_query($conexion,"SELECT (SELECT ROUND(valor1, 0) FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='FlowAct') as valor1");
  $res1=mysqli_fetch_assoc($queri1);

  $queri2=mysqli_query($conexion,"SELECT (SELECT ROUND(valor1, 0) FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPP') as valor1");
  $res2=mysqli_fetch_assoc($queri2);

  $queri3=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ECD'");
  $res3=mysqli_fetch_assoc($queri3);

  $queri4=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPMB1'");
  $res4=mysqli_fetch_assoc($queri4);

  $queri5=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPMB2'");
  $res5=mysqli_fetch_assoc($queri5);

  $queri6=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='STKB1'");
  $res6=mysqli_fetch_assoc($queri6);

  $queri7=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='STKB2'");
  $res7=mysqli_fetch_assoc($queri7);

  $queri8=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='STKTotal'");
  $res8=mysqli_fetch_assoc($queri8);

  $queri9=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPMtotal'");
  $res9=mysqli_fetch_assoc($queri9);

  $queri10=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='AlturaBloque'");
  $res10=mysqli_fetch_assoc($queri10);

  $queri11=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='Depth'");
  $res11=mysqli_fetch_assoc($queri11);
  
  $queri12=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ROP'");
  $res12=mysqli_fetch_assoc($queri12);

  $queri13=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='BitDepth'");
  $res13=mysqli_fetch_assoc($queri13);

  $queri14=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='RPM'");
  $res14=mysqli_fetch_assoc($queri14);

  $queri15=mysqli_query($conexion,"SELECT * FROM var_constantes WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='agu1'");
  $res15=mysqli_fetch_assoc($queri15);

  $queri16=mysqli_query($conexion,"SELECT * FROM var_constantes WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='agu2'");
  $res16=mysqli_fetch_assoc($queri16);

  $queri17=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='cuñas'");
  $res17=mysqli_fetch_assoc($queri17);

  $queri18=mysqli_query($conexion,"SELECT * FROM var_process WHERE Usuario='$usuval' AND Pozo='$pozo' AND namevar='Tiempo'");
  $res18=mysqli_fetch_assoc($queri18);

  $queri19=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='EstadoBlockConecc'");
  $res19=mysqli_fetch_assoc($queri19);

  $fluid_volume=$res1['valor1'];
  $spp=$res2['valor1']; 
  $ecd=$res3['valor1']; 
  $bom1=$res4['valor1']; 
  $bom2=$res5['valor1']; 
  $r1=$res6['valor1']; 
  $r2=$res7['valor1']; 
  $r3=$res8['valor1']; 
  $r4=$res9['valor1']; 
  $r5=$res10['valor1']; 
  $r6=$res11['valor1']; 
  $r7=$res12['valor1']; 
  $r8=$res13['valor1']; 
  $r9=$res14['valor1']; 
  $r10=$res15['valor1']; 
  $r11=$res16['valor1'];
  $r12=$res17['valor1'];
  $r13=$res18['val1'];
  $r14=$res18['val2'];
  $r15=$res18['val3'];
  $r16=$res19['valor2'];

  $array= array($fluid_volume,$spp,$ecd,$bom1,$bom2,$r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,$r10,$r11,$r12,$r13,$r14,$r15,$r16);

  echo json_encode($array); 

}


if (isset($_POST['nadita'])) {

$queri1=mysqli_query($conexion,"SELECT (SELECT ROUND(valor1, 0) FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='FlowAct') as valor1");
$res1=mysqli_fetch_assoc($queri1);
    
$queri2=mysqli_query($conexion,"SELECT (SELECT ROUND(valor1, 0) FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SPP') as valor1");
$res2=mysqli_fetch_assoc($queri2);
    
$queri3=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='ECD'");
$res3=mysqli_fetch_assoc($queri3);
    
$fluid_volume=$res1['valor1'];
if ($fluid_volume==0) {
  $fluid_volume='';
}
$spp=$res2['valor1']; 
if ($spp==0) {
  $spp='';
}  
$ecd=$res3['valor1'];  

$query4=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='ApagadoParcial' AND  componente='PUMPNo1'");
$falla1_par=mysqli_fetch_assoc($query4);

$query5=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Apagado Total' AND  componente='PUMPNo1'");
$falla1_to=mysqli_fetch_assoc($query5);

$query6=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='ApagadoParcial' AND  componente='PUMPNo2'");
$falla2_par=mysqli_fetch_assoc($query6);

$query7=mysqli_query($conexion,"SELECT * FROM fallas WHERE Usuario='$usuval' AND NombreDB='$pozo' AND tipoFalla='Apagado Total' AND  componente='PUMPNo2'");
$falla2_to=mysqli_fetch_assoc($query7); 

$estadobomba=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Namevar='EstadoBomba1' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$estadobombast=mysqli_fetch_assoc($estadobomba);

$estadobombados=mysqli_query($conexion,"SELECT * FROM var_rt WHERE Namevar='EstadoBomba2' AND NombreDB='$pozo'  AND Usuario='$usuval'");
$estadobombadosst=mysqli_fetch_assoc($estadobombados);

$estadobombastd=$estadobombast['Descrip']; 
$estadobombadosstd=$estadobombadosst['Descrip']; 

$flowRet=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='FlowRet'");
while($rows = mysqli_fetch_array($flowRet)) 
{
$flowRetresult[]= $rows['valor1'];
}

$gain=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='GainLoss'");
while($rows = mysqli_fetch_array($gain)) 
{
$gainresult[]= $rows['valor1'];
}


$falla1_par1=$falla1_par['FallaAct'];
$falla1_to1=$falla1_to['FallaAct'];
$falla2_par1=$falla2_par['FallaAct'];
$falla2_to1=$falla2_to['FallaAct'];

$dataPB=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='glbPressBottonAnn'");
$resdatapb=mysqli_fetch_array($dataPB);

$dataPL=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='PressLeak'");
$resdatapl=mysqli_fetch_array($dataPL);

$dataPS=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='PressShoe'");
$resdataps=mysqli_fetch_array($dataPS);

$dataPF=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='PressFormation'");
$resdatapf=mysqli_fetch_array($dataPF);

$dataFact=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE  Usuario='$usuval' and Pozo='$pozo' and Namevar='InflujoActv'");
$resdatafact=mysqli_fetch_array($dataFact);

$datanm=mysqli_query($conexion,"SELECT * FROM drillingrig WHERE Usuario='$usuval' AND Pozo='$pozo' AND tipo='FluidNewMud' AND componente='mw,fv,pv,yp'");
while($rows = mysqli_fetch_array($datanm)) 
     {
     $resmw[]=$rows['valor1'];
     $resfv[]=$rows['valor2'];
     $respv[]=$rows['valor3'];
     $resyp[]=$rows['valor4'];
     }

$bhanm=mysqli_query($conexion,"SELECT valor2 FROM drillingrig WHERE Usuario='$usuval' AND Pozo='$pozo' AND tipo='Circulacion' AND caracteristica='BHA' AND tipodeflujo='NewMud'");
$resbhanm=mysqli_fetch_array($bhanm); 

$anunm=mysqli_query($conexion,"SELECT valor1 FROM drillingrig WHERE Usuario='$usuval' AND Pozo='$pozo' AND tipo='Circulacion' AND caracteristica='Anular' AND tipodeflujo='NewMud'");
$resanunm=mysqli_fetch_array($anunm); 

if(empty($resbhanm))
{
    $resbhanm[]=0;
}
if(empty($resanunm))
{
    $resanunm[]=0;
}

//Consulta de circulacion modal

$query8=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='TotalPitVol'");
$respruebaf=mysqli_fetch_array($query8); 

$query9=mysqli_query($conexion,"SELECT valor1 FROM var_constantes WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SizeTankVolAct'");
$respruebaf2=mysqli_fetch_array($query9);

$query10=mysqli_query($conexion,"SELECT valor1 FROM var_rt WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='TripTank'");
$respruebaf3=mysqli_fetch_array($query10);

$query11=mysqli_query($conexion,"SELECT valor1 FROM var_constantes WHERE Usuario='$usuval' AND NombreDB='$pozo' AND Namevar='SizeTripTank'");
$respruebaf4=mysqli_fetch_array($query11);

//Fin consultas circulacion modal


// ******************************************************************************
// ************************************* Prueba Francisco  *************************
// *************************************************************************************

$query12=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE Usuario='$usuval' AND Pozo='$pozo' AND Namevar='AA_Prueba1'");
$respruebaf5=mysqli_fetch_array($query12);

$query13=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE Usuario='$usuval' AND Pozo='$pozo' AND Namevar='AA_Prueba2'");
$respruebaf6=mysqli_fetch_array($query13);

$query14=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE Usuario='$usuval' AND Pozo='$pozo' AND Namevar='AA_Prueba3'");
$respruebaf7=mysqli_fetch_array($query14);

$query15=mysqli_query($conexion,"SELECT val1 FROM var_process WHERE Usuario='$usuval' AND Pozo='$pozo' AND Namevar='AA_Prueba4'");
$respruebaf8=mysqli_fetch_array($query15);

$query16=mysqli_query($conexion,"SELECT * FROM drillingrig WHERE Usuario='$usuval' AND Pozo='$pozo'
 /* AND item=2 */ 
AND tipo='Circulacion' AND caracteristica='Anular'");
while($rows = mysqli_fetch_array($query16)) 
     {
     $respruebaf10[]=$rows['valor1'];
     $respruebaf11[]=$rows['valor2'];
     $respruebaf12[]=$rows['valor7'];
     $respruebaf13[]=$rows['valor8'];
     $respruebaf14[]=$rows['valor10'];
     $respruebaf15[]=$rows['valor11'];
     $respruebaf16[]=$rows['valor12'];
     }


$array= array($fluid_volume,$spp,$ecd,$estadobombastd,$estadobombadosstd,$falla1_par1,$falla1_to1,$falla2_par1,$falla2_to1
,$respruebaf,$respruebaf2,$respruebaf3,$respruebaf4,$respruebaf5,$respruebaf6,$respruebaf7,$respruebaf8,$respruebaf10,$respruebaf11,$respruebaf12,$respruebaf13,$respruebaf14,$respruebaf15,$respruebaf16,$gainresult,$flowRetresult,$resdataD1,$resdataD2,$resdataD3,$resdataD4,$resdataD5,$resdataD6,$resdatapb,$resdatapl,$resdatapf,$resdataps,$resdatafact,$resmw,$resfv,$respv,$resyp,$resbhanm,$resanunm
);

echo json_encode($array);
}

?>