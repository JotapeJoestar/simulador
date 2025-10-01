 
function btnactb() {
    
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





  if (y2.style.backgroundColor === "black") {
     x2.style.backgroundColor = "black";
    y2.style.backgroundColor = "red";
     w2.style.backgroundColor= "red";
 var n2 =-140; 
   var z2 =140;
var timeout2=setInterval(function(){
agu3.style.transform = "rotate("+n2+"deg)";
  n2++;

if (n2===140) {

    clearInterval(timeout2);
}
},10);


} else {
 x2.style.backgroundColor = "green";
    y2.style.backgroundColor = "black";
    w2.style.backgroundColor= "green";
     var n2 =-140; 
   var z2 =140;
var timeup2=setInterval(function(){
agu3.style.transform = "rotate("+z2+"deg)";
  z2--;

if (z2===-140) {

    clearInterval(timeup2);
}
},10);
 
}

}

