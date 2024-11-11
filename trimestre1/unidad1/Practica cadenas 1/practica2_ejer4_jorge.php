<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Práctica 2 ejercicio 4</title>
</head>
<body>
	<?php  
		$frase="Hola soy yo";
		echo "<br> Estas son las 2 primeras palabras: <br>";
		$pos=strpos($frase,' ', 0);
		$pos2=strpos($frase,' ',$pos+1);
		echo substr($frase, 0,$pos2);
	?>
</body>
</html>