<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 4</title>
</head>
<body>
	<?php  
		$frase1="hola soy yo";
		$frase2="adiós eres tú";
		$mayor=strcmp($frase1,$frase2);
		if($mayor>0){
			$mayor="mayor";
		}else if($mayor<0){
			$mayor="menor";
		}else if($mayor==0){
			$mayor="igual";
		}
		echo "La frase: ".$frase1." es: ".$mayor." que la frase: ".$frase2."<br>";
		$mayor=strncmp($frase1,$frase2,5);
		if($mayor>0){
			$mayor="mayor";
		}else if($mayor<0){
			$mayor="menor";
		}else if($mayor==0){
			$mayor="igual";
		}
		echo "<brd><br>Los primeros carácteres de la frase: ".$frase1." son: ".$mayor." que los de la frase: ".$frase2;
		$mayor=strnatcmp($frase1, $frase2);
		if($mayor>0){
			$mayor="mayor";
		}else if($mayor<0){
			$mayor="menor";
		}else if($mayor==0){
			$mayor="igual";
		}
		echo "<br><br>La comparación natural da que la frase: ".$frase1." es: ".$mayor." que la frase: ".$frase2;
	?>
</body>
</html>
