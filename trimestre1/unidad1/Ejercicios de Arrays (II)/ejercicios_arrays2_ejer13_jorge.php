<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <?php 
        /*13.- Elimina los dos últimos elementos del array $base del ejercicio 8 utilizando la función
        array_splice.*/
        $base = array("naranja", "plátano", "manzana", "frambuesa");
        echo"<b>Array original:</b><br><pre>";
        print_r($base);
        echo "</pre>";
        array_splice($base,-2);
        echo"<b>Array modificado:</b><br><pre>";
        print_r($base);
        echo "</pre>"
    ?>
</body>
</html>