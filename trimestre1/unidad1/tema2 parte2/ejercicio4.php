<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function eliminaPalabra($cadena, $posicion) {
            $array = explode(' ', $cadena); //Separo las palabras del string por el espacio
            if($posicion < 0 || $posicion >= count($array)) { //Recorreo el array y compruebo que la posición sea válida
                return "Error: La posición que has puesto no está en la cadena.";
            }
            unset($array[$posicion]); //Quito la palabra seleccionada
            return implode(' ', $array); //Junto de nuevo las palabras restantes en una frase
        }
        
        $cad = eliminaPalabra("Hola amigo, que tal", 0); //Llamo a la función con mi frase y la posición que quiero quitar
        echo $cad; //Muestro el resultado
        
    ?>
</body>
</html>