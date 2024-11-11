<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php  
		$dias=array(1=>"Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
		//parte del ejercicio hecha con un foreach
		echo "Hecho con un foreach<br>";
		foreach ($dias as $cod => $dia) {//cod adquiere el identificador de la posición que tiene el valor día 
			echo "El día de la semana ".$cod." es ".$dia."<br>";
		}
		reset($dias);
		echo "Hecho con un for<br>";
		for($i=key($dias);$i<=sizeof($dias);++$i){
			$cod=$i;
			$dia=$dias[$i];
			echo "El día de la semana ".$cod." es ".$dia." <br>";
		}
	?>
</body>
</html>