<?php
$h=$_POST["h"];

$s=round($h/(24*7));
$d=round($h%(24*7)/24);
$h1=$h%24;

echo "<h1> Semanas: ". $s;
echo "<h1> Dias: ". $d;
echo "<h1> Horas: ". $h1;

?>
<br>
<a target="_blank" class="fcc-btn" href="./Main.php">Volver Atras</a>