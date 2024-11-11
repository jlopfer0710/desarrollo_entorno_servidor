<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php  
		$frase1="Hola soy paco";
		$frase2="Si quieres te atraco";
		$aux1=substr($frase1,-3);
		$aux2=substr($frase2,-3);
		if(strcasecmp($aux1,$aux2)==0){
			echo "Las frases riman";
		}else{
			echo"Las frases no riman";
		}
	?>
</body>
</html>