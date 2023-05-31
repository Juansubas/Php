<?php

//Solo es que pueda pedir parametros de un tipo

//Type Hinting

function sumar(int $a, int $b): int {
    return $a + $b;
}

$resultado = sumar(5, 10);
echo $resultado; // Imprimirá 15


?>