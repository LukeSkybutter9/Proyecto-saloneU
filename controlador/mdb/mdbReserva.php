<?php

require_once(__DIR__."/../../modelo/dao/ReservaDAO.php");

function listarSalones($idEdificio){

    $dao = new reservaDAO();

    $salones= $dao->listarSalones($idEdificio);

    return $salones;
}

function registrarReserva(Reserva $reserva){
    
    $dao=new ReservaDAO();

    $reserva = $dao->registrarReserva($reserva);

    return $reserva;
}


function obtenerIdEdificio($nombreEdificio){

    $dao = new reservaDAO();

    $idEdificio = $dao->obtenerIdPorNombre($nombreEdificio);

    return $idEdificio;
}
