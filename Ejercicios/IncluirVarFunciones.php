<?php

//Primer Forma
//Usando Global

$variableGlobal = "Hola, soy una variable global";

function miFuncion() {
    global $variableGlobal; // Indicar que se está utilizando una variable global

    // Acceder y utilizar la variable global
    echo "El valor de la variable global es: " . $variableGlobal . "<br>";
}

// Llamar a la función
miFuncion();


///SEGUNDA FORMA , pero debemos asignar la funcion de forma anonima
$variableGlobal = "Hola, soy una variable global";

$miFuncion = function () use ($variableGlobal) {
    // Acceder y utilizar la variable importada
    echo "El valor de la variable global es: " . $variableGlobal . "<br>";
};

// Llamar a la función anónima
$miFuncion();