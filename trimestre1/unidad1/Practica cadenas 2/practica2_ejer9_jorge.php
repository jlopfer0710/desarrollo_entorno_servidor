<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 9</title>
</head>
<body>
	<?php  
		$frase="Bienvenidos a la aventura de aprender PHP en 30 horas";
		echo "Esta es la cadena normal: ".$frase;
		$lon=strlen($frase);
		echo "<br>".$lon."<br>";
		$lon/=2;
		$con=0;
		$po=26;
		$car=$frase[$po];
		while($car!=" "){
			++$po;
			$car=$frase[$po];
			++$con;
		}
		$frase2=substr($frase, 26,$con);
		echo "<br> La palabra en la mitad de la frase es:".$frase2;
		echo "<br>La posición de la palabra PHP es: ".strpos("$frase","PHP" );
	?>
</body>
</html>