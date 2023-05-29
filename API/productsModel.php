<?php

class productsModel{
    public $conexion;
    public function _construct(){
        $this->conexion = new mysqli('localhost','root','admin','products');
        mysqli_set_charset($this->conexion, 'utf8');
    }

    public function getProducts(){
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
}

?>