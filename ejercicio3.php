<?php
$a=$_POST["d"];
$b=$_POST["c"];

$aEntreB=($a/$b);
$bEntreA=($b/$a);

echo "<h1>La division de A entre B es: ". $aEntreB;
echo "<h1>La division de B entre A es: ". $bEntreA;

?>
<br>
<a target="_blank" class="fcc-btn" href="./index.php">Volver Atras</a>
