<?php
/*Para hacer una reserva es necesario primero tener en cuenta cual es el edificio al cual debemos hacer la reserva, por esto hacemos la busqueda del
id del edificio teniendo en cuenta el nombre en la vista. Luego con este nombre/name es con el que hacemos la consulta a la base de datos para proceder
a listar en la datatable todos los salones, haciendo uso del AJAX
*/
    session_start();
    
    require_once (__DIR__."/../mdb/mdbReserva.php");
    require_once (__DIR__."/../../modelo/entidad/Reserva.php");

    $fecha = $_POST['fechaHora'];

    $idUsuario = $_SESSION['ID_USUARIO'];
    
    $nombreEdificio = $_POST['nombreEdificio'];

    $idEdificio = obtenerIdEdificio($nombreEdificio); 

    $idSalon = $_POST['numSalon'];

    $asunto = $_POST['asunto'];
    
    $reserva = new Reserva(NULL,$fecha,$idUsuario,$idEdificio,$idSalon,NULL,$asunto);

    $registro = registrarReserva($reserva);
    
    if($registro){
        if($idEdificio==1){
            header("Location: ../../vista/sierraNevada.php");
        }else if($idEdificio==2){
            header("Location: ../../vista/cienagaGrande.php");
        }else if($idEdificio==3){
            header("Location: ../../vista/marCaribe.php");
        }else{
            header("Location: ../../vista/principal.php");
        }
        
    }else{
        echo $registro;
    }

?>