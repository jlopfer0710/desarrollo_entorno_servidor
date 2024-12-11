<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function recorre($array, $nivelArray = 0) { //Añado el nivel del array por el que va
        foreach ($array as $aux => $valor) { //Recorreo el array
            if (is_array($valor)) { //Compruebo si es un valor o un nivel extra del array
                echo str_repeat("&nbsp&nbsp&nbsp", $nivelArray) . $aux . ":<br>"; //Muestro que es un nivel y llamo a la función para que lo recorra
                recorre($valor, $nivelArray + 1);
            } else {
                echo str_repeat("&nbsp&nbsp&nbsp", $nivelArray) . $aux . " -> " . $valor . "<br>"; //Muestro el valor
            }
        }
    }
    
    //Soy tontito y no me acuerdo de como tabularlo bien :D
    
    //Creo mi array
    $array = array(1, array(21, 22, 23), 3, array(array(411, 412), 42, array(431, 432)));
    
    //Llamo a la función
    recorre($array)
    ?>
</body>
</html>