<?php

require 'Dog.php'; // le aviso q va a usar ese codigo
$perro = new Dog();
$perro->ladrar(); // como el punto en java
$perro ->name = "sancho";

echo "<br>";
//print$perro->name;
$perro -> ladrarBis();

?>