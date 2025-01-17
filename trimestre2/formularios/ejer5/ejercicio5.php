<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericcio 5</title>
    <style>
        div{
            border: 2px dotted blue ;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php 
        if(!isset($_POST['texto'])){
            $texto="no proporcionado";
        }else{
            $texto=$_POST['texto'];
        }
        if(!isset($_POST['buscar'])){
            $buscar="No proporcionado";
        }else{
            $buscar=$_POST['buscar'];
        }
        if(!isset($_POST['genero'])){
            $genero="No proporcionado";
        }else{
            $genero=$_POST['genero'];
        }
        if(!isset($_POST['texto']) || empty($_POST["texto"])){
    ?>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <p style="font-size: 30px;color:blue;">Formulario simple</p>
        <p>Búsqueda de canciones</p>
        <div>
            <p>Texto a buscar: <input type="text" name="texto"></p>
            <?php
                $error="" ;
                if($_SERVER['REQUEST_METHOD']==='POST' && empty($_POST['texto'])){
                    $error="Debes introducir el campo de búsqueda";
                }
            ?>
            <p style="color: red;"><?php echo $error ?></p>
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
    <?php 
        }else{
            
    ?>
    <p style="font-size: 30px;color:blue;">Resultado del Formulario </p>
    <p>Texto de búsqueda: <?php echo $texto;?></p>
    <p>Buscar en: <?php echo $buscar; ?></p>
    <p>Género muscical: <?php echo $genero; ?></p>
    <button type="button" onclick="location.href='<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>'">Volver a busqueda</button>
    <?php 
        }
    ?>
</body>
</html>