<?php

class productsModel{
    public $conexion;
    public function __construct(){
        $this->conexion = new mysqli('localhost','root','admin','api');
        mysqli_set_charset($this->conexion, 'utf8');
    }

    public function getProducts(){
        //validacion de la conexion
        //la propiedad connect_errno retorna el numero del error y en if un numero diferente de cero
        //es true activando el condicional
        //en caso de no existir error retorna 0 siendo false
        if ($this->conexion->connect_errno) {
            //con connect_error tenemos el mensaje de error.
            echo "Error en la conexión: " . $this->conexion->connect_error;
            return "";
        }
        $products=[];
        $sql="SELECT * FROM products";
        //Llega unos valores despues de la consulta
        $registros = mysqli_query($this->conexion,$sql);
        //con assoc transforma las filas en un array asociativo
        //cada vez que se llama a ese metodo se accede a otra fila
        //como while en php lee la existencia de un dato como true y su falta como false
        //entonces ejecutara y seguira llamando a row hasta que al final quede null y entienda que es false
        while($row = mysqli_fetch_assoc($registros)){
            //cada vez que obtenemos una row, la insertamos en el array al final.
            array_push($products, $row);
        }
        //retornamos el array final.
        return $products;
    }

    public function saveProducts($name, $description, $price){
        $sql="INSERT INTO products(name,description,price) VALUES('$name', '$description', '$price')";
        if ($this->conexion->connect_errno) {
            //con connect_error tenemos el mensaje de error.
            echo "Error en la conexión: " . $this->conexion->connect_error;
            return "";
        }
        mysqli_query($this->conexion,$sql);
        $resultado=["Success","Producto Guardado"];
        return $resultado;

    }

    public function updateProducts($id, $name, $description, $price){
        $sql = "UPDATE products SET name = '$name', description='$description', price='$price' WHERE id='$id'";
        mysqli_query($this->conexion, $sql);
        $resultado=["Success", "Producto Actualizado"];
        return $resultado;
    }

    public function deleteProducts($id){
        $sql = "DELETE FROM products WHERE id = '$id'";
        mysqli_query($this->conexion, $sql);
        $resultado = ['Success', "Producto Eliminado"];
        return $resultado;
    }
}

?>