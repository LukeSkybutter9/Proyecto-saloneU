<?php

//Esta clase POJO sirve para guardar los datos del historial de reservas
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos del historial de la tabla historialReservas de la
//base de datos

class historialReservas
{
    public $idHistorial;
    public $fechaRegistro;
    public $usuarioReservador;
  
    
    public function __construct($idHistorial, $fechaRegistro, $usuarioReservador){

        $this->idHistorial = $idHistorial;
        $this->fechaRegistro = $fechaRegistro;
		$this->usuarioReservador = $usuarioReservador;
	
    }
    
   // Métodos GET
    public function getidHistorial(){
        return $this->idHistorial;
    }

    public function getfechaRegistro()
    {
        return $this->fechaRegistro;
    }

    public function getusuarioReservador()
    {
        return $this->usuarioReservador;
    }

    public function setidHistorial($idHistorial)
    {
        $this->codEdst = $codEdst;

        return $this;
    }

    //Métodos SET

    public function setfechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    public function setusuarioReservador($usuarioReservador)
    {
        $this->usuarioReservador = $usuarioReservador;

        return $this;
    }

}