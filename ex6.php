<?php
echo"<form >

  
  <input type='text' class='form-control' id='a'  required>
+
  
  <input type='text' class='form-control' id='b'  required>





  <button class='btn btn-primary' type='button' id='btn'>Calculer</button>

</form>
<p id='p'></p>";
echo"<script>

 btn=document.getElementById('btn');
 btn.addEventListener('click',function(){
   var A=parseFloat(document.getElementById('a').value);
   var B=parseFloat(document.getElementById('b').value);
var p=document.getElementById('p');
p.innerHTML='le resultat est'+(A+B);

 });
</script>";
?>

