<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 3</title>
</head>
<body>
	<?php  
		$nombre_usuario="jlopfer0710";
		$patron='/^[a-z-_A-Z0-9]{3,20}$/';
		if(strlen($nombre_usuario)<3 XOR strlen($nombre_usuario)>20){
			echo "longitud de cadena no permitida (min 3 max 20)";
		}else{
			if(preg_match($patron,$nombre_usuario)){
				echo "nombre de usuario válido <br>".$nombre_usuario;
			}else{
				echo "nombre de usuario no válido <br>".$nombre_usuario;
			}
		}
	?>
</body>
</html>
