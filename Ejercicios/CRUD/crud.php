<?php

require_once("ConnectionBD.php");

class crud extends Conexion {
    public function __construct(public string $tabla) {
        parent::__construct();
    }

    public function consultarTodo() {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM $this->tabla");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $msj) {
            echo $msj->getMessage();
        }
    }

    public function consultarUno(int $id) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM $this->tabla WHERE id = ?");
            $stm->execute([$id]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $msj) {
            echo $msj->getMessage();
        }
    }

    public function delete(int $id) {
        try {
            $stm = $this->pdo->prepare("DELETE FROM $this->tabla WHERE id = ?");
            $stm->execute([$id]);
        } catch (PDOException $msj) {
            echo $msj->getMessage();
        }
    }

    public function crear(string $columnas, string $marcadores, array $datos) {
        try {
            $stm = $this->pdo->prepare("INSERT INTO $this->tabla ($columnas) VALUES ($marcadores)");
            $stm->execute($datos);
        } catch (PDOException $msj) {
            echo $msj->getMessage();
        }
    }

    public function update(string $columnas, int $id, array $datos) {
        try {
            $stm = $this->pdo->prepare("UPDATE $this->tabla SET $columnas WHERE id = ?");
            $datos[] = $id;
            $stm->execute($datos);
        } catch (PDOException $msj) {
            echo $msj->getMessage();
        }
    }
}


?>




