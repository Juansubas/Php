<?php

switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
        echo 'Solicitud GET';
        break;
    case 'POST':
        echo 'Guardar';
        break;
    case 'PUT':
        echo 'Actualizar';
        break;
    case 'DELETE':
        echo 'Eliminar';
        break;

}

?>