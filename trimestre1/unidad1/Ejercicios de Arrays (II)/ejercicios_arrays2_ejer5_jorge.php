<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 5</title>
</head>
<body>
	<?php  
		/*5.- Crea un array con números comprendidos entre el 0 y el 99 (no tiene porqué contenerlos todos)
		y comprueba si en el array está el valor 96, 98 y 90 con la función in_array.*/
		$array=[];
		$valores=[96,98,90];
		for($i=0;$i<20;$i++){
			$array[]=rand(0,99);
		}
		print_r($array);
		$todos_presentes=true;
		foreach ($valores as $valor) {
			if(in_array($valor, $array)){
				echo "<br>El valor $valor se encuentra en el Array";
			}else{
				echo"<br>El valor $valor no se encuentra en el Array";
				$todos_presentes=false;
			}
		}
		if($todos_presentes==true){
			echo "<br>Los valores 96, 98 y 90 se encuentran en el array original.";
		}else{
			echo "<br>Alguno de los valores 96, 98 o 90 no se encuentra en el array original.";
		}
	?>
</body>
</html>