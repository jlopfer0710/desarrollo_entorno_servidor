<?php 
    $fichero= fopen("lectura.php","r");
    $salida= fopen("salida.txt","w");
    $string="";
    /*while(!feof($fichero)){
        $string .=fgets($fichero);
    }*/
    $contenido = file_get_contents("lectura.php");
    file_put_contents("salida.txt", $contenido);
    fclose($fichero);
    //fwrite($salida,$string);
    fclose($salida)

?>