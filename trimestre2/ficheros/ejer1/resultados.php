<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <style>
    </style>
</head>
<body>
    <?php 
        $texto = isset($_GET['texto']) ? htmlspecialchars($_GET['texto']) : 'No proporcionado';
        $radio=isset($_GET['buscar']) ? htmlspecialchars($_GET['buscar']): 'No proporcionado';
        $genero=isset($_GET['genero']) ? htmlspecialchars($_GET['genero']): 'No proporcionado';
        echo '<p style="font-size: 30px; color:blue;">Formulario simple. Resultados del formulario</p>';
        echo '<p>Estos son los datos introducidos: </p>';
        echo '<ul>';
        echo "<li>Texto de búsqueda: $texto</li>";
        echo "<li>Buscar en: $radio</li>";
        echo "<li>Género: $genero</li>";
        echo '</ul>';
        echo '<button onclick="location.href=\'ejercicio1.php\'">Volver a buscar</button>';
    ?>
</body>

</html>