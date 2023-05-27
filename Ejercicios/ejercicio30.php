<?php

//Variables de session
//Para mantener informacion en cualquier pagina mientras
//el navegador este abierto
//al cerrar el navegador la sesion desaparece
session_start();

$_SESSION["usuario"]="develoteca";
$_SESSION["estatus"]="Logueado";

echo "Sesion Iniciada"."<br/>";

echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

?>