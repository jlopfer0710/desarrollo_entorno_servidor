<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 10</title>
</head>
<body>
	<?php  
		$frase="No me gusta usra +*[] en cadenas";
		echo "frase original: ".$frase;
		echo "<br>frase escapada: ".quotemeta($frase);
	?>
</body>
</html>