<!DOCTYPE html>
<html lang="en">
<head>
    <meta chatset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio web</title>
</head>
<body>
    <!-- Include aunque falle al buscar el archivo
    y tratar de incluirlo muestra un warning pero deja ejecutar

    Se puede usar include_once para envitar incluirlo varias veces,
    pero cada uno que sea repetido debe tener su include_once
    -->
    <?php include 'ejercicio36_1.php' ?>
    <?php include_once 'ejercicio36_1.php' ?>
    <?php include_once 'ejercicio36_1.php' ?>
    <?php echo "Hola, estoy en la pagina principal"; ?>
</body>

</html>