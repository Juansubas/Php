<?php

//Podemos especificar mas de un tipo en el atributo

class Persona {
    static $idioma;

    public function __construct
    (
        //Parecido a TypeScript
        public int|string $nombre = 0,
    ){}
}