<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
    <?php 
        $texto=isset($_POST['texto']) ? htmlspecialchars($_POST['texto']) : "No proporcionado";
        $sexo=isset($_POST['sexo']) ? htmlspecialchars($_POST['sexo']) :"No proporcionado";
        $extras = isset($_POST['extras']) ? $_POST['extras'] : [];
        $archivo=isset($_POST['file']) ? htmlspecialchars($_POST['file']) :"No proporcionado";
        $hidden=isset($_POST['hidden']) ? htmlspecialchars($_POST['hidden']) : "No proporcionado";
        $contrasena=isset($_POST['contrasena']) ? htmlspecialchars($_POST['contrasena']) : "No proporcionada";
        $color=isset($_POST['color'])? htmlspecialchars($_POST['color']) : "No proporcionado";
        $idiomas=isset($_POST['idiomas'])? $_POST['idiomas']:[];
        $comentario=isset($_POST['comentario']) ? htmlspecialchars($_POST['comentario']): "No proporcionado";
        echo '<p style="font-size: 30px; color:blue;">Elementos de entrada. Resultados del formulario</p>';
        echo '<p>Estos son los datos introducidos: </p>';
        echo '<ul>';
        echo "<li>Cadena a buscar: $texto </li>";
        echo "<li>Sexo: $sexo</li>";
        echo "<li>Extras: ";
        if (count($extras) > 0) {
            $extrasLimpios = array_map('htmlspecialchars', $extras);
            echo implode(", ", $extrasLimpios);
        } else {
            echo "No proporcionado";
        }
        echo "</li>";
        echo "<li>Archivo: $archivo >>Lo veremos en el ejercicio 4.</li>";
        echo "<li>Hidden: $hidden </li>";
        echo "<li>Contraseña: $contrasena</li>";
        echo "<li>Color: $color</li>";
        echo "<li>Idiomas:";
        if(count($idiomas)>0){
            $idiomasLimpios= array_map('htmlspecialchars',$idiomas);
            echo implode(", ",$idiomasLimpios);
        }else{
            echo "No proporcionados";
        }
        echo "</li>";
        echo "<li>Comentario: $comentario</li>";
        echo '</ul>';
    ?>
</body>
</html>