<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style>
        #puntos{
            border: 2px dotted blue;
            width: 800px;
            padding: 10px;
        }
        input{
            margin-left: 200px;
            width: 400px;
            height: 30px;
        }
        textarea{
            margin-left: 250px;
            width: 400px;
            height: 80px;
            overflow-y: scroll;
        }
        select{
            margin-left: 200px; 
        }
    </style>
</head>
<body>
    <?php 
        if(!isset($_POST['titulo'])){
            $titulo="";
        }else{
            $titulo=$_POST['titulo'];
        }
        if(!isset($_POST['texto'])){
            $texto="";
        }else{
            $texto=$_POST['texto'];
        }
        if(!isset($_POST['categoria'])){
            $categoria="";
        }else{
            $categoria=$_POST['categoria'];
        }
        if(!isset($_POST['imagen'])){
            $imagen="No proporcionada";
        }else{
            $imagen=$_POST['imagen'];
        }
        if(!isset($_POST['titulo'])){
    ?> 
    <p style="color:blue;font-size: 30px;font-weight:bold;">Subida de ficheros</p>
    <p style="font-weight:bold;font-size:25px">Insertar nueva noticia</p>
    <div id="puntos">
        <form action="" method="post" >
            <p>Título:* <input type="text" name="titulo" id=""></p>
            <p>Texto:* <br> <textarea name="texto" id=""></textarea></p>
            <p>Categoría: <select name="categoria" id="">
                <option value="promociones">promociones</option>
                <option value="otras categoria">otra categoria</option>
            </select></p>
            <p>Imagen: <input type="file" name="imagen" id=""></p>
            <button type="submit">Insertar noticia</button>
        </form>
    </div>
    <?php
        }else{
    ?>
        <p style="color:blue;font-size: 30px;font-weight:bold;">Subida de ficheros. Resultados del formulario</p>
        <p style="font-weight:bold;font-size:25px">Resultado de la inserción de nueva noticia</p>
    <div></div>
    <?php 
        if($texto!=="" && $titulo!==""){
            echo "<p>La noticia ha sido recibida correctamente:</p>";
            echo "<ul>";
            echo "<li>Título: $titulo</li>";
            echo "<li>Texto: $texto</li>";
            echo "<li>Categoría: $categoria</li>";
            echo "<li>Imagen: $imagen</li>";
            echo "</ul>";
        }else{
            echo "<p>No se ha podido realizar la inserción debido a los siguientes errores:</p>";
            echo "<ul>";
            if($titulo==""){
                echo "<li>Se requiere el título de la noticia</li>";
            }
            if($texto==""){
                echo "<li>Se requiere el texto de la noticia</li>";
            }
            echo "</ul>";
            echo "<button onclick=\"location.href='ejercicio4.php'\">Volver</button>";
        }
        }
    ?>
</body>
</html>