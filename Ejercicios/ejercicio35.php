<?php

//Consumir una API con php
//https://developers.dailymotion.com/

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

//Opciones para consumir la api, necesitamos por ejemplo ssl para el https
//Con ssl le indicamos que vamos a modificar esto
//primer parametro es para verificar el certificado ssl
//segundo para validar el nombre del servidor en el certificado
//de esta manera al desactivar esta seguridad pues vamos mas facil
//peer se refeire al extremo o servidor
$opciones = array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

//leer contenido de una url, stream_context_create, con false indicamos que no
//stream_context_create es para crear un contexto de transmision para pasarle
//las opciones que debera tener en cuenta al leer la url o la solicitud
//en este cado la conexion SSL que no la tendremos en cuenta
//haremos ningun procesamiento extra en el contenido
$respuesta = file_get_contents($url, false, stream_context_create($opciones));

$objRespuesta = json_decode($respuesta);

//print_r($objRespuesta);

foreach($objRespuesta->list as $video){
    //print_r($video->title);
    //print_r($video->channel);
}

?>

<ul>
    <?php foreach($objRespuesta->list as $video){ ?>
        <li><?php echo ($video->title); ?> | <?php echo ($video -> channel); ?></li>
    <?php } ?>
</ul>
