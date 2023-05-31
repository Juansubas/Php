<?php
//Se guarda una clase en una variable

$claseAnonima = new Class{
    public $nombre;

    public  function  suma(){
        echo 10+20;
    }
};

$claseAnonima->suma();