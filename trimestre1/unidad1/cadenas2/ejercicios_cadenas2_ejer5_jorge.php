<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 5</title>
</head>
<body>
	<?php  
		$frase="Observa cada una";
		echo "La cadena orginal: ".$frase;
		echo"<br>La cadena modificada: ".substr_replace($frase, "o", -1);
	?>
</body>
</html>