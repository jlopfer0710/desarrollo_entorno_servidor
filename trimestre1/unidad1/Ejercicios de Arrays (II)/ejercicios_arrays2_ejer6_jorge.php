<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php
    /*6.Con el array del ejercicio anterior escribe el número de veces que aparece cada valor.*/
    $array = [];
    $valores = [96, 98, 90];
    $cont_96=0 ;$cont_98= 0;$cont_90= 0;
    for ($i = 0; $i < 20; $i++) {
        $array[] = rand(0, 99);
    }
    print_r($array);
    $todos_presentes = true;
    foreach ($valores as $valor) {
        if (in_array($valor, $array)) {
            echo "<br>El valor $valor se encuentra en el Array";
            if($valor===90){
                ++$cont_90;
            }else if($valor===96){
                ++$cont_96;
            }else if($valor===98){
                ++$cont_98;
            }
        } else {
            echo "<br>El valor $valor no se encuentra en el Array";
            $todos_presentes = false;
        }
    }
    if ($todos_presentes == true) {
        echo "<br>Los valores 96, 98 y 90 se encuentran en el array original.";
    } else {
        echo "<br>Alguno de los valores 96, 98 o 90 no se encuentra en el array original.";
    }
    echo "<br>El valor 90 se encuentra: $cont_90 veces";
    echo "<br>El valor 96 se encuentra: $cont_96 veces";
    echo "<br>El valor 98 se encuentra: $cont_98 veces";
    ?>
</body>

</html>