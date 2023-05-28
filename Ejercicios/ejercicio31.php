<?php

$txtNombre = "";
$rdgLenguaje = "";

$chkphp = "";
$chkhtml = "";
$chkcss = "";

if($_POST){
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre']: "";
    $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje']: "";

    //print_r($_POST);

    $chkphp = (isset($_POST['chkphp'])=="si") ? "checked": "";
    $chkhtml = (isset($_POST['chkhtml'])=="si") ? "checked": "";
    $chkcss = (isset($_POST['chkcss'])=="si") ? "checked": "";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Formulario</title>
</head>
<body>
    <!-- podemos Evidenciar como podemos escribir codigo php por partes -->
    <?php if($_POST){ ?>
    <strong> Hola </strong>: <?php echo $txtNombre; ?>
    <br/>
    <strong> Tu lenguaje es: </strong> <?php echo $rdgLenguaje; ?>
    <?php } ?>

    <form action="ejercicio31.php" method="post">

        <!-- Hacemos un formulario dodne con for e id vinculamos
         pero en este caso de los radio button deben tener el mismo name para enviarse solo una opcion
         luego como checked deja marcado por defecto, entonces con php y un operador ternario podemos ponerlo
         al que llegue al backend
         -->
        <label for="txtNombre">Nombre:</label>
        <input value="<?php echo $txtNombre?>" type="text" name="txtNombre" id="" placeholder="Ingrese su nombre" required>
        <br/>
        <p>Te gusta?:</p>
        <label for="php"> php: </label>
        <input type="radio" <?php echo ($rdgLenguaje =="php") ? "checked":"";?> name="lenguaje" value="php" id="php"><br/><br/>
        <label for="html"> html: </label>
        <input type="radio" <?php echo ($rdgLenguaje =="html") ? "checked":"";?> name="lenguaje" value="html" id="html"><br/><br/>
        <label for="css"> css: </label>
        <input type="radio" <?php echo ($rdgLenguaje =="css") ? "checked":"";?> name="lenguaje" value="css" id="css"><br/><br/>

        Estas Aprendiendo ....<br/>
        <!-- este permite seleccionar varias opciones -->
        <br/> php:<input type="checkbox" <?php echo $chkphp?> name="chkphp" value="si" id="">
        <br/> html:<input type="checkbox" <?php echo $chkhtml?> name="chkhtml" value="si" id="">
        <br/> css:<input type="checkbox" <?php echo $chkcss?> name="chkcss" value="si" id="">


        <input type="submit" value="Enviar informacion">
    </form>
</body>
</html>
