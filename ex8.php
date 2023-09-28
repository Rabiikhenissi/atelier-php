<?php
echo"<form >

  
Saisir le nombre<input type='text' class='form-control' id='a'  required>






<button class='btn btn-primary' type='button' id='btn'>Calculer</button>

</form>
<p id='p'></p>";
echo"<script>

btn=document.getElementById('btn');
btn.addEventListener('click',function(){
 var A=parseInt(document.getElementById('a').value);

var p=document.getElementById('p');
if (A%2==0){
    p.innerHTML=A+' est pair';}
    else{
        p.innerHTML=A+' est impair';}

});
</script>";
?>







