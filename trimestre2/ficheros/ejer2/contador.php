<?php 
    $fichero =fopen("visitas.txt","r+");
    $cont= (int) fread($fichero, 8);
    $cont ++;
    rewind($fichero);
    fwrite($fichero,$cont);
    fclose($fichero);
    echo "Esta es la visita número: $cont";
?>