<?php
echo"<h1> calcul sur les variables</h1>";
$TVA=0.2;
$Prix=150;
$Nombre=10;
$ht=$Prix*$Nombre;
$TTC=$Prix*$Nombre*(1+$TVA);
echo"prix hors taxes =".$ht."<br> prix avec taxe =".$TTC;
?>

