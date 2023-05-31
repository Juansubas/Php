<?php

$alumnos = ["Marines", "Jose", "Sofia",];
$datos = [
    "Nombre" => "Marines",
    "Apellido" => "Mendez",
    "Edad"=>"29"
];

//Eliminar Datos
unset($alumnos[0]);
array_pop($alumnos);
//Para el asociativo
unset($datos["Apellido"]);

//Agregar datos

array_push($alumnos,"Luis");
$datos["Colonia"] = "Alegria";

//Modificacion

$alumnos[1] = "Jose";
$datos["Apellido"] = "Mendez";

var_dump($alumnos);


?>