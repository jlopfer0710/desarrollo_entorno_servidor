<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 2</title>
</head>
<body>
		<?php  
		$frase1="Esto es una cadena";
		$frase2="un poco más larga";
		$frases=[$frase1,$frase2];
		$frase_completa=implode(" ", $frases);
		echo $frase_completa;
	?>
</body>
</html>