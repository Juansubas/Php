<?php

//Escritura archivo
$nombreArchivo = "contenido.txt";
$contenidoArchivo = " Hola, saludos";

//con write remplazamos todo y escribimos lo que le indiquemos
//$archivoCrear = fopen($nombreArchivo,"w");

//con append insertamos en vez de remplazar
$archivoCrear = fopen($nombreArchivo,"a");

fwrite($archivoCrear, $contenidoArchivo);

fclose($archivoCrear);

?>