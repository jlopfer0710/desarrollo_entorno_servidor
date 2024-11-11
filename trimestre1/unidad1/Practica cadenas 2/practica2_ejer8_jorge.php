<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 8</title>
</head>
<body>
	<?php 
		$frase="Esta cadena tiene muchas letras";
		echo "La primera ocurrencia de  'a' es: ".strpos($frase, 'a');
		echo "<br>La primera ocurrencia de  'm' es: ".strpos($frase, 'm');
		echo "<br>La primera ocurrencia de  'tiene' es: ".strpos($frase, 'tiene');
		echo "<br>La primera ocurrencia desde el final de 'a' es: ".strrpos($frase, 'a');
		echo "<br>La frase desde la aparición de la palabra  'cadena' hasta el final es: ".substr($frase, strpos($frase,'cadena'));
		echo "<br><br>Partes de la cadena<br>";
		echo "<br>".substr($frase,12);
		echo "<br>".substr($frase,18,6);
		echo "<br>".substr($frase,-6);
		echo "<br>".substr($frase,-26,6);
		echo "<br>".substr($frase,4,-7);
	 ?>
</body>
</html>