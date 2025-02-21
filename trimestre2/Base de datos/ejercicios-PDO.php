<?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=inmobiliaria;charset=utf8", "dwes", "abc123.", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar'])) {
        if (!empty($_POST['eliminar_noticias'])) {
            $ids = implode(",", array_map('intval', $_POST['eliminar_noticias']));
            $queryDelete = "DELETE FROM noticias WHERE id IN ($ids)";
            $pdo->exec($queryDelete);
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "<p class='error'>No se ha seleccionado ninguna noticia para eliminar.</p>";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insertar'])) {
        if (!empty($_POST['titulo']) && !empty($_POST['texto']) && !empty($_POST['categoria'])) {
            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];
            $categoria = $_POST['categoria'];
            $fecha = date('Y-m-d');
            $imagenRuta = NULL;

            if (!empty($_FILES['imagen']['name'])) {
                $nombreImagen = basename($_FILES['imagen']['name']);
                if (!is_dir("img")) {
                    mkdir("img", 0755, true);
                }
                $imagenRuta = "img/" . $nombreImagen;
                if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $imagenRuta)) {
                    echo "<p class='error'>Error al subir la imagen.</p>";
                    $imagenRuta = NULL;
                }
            }

            $stmt = $pdo->prepare("INSERT INTO noticias (titulo, texto, categoria, fecha, imagen) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$titulo, $texto, $categoria, $fecha, $imagenRuta]);
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "<p class='error'>Todos los campos son obligatorios.</p>";
        }
    }

    $categoriaSeleccionada = "todas";
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['actualizar'])) {
        $categoriaSeleccionada = $_POST['select'];
    }

    if ($categoriaSeleccionada === "todas") {
        $query = "SELECT * FROM noticias ORDER BY fecha DESC";
        $stmt = $pdo->query($query);
    } else {
        $query = "SELECT * FROM noticias WHERE categoria = ? ORDER BY fecha DESC";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$categoriaSeleccionada]);
    }
    $noticias = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Noticias</title>
    <style>
        BODY {font-family: verdana,arial, sans-serif; font-size: 10pt;}
        H1 {font-size: 16pt; font-weight: bold; color: #0066CC;}
        H2 {font-size: 12pt; font-weight: bold; font-style: italic; color: black;}
        H3 {font-size: 10pt; font-weight: bold; color: black;}
        FORM.borde {border: 1px dotted #0066CC; padding: 0.5em 0.2em; width: 80%;}
        FORM P {clear: left; margin: 0.2em; padding: 0.1em;}
        FORM P LABEL {float: left; width: 25%; font-weight: bold;}
        .error {color: red;}
        TH {font-size: 10pt; font-weight: bold; color: white; background: #0066CC; text-align: left;}
        TD {font-size: 10pt; background: #CCCCCC;}
        TD.derecha {font-size: 10pt; text-align: right; background: #FFFFFF;}
        TD.izquierda {font-size: 10pt; text-align: left; background: #FFFFFF;}
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
        <?php foreach ($noticias as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['titulo']); ?></td>
                <td><?php echo htmlspecialchars($row['texto']); ?></td>
                <td><?php echo ucfirst(htmlspecialchars($row['categoria'])); ?></td>
                <td><?php echo date('d/m/Y', strtotime($row['fecha'])); ?></td>
                <td>
                    <?php if (!empty($row['imagen'])): ?>
                        <img src="<?php echo htmlspecialchars($row['imagen']); ?>">
                    <?php else: ?>
                        No hay imagen
                    <?php endif; ?>
                </td>
                <td><input type="checkbox" name="eliminar_noticias[]" value="<?php echo $row['id']; ?>"></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table><br>
<button type="submit" name="eliminar">Eliminar noticia</button><br><br>
</form>
<h2>Inserción de nueva noticia</h2>
<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <p><strong>Título:*</strong> <input type="text" name="titulo" required></p>
    <p><strong>Texto:*</strong> <textarea name="texto" required></textarea></p>
    <button type="submit" name="insertar">Insertar noticia</button>
</form>
</body>
</html>
