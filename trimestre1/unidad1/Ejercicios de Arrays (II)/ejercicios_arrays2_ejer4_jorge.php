<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 4</title>
</head>
<body>
	<?php  
		/*4.- Repetir el ejercicio 2 usando utilizando array_search. (nota: como array_search devuelve la
		primera ocurrencia tendrás que borrarla para poder encontrar la siguiente)*/
		$array=array("blue","red","green","blue","blue");
		$valorBuscado="blue";
		$posiciones=[];
		while(($pos=array_search($valorBuscado, $array))!==false){
			$posiciones[]=$pos;
			unset($array[$pos]);
		}
		print_r($posiciones);
	?>
</body>
</html>