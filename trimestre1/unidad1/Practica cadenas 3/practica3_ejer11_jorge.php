<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 11</title>
</head>
<body>
	<?php  
		$frase="Esto es una frase";
		echo "frase original: ".$frase."<br>";
		$frase=str_split($frase);
		echo "Esta es la frase hecha array : <br>";
		print_r($frase);
	?>
</body>
</html>