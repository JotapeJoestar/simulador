<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>bienvenido</title>
<meta charset="utf-8">
<meta http-equiv="Expires" content="0">
<meta name="google" value="notranslate"> 
    <link rel="stylesheet" href="../css1/bootstrap.min.css">
<style type="text/css">

	
body {
      background-repeat: no-repeat;
      background-attachment: fixed;
      width: auto;
    height: auto;
     background-image: url("../imagenes/index/fondo interfaz.png");

      margin:0px;
    border-radius: 5px;
    background-color: #f2f2f2;
        background-size: cover;



  font-family: Arial, Helvetica, sans-serif;
}

 margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}



.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}

.navbar a {
	  position: fixed;
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
	  position: fixed;
  background: #f1f1f1;
  color: black;
}

.navbar a.active {
	  position: fixed;
  background-color:rgba(24,24,236,1);
  color: white;
}

.main {

  padding: 16px;
  margin-bottom: 30px;
}


.logsup{
	  position: fixed;
	position: absolute;
	margin-left:85%;
}

/*menutopfin*/

.bott{
  border: 3px solid black;

  border-radius: 10px;
  width: 150px;
  margin:2px;
}

.logousu{
	margin-top:10%;
}



/* Style the side navigation */

.containerlog {
  position: relative;
}



.logo{
margin-top:30%;
margin-bottom:0%;
 position: absolute;
  bottom: 8px;
  left: 6px;
  font-size: 18px;
  width: 150px;
  border: 3px ;
  padding: 0px;


}

.sidenav {
  height: 100%;
  width: 215px;
  position: fixed;
  z-index: 1;
  border: 5px solid black;
  top: 10;
  left: 0;
background-image: url("../imagenes/index/f_menu.png");
  overflow-x: hidden;

    background-repeat: no-repeat;
    background-size: cover;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 10px;
  text-decoration: none;
  display: block;
  border:1px solid white;





}

/* Change color on hover */
.sidenav a:hover {
      
 
    background-color: #ccc;
color: black;
}

/* Style the content */
.content {
  margin-left: 15px;
  padding-left: 10px;

}



.inputform,select {
  width: auto;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
 border: 1px
  border-radius: 150px;

  box-sizing: border-box;
}

.inputsubmit {
  width:auto; 
   border: 1px solid blue;
        background-color:  #0066ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;

  border-radius: 4px;
  cursor: pointer;
}

.inputsubmit:hover {
 background-color:rgba(0,0,200,0.4);
}

.content {
  margin-left: 200px;
  padding-left: 20px;
}
.btnexit{
 
margin-top:70%;
background-color:red;
 background-color:rgba(200,0,0,0.6);
 margin-bottom:0px

}


button{
	 background-color:rgba(0,0,0,0.0);
	 border:none;
}

h1{


color:rgba(0,0,140,0.9);

}
h2{

  color:rgba(0,0,0,0.9);


}
img {
   position: relative;
  top: 8px;
  left: 16px;
  border: 1px;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
  margin-bottom: 50px;
}



.tittle{
text-decoration-color:blue;}
table{
	border:1px solid black;
}

td{
	border:1px solid black;
}
th{
color:white;
background: rgba(66,75,240,1);
background: -moz-linear-gradient(left, rgba(66,75,240,1) 0%, rgba(24,24,236,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(66,75,240,1)), color-stop(100%, rgba(24,24,236,1)));
background: -webkit-linear-gradient(left, rgba(66,75,240,1) 0%, rgba(24,24,236,1) 100%);
background: -o-linear-gradient(left, rgba(66,75,240,1) 0%, rgba(24,24,236,1) 100%);
background: -ms-linear-gradient(left, rgba(66,75,240,1) 0%, rgba(24,24,236,1) 100%);
background: linear-gradient(to right, rgba(66,75,240,1) 0%, rgba(24,24,236,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#424bf0', endColorstr='#1818ec', GradientType=1 );}

 
.container {
      width: 60%;
    height: auto;


      margin:0px;
    border-radius: 5px;
    background-color: rgba(0,0,0,0.0);


}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.table{
background-color: white;
border: 2px solid black;
  width: 55%;
  display: table;
  clear: both;
}

.rr{
  width:auto;
  padding: auto;
  border: 1px solid black;
  border-radius: 4px;
  resize: vertical;
  color: white;
background-color:green;
}
.rrt{
  width:auto;
  padding: auto;
  border: 1px solid black;
  border-radius: 4px;
  resize: vertical;
  color: grey;
background-color:white;

}

.actionsis{
width:130px;
height:140px;
float: right;
}


.actionsis:hover {
  color: black;
background-color:  rgba(0,0,1,0.1);
}



.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: scroll; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
     }
  
  /* Modal Content */


  

.elpozo{
    margin-right:90%;  
}
.actionsis{
   margin-right:0%;
   color: white;
border: 1px solid blue;
background-color:  rgba(24,24,236,1);
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;

}

.eliminar{
 margin-right:0%;
   color: white;
border: 1px solid blue;
background-color:  rgba(240,0,0,0.5);
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
.idiomas{
   margin-left:auto
   margin-top:0px;
margin-bottom:0px;
   color: white;
border: 1px solid blue;
background-color:  rgba(240,0,0,0.5);
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  position: relative;
}
.btnnuevo{
   margin-right:0%;
   color: white;
border: 1px solid blue;
background-color:  green;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
.btneliminar{
   margin-right:0%;
   color: white;
border: 1px solid blue;
background-color:  rgba(240,0,0,0.5);
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
.ini{
  margin-left:30px;
  
}


</style>

</head>
<?php 



 ?>
<body>
	<!-- <img  class="logsup" src="../imagenes/index/LOGO_LATERAL.png"> -->

