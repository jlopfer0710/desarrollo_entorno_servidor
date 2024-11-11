<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 3</title>
</head>
<body>
	<?php  
		$num=5;
		function num_secs($num){
			$secs=3600*24;
			return $num*$secs;
		}
		echo "La cantidad de segundos que hay en: $num días es: ".num_secs($num);
	?>
</body>
</html>