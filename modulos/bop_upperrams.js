 

function btnacta() {
var x = document.getElementById("btn1");
var y = document.getElementById("btn2");
var w = document.getElementById("idbtn");
var agu1 =document.getElementById('agu1');
var x1 = document.getElementById("btn1a");
var y1 = document.getElementById("btn2a");
var w1 = document.getElementById("idbtna");
var agu2 =document.getElementById('agu2');
var x2 = document.getElementById("btn1b");
var y2 = document.getElementById("btn2b");
var w2 = document.getElementById("idbtnb");
var agu3 =document.getElementById('agu3');
var x3 = document.getElementById("btn1c");
var y3 = document.getElementById("btn2c");
var w3 = document.getElementById("idbtnc");
var agu4 =document.getElementById('agu4');

  if (y1.style.backgroundColor === "black") {
     x1.style.backgroundColor = "black";
    y1.style.backgroundColor = "red";
     w1.style.backgroundColor= "red";
 var n1 =0; 
   var z1 =5;
var timeout1=setInterval(function(){
agu2.style.transform = "rotate("+n1+"deg)";
  n1++;

if (n1===5) {

    clearInterval(timeout1);
}
},10);


} else {
 x1.style.backgroundColor = "green";
    y1.style.backgroundColor = "black";
    w1.style.backgroundColor= "green";
     var n1 =-5; 
   var z1 =5;
var timeup1=setInterval(function(){
agu2.style.transform = "rotate("+z1+"deg)";
  z1--;

if (z1===5) {

    clearInterval(timeup1);
}
},10);


var zz=-45;
var timeupactu=setInterval(function(){
agu4.style.transform = "rotate("+zz+"deg)";
  zz++;

if (zz===0) {

    clearInterval(timeupactu);
}
},100);
 
 
}

}