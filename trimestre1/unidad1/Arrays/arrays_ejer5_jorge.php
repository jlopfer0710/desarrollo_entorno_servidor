<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 5</title>
</head>
<body>
	<?php  
		/*Crea un array llamado pila como éste:
		$pila = array(“cinco” => 5, “uno”=>1, “cuatro”=>4, “dos”=>2, “tres”=>3);
		Muestra el array ordenado por asort, arsort, ksort, sort, rsort.*/
		$pila=array("cinco"=>5,"uno"=>1,"cuatro"=>4,"dos"=>2,"tres"=>3);
		echo "El array es: ";
		print_r($pila);
		echo "<br>El array ordenado con asort es: ";
		asort($pila);
		print_r($pila);
		echo "<br>El array ordenado con arsort es: ";
		arsort($pila);
		print_r($pila);
		echo "<br>El array ordenado con ksort es: ";
		ksort($pila);
		print_r($pila);
		echo "<br>El array ordenado con sort es: ";
		sort($pila);
		print_r($pila);
		echo "<br>El array ordenado con rsort es: ";
		rsort($pila);
		print_r($pila);
	?>
</body>
</html>