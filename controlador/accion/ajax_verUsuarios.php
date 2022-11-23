<?php

    session_start();

    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    
    $usuario = verUsuarioPorId($codigoEst);
   
    echo json_encode($usuario);  


    