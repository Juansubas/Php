<?php
//FUNCTION JSON DECODE


$jsonContenido = '[
    {"nombre":"Oscar", "apellido":"Uh"},
    {"nombre":"Jose", "apellido":"Perez"}
    ]';

    //json_decode
    //Convierte une cadena de texto json a un objeto PHP
    // o matriz asociativa
    //pOR DEFECTO esta en true el $assoc y retorna una matriz en vez de objeto
    //json_decode($json_string, $assoc = false);

    $resultado = json_decode($jsonContenido);

    //print_r($resultado);

    foreach ($resultado as $data) {

        echo ($data->nombre)." ".($data->apellido)."<br/>";

        //print_r($data->nombre);
    }