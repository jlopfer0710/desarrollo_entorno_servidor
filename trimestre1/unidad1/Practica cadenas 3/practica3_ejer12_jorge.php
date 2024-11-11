<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 12</title>
</head>
<body>
	<?php  
		$ip="192.168.1.34";
		if(filter_var($ip,FILTER_VALIDATE_IP)){
			echo "La IP es válida";
		}else{
			echo "La IP no es válida";
		}
	?>
</body>
</html>