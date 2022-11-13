<?php

//Esta clase POJO sirve para guardar los datos de los Salones
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un Salon de la tabla salones de la
//base de datos

class Salones
{
    public $idSalon;
    public $ubicacion;
    public $capacidad;
    public $idEdificio;
    
    public function __construct($idSalon, $ubicacion, $capacidad, $idEdificio){

        $this->idSalon = $idSalon;
        $this->ubicacion = $ubicacion;
		$this->capacidad = $capacidad;
		$this->idEdificio = $idEdificio;
    
    }
    
   // Métodos GET
    public function getidSalon(){
        return $this->idSalon;
    }

    public function getubicacion()
    {
        return $this->ubicacion;
    }

    public function getcapacidad()
    {
        return $this->correo;
    }
    
     public function getidEdificio()
    {
        return $this->password;
    }

    public function setidSalon($idSalon)
    {
        $this->idSalon = $idSalon;

        return $this;
    }

    //Métodos SET

    public function setubicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    public function setcapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    public function setIdEdifico($idEdificio)
    {
        $this->setIdEdifico = $idEdificio;

        return $this;
    }

}