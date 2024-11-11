<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 4</title>
</head>
<body>
	<?php 
	 	/*Dado el array anterior comprueba si en él se encuentra el color “FF88CC” y el color “FF0000” usando la función in_array.*/
	 	$colores=[
			"Fuertes"=>["Rojo:FF0000","Verde:00FF00","Azul:0000FF"],
			"Suaves"=>["Rosa:FE9ABC","Amarillo:FDF189","Malva:BC8F8F"]
		];
		if (in_array('Rojo:FF0000', array_merge(...array_values($colores)))) {
    		echo "El color FF0000 se encuentra en el Array Colores<br>";
		} else {
    		echo "El color FF0000 no se encuentra en el Array Colores<br>";
		}
		if (in_array('FF88CC', array_merge(...array_values($colores)))) {
    		echo "El color FF88CC se encuentra en el Array Colores<br>";
		} else {
    		echo "El color FF88CC no se encuentra en el Array Colores<br>";
		}
	 ?>
</body>
</html>