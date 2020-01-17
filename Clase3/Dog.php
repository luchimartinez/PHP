<?php

class Dog {
    var $name;
    function ladrar (){
        echo "wooof woooof";
    }


function ladrarBis (){
    echo "($this->name) dice Wooof wooof! <br>";
}

public function getName(){
    return $this->name;
}

public function setName($nombre){
    $this->name = $nombre;
}

}

?>