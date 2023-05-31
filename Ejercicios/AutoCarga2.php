<?php
require_once("autoload.php");

//Forma larga

//$autoCarga = new AutoCarga();
//$autoCarga->cargarRutas();

//Forma abreviada para llamar metodos de un objeto sin guardar datos
(new AutoCarga())->cargarRutas();

//De esta forma no tenemos que andar escribiendo
//require once cada vez sino que podemos llamar automaticamente
$autoCargaTres = new AutoCarga3();
$autoCargaTres->Saludar();

?>