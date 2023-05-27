<?php

//Solo debo abrir session_start();
session_start();


//Ahora podemos obtener los datos en cualquier archivo
echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

?>