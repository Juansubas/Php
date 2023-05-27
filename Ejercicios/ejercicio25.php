<?php
class persona{

    public $nombre;
    //solo desde la misma clase
    private $edad;
    //Solo se puede acceder desde la misma clase y subclases con herencia
    protected $altura;

    //metodos con function y con -> para hacer referencia a algo
    public function asignarNombre($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}

class trabajador extends persona{
    public $puesto;

    public function presentarseComoTrabajador(){
        echo "Hola soy ".this->nombre." y soy un ".$this->puesto;
    }
}

$objTrabajador = new trabajador(); // instancia o creacion de un objeto
$objTrabajador->asignarNombre("Oscar Uh");
$objTrabajador->puesto="Profesor";

$objTrabajador->presentarseComoTrabajador();

?>