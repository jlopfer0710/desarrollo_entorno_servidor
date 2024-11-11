<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 7</title>
</head>
<body>
	<?php  
		function cuadrado($numero){
			return $numero*$numero;
		}
		function cubo($numero){
			return $numero*$numero*$numero;
		}
		$numero=3;
		echo "El cuadrado de: ".$numero." es: ".cuadrado($numero);
		echo "<br> El cubo de: ".$numero." es: ".cubo($numero);
	?>
</body>
</html>