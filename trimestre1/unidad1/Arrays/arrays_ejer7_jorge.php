<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 7</title>
</head>
<body>
	<?php  
		$array=[];
		$longitud=rand(1,10);
		$contador=0;
		for($i=0;$i<$longitud;$i++){
			$array[]=rand(1,10);
		}
		print_r($array);
		foreach ($array as $numero => $valor) {
			if($valor==2){
				++$contador;
			}
		}
		echo "<br>En el array hay: $contador valor/es iguales a 2";
	?>
</body>
</html>