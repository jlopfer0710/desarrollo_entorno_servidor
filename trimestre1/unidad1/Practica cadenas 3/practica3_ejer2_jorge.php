<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 2</title>
</head>
<body>
	<?php  
		$correo="jlopfer0710@gmail.com"	;
		$array=explode("@", $correo);
		$dominio=$array[1];
		$usuario=$array[0];
		echo "El nombre de usuario es: ".$usuario;
		echo "<br>El dominio es: ".$dominio;
	?>
</body>
</html>