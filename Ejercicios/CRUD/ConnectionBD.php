<?php

//Verificar controladores instalados
//print_r(PDO::getAvailableDrivers());

class Conexion{
    public function __construct(
        public string $drive = "mysql",
        public string $host = "localhost",
        public string $user = "root",
        public string $pass = "admin",
        public string $dbName = "sunny_side",
        public string $charset= "utf-8"
    )
    {}

    protected function conexion(){
        try{
            $pdo = new PDO("$this->driver:host=$this->host;
            dbname= $this->dbName;
            charset=$this->charset",$this->user,$this->pass);
        }catch (PDOException $mensaje){
            echo $mensaje->getMessage();
        }
    }
}

?>