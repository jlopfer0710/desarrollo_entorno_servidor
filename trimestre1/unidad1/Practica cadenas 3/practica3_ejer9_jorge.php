<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 9</title>
</head>
<body>
	<?php  
		$frase="lasleslisloslus";
		echo "frase original: ".$frase;
		echo "<br>frase con las vocales escapadas menos la \"a\": ".addcslashes($frase, 'eiou');
		echo "<br>frase revertida: ".stripcslashes($frase);
	?>
</body>
</html>