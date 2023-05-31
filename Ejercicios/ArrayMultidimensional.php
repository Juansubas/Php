<?php

$animales = [
  "Felinos" => ["Puma", "Jaguar","Lince"],
    "Aves" => ["Paloma", "Pato", "Tucan"],
    "Reptiles" => ["Serpiente", "Cocodrilo", "Tortuga"]
];

foreach ($animales as $key => $clasificacion) {
    foreach ($clasificacion as $animal){
        echo "$key: $animal";
    }
}