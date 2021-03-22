<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio1</title>
	<style type="text/css">
		input [type=text], input[type=submit], select{
			text-align:center;
			border-radius: 10px;
			border:1px solid black;
		}
	</style>
</head>
<body>
<?php

	$numero1 = "";
	$numero2 = "";
	$suma = "";
	$mensaje = "";
	$factorial = "";

	$numeroF = "";

	if (isset($_POST['subSumar'])) {
		$numero1 = $_POST['txtN1'];
		$numero2 = $_POST['txtN2'];
		if (is_numeric($numero1) && is_numeric($numero2)){
			$suma = $numero1 + $numero2;
		} else {
		$numero1 = "";
		$numero2 = "";
		$suma = "";
		$mensaje = "Datos incorrectos";
		}
	}

	if (isset($_POST['subFactorial'])) {
		$numeroF = $_POST['txtN1factorial'];
		$factorial = 1;
		if (is_numeric($numeroF)){
			for ($i = 1; $i <= $numeroF; $i++){
				$factorial = $factorial * $i;
			}
		} else {
		$numeroF = "";
		$fact = "";
		$mensaje = "Datos incorrectos";
		}
	}
?>
<form action="ejercicio.php" method="POST">
	Numero1: <input type="text" name="txtN1" size="10" value="<?php echo $numero1; ?>"/>
	Numero2: <input type="text" name="txtN2" size="10" value="<?php echo $numero2; ?>"/>
	Resultado: <input type="text" name="txtR" size="10" value="<?php echo $suma; ?>" disabled/>
	Mensaje: <input type="text" name="txtR" size="15" value="<?php echo $mensaje; ?>" disabled/>
	<input type="submit" value="Sumar" name="subSumar"/>
</form>
<br>
<form action="ejercicio.php" method="POST">
	Numero1: <input type="text" name="txtN1factorial" size="10" value="<?php echo $numeroF; ?>"/>
	Resultado: <input type="text" name="txtR" size="10" value="<?php echo $fact; ?>" disabled/>
	Mensaje: <input type="text" name="txtR" size="15" value="<?php echo $mensaje; ?>" disabled/>
	<input type="submit" value="Fact" name="subFactorial"/>
</form>
</body>
</html>