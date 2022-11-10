<?php
//Con require_once se incluye el archivo UsuarioDAO.php
require_once(__DIR__."/../../modelo/dao/UsuarioDAO.php");
        
function autenticarUsuario($codEdst, $password){
        
        $dao=new UsuarioDAO();
        
        //Se llama al método autenticarUsuario que se encuentra en la clase
        //UsuarioDAO
        $usuario = $dao->autenticarUsuario($codEdst, $password);

        //Retorna el usuario si lo encontró, de lo contrario retorna null
        return $usuario;
    }

function registrarUsuario(Usuario $usuario){
    
    $dao=new UsuarioDAO();

    $usuario = $dao->registrarUsuario($usuario);

    return $usuario;
}

function verUsuarios(){
    $dao=new UsuarioDAO();

    $usuarios = $dao->verUsuarios();

    return $usuarios;
} 

function eliminarUsuario($codEdst){
    $dao=new UsuarioDAO();
    $dao->eliminarUsuario($codEdst);
}

function verUsuarioPorId($codEdst){
    $dao=new UsuarioDAO();
    $usuario = $dao->verUsuarioPorId($codEdst);
    return $usuario;
}

function editarUsuario($usuario){
    $dao=new UsuarioDAO();
    $dao->editarUsuario($usuario);
}
