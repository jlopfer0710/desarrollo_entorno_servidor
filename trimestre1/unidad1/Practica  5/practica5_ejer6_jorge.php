<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 6</title>
</head>
<body>
	<?php  
		function negrita($texto){
			return '<strong>'.$texto.' </strong>';
		}
		$texto="Este texto se va a pasar a negrita";
		echo 'El texto que se va a pasar a negrita es: '.$texto.' <br>el texto en negrita es: '.negrita($texto);
	?>
</body>
</html>