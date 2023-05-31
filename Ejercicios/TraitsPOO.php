<?php

/*En PHP, un trait es una forma de reutilizar código en clases,
permitiendo la composición horizontal de comportamientos en lugar
de la herencia tradicional. Un trait es similar a una clase, pero no
puede ser instanciado directamente
y se utiliza para agregar métodos y propiedades a otras clases.*/

// Definición de un trait
trait Saludo {
    public function saludar() {
        echo "Hola, ¡bienvenido!";
    }
}

// Clase que utiliza el trait
class Persona {
    use Saludo;
}

// Crear una instancia de la clase Persona
$persona = new Persona();

// Llamar al método definido en el trait
$persona->saludar(); // Imprimirá "Hola, ¡bienvenido!"


?>