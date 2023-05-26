<?php
#OPERADORES RELACIONALES
    if($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        if($valorA != $valorB){
            echo "El valor de A es diferente al de B";
        }else{
            echo "El valor de A es igual al de B";
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

    <form action="ejercicio12.php" method="post">
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
