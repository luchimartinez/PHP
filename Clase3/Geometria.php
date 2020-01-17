<?php

class Shape{
    function draw($origin, $radius){
        echo "el q dibuja es el padre <br>";
    }
}

class Circle extends Shape {
    function draw ($origin, $radius) {
        if ($radius > 0){
            parent::draw($origin, $radius); // para q haga overwrite tienen q ser las mismas declaraciones
            echo "ahora imprime el hije";
        }
    }
}

//test

$circulo = new Circle();
$circulo->draw(3,15);

?>