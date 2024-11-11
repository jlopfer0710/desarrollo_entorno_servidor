<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 5</title>
</head>
<body>
	<?php  
		$frase="Hola soy yoooo";
		$cont=0;
		//Método del ejercicio hecho con un for
		for($i=0;$i<strlen($frase);$i+=1){
			if($frase[$i]==='o'){
				$cont+=1;
			}

		}
		echo "La letra o se repite: ".$cont.' veces<br>';
		//Método del ejercicio hecho con un substr_count
		echo "La letra o se repite: ".substr_count($frase, "o")." veces";
	?>
</body>
</html>