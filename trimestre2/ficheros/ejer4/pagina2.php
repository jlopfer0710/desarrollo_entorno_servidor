<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        echo "Nombre recibido: " . htmlspecialchars($nombre) . "<br>";
    } else {
        echo "No se ha recibido el nombre.<br>";
    }

    if (isset($_POST['text']) && !empty($_POST['text'])) {
        $text = $_POST['text'];
        echo "Texto recibido: " . htmlspecialchars($text);
    } else {
        echo "No se ha recibido el texto.";
    }
}
?>