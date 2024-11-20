<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 1</title>
</head>
<body>
	<?php  
		/*1.rea un array cuyo contenido son los números del 0 al 29, recórrelo mostrando “En la posición X está el valor Y”. Para recorrerlo utiliza las funciones current, pos, reset, end, next, prev, count y key (sólo las funciones que necesites). Ahora recórrelo desde el final hacia el principio usando las mismas funciones.*/
		$vector=array();
		for($i=0;$i<30;$i++){
			$vector[]=$i;
		}//Rellenamos el vector con los números del 0 al 29
		reset($vector);//reseteamos el puntero del array y se coloca en 0

		while(key($vector)!==null){//aquí decimos que mientras haya un elemento se haga el bucle
			$pos=key($vector);//conseguimos la posición del Array
			$valor=current($vector);//conseguimos el elemento dentro de la posición del array
			echo "En la posición $pos se encuentra el valor $valor<br>";
			next($vector);//movemos el puntero a la siguiente posición
		}
		end($vector);
		echo"<br>Ahora vamos a mostrar el Array a la inversa<br><br>";
		while(key($vector)!==null){
			$pos=key($vector);
			$valor=current($vector);
			echo "En la posición $pos se encuentra el valor $valor<br>";
			prev($vector);
		}
	?>
</body>
</html>