<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 5</title>
</head>
<body>
	<?php  
		function semisuma($num1,$num2){
			return ($num1+$num2)/2;
		}
		$num1=5;
		$num2=10;
		echo "El resultado de la semisuma entre: ".$num1." y ".$num2." es: ".number_format(semisuma($num1,$num2),2);
	?>
</body>
</html>