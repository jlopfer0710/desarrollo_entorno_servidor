<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 8</title>
</head>
<body>
	<?php 
		$frase="vamos al o'Brian";
		echo "frase original: ".$frase."<br>";
		echo "frase con el escape de carácteres problemáticos: ".addslashes($frase);
		echo "<br>Revertir proceso: ".stripcslashes($frase);
	 ?>
</body>
</html>