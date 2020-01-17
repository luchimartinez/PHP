<?php

class Luz {
protected $nroDeWatts = 50; //se pone PROTECTED para que los hijos lo vean
protected $indicador = true;
protected $ubicacion = "X";

public function prender(){
    if ($this->indicador == false){
        $this->indicador == true;
    }
}

public function apagar(){
    if ($this->indicador == true){
        $this->indicador ==false;
    }
}

public function estaPrendida(){
    if ($this->indicador == true){
        return true;
    } else {
        return false;
    }
}

public function imprimirUbicacion(){
    echo "$this->ubicacion";
}

public function getNroDeWatts(){
    return $this->nroDeWatts;
}

public function setNroDeWatts($numero){
    $this->nroDeWatts = $numero;
}

public function getIndicador(){
    return $this->indicador;
}

public function setIndicador($prendido){
    $this->indicador = $prendido;
}
public function getUbicacion(){
    return $this->ubicacion;
}

public function setUbicacion($nombre){
    $this->ubicacion = $nombre;
}

}

?>
