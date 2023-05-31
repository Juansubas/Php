<?php
class ClasePadre {
    protected $miVariable;

    public function __construct($valorInicial) {
        $this->miVariable = $valorInicial;
    }

    public function obtenerMiVariable() {
        return $this->miVariable;
    }
}

class ClaseHija extends ClasePadre {
    private $otraVariable;

    public function __construct($valorInicial, $otroValor) {
        parent::__construct($valorInicial); // Llamar al constructor de la clase padre
        $this->otraVariable = $otroValor;
    }

    public function obtenerOtraVariable() {
        return $this->otraVariable;
    }
}

// Crear una instancia de la clase hija
$objeto = new ClaseHija("Valor inicial", "Otro valor");

// Acceder a las propiedades y métodos de la clase padre y la clase hija
echo $objeto->obtenerMiVariable() . "<br>"; // Mostrar el valor de la variable de la clase padre
echo $objeto->obtenerOtraVariable() . "<br>"; // Mostrar el valor de la variable de la clase hija
?>