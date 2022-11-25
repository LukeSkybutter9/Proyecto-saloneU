<?php

require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/Reserva.php");
require_once (__DIR__."/../entidad/Salon.php");
require_once (__DIR__."/../entidad/edificios.php");

class ReservaDAO{

    /*public function reservar(Reserva $reserva){

        $data_source = new DataSource();

        $stmt1 = "INSERT INTO reserva VALUES(NULL,)";

    }
    */
    public function listarSalones($idEdificio){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM salon WHERE idEdificio = :idEdificio", array(':idEdificio'=> $idEdificio));

        $salon=null;
        $salones=array();

        foreach($data_table as $indice => $valor){
            $salon = new Salon(
                    $data_table[$indice]["idSalon"],
                    $data_table[$indice]["ubicacion"],
                    $data_table[$indice]["estado"], 
                    $data_table[$indice]["idEdificio"]
                    );
            array_push($salones,$salon);
        }
        
    return $salones;
    }


    public function registrarReserva(Reserva $reserva){
        $data_source = new DataSource();
        
        $stmt1 = "INSERT INTO reserva VALUES (NULL,:fecha,:idUsuario,:idEdificio,:idSalon,NULL,:asunto)"; 

        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':fecha' => $reserva->getfecha(),
            ':idUsuario' => $reserva->getidUsuario(),
            ':idEdificio' => $reserva->getidEdificio(),
            ':idSalon'=>$reserva->getidSalon(),
            ':asunto'=>$reserva->getAsunto()
            )
        ); 
        return $resultado;
    }
    

    public function actualizarEstadoSalon($idSalon){
        $data_source = new DataSource();
        
        $stmt2 = "UPDATE salon SET estado = :estado WHERE idSalon= :idSalon"; 

        $data_source->ejecutarActualizacion($stmt2, array(
            ':estado' => "Ocupado",
            ':idSalon' => $idSalon
        ));
    }


    public function obtenerIdPorNombre($nombreEdificio){
        $data_source = new DataSource();

        $idEdificio=NULL;

        $data_table = $data_source->ejecutarConsulta("SELECT idEdificio FROM edificio WHERE nombre = :nombreEdificio", array(':nombreEdificio'=>$nombreEdificio));
        if(count($data_table)==1){
            $idEdificio = $data_table[0]["idEdificio"];
        }

        return $idEdificio;
    }

    public function listarReservas($idUsuario){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM reserva WHERE idUsuario = :idUsuario", array(':idUsuario'=> $idUsuario));

        $reserva=null;
        $reservas=array();

        foreach($data_table as $indice => $valor){
            $reserva = new Reserva(
                    $data_table[$indice]["idReserva"],
                    $data_table[$indice]["fecha"],
                    $data_table[$indice]["idUsuario"], 
                    $data_table[$indice]["idEdificio"],
                    $data_table[$indice]["idSalon"],
                    $data_table[$indice]["idEstado"],
                    $data_table[$indice]["asunto"]
                    );
            array_push($reservas,$reserva);
        }
        
    return $reservas;
    }

    public function eliminarReserva($idReserva){
        $data_source = new DataSource();
        
        $stmt1 = "DELETE FROM reserva WHERE idReserva = :idReserva"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idReserva' => $idReserva
            )
        ); 

        return $resultado;
    }


}
