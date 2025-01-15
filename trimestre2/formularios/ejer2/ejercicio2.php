<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        #bold{
            font-weight: bold;
        }
        form{
            border: 1px solid blue;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="ejercicio2-resultados.php" method="post">
        <p style="font-size: 30px; color:blue;">Elementos de entrada</p>
        <p id="bold">Elementos de tipo INPUT</p>
        <p id="bold">TEXT</p>
        <p>Introduzca la cadena a buscar: <input type="text" name="texto" id="" placeholder="valor por defecto"></p>
        <hr>
        <p id="bold">RADIO</p>
        <p>Sexo: <input type="radio" name="sexo" id="" value="Mujer">Mujer <input type="radio" name="sexo" id="" value="Hombre">Hombre</p>
        <hr>
        <p id="bold">CHECKBOX</p>
        <p>Extras: <input type="checkbox" name="extras[]" value="Garaje">Garaje <input name="extras[]" type="checkbox" value="Piscina">Piscina <input value="Jardín" type="checkbox" name="extras[]" id="">Jardín</p>
        <hr>
        <p id="bold">FILE</p>
        <p>Fichero: <input type="file" name="file"></p>
        <hr>
        <p id="bold">HIDDEN</p>
        <input type="hidden" name="hidden" value="hidden">
        <hr>
        <p id="bold">PASSWORD</p>
        <p>Contraseña: <input type="password" name="contrasena"></p>
        <hr>
        <p  id="bold">Elemento SELECT</p>
        <p id="bold">Select SIMPLE</p>
        <p>Color: <select name="color" id="">
            <option value="rojo">Rojo</option>
            <option value="azul">Azul</option>
            <option value="verde">Verde</option>
        </select></p>
        <hr>
        <p id="bold">Select MúLTIPLE</p>
        <p>Idiomas: <select name="idiomas[]" id="" multiple size="3">
            <option value="inglés">Inglés</option>
            <option value="francés">Francés</option>
            <option value="alemán">Alemán</option>
        </select></p>
        <hr>
        <p id="bold">Elemento TEXTAREA</p>
        <p>Comentario: <textarea name="comentario" id="" rows="10" cols="50" placeholder="Este libro me ha parecido ...."></textarea></p>
        <hr>
        <button type="submit">Enviar datos</button> <button type="reset">borrar datos</button>
    </form>
</body>
</html>