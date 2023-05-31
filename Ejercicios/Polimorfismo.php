<?php

//PHP NO ADMITE sobrecarga de funciones

//POLIMORFIMOS IMPLICA QUE UN OBJETO QUE TIENE UNA CLASE PADRE
//SE COMPORTE DIFERENTE EN CADA CLASE HIJA AUNQUE TENGA UNA CLASE BASE
//EN COMUN CON EL MISMO METODO.

class Animal {
    public function hacerSonido() {
        echo "El animal hace un sonido genérico.<br>";
    }
}

class Perro extends Animal {
    public function hacerSonido() {
        echo "El perro ladra.<br>";
    }
}

class Gato extends Animal {
    public function hacerSonido() {
        echo "El gato maulla.<br>";
    }
}

// Crear instancias de las clases
$animal = new Animal();
$perro = new Perro();
$gato = new Gato();

// Llamar al método hacerSonido de cada objeto
$animal->hacerSonido(); // Imprimirá "El animal hace un sonido genérico."
$perro->hacerSonido(); // Imprimirá "El perro ladra."
$gato->hacerSonido(); // Imprimirá "El gato maulla."


?>