<?php

#Anadiremos el encabezado para definir el tipo de respuesta y la codificacion de caracteres
header('content-type: application/json; charset=utf-8');
//Requerimos el archivo models
require('productsModel.php');
//Luego lo instanciamos y guardamos la referencia a dicha instancia
$productsModel = new productsModel();

switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
            $respuesta = $productsModel->getProducts();
            echo json_encode($respuesta);
        break;
    case 'POST':
        //con file_get_contents leemos un archivo o recurso
        //en este caso especificamos con php://input que recibe por post en formato string
        //el true es para indicar que procese el resutlado como array, no es obligatorio pero por defecto es false
            $_POST = json_decode(file_get_contents('php://input',true));
        if(!isset($_POST->name) || is_null($_POST->name) || empty(trim($_POST->name)) ){
            $respuesta = ['error', 'El nombre del producto no debe estar vacio'];
        }
        else if(!isset($_POST->description) || is_null($_POST->description) || empty(trim($_POST->description)) ){
            $respuesta = ['error', 'La descripcion del producto no debe estar vacia'];
        }
        else if(!isset($_POST->price) || is_null($_POST->price) || empty(trim($_POST->price)) ){
            $respuesta = ['error', 'El precio del producto no debe estar vacio'];
        }else{
            $respuesta = $productsModel->saveProducts($_POST->name,$_POST->description,$_POST->price);
        }

        echo json_encode($respuesta);

        break;
    case 'PUT':
        echo 'Actualizar';
        break;
    case 'DELETE':
        echo 'Eliminar';
        break;

}

?>