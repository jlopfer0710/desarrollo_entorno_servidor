<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 4</title>
</head>
<body>
	<?php  
		function generarHTML($titulo){
			return '<!DOCTYPE html> <br><html><br><head><br><meta charset="utf-8"><br><meta name="viewport" content="width=device-width, initial-scale=1"><br><title>'.$titulo.'</title><br></head><br></html>';
		}
		$titulo='Ejercicio 4';
		$html=generarHTML($titulo);
		//para comprobar que el texto se ha copiado bien voy a usar el htmlespecialchars
		echo htmlspecialchars($html);
	?>
</body>
</html>