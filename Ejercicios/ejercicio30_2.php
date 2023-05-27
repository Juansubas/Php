<?php

session_start();
session_destroy();

echo "Se destruyo la session de usuario";

/*
 * Con esto ya en ninguna pagina tendras la session
 *
 * session_destroy():Esta función se utiliza para destruir la sesión actual y eliminar todos los datos asociados a ella.
 * Borra todos los datos de la sesión y establece la sesión en un estado vacío. Sin embargo, tenga en cuenta que
 * session_destroy() no elimina inmediatamente los datos de la sesión del servidor. Los datos de la sesión
 * se eliminarán completamente cuando se ejecute el ciclo de vida completo de la página y se cierre el navegador.
 *
 * */



?>