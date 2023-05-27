<?php
//Metodos estaticos

class UnaClase{

    public static function unMetodo(){
        echo "Hola soy un mtodo estatico";
    }
}

$obj= new UnaClase();
$obj->unMetodo();

//llamar metodos estaticos

unaClase::unMetodo();

?>