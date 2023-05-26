<?php
#OPERADORES LOGICOS
    if($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        if(($valorA != $valorB) && ($valorA > $valorB) ){
            echo "El valor de A es diferente al de B y tambien es mayor";
        }

        if(($valorA != $valorB) || ($valorA > $valorB) ){
            echo "El valor de A es diferente al de B o tambien es mayor";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
    <meta name="viewport" content="width=devide-width, initial-scale=2.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio10.php" method="post">
        <label for="valorA">Valor A:</label>
        <input type="text" name="valorA">
        <br/>
        <label for="valorB">Valor B:</label>
        <input type="text" name="valorB">
        <br/>
        <input type="submit" value="Calcular">
    </form>

</body>

</html>
