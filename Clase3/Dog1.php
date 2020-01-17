<?php

class Dog1{

private $name;
public function ladrar (){
    echo "wooof woooof";
}


public function ladrarBis (){
echo "($this->name) dice Wooof wooof! <br>";
}

public function getName(){
    return $this->name;
}

public function setName($nombre){
    $this->name = $nombre;
}


}

$perro = new Dog1();
$perro->ladrar();
echo "<br>";
$perro -> setName("Sultan");
echo $perro -> getName();
?>