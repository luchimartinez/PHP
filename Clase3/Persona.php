<?php

class Persona {

    public $nombre = "Jorge";
    public $apellido = "Perez";
    public $edad = 33;
    public $ciudad = "BsAs";

}

$tipito = new Persona();
foreach($tipito as $var => $value){ // para cada elemento de tipo var de tipito mostrame value 
    print "$var es $value <br>"; 
}

// -> para OBJETOS => para VECTORES

?>