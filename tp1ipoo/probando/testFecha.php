<?php

include_once "fechaCopi.php";


$fecha = new Fecha(16, 2, 2000);
echo $fecha->fechaAbreviada() . "\n"; // "16/02/2000"
echo $fecha->fechaExtendida() . "\n"; // "16 de febrero de 2000"

$nuevaFecha = incremento($fecha, 15);
echo $nuevaFecha->fechaAbreviada() . "\n"; // "02/03/2000"
echo $nuevaFecha->fechaExtendida() . "\n"; // "2 de marzo de 2000"