<?php

//1 
echo ('hola');
echo 'hola';
print ('hola');
print 'hola';
echo "<br>";

//2 muestra de array heterogeneo con distintos tipos de dato

$arr = array('uno',2,3);
for ($i=0;$i<3;$i++){
    echo $arr[$i]."<br>";
}
echo "<br>";
//3 

echo $arr[1]."<br>";
echo "<br>";

//4 

$cuenta = count($arr); // para saber extension del array
echo $cuenta."<br>";
$cuenta2 = sizeof($arr); // para saber extension del array
echo $cuenta2."<br>";
echo "<br>";

//5

$a = array(2,4,6,8);
print $a; echo "<br>"; // DA ERROR no se puede imprimir un vector como si fuera un cartel
print_r($a); echo "<br>";
var_dump($a); //te dice el valor, el total de valores de la cadena y el tipo de dato
echo "<br>";
echo "<br>";

//6 

$b = array("a", "b",array(2,4,6,8),"d");
print_r($b); echo "<br>";
var_dump($b);
echo "<br>";
echo "<br>";

//7

$c = array('a'=> 'ala', 'b'=> 'zapato','c'=>'mesa');
print_r(array_keys($c));echo "<br>"; //imprimo solo la posicion
print_r(array_values($c));echo "<br>"; //imprimo solo los valores
print_r(array_flip($c));echo "<br>";
array_unshift($c,'zapato'); //te agrega un elemento al principio LIFO (last in first out)
print_r($c); echo "<br>";
echo "<br>";echo "<br>";
array_shift($c); //POP (pick in pile) elimina el primer elemento del array
print_r($c);echo "<br>";
echo "<br>";echo "<br>";
array_push($c, 'raton'); //agrega un elemento al final de la cola
print_r($c);echo "<br>";
echo "<br>";echo "<br>";
//echo array_pop($c); echo "<br>"; //LIFO agarra el ultimo q entro y lo elimina
echo "<br>";echo "<br>";
sort($c); //ordena por valores y reasigna claves numericas
print_r($c);echo "<br>";
$c = array('a'=> 'ala', 'b'=> 'zapato','c'=>'mesa');
ksort($c); // ordena por clave , asort ordena por valores
print_r($c);echo "<br>";
print(array_search('mesa',$c));echo "<br>"; // busca la clave
?>