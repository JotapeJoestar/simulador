 <!--  CODIGO HTML DEL MODAL DE LA OPCION START EN EL MENU DE INSTRUCTOR-->
 
 <table style="background-color:#0CC5C8;position: absolute;left:22px;top:125px">
 <input type="number" id="data1234" autocomplete="off">
 <button id="data1234btn" style="position: absolute;left:209px;top:126px;width: 100px;height: 40px;" type = "submit"> Confirm </button>
 
<!-- CODIGO JS PARA ENVIAR CONFIGURACION DE SETUP  -->

<script type="text/javascript">

$(document).ready(data1234); 

data1234 =document.getElementById('data1234').value;

function data1234(){

// VALIDACION DE INGRESO DE DATO 1234
$('#data1234btn').click (function () {

    data1234 =document.getElementById('data1234').value;

    if (data1234 != '1234') 
    {   
        alert('The data is different from 1234 ');
    }

// ENVIO DE DATOS DE SETUP A LA TABLA VAR_RT
   else{

  document.getElementById('cbPause').value = 1;
  var Pausecb = document.getElementById('cbPause').value;

  $("#cbPause").prop("checked", true);
  btnModalpause.style.background = "red";

  $.ajax({
    url: "index_modulo/pause.php",
    data: {
      Pausecb: Pausecb,
    },
    type: "POST"
  })

    modalbtn = document.getElementById("data1234btn");
    modalbtn.style.backgroundColor  = "Green";

   var deep = document.getElementById('deeph').value;
   var bitdeeph = document.getElementById('bitdeeph').value;
   var altura = document.getElementById('altura').value;
   var actprac = 1;


  continue_var = 1
  document.getElementById("continueprac").value = continue_var;

  contibtn = $.ajax({
    url: "Modulo_graficas/php/fecha.php",
    dataType: 'text',
    type: "POST",
    data:
    {
      continue: continue_var
    },
    async: false
  }).responseText;

   document.getElementById('block_high').value = altura;
   document.getElementById('bit_depth').value = bitdeeph;
   document.getElementById("show_depth").value = bitdeeph;
   document.getElementById('defval').value = bitdeeph;
   document.getElementById('hole_depth').value = deep;
   document.getElementById('show_hole').value = deep;
   document.getElementById('p1_spm').value = 0;
   document.getElementById('p2_spm').value = 0;
   document.getElementById('total_spm').value = 0;
   document.getElementById('p1_total_spm').value = 0;
   document.getElementById('p2_total_spm').value = 0;
   document.getElementById('fluid_volume').value = 0; 
   document.getElementById('pump_pressure').value = 0; 
   document.getElementById('total_strokes').value = 0;
   document.getElementById('torque').value = 0;
   document.getElementById('rop').value = 0;
   document.getElementById('cassing_pressure').value = 0;

   counthoursi = 0;
   countmini = 0;
   countip = 0;
   

   var sola =  document.getElementById('agujaunohidden').value;
   var solb = document.getElementById('agujadoshidden').value;;

   agujauno.style.transform = "rotate(" + sola + "deg)";
   agujados.style.transform = "rotate(" + ((solb * 0.72) + 180) + "deg)";
   
   document.getElementById('data1234').value=0;

   imgdawn = document.getElementById('imgmov');
   block_highcount = document.getElementById("block_high").value;
   sum = block_highcount * 21.21;
  imgdawn.style.marginTop = "" + -sum + "px";

  document.getElementById('myRange').scrollTop = 0;
  document.getElementById('myRange2').scrollTop = 0;
  document.getElementById('myRange3').scrollTop = 0;


   setTimeout(() => {
    
    modalstart = document.getElementById("tvesModalstart");
    modalstart.style.display = "none";

    modalbtn = document.getElementById("data1234btn");
    modalbtn.style.backgroundColor = "rgba(0, 0, 300, 0.8)";

   }, 3000);

   setTimeout(() => {
    document.getElementById('cbPause').value = 0;
    var Pausecb = document.getElementById('cbPause').value;

      $("#cbPause").prop("checked", false);
      btnModalpause.style.background = 'rgba(0,0,300,0.8)';
      
    $.ajax({
      url: "index_modulo/pause.php",
      data: {
        Pausecb: Pausecb,
      },
      type: "POST"
    })

    location.reload();

  }, 2000); 

   $.ajax({
   url: "index_modulo/rolactudatos.php",
   data: {deep:deep,
       bitdeeph:bitdeeph,
       altura:altura
    },
   type: "POST",
   });

   }
});



}
</script>
