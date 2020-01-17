<?php

require 'Dog.php';
require 'Labrador.php';

$perro = new Labrador();
$perro->ladrar();
$perro->name = "manchita";
echo "<br>";
print $perro->name; // no va el signo $ xq es rebundante, sino da error
echo "<br>";
$perro->setColor("blanca y negra");
print $perro->getColor();
echo "<br>";

if ($perro instanceof Dog){
    print "soy un Labrador";
} else {
    print "soy un perro";
}
echo "<br>";
print (int) ($perro instanceof Labrador);
echo "<br>";
print (int) is_subclass_of($perro, "Labrador");

?>