<?php

/* <!-- ARCHIVO QUE CONSULTA VALVULAS DE LA OPCION DE BOP --> */

error_reporting(0);

$conexion=mysqli_connect("localhost","root","","simulador");
session_start();

$usuval=$_SESSION['username'];

$pozo=$_SESSION['pozocon'];

if($pozo=="Defaull"){
    $usuval="Factory";
}



if ($box1a=$_POST['box1a']) {
$boxsave1a="CALL mani_pro(0,'$usuval','$pozo','','','','$box1a','','','val16')";
mysqli_query($conexion,$boxsave1a);
}
if ($box1b=$_POST['box1b']) {
$boxsave1b="CALL mani_pro(0,'$usuval','$pozo','','','','$box1b','','','val17')";
mysqli_query($conexion,$boxsave1b);
}
if ($box1c=$_POST['box1c']) {
$boxsave1c="CALL mani_pro(0,'$usuval','$pozo','','','','$box1c','','','val18')";
mysqli_query($conexion,$boxsave1c);
}
if ($box1d=$_POST['box1d']) {
$boxsave1d="CALL mani_pro(0,'$usuval','$pozo','','','','$box1d','','','val12')";
mysqli_query($conexion,$boxsave1d);
}




if ($box=$_POST['box']) {
$boxsave="CALL mani_pro(0,'$usuval','$pozo','','','','$box','','','val13')";
mysqli_query($conexion,$boxsave);
}



 if ($box2=$_POST['box2']) {
$boxsave2="CALL mani_pro(0,'$usuval','$pozo','','','','$box2','','','val14')";
mysqli_query($conexion,$boxsave2);
}

if ($box2a=$_POST['box2a']) {
$boxsave2a="CALL mani_pro(0,'$usuval','$pozo','','','','$box2a','','','val15')";
mysqli_query($conexion,$boxsave2a);
}


 if ($box3=$_POST['box3']) {
$boxsave3="CALL mani_pro(0,'$usuval','$pozo','','','','$box3','','','val7')";
mysqli_query($conexion,$boxsave3);
}


 if ($box4=$_POST['box4']) {
$boxsave4="CALL mani_pro(0,'$usuval','$pozo','','','','$box4','','','val8')";
mysqli_query($conexion,$boxsave4);
}


 if ($box5=$_POST['box5']) {
$boxsave5="CALL mani_pro(0,'$usuval','$pozo','','','','$box5','','','val9')";
mysqli_query($conexion,$boxsave5);
}


 if ($box6=$_POST['box6']) {
$boxsave6="CALL mani_pro(0,'$usuval','$pozo','','','','$box6','','','val10')";
mysqli_query($conexion,$boxsave6);
}


 if ($box7=$_POST['box7']) {
$boxsave7="CALL mani_pro(0,'$usuval','$pozo','','','','$box7','','','val11')";
mysqli_query($conexion,$boxsave7);
}


 if ($box8=$_POST['box8']) {
$boxsave8="CALL mani_pro(0,'$usuval','$pozo','','','','$box8','','','val5')";
mysqli_query($conexion,$boxsave8);
}


 if ($box9=$_POST['box9']) {
$boxsave9="CALL mani_pro(0,'$usuval','$pozo','','','','$box9','','','val6')";
mysqli_query($conexion,$boxsave9);
}


 if ($box10=$_POST['box10']) {
$boxsave10="CALL mani_pro(0,'$usuval','$pozo','','','','$box10','','','val3')";
mysqli_query($conexion,$boxsave10);
}


 if ($box11=$_POST['box11']) {
$boxsave11="CALL mani_pro(0,'$usuval','$pozo','','','','$box11','','','val4')";
mysqli_query($conexion,$boxsave11);
}


 if ($box12=$_POST['box12']) {
$boxsave12="CALL mani_pro(0,'$usuval','$pozo','','','','$box12','','','val1')";
mysqli_query($conexion,$boxsave12);
}


 if ($box13=$_POST['box13']) {
$boxsave13="CALL mani_pro(0,'$usuval','$pozo','','','','$box13','','','val2')";
mysqli_query($conexion,$boxsave13);
}
//val2




 if ($box14=$_POST['box14']) {
$boxsave14="CALL mani_pro(0,'$usuval','$pozo','','','','$box14','','','val19')";
mysqli_query($conexion,$boxsave14);
}


 if ($box15=$_POST['box15']) {
$boxsave15="CALL mani_pro(0,'$usuval','$pozo','','','','$box15','','','val20')";
mysqli_query($conexion,$boxsave15);
}


 if ($box16=$_POST['box16']) {
$boxsave16="CALL mani_pro(0,'$usuval','$pozo','','','','$box16','','','val21')";
mysqli_query($conexion,$boxsave16);

}


 if ($box17=$_POST['box17']) {
$boxsave17="CALL mani_pro(0,'$usuval','$pozo','','','','$box17','','','val22')";
mysqli_query($conexion,$boxsave17);
}


 if ($box18=$_POST['box18']) {
$boxsave18="CALL mani_pro(0,'$usuval','$pozo','','','','$box18','','','val23')";
mysqli_query($conexion,$boxsave18);
}


 if ($box19=$_POST['box19']) {
$boxsave19="CALL mani_pro(0,'$usuval','$pozo','','','','$box19','','','val24')";
mysqli_query($conexion,$boxsave19);
}


 if ($box20=$_POST['box20']) {
$boxsave20="CALL mani_pro(0,'$usuval','$pozo','','','','$box20','','','val25')";
mysqli_query($conexion,$boxsave20);
}


 if ($box21=$_POST['box21']) {
$boxsave21="CALL mani_pro(0,'$usuval','$pozo','','','','$box21','','','val25_1')";
mysqli_query($conexion,$boxsave21);
}


 if ($box22=$_POST['box22']) {
$boxsave22="CALL mani_pro(0,'$usuval','$pozo','','','','$box22','','','val25_2')";
mysqli_query($conexion,$boxsave22);
}


 if ($box23=$_POST['box23']) {
$boxsave23="CALL mani_pro(0,'$usuval','$pozo','','','','$box23','','','val25_3')";
mysqli_query($conexion,$boxsave23);
}

 if ($box24=$_POST['box24']) {
$boxsave24="CALL mani_pro(0,'$usuval','$pozo','','','','$box24','','','val25_4')";
mysqli_query($conexion,$boxsave24);
}

 if ($box25=$_POST['box25']) {
$boxsave25="CALL mani_pro(0,'$usuval','$pozo','','','','$box25','','','val25_5')";
mysqli_query($conexion,$boxsave25);
}

?>