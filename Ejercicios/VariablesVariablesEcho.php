<?php
//De esta manera al poner $$ buscamos que el contenido de la variable coincida con otra variable y arrojamos
//el resultado de la encontrada

$a = "b";
$b = "hola";

$variableBuscada = $$a;

echo $variableBuscada; // Imprime "hola"