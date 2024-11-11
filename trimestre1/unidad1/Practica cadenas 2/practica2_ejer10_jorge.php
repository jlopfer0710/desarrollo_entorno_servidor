<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 10</title>
</head>
<body>
	<?php  
		echo htmlspecialchars("<a href=\"/arbol/prueba.php\" class=\"prueba\" onmouseOver=\"status='hola'; return trae;\">pruebade\enlace</a>");
	?>
</body>
</html>