<?php

//Leer arreglos en php

//Creamos array con la palabra
$frutas = array("Fresa", "Pera", "Manzana");

$frutass = array("f"=>"fresa", "Pera", "Manzana");


echo $frutas[0];

echo $frutass["f"];
echo "<br/>"."----------"."<br/>";

for($i = 0; $i<count($frutass); $i++){
    echo $frutas[$i]."<br/>";
}

?>
