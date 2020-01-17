<?php

class Labrador extends Dog{ // es hijo de perro

    var $color;

   
public function getColor(){
    return $this->color;
}

public function setColor($color){
    $this->color = $color;
} 
}

?>