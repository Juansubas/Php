<?php

    #SALE ERROR SINO VALIDAMOS SI EL ENVIO ES VERDADERO
    # o sea si han hecho un post.
    if($_POST){
        // Recibir informacion del formulario HTML ( Metodo POST )
        // Recibiremos los atributos con el nombre txtNombre
        $nombre=$_POST['txtNombre'];

        #Concatenamos con . y salto de linea "\n"
        echo "Hola ". $nombre ."\n";
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
