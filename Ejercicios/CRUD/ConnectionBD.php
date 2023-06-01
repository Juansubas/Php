<?php


class Conexion{
    protected $pdo;
    public function __construct(
        public string $driver = "mysql",
        public string $host = "localhost",
        public string $user = "root",
        public string $pass = "admin",
        public string $dbName = "sunny_side",
        public string $charset= "utf8"
    )
    {
        $this->pdo = $this->conexion();
    }

    protected function conexion(){
        try{
            $dsn = "$this->driver:host=$this->host;dbname=$this->dbName;charset=$this->charset";
            return new PDO($dsn, $this->user, $this->pass);
        }catch (PDOException $mensaje){
            echo $mensaje->getMessage();
        }
    }
}




?>