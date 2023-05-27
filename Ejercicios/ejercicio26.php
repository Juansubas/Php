<?php
class persona{

    public $nombre;
    //solo desde la misma clase
    private $edad;
    //Solo se puede acceder desde la misma clase y subclases con herencia
    protected $altura;

    //constructor
    function _construct($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    //metodos con function y con -> para hacer referencia a algo
    public function asignarNombre($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy".$this->nombre;
    }
}

$objAlumno = new persona("pepe");
//$objAlumno->asignarNombre("Pepe");
$objAlumno->imprimirNombre();
?>