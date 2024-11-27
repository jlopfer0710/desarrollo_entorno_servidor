<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php 
        /*9.De los arrays resultado del ejercicio anterior añade los siguientes valores:
        Al resultante de la función array_replace, añadele tantas “croquetas” al principio como sean
        necesarias para que el array tenga 10 elementos.
        Al resultante de la función array_merge, añadele tantos “melocotones” al final como sean
        necesarios para que el array tenga 10 elementos.*/ 
        $base = array("naranja", "plátano", "manzana", "frambuesa");
        $reemplazos = array(0 => "piña", 4 => "cereza");
        $reemplazos2 = array(0 => "uva");

        // Usando array_replace
        $resultado_replace = array_replace($base, $reemplazos, $reemplazos2);
        while(count($resultado_replace)<10){
            array_unshift($resultado_replace,"croqueta");
        }
        echo "<b>Usando array_replace:</b><br><pre>";
        print_r($resultado_replace);
        echo "</pre>";

        // Usando array_merge
        $resultado_merge = array_merge($base, $reemplazos, $reemplazos2);
        while (count($resultado_merge) < 10) {
            $resultado_merge[] = "melocotón";
        }
        echo "<b>Usando array_merge:</b><br><pre>";
        print_r($resultado_merge);
        echo "</pre>";
    ?>
</body>
</html>