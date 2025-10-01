<?php
 

include('../vista/template.php');
?>
<link rel="stylesheet" type="text/css" href="../css/modal.css">
  <h2>Well Geometri</h2>



<!-- well geometryl
 -->
<div class="grid-container"> 


 <div class="grid-item" >
 <button id='myBtn' class='datos myBtn'>Casing-Open Hole</button>
<div id='myModal' class='modal myModal'>
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <p><b>Titulo 1</b>


 
    <table>
     <tr style="background-color:red;">
        <td  class="inputform">component</td>
        <td  class="inputform">oter-diameter</td>
        <td  class="inputform">iner-diameter</td>
        <td  class="inputform">measured-Lenht</td>
     </tr>

      <?php 

    while ($row_well=mysqli_fetch_array($result_daos_tablas)) {

   ?>

     <tr>
        <td ><input type="text" class="inputform" value=""><?php echo $row_well['Componente'];?></td>
        <td  class="inputform"><?php echo $row_well['Componente'];?></td>
        <td  class="inputform"><?php echo $row_well['Componente'];?></td>
        <td  class="inputform"><?php echo $row_well['Componente'];?></td>
     </tr>


<?php  } ?>



         </table>

  </div>
</div>


</div>
  




 <div class="grid-item" >
<button id='myBtn2' class='datos myBtn'>informacion2</button>
<div id='myModal2' class='modal myModal'>
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <p><b>Titulo 2</b>
    	 <form action="/action_page.php" class="inputform" >
   
    <input type="text" class="inputform" id="fname" name="firstname" placeholder="Your name..">

  
    <input type="text" id="lname"  class="inputform" name="lastname" placeholder="Your last name..">
     
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
</form>
  </div>
</div>

</div>


<div class="grid-item" >
<button id='myBtn2' class='datos myBtn'>informacion2</button>
<div id='myModal2' class='modal myModal'>
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <p><b>Titulo 2</b>
    	
  </div>
</div>

</div>


<div class="grid-item" >
<button id='myBtn2' class='datos myBtn'>informacion2</button>
<div id='myModal2' class='modal myModal'>
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <p><b>Titulo 2</b>
  </div>
</div>

</div>



<div class="grid-item" >
<button id='myBtn2' class='datos myBtn'>informacion2</button>
<div id='myModal2' class='modal myModal'>
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <p><b>Titulo 2</b>
  </div>
</div>

</div>



<div class="grid-item" >
<button id='myBtn2' class='datos myBtn'>informacion2</button>
<div id='myModal2' class='modal myModal'>
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <p><b>Titulo 2</b>
  </div>
</div>

</div>


<div class="grid-item" >
<button id='myBtn2' class='datos myBtn'>informacion2</button>
<div id='myModal2' class='modal myModal'>
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <p><b>Titulo 2</b>
  </div>
</div>

</div>


<div class="grid-item" >
<button id='myBtn2' class='datos myBtn'>informacion2</button>
<div id='myModal2' class='modal myModal'>
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <p><b>Titulo 2</b>
  </div>
</div>

</div>

<div class="grid-item" >
<button id='myBtn2' class='datos myBtn'>informacion2</button>
<div id='myModal2' class='modal myModal'>
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <p><b>Titulo 2</b>
  </div>
</div>

</div>
  



</div>






  <!-- <div class="grid-item">Mud Properties</div>   -->
<!--   <div class="grid-item">bit</div>
  <div class="grid-item">formation</div>
  <div class="grid-item">BHA</div>  
  <div class="grid-item">kits-leaks</div>
  <div class="grid-item">Rig Configuration</div>
  <div class="grid-item">WK Fluid</div>  
    <div class="grid-item">BOP</div> 
 --></div>
<?php include('../vista/fott.php'); ?>
<script src="../js1/modales.js/modal.jS"></script>