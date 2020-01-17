<?php

interface Boat {
    function embarcar();
    function barrenar();
    function navegar();
}

interface Plane{
    function aterrizar();
    function despegar();
    function volar();
}

class AvionAcuatico implements Boat, Plane{ //estas OBLIGADO a escribir todas las funciones
    function embarcar(){}
    function barrenar(){}
    function navegar(){
        echo "el avion acuatico navega <br>";
    }
    function aterrizar(){}
    function despegar(){}
    function volar(){
        echo "el avion acuatico vuela";
    }
}

//test

$avion1 = new AvionAcuatico();
$avion1->navegar();
$avion1->volar();
unset($avion1); // para MATAR la variable si no la uso mas


?>