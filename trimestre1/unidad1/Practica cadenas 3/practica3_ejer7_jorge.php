<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 7</title>
</head>
<body>
	<?php  
		$frase="cadena";
		echo "Esta es la cadena: ".$frase;
		echo "<br>Esta es la cadena rellenada con # <br>".str_pad($frase, 20,'#',STR_PAD_BOTH);
	?>
</body>
</html>