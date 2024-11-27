<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <?php 
        /*11.- Convierte el array $base en la cadena “naranja y plátano y manzana y frambuesa” usando la función implode.*/ 
        $base=array("naranja","plátano","manzana","frambuesa");
        echo"<b>Array original:</b><br><pre>";
        print_r($base);
        echo "</pre>";
        $base=implode(" y ",$base);
        echo "Cadena a partir del array: $base";
    ?>
</body>
</html>