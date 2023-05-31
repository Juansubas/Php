<?php

//Podemos usar var_dump para ver su valor y sus caracteristicas

/*
 * $variable = "Hola, mundo!";
 * var_dump($variable);
 * ESTO IMPRIME LO SIGUIENTE : string(12) "Hola, mundo!"
 * */

//Operador de asignacion =
//Operador de Asignacion por referencia = &

$a = 10;

$b = &$a;

$a = 20;

//Sin la referencia con & arrojaria 10 pues almacena es una copia no una referencia
//significa que al poner & vinculamos a  $b a el $a y no solo toma una copia
echo $b ;

?>