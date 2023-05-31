<?php


//Usamos gettype para obtener
//el tipo de variable
$nombre = "Hola Mundo";
echo gettype($nombre);

$nombre = 9.5;
echo gettype($nombre);

$numero = intval($nombre);

$texto = strval($numero);

/*
 * De esta forma podemos cambiar, a continuacion mas ejemplos
 * floatval(): Convierte un valor en punto flotante (float).
 * boolval(): Convierte un valor en booleano (bool).
 * doubleval(): Convierte un valor en punto flotante de precisión doble (double).
 * settype(): Cambia el tipo de una variable a un tipo específico.
 * (int): Cast o conversión explícita a entero.
 * (string): Cast o conversión explícita a cadena.
 * str_replace(): Reemplaza todas las apariciones de un valor en una cadena con otro valor.
 * */

$valor = "3.14";
settype($valor, "float"); // Cambio de tipo a flotante
var_dump($valor); // float(3.14)

//CON CASTING

$numero = "123";
$entero = (int) $numero; // Cast a entero
var_dump($entero); // int(123)

$cadena = 45;
$texto = (string) $cadena; // Cast a cadena
var_dump($texto); // string(2) "45"

?>