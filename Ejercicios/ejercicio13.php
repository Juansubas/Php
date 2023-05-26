<?php

if($_POST){
    $button = $_POST['btnValor'];

    switch (button) {
        case 1:
            echo "Presionaste el boton 1";
        break;

        case 2:
            echo "Presionaste el boton 2";
        break;

        case 3:
            echo "Presionaste el boton 3";
        break;

        default:
            echo "Ensayando opcion no valida";
        default;
    }
}


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=2.0">
        <title>Document</title>
    </head>
    <body>
        <form action="ejercicio13.php" method="post">
            <input type="submit" name="btnValor" value="1">
            <br/>
            <input type="submit" name="btnValor" value="2">
            <br/>
            <input type="submit" name="btnValor" value="3">
        </form>
    </body>
</html>
