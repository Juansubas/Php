<?php

class AutoCarga{

    private function cargarClase($clase){

        //AQUI HARIA FALTA ORGANIZAR EL EXTRACTOR DE RUTAS O ALGO ASI
        //en este caso como todas estan en la misma carpeta no hay lio.
        // lAS RUTAS VIENEN CON \\ por lo tanto debemos quitar eso y poner
        // lo normal que es /
        $ruta = str_replace("\\", "/",$clase).".php";

        //Validar si la ruta existe
        //con file exists validamos que sea un archivo
        if(file_exists($ruta)){
            //si existe entonces esta funcion
            require_once ($ruta);
        }
    }

    public function cargarRutas(){
        //Esto permite registrar varias funciones el metodo
        //Este metodo lo que hace es que cada vez que una clase
        //que no ha sido definida se intenta usar, se llama automaticamente
        //con$this le pasamos la misma clase y llamamos a cargarClase
        spl_autoload_register(array($this,"cargarClase"));
    }

}

?>