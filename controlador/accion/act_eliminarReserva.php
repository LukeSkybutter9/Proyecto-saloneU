<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbReserva.php');
    $idReserva = $_POST['idReserva'];
    
    eliminarReserva($idReserva);

    header("Location: ../../vista/perfil.php");
    