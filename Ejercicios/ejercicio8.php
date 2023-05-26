<?php
#OPERADORES ARIMETICOS
    if($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        // Suma
        $suma = $valorA + $valorB;
        // Resta
        $resta = $valorA - $valorB;
        // Division
        $division = $valorA / $valorB;
        // Multiplicacion
        $multiplicacion = $valorA * $valorB;

        echo "<br/>".$suma;
        echo "<br/>".$resta;
        echo "<br/>".$division;
        echo "<br/>".$multiplicacion;
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

    <form action="ejercicio8.php" method="post">
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
