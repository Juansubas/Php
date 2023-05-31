<?php


$saludo = "hola";

/// HereDoc
/// funciona igual que las comillas dobles
echo <<<Frase
$saludo 
no cuentes dos los dias, haz que los dias cuenten
Frase;

// NowDoc hace lo mismo que las comillas simples ''
//eso quiere decir que no se pueden usar variables dentro de esto

//ahora $saludo se toma como un texto normal
echo <<<'Frase'
$saludo 
no cuentes dos los dias, haz que los dias cuenten
Frase;

//Tambien podemos guardar en variables

$HereDoc = <<<Frase
$saludo 
no cuentes dos los dias, haz que los dias cuenten
Frase;

$NowDoc = <<<'Frase'
$saludo 
no cuentes dos los dias, haz que los dias cuenten
Frase;

?>