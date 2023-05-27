<?php

//Conexion a base de datos

$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$contrasenia = "admin";

try {
    //PDO clase que permite conectarse a la bd
    //Aunque queremos mariadb con mysql es compatible mariadb
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    //Definimiendo que los errores se manejaran por Excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM fotos";

    //Debemos guardar el valor que nos arroja
    $sentencia=$conexion->prepare($query);
    $sentencia->execute();

    //Ahora como se obtiene un objeto, mediante el metodo fetchAll
    //obtenemos todas su filas en un array multidimensional
    $resultado= $sentencia->fetchAll();

    //Imprimiendo
    //print_r($resultado);

    //Usando foreach

    foreach ($resultado as $foto){
        //print_r($foto['nombres']);
        echo $foto['nombres']."<br/>";
    }

    echo "Conexion Establecida";
    //Como hemos definidos excepciones lanzadas por PDO
    //Entonces podremos atrapar las excepciones por aca
}catch (PDOException $error) {
    echo "Conexion Erronea".$error;
}





?>
