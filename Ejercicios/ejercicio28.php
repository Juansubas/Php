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

    $query = "INSERT INTO fotos (id, nombres, ruta) VALUES (NULL,'Jugando con la programacion jeje', 'ruta.jpg')";

    $conexion->exec($query);

    /*Otra forma mas organizada y mejor:

    // Preparar la consulta
    $statement = $conexion->prepare($query);

    // Asignar los valores a los parámetros
    // Anteriormente hay que definir las variables
    $statement->bindParam(':nombre', $nombre);
    $statement->bindParam(':edad', $edad);
    $statement->bindParam(':email', $email);

    // Ejecutar la consulta
    $statement->execute();

    // Verificar si la inserción fue exitosa
    if ($statement->rowCount() > 0) {
        echo "Valores insertados correctamente";
    } else {
        echo "Error al insertar valores";
    }

    */

    echo"Conexion establecida";

    //Como hemos definidos excepciones lanzadas por PDO
    //Entonces podremos atrapar las excepciones por aca
}catch (PDOException $error) {
    echo "Conexion Erronea".$error;
}





?>
