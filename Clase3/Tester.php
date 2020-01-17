<?php

require 'Luz.php';
require 'LuzTubo.php';
require 'LuzBombita.php';

$tubito = new LuzTubo;
$tubito->setIndicador(true);
$tubito->setUbicacion("La Bamba");
$tubito->setNroDeWatts(60);
$tubito->setColor("amarillo");
$tubito->setLargoTubo(666);

$tubito->imprimirInfo($tubito);
$tubito->apagar();
echo $tubito->getIndicador();


?>