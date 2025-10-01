

function btnactc() {
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

  if (y3.style.backgroundColor === "black") {
     x3.style.backgroundColor = "black";
    y3.style.backgroundColor = "red";
     w3.style.backgroundColor= "red";
 var n3 =0; 
   var z3 =0;
var timeout3=setInterval(function(){
agu4.style.transform = "rotate("+n3+"deg)";
  n3++;
w.disabled=true;
w1.disabled=true;
w2.disabled=true;
w3.disabled=true;
if (n3===0) {

    clearInterval(timeout3);
}
},10);


} else {
 x3.style.backgroundColor = "green";
    y3.style.backgroundColor = "black";
    w3.style.backgroundColor= "green";
     var n3 =-14; 
   var z3 =14;
var timeup3=setInterval(function(){
agu4.style.transform = "rotate("+z3+"deg)";
  z3--;
w.disabled=true;
w1.disabled=true;
w2.disabled=true;
w3.disabled=true;
if (z3===-14) {

    clearInterval(timeup3);
}
},1000);
 
}

}
    



