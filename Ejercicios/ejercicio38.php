<?php

// abriendo un archvio para leer el contenido
$archivo = "contenido.txt";

//usamos fopen

//r para formato read de lectura
$archivoArbierto=fopen($archivo,"r");

//Leer el archivo una vez abierto
$contenido=fread($archivoArbierto, filesize($archivo));

echo $contenido;


?>