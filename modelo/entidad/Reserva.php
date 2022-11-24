<?php

//Esta clase POJO sirve para guardar los datos de las Reservas
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de una Reserva de la tabla Reservas de la
//base de datos

class Reserva
{
    public $idReserva;
    public $fecha;
    public $idUsuario;
    public $idEdificio;
    public $idSalon;
    public $idEstado;
    public $asunto;

    
    public function __construct($idReserva, $fecha, $idUsuario, $idEdificio,$idSalon, $idEstado, $asunto){

        $this->idReserva = $idReserva;
        $this->fecha = $fecha;
		$this->idUsuario = $idUsuario;
		$this->idEdificio = $idEdificio;
        $this->idSalon = $idSalon;
        $this->idEstado = $idEstado;
        $this->asunto = $asunto;
    }
    
   // Métodos GET
    public function getidReserva(){
        return $this->idReserva;
    }

    public function getfecha()
    {
        return $this->fecha;
    }

    public function getidUsuario()
    {
        return $this->idUsuario;
    }
    
    public function getidEdificio()
    {
        return $this->idEdificio;
    }

	public function getidSalon()
    {
        return $this->idSalon;
    }

    public function getidEstado()
    {
        return $this->idEstado;
    }

    public function getAsunto()
    {
        return $this->asunto;
    }

    public function setidReserva($idReserva)
    {
        $this->idReserva = $idReserva;

        return $this;
    }

    //Métodos SET

    public function setfecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function setidUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function setidEdificio($idEdificio)
    {
        $this->idEdificio = $idEdificio;

        return $this;
    }

    public function setidSalon($idSalon)
    {
        $this->idSalon = $idSalon;

        return $this;
    }

    public function setidEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

}

