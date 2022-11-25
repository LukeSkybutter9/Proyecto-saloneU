<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbReserva.php');
    $idReserva = $_GET['idReserva'];
    
    eliminarReserva($idReserva);

    header("Location: ../../vista/perfil.php");
    