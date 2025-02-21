<?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    // Conectar a la base de datos
    $conexion = mysqli_connect('localhost', 'dwes', 'abc123.', 'inmobiliaria');

    if (mysqli_connect_errno()) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Manejo de eliminación de noticias
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar'])) {
        if (!empty($_POST['eliminar_noticias'])) {
            $ids = implode(",", array_map('intval', $_POST['eliminar_noticias']));
            $queryDelete = "DELETE FROM noticias WHERE id IN ($ids)";
            
            if (mysqli_query($conexion, $queryDelete)) {
                echo "<p style='color:green;'>Noticias eliminadas correctamente.</p>";
            } else {
                echo "<p style='color:red;'>Error al eliminar noticias: " . mysqli_error($conexion) . "</p>";
            }
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "<p style='color:red;'>No se ha seleccionado ninguna noticia para eliminar.</p>";
        }
    }

    // Manejo de inserción de noticias
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insertar'])) {
        if (!empty($_POST['titulo']) && !empty($_POST['texto']) && !empty($_POST['categoria'])) {
            $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
            $texto = mysqli_real_escape_string($conexion, $_POST['texto']);
            $categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);
            $fecha = date('Y-m-d');
            $imagenRuta = NULL;

            if (!empty($_FILES['imagen']['name'])) {
                $nombreImagen = basename($_FILES['imagen']['name']);
                if (!is_dir("img")) {
                    mkdir("img", 0755, true);
                }
                $imagenRuta = "img/" . $nombreImagen;
                if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $imagenRuta)) {
                    echo "<p style='color:red;'>Error al subir la imagen.</p>";
                    $imagenRuta = NULL;
                }
            }

            $query = "INSERT INTO noticias (titulo, texto, categoria, fecha, imagen) VALUES ('$titulo', '$texto', '$categoria', '$fecha', " . ($imagenRuta ? "'$imagenRuta'" : "NULL") . ")";
            
            if (mysqli_query($conexion, $query)) {
                header("Location: " . $_SERVER['PHP_SELF']); // Redirigir para limpiar el formulario y mostrar todas las noticias
                exit();
            } else {
                echo "<p style='color:red;'>Error al insertar la noticia: " . mysqli_error($conexion) . "</p>";
            }
        } else {
            echo "<p style='color:red;'>Todos los campos son obligatorios.</p>";
        }
    }

    // Filtrar noticias por categoría solo cuando se pulsa "Actualizar"
    $categoriaSeleccionada = "todas";
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['actualizar'])) {
        $categoriaSeleccionada = $_POST['select'];
    }

    // Construcción de la consulta SQL
    if ($categoriaSeleccionada === "todas") {
        $query = "SELECT * FROM noticias ORDER BY fecha DESC";
    } else {
        $query = "SELECT * FROM noticias WHERE categoria = '" . mysqli_real_escape_string($conexion, $categoriaSeleccionada) . "' ORDER BY fecha DESC";
    }
    
    $result = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Noticias</title>
    <style>
        /* General */
   body {font-family: verdana,arial, sans-serif; font-size: 10pt;}

/* Contenido */
   h1 {font-size: 16pt; font-weight: bold; color: #0066CC;}
   h2 {font-size: 12pt; font-weight: bold; font-style: italic; color: black;}
   h3 {font-size: 10pt; font-weight: bold; color: black;}

/* Formulario */
   form.borde {border: 1px dotted #0066CC; padding: 0.5em 0.2em; width: 80%;}
   form p {clear: left; margin: 0.2em; padding: 0.1em;}
   form p label {float: left; width: 25%; font-weight: bold;}
   .error {color: red;}
   
/* Tablas */
   th {font-size: 10pt; font-weight: bold; color: white; background: #0066CC; text-align: left;}
   td {font-size: 10pt; background: #CCCCCC;}
   td.derecha {font-size: 10pt; text-align: right; background: #FFFFFF;}
   td.izquierda {font-size: 10pt; text-align: left; background: #FFFFFF;}


    </style>
</head>
<body>

<h2>Consulta de noticias</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label><strong>Mostrar noticias de la categoría:</strong></label>
    <select name="select">
        <option value="todas" <?php echo ($categoriaSeleccionada == "todas") ? "selected" : ""; ?>>Todas</option>
        <option value="promociones" <?php echo ($categoriaSeleccionada == "promociones") ? "selected" : ""; ?>>Promociones</option>
        <option value="ofertas" <?php echo ($categoriaSeleccionada == "ofertas") ? "selected" : ""; ?>>Ofertas</option>
        <option value="costas" <?php echo ($categoriaSeleccionada == "costas") ? "selected" : ""; ?>>Costas</option>
    </select>
    <button type="submit" name="actualizar">Actualizar</button><br><br>
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Texto</th>
            <th>Categoría</th>
            <th>Fecha</th>
            <th>Imagen</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['titulo']); ?></td>
                <td><?php echo htmlspecialchars($row['texto']); ?></td>
                <td><?php echo ucfirst(htmlspecialchars($row['categoria'])); ?></td>
                <td><?php echo date('d/m/Y', strtotime($row['fecha'])); ?></td>
                <td>
                    <?php if (!empty($row['imagen'])): ?>
                        <img style="height: 100px;width: 100px;" src="<?php echo htmlspecialchars($row['imagen']); ?>">
                    <?php else: ?>
                        No hay imagen
                    <?php endif; ?>
                </td>
                <td><input type="checkbox" name="eliminar_noticias[]" value="<?php echo $row['id']; ?>"></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table><br>
<button type="submit" name="eliminar">Eliminar noticia</button><br><br>
</form>

<h2>Inserción de nueva noticia</h2>
<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <p><strong>Título:*</strong> <input type="text" name="titulo" required></p>
    <p><strong>Texto:*</strong> <textarea name="texto" required></textarea></p>
    <label for=""><strong>Categoría: </strong></label>
    <select name="categoria">
        <option value="promociones">Promociones</option>
        <option value="ofertas">Ofertas</option>
        <option value="costas">Costas</option>
    </select><br><br>
    <input type="file" name="imagen"><br><br>
    <button type="submit" name="insertar">Insertar noticia</button>
</form>

<?php mysqli_close($conexion); ?>
</body>
</html>
