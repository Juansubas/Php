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
        if(!isset($_POST->name) || is_null($_POST->name) || empty(trim($_POST->name)) || strlen($_POST->name) > 80 ){
            $respuesta = ['error', 'El nombre del producto no debe estar vacio y no debe tener mas de 80 caracteres'];
        }
        else if(!isset($_POST->description) || is_null($_POST->description) || empty(trim($_POST->description)) || strlen($_POST->name) > 150 ){
            $respuesta = ['error', 'La descripcion del producto no debe estar vacia, no debe tener mas de 150 caracteres y no debe tener mas de 150 caracteres'];
        }
        else if(!isset($_POST->price) || is_null($_POST->price) || empty(trim($_POST->price)) || !is_numeric($_POST->price) || strlen($_POST->price) > 20 ){
            $respuesta = ['error', 'El precio del producto no debe estar vacio y debe ser de tipo numerico'];
        }else{
            $respuesta = $productsModel->saveProducts($_POST->name,$_POST->description,$_POST->price);
        }

        echo json_encode($respuesta);

        break;
    case 'PUT':
        $_PUT = json_decode(file_get_contents('php://input',true));
        if(!isset($_PUT->id) || is_null($_PUT->id) || empty(trim($_PUT->id)) ){
            $respuesta = ['error', 'El ID del producto no debe estar vacio'];
        }
        if(!isset($_PUT->name) || is_null($_PUT->name) || empty(trim($_PUT->name)) || strlen($_POST->name) > 80){
            $respuesta = ['error', 'El nombre del producto no debe estar vacio y no debe tener mas de 80 caracteres'];
        }
        else if(!isset($_PUT->description) || is_null($_PUT->description) || empty(trim($_PUT->description)) || strlen($_POST->name) > 150){
            $respuesta = ['error', 'La descripcion del producto no debe estar vacia y no debe tener mas de 150 caracteres'];
        }
        else if(!isset($_PUT->price) || is_null($_PUT->price) || empty(trim($_PUT->price)) || !is_numeric($_PUT->price || strlen($_PUT->price) > 20) ){
            $respuesta = ['error', 'El precio del producto no debe estar vacio, debe ser de tipo numerico y no contener mas de 20 caracteres'];
        }else{
            $respuesta = $productsModel->updateProducts($_PUT->id,$_PUT->name,$_PUT->description,$_PUT->price);
        }
        echo json_encode($respuesta);
        break;
    case 'DELETE':
        $_DELETE = json_decode(file_get_contents('php://input',true));
        if( !isset($_DELETE->id) || is_null($_DELETE->id) || empty(trim($_DELETE->id) )){
            $respuesta = ['error', 'El id del producto no debe estar vacio'];
        }else{
            $respuesta = $productsModel->deleteProducts($_DELETE->id);
        }
        echo json_encode($respuesta);
        break;

}

?>