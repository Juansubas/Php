<?php

$alumnos = ["Marines", "Jose", "Sofia",];
$datos = [
    "Nombre" => "Marines",
    "Apellido" => "Mendez",
    "Edad"=>"29"
];

//Ordena alfabeticamente o de menor a mayor
asort($alumnos);
asort($datos);

//Ordenar a la inversa
arsort($alumnos);
arsort($datos);

//Cuenta
var_dump(count($alumnos));
var_dump(count($datos));

//Busqueda
var_dump(array_search("Sofia",$alumnos));

//Remplazo (retorna el arreglo corregido)
//Ponemos el arreglo y leugo indicamos los indices o keys y el valor
$corregido = array_replace($alumnos, [
   0=>"Laura",
   2=>"Jose"
]);

$datosCorrecion = array_replace($datos, [
   "Apellido"=>"Mendez"
]);