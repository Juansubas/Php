<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    <title>Document</title>
</head>
<body>
<!-- Usaremos require que aunque se parece a include
hay una diferencia es que si ocurre un error no
 deja interpretar mas codigo

 Si se usa require_once se evita repetir, para eso todo deben ser
 required_once
 -->

<?php require('ejercicio37_1.php'); ?>
<?php require_once('ejercicio37_1.php'); ?>
<?php require_once('ejercicio37_1.php'); ?>

<?php echo "Hola, estoy en la pagina principal"; ?>


</body>
</html>