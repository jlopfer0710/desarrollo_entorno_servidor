<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php  
		$frase;
		$nom="Jorge";
		$apell1="López";
		$apell2="Fernández";
		$edad="20";
		$frase=sprintf("Me llamo %s %s %s y tengo %s años",$nom,$apell1,$apell2,$edad);
		echo $frase;
		$frase="<br>Me llamo"." ".$nom." ".$apell1." ".$apell2." y tengo ".$edad." años";
		echo $frase;
		echo"<br>Me llamo $nom<br>$apell1<br>$apell2<br>y tengo $edad años";
		echo"<br>Me llamo $nom"."<br>$apell1"."<br>apell2"." y tengo $edad años";
	?>
</body>
</html>