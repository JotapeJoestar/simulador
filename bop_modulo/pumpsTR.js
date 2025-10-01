/* FUNCION JS PARA VALIDAR EL ESTADO DE LAS VALVULAS Y CAMBIAR EL ESTILO CSS PARA DIFERENCIAR ENTRE ABIERTO Y CERRADO */

function pumptr() {
   
   var pump =
      $.ajax({
         url: 'bopval_tr/bopv1.php',
         dataType: 'text',
         async: false
      }).responseText;

   pumpjs = JSON.parse(pump);
   //b1
   document.getElementById('val1a').value = pumpjs[0];
   if (pumpjs[0] == 1) {
      document.images['val1a'].src = vopen.src;

   } else {
      document.images['val1a'].src = vclose.src;

   }

   //b2
   document.getElementById('val1b').value = pumpjs[1];
   if (pumpjs[1] == 1) {
      document.images['val1b'].src = vopen.src;

   } else {
      document.images['val1b'].src = vclose.src;

   }

   //b3   

   document.getElementById('val1c').value = pumpjs[2];
   if (pumpjs[2] == 1) {
      document.images['val1c'].src = vopen.src;

   } else {
      document.images['val1c'].src = vclose.src;

   }
   //b4
   document.getElementById('val1d').value = pumpjs[3];
   if (pumpjs[3] == 1) {
      document.images['val1d'].src = vopen.src;

   } else {
      document.images['val1d'].src = vclose.src;

   }
   //b5
   document.getElementById('val1').value = pumpjs[4];
   if (pumpjs[4] == 1) {
      document.images['val1'].src = vopen.src;

   } else {
      document.images['val1'].src = vclose.src;

   }
   //b6
   document.getElementById('val2').value = pumpjs[5];
   if (pumpjs[5] == 1) {
      document.images['val2'].src = vopen.src;

   } else {
      document.images['val2'].src = vclose.src;
   }
   //b7
   document.getElementById('val2a').value = pumpjs[6];
   if (pumpjs[6] == 1) {
      document.images['val2a'].src = vopen.src;

   } else {
      document.images['val2a'].src = vclose.src;

   }
   //b8
   document.getElementById('val3').value = pumpjs[7];
   if (pumpjs[7] == 1) {
      document.images['val3'].src = vopen.src;

   } else {
      document.images['val3'].src = vclose.src;

   }
   //b9
   document.getElementById('val4').value = pumpjs[8];
   if (pumpjs[8] == 1) {
      document.images['val4'].src = vopen.src;

   } else {
      document.images['val4'].src = vclose.src;

   }
   //b10
   document.getElementById('val5').value = pumpjs[9];
   if (pumpjs[9] == 1) {
      document.images['val5'].src = vopen.src;

   } else {
      document.images['val5'].src = vclose.src;

   }
   //b11
   document.getElementById('val7').value = pumpjs[11];
   if (pumpjs[11] == 1) {
      document.images['val7'].src = vopen.src;

   } else {
      document.images['val7'].src = vclose.src;

   }

   //b12
   document.getElementById('val8').value = pumpjs[12];
   if (pumpjs[12] == 1) {
      document.images['val8'].src = vopen.src;

   } else {
      document.images['val8'].src = vclose.src;

   }

   //b13
   document.getElementById('val9').value = pumpjs[13];
   if (pumpjs[13] == 1) {
      document.images['val9'].src = vopen.src;

   } else {
      document.images['val9'].src = vclose.src;

   }


   //b13
   document.getElementById('val10').value = pumpjs[14];
   if (pumpjs[14] == 1) {
      document.images['val10'].src = vopen.src;

   } else {
      document.images['val10'].src = vclose.src;

   }

   //b13
   document.getElementById('val11').value = pumpjs[15];
   if (pumpjs[15] == 1) {
      document.images['val11'].src = vopen.src;

   } else {
      document.images['val11'].src = vclose.src;

   }
   //b13
   document.getElementById('val12').value = pumpjs[16];
   if (pumpjs[16] == 1) {
      document.images['val12'].src = vopen.src;

   } else {
      document.images['val12'].src = vclose.src;

   }
   //b13
   document.getElementById('val13').value = pumpjs[17];
   if (pumpjs[17] == 1) {
      document.images['val13'].src = vopen.src;

   } else {
      document.images['val13'].src = vclose.src;

   }

   //b13
   document.getElementById('val14').value = pumpjs[18];
   if (pumpjs[18] == 1) {
      document.images['val14'].src = vopen.src;

   } else {
      document.images['val14'].src = vclose.src;

   }

   //b13
   document.getElementById('val15').value = pumpjs[19];
   if (pumpjs[19] == 1) {
      document.images['val15'].src = vopen.src;

   } else {
      document.images['val15'].src = vclose.src;

   }

   //b13
   document.getElementById('val16').value = pumpjs[20];
   if (pumpjs[20] == 1) {
      document.images['val16'].src = vopen.src;

   } else {
      document.images['val16'].src = vclose.src;

   }
   //b13
   document.getElementById('val17').value = pumpjs[21];
   if (pumpjs[21] == 1) {
      document.images['val17'].src = vopen.src;

   } else {
      document.images['val17'].src = vclose.src;

   }

   document.getElementById('val18').value = pumpjs[22];
   if (pumpjs[22] == 1) {
      document.images['val18'].src = vopen.src;

   } else {
      document.images['val18'].src = vclose.src;

   }
   document.getElementById('val19').value = pumpjs[23];
   if (pumpjs[23] == 1) {
      document.images['val19'].src = vopen.src;

   } else {
      document.images['val19'].src = vclose.src;

   }


   document.getElementById('val20').value = pumpjs[24];
   if (pumpjs[24] == 1) {
      document.images['val20'].src = vopen.src;

   } else {
      document.images['val20'].src = vclose.src;

   }


   document.getElementById('val21').value = pumpjs[25];
   if (pumpjs[25] == 1) {
      document.images['val21'].src = vopen.src;

   } else {
      document.images['val21'].src = vclose.src;

   }


   document.getElementById('val22').value = pumpjs[26];
   if (pumpjs[26] == 1) {
      document.images['val22'].src = vopen.src;

   } else {
      document.images['val22'].src = vclose.src;

   }




   document.getElementById('val23').value = pumpjs[27];
   if (pumpjs[27] == 1) {
      document.images['val23'].src = vopen.src;

   } else {
      document.images['val23'].src = vclose.src;

   }

   document.getElementById('val24').value = pumpjs[28];
   if (pumpjs[28] == 1) {
      document.images['val24'].src = vopen.src;

   } else {
      document.images['val24'].src = vclose.src;

   }

   document.getElementById('val25').value = pumpjs[29];
   if (pumpjs[29] == 1) {
      document.images['val25'].src = vopen.src;

   } else {
      document.images['val25'].src = vclose.src;

   }
}

setInterval(pumptr, 250);