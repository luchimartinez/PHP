<?php


class LuzTubo extends Luz {

private $largoTubo;
private $color;

public function obtenerLargoTubo(){ //es un get con otro nombre
    return $this->largoTubo;
}

public function getColor(){
    return $this->color;
}

public function setColor($color){
    $this->color = $color;
}

public function setLargoTubo($largo){
    $this->largoTubo = $largo;
}



public function imprimirInfo($obj) {
    /* $obj = new LuzTubo; */   
    foreach ($obj as $var => $value){
        echo "($var es $value)<br>";
    }
}

}

?>-