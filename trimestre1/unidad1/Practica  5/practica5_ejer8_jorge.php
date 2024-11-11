<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 8</title>
</head>
<body>
	<?php  
		function sumatoria($n){
			$res=0;
			for($i=0;$i<$n;$i++){
				$res+=$i;
			}
			return $res;
		}
		$n=5;
		echo "La sumatoria de: ".$n." es: ".sumatoria($n);
	?>
</body>
</html>