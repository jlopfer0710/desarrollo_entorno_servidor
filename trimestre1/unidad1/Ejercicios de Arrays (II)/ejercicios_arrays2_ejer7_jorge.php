<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php 
        $array = [];
        for ($i = 0; $i < 20; $i++) {
            $array[] = rand(0, 99);
        }
        echo "El array original: ";
        print_r($array);
        $valores5=array_slice($array,-5);
        $array=array_merge($valores5,array_slice($array,-5));
        echo "<br>El array modificado: ";
        print_r($array);
    ?>
</body>
</html>