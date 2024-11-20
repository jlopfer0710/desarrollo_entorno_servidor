<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 5</title>
</head>
<body>
	<?php  
		/*3.con el array del ejercicio anterior crea un array con todos los elementos que contengan la
		subcadena “re” en su contenido.*/
		$array=array("blue","red","green","blue","blue");
		$array_aux= array_values(array_filter($array, function ($valor) {
    		return strpos($valor, "re") !== false;
		}));
		print_r($array_aux);
	?>
</body>
</html>