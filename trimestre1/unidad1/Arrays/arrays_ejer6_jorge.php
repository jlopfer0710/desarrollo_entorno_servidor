<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 6</title>
</head>
<body>
	<?php  
	/*Crea un array con los países de la Unión Europea y sus capitales. 	Muestra por cada uno de ellos la frase: “La capital de <<país>> es <<capital>>”. Luego ordena la lista por el nombre del país y luego por el nombre de la capital.*/
		$union_europea=array("Alemania"=>"Berlín","Austria"=>"Viena","Bélgica"=>"Bruselas","Bulgaria"=>"Sofía","Chipre"=>"Nicosia","Croacia"=>"Zagreb","Dinamarca"=>"Conpenhague","Eslovaquia"=>"Bratislava","Eslovenia"=>"Liubliana","España"=>"Madrid","Estonia"=>"Tallin","Finlandia"=>"Helsinki","Francia"=>"París","Grecia"=>"Atenas","Hungría"=>"Budapest","Irlanda"=>"Dublín","Italia"=>"Roma","Letonia"=>"Riga","Lituania"=>"Vilna","Luxemburgo"=>"Luxemburgo","Malta"=>"La Valeta","Países Bajos"=>"Amsterdam","Polonia"=>"Varsovia","Portugal"=>"Lisboa","República Checa"=>"Praga","Rumanía"=>"Bucarest","Suecia"=>"Estocolmo");
		echo "LA UNIÓN EUROPEA <br>";
		foreach ($union_europea as $pais => $valor) {
			echo "País: $pais -> Capital: $valor <br>";
		}
	?>
</body>
</html>