<?php

class MiClase {
    private $miVariable;

    // Constructor
    public function __construct($valorInicial) {
        $this->miVariable = $valorInicial;
    }

    // Getter
    public function getMiVariable() {
        return $this->miVariable;
    }

    // Setter
    public function setMiVariable($nuevoValor) {
        $this->miVariable = $nuevoValor;
    }

    // Destructor
    public function __destruct() {
        echo "La instancia de MiClase se ha destruido";
    }
}

// Crear una instancia de la clase
$objeto = new MiClase("Hola, soy un valor inicial");

// Obtener el valor inicial utilizando el getter
echo $objeto->getMiVariable() . "<br>";

// Cambiar el valor utilizando el setter
$objeto->setMiVariable("¡Nuevo valor!");

// Obtener el nuevo valor utilizando el getter
echo $objeto->getMiVariable() . "<br>";

// La instancia se destruirá automáticamente al finalizar el script

?>