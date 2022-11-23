<?php

//Esta clase POJO sirve para guardar los datos de los Salones
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un Salon de la tabla salones de la
//base de datos

class Salon
{
    public $idSalon;
    public $ubicacion;
    public $estado;
    public $idEdificio;
    
    public function __construct($idSalon, $ubicacion, $estado, $idEdificio){

        $this->idSalon = $idSalon;
        $this->ubicacion = $ubicacion;
		$this->estado = $estado;
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

    public function getestado()
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

    public function setestado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function setIdEdifico($idEdificio)
    {
        $this->setIdEdifico = $idEdificio;

        return $this;
    }

}