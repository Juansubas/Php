<?php
#IF ANIDADO
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

        if($valorA==$valorB) {

            echo "El valor de A es igual a el valor de B <br/>";

            if($valorA==4){
                echo "El valor es 4 <br/>";
            }
            if($valorA==5){
                echo "El valor es 5 <br/>";
            }
        }
        if( ($valorA==$valorB) && ($valorA==$valorB) ){

            echo "El valor de A es igual a B y es un numero 4";

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

    <form action="ejercicio11.php" method="post">
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
