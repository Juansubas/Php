<?php

//Solo debo abrir session_start();
session_start();

//con isset verificamo si esta definida o es nula
if(isset($_SESSION["usuario"])){
    //Ahora podemos obtener los datos en cualquier archivo
    echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];
}else{
    echo"No hay datos";
}



?>