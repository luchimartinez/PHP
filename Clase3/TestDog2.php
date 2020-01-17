<?php

require 'Dog2.php';

$perro = new Dog2();
$perro -> ladrar();
$perro ->name = "susi";

echo "<br>";
$perro ->DogTag = new DogTag();
$perro ->DogTag->words = "mi perrito se llama " ;
echo $perro->DogTag->words;

?>