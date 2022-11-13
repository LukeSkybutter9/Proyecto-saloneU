<?php

//Esta clase POJO sirve para guardar los datos de un Usuario
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un usuario de la tabla Usuarios de la
//base de datos

class Estados
{
    public $idEstado;
    public $nombre;

    public function __construct($idEstado, $nombre){

        $this->idEstado = $idEstado;
        $this->nombre = $nombre;

    }
    
   // Métodos GET
    public function getidEstado(){
        return $this->idEstado;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setidEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    //Métodos SET

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

}