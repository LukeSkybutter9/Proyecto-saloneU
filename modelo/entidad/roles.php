<?php

//Esta clase POJO sirve para guardar los datos de un Usuario
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un usuario de la tabla Usuarios de la
//base de datos

class Roles
{
    public $idRol;
    public $nombre;
 
    
    public function __construct($idRol, $nombre){

        $this->idRol = $idRol;
        $this->nombre = $nombre;
    }
    
   // Métodos GET
    public function getidRol(){
        return $this->idRol;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setidRol($idRol)
    {
        $this->idRol = $idRol;

        return $this;
    }

    //Métodos SET

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

}