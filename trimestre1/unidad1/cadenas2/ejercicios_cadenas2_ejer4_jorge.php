<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 4</title>
</head>
<body>
	<?php  
		$frase1="Esto es una cadena";
		$frase2="un poco más larga";
		$frases=[$frase1,$frase2];
		$frase_completa=implode(" ", $frases);
		$car=$frase_completa[0];
		echo "El primer carácter de la cadena: ".$car;
		$car=$frase_completa[2];
		echo "<br>El tercer carácter de la cadena: ".$car;
		$car=$frase_completa[strlen($frase_completa)-1];
		echo "<br>El último valor de la cadena: ".$car;
	?>
</body>
</html>