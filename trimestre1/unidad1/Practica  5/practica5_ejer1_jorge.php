<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php  
		function calculaCantidad($tiempo,$dinero,$interes){
			$interes=$interes/100;
			return $dinero+($dinero*$interes*$tiempo);
		}
		$interes=5;
		echo "<p><b>El interés actual es $interes%.</b></p>";
		echo "<p>Si usted deposita 100 &#x20AC; hoy, sus ahorros crecerán a ";
		echo number_format(calculaCantidad(5,100,$interes),2);
		echo "&#x20AC; en 5 años </p>";
		echo "<p>Si usted deposita 1.500&#x20AC; hoy, sus ahorros crecerán a ";
		echo number_format(calculaCantidad(20,1500,$interes),2);
		echo "&#x20AC; después de 20 años. </p>";
	?>
</body>
</html>