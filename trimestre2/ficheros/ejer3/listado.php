<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listado 1</title>
</head>
<body>
	<?php
$directorio = "./";
if ($handle = opendir($directorio)) {
    echo "<h2>Contenido del directorio: $directorio</h2>";
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            $ruta = $directorio . DIRECTORY_SEPARATOR . $entry;
            $modificado = date("F d Y H:i:s.", filemtime($ruta));
            if (is_file($ruta)) {
                $tamano = filesize($ruta); 
                echo "<p><strong>Archivo:</strong> $entry | <strong>Última modificación:</strong> $modificado | <strong>Tamaño:</strong> $tamano bytes</p>";
            } else {
                echo "<p><strong>Directorio:</strong> $entry | <strong>Última modificación:</strong> $modificado</p>";
            }
        }
    }
    closedir($handle);
}
?>

</body>
</html>