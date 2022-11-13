<?php

//Esta clase POJO sirve para guardar los datos de un Usuario
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un usuario de la tabla Usuarios de la
//base de datos

class Edificios
{
    public $idEdificio;
    public $nombre;

    
    public function __construct($idEdificio, $nombre){

        $this->idEdificio = $idEdificio;
        $this->nombre = $nombre;

    }
    
   // Métodos GET
    public function getidEdificio(){
        return $this->idEdificio;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setidEdificio($idEdificio)
    {
        $this->idEdificio = $idEdificio;

        return $this;
    }

    //Métodos SET

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

}