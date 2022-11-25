<?php

    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $codEdst = $_POST['codEdst'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $fechaNac = $_POST['fechaNac'];
    $sexo = $_POST['sexo'];
    $admin = $_POST['admin'];

    $usuario = new Usuario($codEdst, $nombre, $correo, $password, $telefono, $fechaNac, $sexo,$admin);
    editarUsuario($usuario);

    header("Location: ../../vista/perfil.php");

?>