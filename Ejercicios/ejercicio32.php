<?php

if($_POST){
    print_r($_POST);

    //Para manipular el file
    //Debemos poner $_FILES nombre del input y nombre de la prop a obtener
    print_r($_FILES['archivo']['name']);
}

?>

//Valores input file
<!DOCTYPE html>
<html lang="en">
<head>
    <meta chatset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Document</title>
</head>
<body>

    <!-- si no pones otra prop no puede adjuntar el archivo solo
     llega el nombre del input, para recibir documentos debes poner
     lo siguiente:
     enctype="multipart/form-data"-->
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">

        Imagen:
        <input type="file" name="archivo" id="">
        <br/>
        <input type="submit" name="enviar" value="Enviar Informacion">

    </form>
</body>

</html>