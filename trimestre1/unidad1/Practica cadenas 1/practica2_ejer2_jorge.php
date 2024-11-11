<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 2</title>
</head>
<body>
	<?php  
		$correo="jorgelopezfernandez93@gmail.com";
		if(filter_var($correo,FILTER_VALIDATE_EMAIL)){
			echo "El formato del correo es el correcto <br>";
			$correo=explode('@', $correo);
			$nombre=$correo[0];
			$dominio=$correo[1];
			echo "El nombre de usuario es: ".$nombre."<br>El dominio del correo es: ".$dominio;
		}else{
			echo "El formato es incorrecto";
		}
	?>
</body>
</html>