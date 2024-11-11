<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 6</title>
</head>
<body>
	<?php 
		$frase=" ... Hola a todos ... ";
		$lista='.';
		$frase=trim($frase);//eliminamos los primeros espacios
		$frase=trim($frase,'.');//eliminanos los puntos
		$frase=trim($frase);//eliminanos los otros espacios
		echo "Eliminamos los puntos antes del texto: ".$frase;
	 ?>
</body>
</html>