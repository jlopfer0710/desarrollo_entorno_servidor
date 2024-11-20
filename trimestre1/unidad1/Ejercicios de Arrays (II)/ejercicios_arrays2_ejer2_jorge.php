<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 2</title>
</head>
<body>
	<?php  
		/*2.Dado el siguiente array $array = array("blue", "red", "green", "blue", 
		"blue"); obtén las posiciones donde está el valor “blue” usando la función array_keys. Escribe
		las posiciones.*/
		$array=array("blue","red","green","blue","blue");
		$pos=array_keys($array,"blue");
		echo "Las posiciones donde se encuentran el valor 'blue' es: <br>";
		foreach ($pos as $valor) {
			echo $valor."<br>";
		}
	?>
</body>
</html>