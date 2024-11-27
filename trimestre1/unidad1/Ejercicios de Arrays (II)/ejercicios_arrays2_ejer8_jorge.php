<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php 
        /*8.Dados los arrays Realiza la unión de los tres utilizando las funciones array_replace, array_merge y
        array_merge_recursive. Observa las diferencias de aplicar cada función*/ 
        $base = array("naranja", "plátano", "manzana", "frambuesa");
        $reemplazos = array(0 => "piña", 4 => "cereza");
        $reemplazos2 = array(0 => "uva");
        
        // Usando array_replace
        $resultado_replace = array_replace($base, $reemplazos, $reemplazos2);
        echo "<b>Usando array_replace:</b><br><pre>";
        print_r($resultado_replace);
        echo "</pre>";
        
        // Usando array_merge
        $resultado_merge = array_merge($base, $reemplazos, $reemplazos2);
        echo "<b>Usando array_merge:</b><br><pre>";
        print_r($resultado_merge);
        echo "</pre>";
        
        // Usando array_merge_recursive
        $resultado_recursive = array_merge_recursive($base, $reemplazos, $reemplazos2);
        echo "<b>Usando array_merge_recursive:</b><br><pre>";
        print_r($resultado_recursive);
        echo "</pre>";
    ?>
</body>
</html>