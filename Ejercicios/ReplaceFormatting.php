<?php


//BUSCAR Y REMPLAZAR
$RFC = "91 75 1A EC C7";
$buscar = " ";
$remplazar = ":";

//Le indicamos lo que va a buscar, con que lo va a remplazar
// y en donde lo va a realizar.
$resultado = str_replace($buscar,$remplazar,$RFC);

//DAR FORMATO
$anio = "1994";
$mes = "01";
$dia = "21";
$formato = "%s-%s-%s";

//de esta forma podemos dar formato y unir variables quedando asi:
// 21-01-1994
echo sprintf($formato, $dia, $mes, $anio);





?>