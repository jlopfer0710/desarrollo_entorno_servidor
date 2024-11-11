<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 3</title>
</head>
<body>
	<?php  
		$frase="Hola soy yo";
		$cont=0;
		$vocales=false;
		for($i=0;$i<strlen($frase);++$i){
			if($frase[$i]=='a' ||$frase[$i]=='A'){
				$vocales=true;
				++$cont;
			}else if($frase[$i]=='e' ||$frase[$i]=='E'){
				$vocales=true;
				++$cont;
			}else if($frase[$i]=='i'||$frase[$i]=='I'){
				$vocales=true;
				++$cont;
			}else if($frase[$i]=='o'||$frase[$i]=='O'){
				$vocales=true;
				++$cont;
			}else if($frase[$i]=='u'||$frase[$i]=='U'){
				$vocales=true;
				++$cont;
			}else{
				$vocales=false;
			}
		}
		if($vocales==true){
			$vocales="true";
		}else{
			$vocales="false";
		}
		echo "¿Contiene vocales? ".$vocales;
		echo "<br>¿Cuántas vocales tiene?: ".$cont;
	?>
</body>
</html>