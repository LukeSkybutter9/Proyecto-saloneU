<?php
    //Con session_start() se puede iniciar una nueva sesión 
    //o reanudar la sesión existente
    session_start();

    //Con require_once se incluye el archivo mdbUsuario.php
    require_once (__DIR__."/../mdb/mdbUsuario.php");
        
        //Se obtiene el codEdst y password del formulario del login,
        //los datos son recibidos por el método POST
        $codEstudiantil = $_POST['codEstudiantil'];
        $password = $_POST['password'];

        //Se llama a la funcion autenticarUsuario() que esta en mdbUsuario.php
        $user = autenticarUsuario($codEstudiantil, $password);
        
        if($user != null){
            //Si el usuario fue encontrado, se guarda su ID en una sesión con $_SESSION
            $_SESSION['ID_USUARIO'] = $user->getcodEdst();
            $_SESSION['NOMBRE_USUARIO'] = $user->getNombre();
            $_SESSION['CORREO_USUARIO'] = $user->getCorreo();
            $_SESSION['TELEFONO_USUARIO'] = $user->getTelefono();
            $_SESSION['FECHANAC_USUARIO'] = $user->getFechaNac();
            $_SESSION['SEXO_USUARIO'] = $user->getSexo();
            
           /* if($user->esAdministrador() == 1){
                header("Location: ../../vista/administradorUsuarios.php");                
            }else{
                header("Location: ../../vista/principal.html");
            }
            */

            header("Location: ../../vista/principal.php");
            
        }else{
            //Si el usuario no existe se vuelve a mostrar el login
            header("Location: ../../vista/login.html");
        }

?>