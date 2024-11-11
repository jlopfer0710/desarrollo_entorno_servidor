<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 5</title>
</head>
<body>
	<?php  
		$frase="lA lo lE li lU";
		echo "Frase orginal: ".$frase."<br>";
		for($i=0;$i<strlen($frase);++$i){
			if($frase[$i]=="a"||$frase[$i]=="e"||$frase[$i]=="i"||$frase[$i]=="o"||$frase[$i]=="u"){
				$frase[$i]=strtoupper($frase[$i]);
			}else if($frase[$i]=="A"||$frase[$i]=="E"||$frase[$i]=="I"||$frase[$i]=="O"||$frase[$i]=="U"){
				$frase[$i]=strtolower($frase[$i]);
			}
		}
		echo "La frase modificada es: $frase";
	?>
</body>
</html>