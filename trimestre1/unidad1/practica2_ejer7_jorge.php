<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 7</title>
</head>
<body>
	<?php  
		$frase="Cadena original";
		echo "La cadena original es: ".$frase;
		echo "<br> La cadena modificada es: ";
		for($i=0;$i<strlen($frase);$i+=1){
			for($j=0;$j<2;$j+=1)
				echo $frase[$i];
		}
	?>
</body>
</html>