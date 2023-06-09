<?php
require_once("../CRUD/usuario.php");
class Usuario extends crud {
    public function __construct(
      public int $id = 0,
      public string $nombre = "",
      public string $apellido = "",
      public string $telefono = "",
      public int $edad = 0,
    ){
        parent::__construct("usuario");
    }

    public function insertar(){
        $this->crear("id,nombre,apellido,telefono,edad","?,?,?,?,?",
            [$this->id,$this->nombre,$this->apellido,$this->telefono,$this->edad]);
    }
    public function actualizar(){
        $this->update("id=?,nombre=?,apellido=?,telefono=?,edad=?",$this->id,
            [$this->id,$this->nombre,$this->apellido,$this->telefono,$this->edad]);
    }

    public function eliminar(){
        $this->delete($this->id);
    }


}