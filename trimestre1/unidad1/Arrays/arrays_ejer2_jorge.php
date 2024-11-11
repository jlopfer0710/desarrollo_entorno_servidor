<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 2</title>
</head>
<body>
	<?php  
		$alumnos=array("Alexandru Pintaesta","Dogesita","Madero","DestroyXD","Veyond");
		//realizado con array_slice
		$aux=array_slice($alumnos, 0,3);
		echo "Realizado con array_slice<br>";
		echo "Los 3 alumnos seleccionados son: <br>";
		foreach ($aux as $alumnos_mostrar) {
			echo $alumnos_mostrar."<br>";
		}
		$aux=array_slice($alumnos,-2);
		echo "<br>Los 2 alumnos seleccionados desde el final son: <br>";
		foreach ($aux as $alumnos_mostrar) {
			echo $alumnos_mostrar."<br>";
		}
		//ahora lo realizaremos con array_splice
		$aux=array_splice($alumnos,0,3);
		echo "<br>Realizado con array_splice<br>";
		echo "Los 3 alumnos seleccionados son: <br>";
		foreach ($aux as $alumnos_mostrar) {
			echo $alumnos_mostrar."<br>";
		}
		$alumnos=array("Alexandru Pintaesta","Dogesita","Madero","DestroyXD","Veyond");
		echo "<br>Los 2 alumnos seleccinados desde el final son: <br>";
		$aux=array_splice($alumnos,-2);
		foreach ($aux as $alumnos_mostrar) {
			echo $alumnos_mostrar."<br>";
		}
	?>
</body>
</html>