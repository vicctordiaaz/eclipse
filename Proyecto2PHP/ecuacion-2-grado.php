<?php 

$a = $_POST['a']; 
$b = $_POST['b']; 
$c = $_POST['c']; 

$neg = -1; 

$menosb = $b * $neg; 
$oper1 = pow($b,2); 
$oper2 = 4*$a*$c; 
$resta = $oper1-$oper2; 
$raiz = pow($resta,(1/2)); 
$dosa = 2*$a; 

$result1 = ($menosb + $raiz)/$dosa; 
$result2 = ($menosb - $raiz)/$dosa; 

echo"X<sub>1</sub> = $result1<br>"; 
echo"X<sub>2</sub> = $result2"; 
?>
<form method="POST">
	Numero1: <input type="text" name="var1" size="10" value="var1"/>
	Numero2: <input type="text" name="var2" size="10" value="var2"/>
	<input type="submit" value="Solucion" name="subSolucion"/>
</form>