<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 5</title>
</head>
<body>
	<?php  
	/*Crea un array de dos dimensiones, de manera que en una dimensión contenga
	el tipo de colores (fuerte o suave) y en la otra 3 colores de cada tipo. Muestra
	una tabla como la siguiente recorriendo el array:*/
		$colores=[
			"Fuertes"=>["Rojo:FF0000","Verde:00FF00","Azul:0000FF"],
			"Suaves"=>["Rosa:FE9ABC","Amarillo:FDF189","Malva:BC8F8F"]
		];
		echo "<table  cellpadding='10' style='border-collapse:collapse;'>";
		echo "<tr style='font-weight:bold'><td style='border:none'>Colores Fuertes:</td>";
		foreach ($colores["Fuertes"] as $color) {
			if($color=="Rojo:FF0000"){
				echo "<td style='background-color: red;border:2px solid black'>$color</td>";
			}else if($color=="Verde:00FF00"){
				echo "<td style='background-color: green;border:2px solid black'>$color</td>";
			}else if ($color=="Azul:0000FF") {
				echo "<td style='background-color: blue;border:2px solid black'>$color</td>";
			}
		}
		echo"</tr>";
		echo "<tr style='font-weight:bold;'><td style='border:none'>Colores Suaves:</td>";
		foreach ($colores["Suaves"] as $color) {
			if($color=="Rosa:FE9ABC"){
				echo "<td style='background-color: #FE9ABC;border:2px solid black'>$color</td>";
			}else if($color=="Amarillo:FDF189"){
				echo "<td style='background-color: #FDF189;border:2px solid black'>$color</td>";
			}else if($color=="Malva:BC8F8F"){
				echo "<td style='background-color: #BC8F8F;border:2px solid black'>$color</td>";
			}
		}
	?>
</body>
</html>