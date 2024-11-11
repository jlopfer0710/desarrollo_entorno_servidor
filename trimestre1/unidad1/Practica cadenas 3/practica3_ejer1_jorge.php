<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php  
		$frase="Esto es una palabra de ejemplo";
		echo "La última palabra de la frase es: ".substr($frase, strrpos($frase, " "));
	?>
</body>
</html>