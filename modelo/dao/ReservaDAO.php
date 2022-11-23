<?php

require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/Reserva.php");

class ReservaDAO{

    public function reservar(Reserva $reserva){

        $data_source = new DataSource();

        $stmt1 = "INSERT INTO reserva VALUES(NULL,)";

    }

    public function listarSalones($idEdificio){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM salon WHERE idEdificio = :idEdificio", Array(':idEdificio'=> $idEdificio));

        $salon=null;
        $salones=array();

        foreach($data_table as $indice => $valor){
            $salon = new Salon(
                    $data_table[$indice]["idSalon"],
                    $data_table[$indice]["ubicacion"],
                    $data_table[$indice]["capacidad"], 
                    $data_table[$indice]["idEdificio"]
                    );
            array_push($salones,$salon);
        }
        
    return $salones;
    }

    public function obtenerIdPorNombre($nombreEdificio){
        $data_source = new DataSource();

        $idEdificio = $data_source->ejecutarConsulta("SELECT idEdificio FROM edificio WHERE nombre = :nombreEdificio", Array(':nombreEdificio'=>$nombreEdificio));

        return $idEdificio;
    }

}
