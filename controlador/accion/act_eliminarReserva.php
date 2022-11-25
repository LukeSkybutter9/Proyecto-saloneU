<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbReserva.php');
    $idReserva = $_GET['idReserva'];
    
    eliminarUsuario($idUsuario);

    header("Location: ../../vista/administradorUsuarios.php");
    