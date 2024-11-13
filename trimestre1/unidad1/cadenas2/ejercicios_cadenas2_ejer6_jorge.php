<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 6</title>
</head>
<body>
	<?php  
		$cadena="Bienvenido a nuestro cine. Ha efectuado usted la decisión correcta.";
		$nombrecliente=",Pablo González";
		$pos=strpos($cadena, '.');
		echo substr_replace($cadena, $nombrecliente, $pos,0);
	?>
</body>
</html>