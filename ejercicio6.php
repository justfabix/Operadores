<?php 
 $a=$_POST["a"];
 $b=$_POST["b"];
 $c=$_POST["c"];
 $R=pow($b, 2)-4 * $a * $c;
 $x0=-$b/(2*$a);
$mayor0_1=(-$b + sqrt($R) )/(2*$a);
$mayor0_2=(-$b - sqrt($R) )/(2*$a);
if ($R<0){echo "<h1>La ecuacion no tiene solucion porque R=$R";
}
if($R==0){ echo "<h1>El resultado: x=$x0";}
if($R>0){echo "<h1>El resultado: x1=$mayor0_2 y x2=$mayor0_1 ";} ?>
<br>
<a target="_blank" class="fcc-btn" href="./Main.php">Volver Atras</a>