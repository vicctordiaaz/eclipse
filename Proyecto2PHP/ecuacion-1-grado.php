<?php 
$a=$_POST['var1'];
$b=$_POST['var2'];

if ($a == 0) {
    echo "Esa ecuación no tiene solución real.";
} else {
    echo "x = ", (-$b / $a);
}
?>

<form method="POST">
	Numero1: <input type="text" name="var1" size="10" value="var1"/>
	Numero2: <input type="text" name="var2" size="10" value="var2"/>
	<input type="submit" value="Solucion" name="subSolucion"/>
</form>