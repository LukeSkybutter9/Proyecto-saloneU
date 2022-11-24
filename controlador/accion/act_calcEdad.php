<?php
// Calcula la edad (formato: año/mes/dia)
$user = autenticarUsuario($fechaNac);
$fechaNac = $_POST ['fechaNac']
function edad($fechaNac){
list($anio,$mes,$dia) = explode("-",$edad);
$anio_dif = date("Y") – $anio;
$mes_dif = date("m") – $mes;
$dia_dif = date("d") – $dia;
if ($dia_dif < 0 || $mes_dif < 0)
$anio_dif–;
return $anio_dif;
}

?>