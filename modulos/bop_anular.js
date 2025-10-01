function btnact() {

    
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





  if (y.style.backgroundColor === "black") {
     x.style.backgroundColor = "black";
    y.style.backgroundColor = "red";
     w.style.backgroundColor= "red";
 var n =-0; 
  
var timeout=setInterval(function(){
agu1.style.transform = "rotate("+n+"deg)";

agu4.style.transform = "rotate("+45+"deg)";



  n++;

if (n===0) {

    clearInterval(timeout);
}
},130);


} else {
 x.style.backgroundColor = "green";
    y.style.backgroundColor = "black";
    w.style.backgroundColor= "green";
      
   var z =0;
var timeup=setInterval(function(){
agu1.style.transform = "rotate("+z+"deg)";
  z--;
w.disabled=true;
w1.disabled=true;
w2.disabled=true;
w3.disabled=true;
if (z===-15) {

    clearInterval(timeup);
w.disabled=false;
w1.disabled=false;
w2.disabled=false;
w3.disabled=false;
}
},1000);
 
}

}
