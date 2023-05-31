<?php

//Hay una forma mas rapida que el tipico Switch case y es match

//Ejemplo con Switch
$camisa = "Verde";
switch ($camisa) {
    case "Gris":
        echo "Encontre Camisa Gris";
        break;
    case "Amarillo":
        echo "Encontre Camisa Amarrillo";
    case "Rojo":
        echo "Encontre Camisa Rojo";
    default:
        echo "xD";
}

//El mismo Ejemplo pero con match

echo match($camisa){
    "Gris"=> "Encontre Camisa gris",
    "Amarillo"=>"Encontre Camisa Amarillo",
    "Rojo"=>"Encontre Camisa Rojo",
    "Verde" => "Encontre Camisa Verde",
    default => "Opcion no valida",
};