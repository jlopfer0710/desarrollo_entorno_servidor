<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php 
        /*12.- Invierte el array $base*/ 
        $base=array("naranja","plátano","manzana","frambuesa");
        echo"<b>Array original:</b><br><pre>";
        print_r($base);
        echo "</pre>";
        $base=array_reverse($base);
        echo"<b>Array invertido:</b><br><pre>";
        print_r($base);
        echo "</pre>";
    ?>
</body>
</html>