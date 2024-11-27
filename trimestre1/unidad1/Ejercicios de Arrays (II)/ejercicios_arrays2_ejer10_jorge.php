<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php 
        /*10.Escribe los elementos del 3 al 7 de los dos arrays anteriores sin usar ninguna instrucción
        iterativa. Repite la operación pero para los 7 últimos elementos de ambos arrays (la instrucción debe
        funcionar aunque el array cambie de tamaño).*/
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
        //mostrar los elementos del 3 al 7 del array_replace
        $elementos=array_slice($resultado_replace,2,5);
        echo "<b>Elementos del 3 al 7 en array_replace:</b><br><pre>";
        print_r($elementos);
        echo "</pre>";
        //mostrar los 7 últimos elementos del aerray_replace
        $elementos=array_slice($resultado_replace,-7);
        echo "<b>Los 7 últimos elementos en array_replace:</b><br><pre>";
        print_r($elementos);
        echo "</pre>";
        // Usando array_merge
        $resultado_merge = array_merge($base, $reemplazos, $reemplazos2);
        while (count($resultado_merge) < 10) {
            $resultado_merge[] = "melocotón";
        }
        echo "<b>Usando array_merge:</b><br><pre>";
        print_r($resultado_merge);
        echo "</pre>";
        //mostrar los elementos del 3 al 7 del merge
        $elementos=array_slice($resultado_merge,2,5);
        echo "<b>Elementos del 3 al 7 en array_merge:</b><br><pre>";
        print_r($elementos);
        echo "</pre>";
        //mostrar los 7 últimos elementos del array_merge
        $elementos=array_slice($resultado_merge,-7);
        echo "<b>Los 7 últimos elementos en array_merge:</b><br><pre>";
        print_r($elementos);
        echo "</pre>"
    ?>
</body>
</html>