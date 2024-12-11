<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function ordenarArray($array, $opcion = 1) {//Marco la opción por defecto como 1 en caso de que no se indique
            switch($opcion) {//Indico las opciones que puede marcar
                case 1:
                    sort($array); //Ordeno de menor a mayor
                    break;
                case 2:
                    rsort($array); //Ordeno de mayor a menor
                    break;
                case 3:
                    ksort($array); //Ordeno por clave de menor a mayor
                    break;
                case 4:
                    krsort($array); //Ordeno por clave de mayor a menor
                    break;
                default:
                    return "Parámetro incorrecto."; //Muestro el mensaje que me piden
            }
            return $array;
        }
        
        //Creo mi array
        $array = array(3, 2, 5, 1, 4, 9, 6, 8, 7);
        //Llamo a la función y selecciono una opción
        $arrayOrdenado = ordenarArray($array, 4);
        //Muestro el resultado
        print_r($arrayOrdenado);
    ?>
</body>
</html>