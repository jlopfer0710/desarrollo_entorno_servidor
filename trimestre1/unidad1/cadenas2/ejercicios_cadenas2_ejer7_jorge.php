<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 7</title>
</head>
<body>
	<?php  
		$frase="Bienvenido a nuestro cine.Ha efectuado usted la decisión correcta.";
		$pos=strpos($frase, 'H');
		echo substr($frase, $pos);
		$pos=strpos($frase,'usted');
		echo"<br>".ucfirst(substr($frase,$pos));
		$pos=strpos($frase,'H');
		echo "<br>".substr($frase,$pos,5);
		echo "<br>".substr($frase,$pos,-5);
		$pos=strpos($frase,"ine");
		echo "<br>".ucfirst(substr($frase,$pos,9));
		echo "<br>".ucfirst(substr($frase,$pos,-5));
	?>
</body>
</html>