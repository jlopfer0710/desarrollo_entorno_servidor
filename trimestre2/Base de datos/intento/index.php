<?php 
    include "fecha.php";
    error_reporting(E_ALL);
    ini_set("display_errors",1);

    $conexion=mysqli_connect("localhost","instituto","instituto","Instituto","3307");
    if(mysqli_connect_errno()){
        die("Error de Conexión:"). mysqli_connect_error();
    }
    $cursos=[];
    $letras=[];

    $resultCursos=mysqli_query($conexion,"SELECT DISTINCT Curso FROM Alumnos ORDER BY Curso ASC");
    while($row=mysqli_fetch_assoc($resultCursos)){
        $cursos[]=$row['Curso'];
    }
    $resultLetras=mysqli_query($conexion,"SELECT DISTINCT Letra FROM Alumnos ORDER BY Letra ASC ");
    while($row=mysqli_fetch_assoc($resultLetras)){
        $letras[]=$row['Letra'];
    }
    $cursoSeleccionado="Todos";
    $letraSeleccionada="Todas";
    if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['filtrar'])){
        $cursoSeleccionado=$_POST['curso'];
        $letraSeleccionada=$_POST['letra'];
    }
    $query="SELECT * FROM Alumnos";
    $filtros=[];
    if($cursoSeleccionado!=="Todos"){
        $filtros[]="Curso= '". mysqli_real_escape_string($conexion,$cursoSeleccionado). "'";
    }
    if($letraSeleccionada!=="Todas"){
        $filtros[]="Letra= '". mysqli_real_escape_string($conexion, $letraSeleccionada)."'";
    }
    if(!empty($filtros)){
        $query.=" WHERE ". implode(" AND ",$filtros);;
    }
    $query.=" ORDER BY Apellidos ASC";
    $result=mysqli_query($conexion,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link rel="stylesheet" href="dwes.css">
</head>
<body>
    <h2>Filtrar Alumnos</h2>
    <form method="post" action="<?= $_SERVER['PHP_SELF']?>">
        <label for=""><strong>Curso: </strong></label>
        <select name="curso" id="">
            <option value="Todos"<?=($cursoSeleccionado==="Todos")? "selected" : '' ?>>Todos</option>
            <?php foreach($cursos as $curso){?>
                <option value="<?=($curso) ?>"<?=($cursoSeleccionado===$curso)? "selected" : '' ?>>
                    <?= htmlspecialchars($curso) ?>
                </option>
            <?php }?>
        </select>
        <label for=""><strong>Letra: </strong></label>
        <select name="letra" id="">
            <option value="Todas"<?=($cursoSeleccionado==="Todas")? "selected" : '' ?>>Todos</option>
            <?php foreach($letras as $letra){?>
                <option value="<?=($letra) ?>"<?=($letraSeleccionada===$letra)? "selected" : '' ?>>
                    <?= htmlspecialchars($letra) ?>
                </option>
            <?php }?>
        </select><br><br>
        <button name="filtrar">Filtrar Alumnos</button>
    </form>
    <center>
        <h2>Listado de Alumnos</h2>
        <table>
            <thead>
                <th>Nº Expediente</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha Nac.</th>
                <th>Curso</th>
                <th>Letra</th>
            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_assoc($result)){?>
                    <tr>
                        <td><?= htmlspecialchars($row["N_expdte"])?></td>
                        <td><?= htmlspecialchars($row["Nombre"])?></td>
                        <td><?= htmlspecialchars($row["Apellidos"])?></td>
                        <td><?= htmlspecialchars($row["Fecha_nac"])?></td>
                        <td><?= htmlspecialchars($row["Curso"])?></td>
                        <td><?= htmlspecialchars($row["Letra"])?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </center>
</body>
</html>
