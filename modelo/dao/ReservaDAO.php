<?php

require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/Reserva.php");

class ReservaDAO{

    public function reservar(Reserva $reserva){

        $data_source = new DataSource();

        $stmt1 = "INSERT INTO reserva VALUES(NULL,)";


    }


}
