<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        div{
            border: 2px dotted blue ;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="resultados.php" method="GET">
        <p style="font-size: 30px;color:blue;">Formulario simple</p>
        <p>Búsqueda de canciones</p>
        <div>
            <p>Texto a buscar: <input type="text" name="texto"></p>
            <p>Buscar en: <input type="radio" name="buscar" id="" value="Títulos">Títulos de canción <input type="radio" value="Albúm" name="buscar" id="">Nombres de albúm <input name="buscar" value="Ámbos" type="radio">Ámbos campos</p>
            <p>Género musical: <select name="genero" id="">
                <option value="Todos">Todos</option>
                <option value="Acústica">Acústica</option>
                <option value="Banda Sonora">Banda Sonora</option>
                <option value="Blues">Blues</option>
                <option value="Electrónica">Electrónica</option>
                <option value="Folk">Folk</option>
                <option value="Jazz">Jazz</option>
                <option value="New Age">New Age</option>
                <option value="Pop">Pop</option>
                <option value="Rock">Rock</option>
            </select></p>
            <button type="submit">Búscar</button>
        </div>
    </form>
</body>
</html>