<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 2</title>
</head>
<body>
	<?php  
		function pais($nombre_pais,$capital="Madrid",$habitantes="muchos"){
			echo "La capital de $nombre_pais es $capital y tiene $habitantes habitantes<br><br>";
		}
		pais("España");
		pais("Portugal","Lisboa");
		pais("Francia","París","6.000.000")
	?>
</body>
</html>