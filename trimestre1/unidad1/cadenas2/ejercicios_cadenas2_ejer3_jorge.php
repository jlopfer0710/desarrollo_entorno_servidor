<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 3</title>
</head>
<body>
	<?php  
		$frase1="Esto es una cadena";
		$frase2="un poco más larga";
		$frases=[$frase1,$frase2];
		$frase_completa=implode(" ", $frases);
		echo $frase_completa;
		echo"<br>La primera posición de la c es: ".strpos($frase_completa, 'c');
		echo"<br>La última posición de la letra c es: ".strrpos($frase_completa, 'c');
		echo"<br>La posición de la palabra pos es: ".strpos($frase_completa,"poco");
	?>
</body>
</html>