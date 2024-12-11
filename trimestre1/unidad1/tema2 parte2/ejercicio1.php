<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    function crearArbol($altura){
        $arbol=array();
        for($i=0;$i<$altura;$i++){
            $nieve=str_repeat('*',$altura-$i-1);
            $ancho=str_repeat('\\',$i*2+1);
            $arbol[]=$nieve.$ancho.$nieve;
        }
        return $arbol;
    }
    function mostrarArbol($arbol){
        echo"<table style='border-collapse:collapse;'>";
        foreach($arbol as $fila){
            echo"<tr>";
            $caracteres=str_split($fila);
            foreach($caracteres as $columnas){
                switch($columnas){
                    case "*":
                        echo"<td style='background-color: #00FFFF; color: white; width: 10px; height: 10px; text-align: center;'>*</td>";
                    break;
                    case "\\":
                        echo "<td style='background-color: #00FFFF; color: green; width: 10px; height: 10px; text-align: center;'>\\</td>";
                    break;
                }
            }
            echo "</tr>";
        }
        echo"</table>";
    }
    $arbol=crearArbol(5);
    mostrarArbol($arbol);
    ?>
</body>
</html>