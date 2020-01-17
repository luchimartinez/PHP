<?php

//operadores
echo $nombre = "manola <br>";
$cents = 212;
echo "el ancho es ".($cents/100). " metros <br>"; /* concateno con . */ 

echo 10+3;
echo "<br>";
echo 10%3;
echo "<br>";
$x = 4;
$x+=4;
echo $x;
echo "<br>";
$x++;
echo $x;
echo "<br>";


$x = 1;
$y = $x++; // primero asigna en y lo q vale x hasta el momento y despues incrementa x
echo "y es ".$y." x es " .$x;
echo "<br>";
echo "*************************";
echo "<br>";
$x = 1;
$y = ++$x; //le va a asignar el valor a y haciendo primero la cuenta en x
echo "y es ".$y." x es " .$x;
echo "<br>";

//operadores de comparacion
$x = 3;
echo $x < 4; //true 1 false 0
echo "<br>";

//operadores logicos
// &&, and, ||, or

//constantes
define ("HOLA", "Manola"); //para definir las constantes se escriben SIEMPRE en mayusculas
echo "Hola ".HOLA; // NO es necesario el $ 
echo "<br>";

// convertir a mayusculas la 1ra ;letra de la frase

$texto = "pedro el bello";
$texto = ucfirst ($texto);
echo $texto;
echo "<br>";
$texto = strtolower ($texto); // convierte a minuscula
echo $texto;
echo "<br>";


?>