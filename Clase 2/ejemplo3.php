<?php



$age = 18;
 if ($age >= 18 && $age <= 35) {
    echo "Mensaje para jovenes";
 } elseif ($age > 0 && $age < 18){
     echo "Mensaje a los chicos";
 } else {
     echo "Mensaje generico";
 }

$nombre = "manola";
$edad = 33;
$galletas_comidas = 3.5;
$hambre = true;

echo gettype ($nombre);
echo "<br>";
echo gettype ($edad);
echo "<br>";
echo gettype ($galletas_comidas);
echo "<br>";
echo gettype ($hambre);
echo "<br>";


$num1 = 10;
$num2 = 8;

if ($num1 == $num2){
    echo "Num1 es el mismo que el 2do";
}else {
    echo "NOP";
}

echo "<br>";

if ($num1 < $num2){
    echo "Num1 es menor que el 2do";
} else{
    echo "NOP";
}

echo "<br>";

if ($num1 > $num2){
    echo "Num1 es mas grande que el 2do";
} else{
    echo "NOP";
}

echo "<br>";

if ($num1 <= $num2){
    echo "Menor o igual que el 2do";
} else{
    echo "NOP";
}

echo "<br>";
echo "<br>";


$hamburguesa = 4.95; // son 2
$chocolatada = 1.95;
$coca = 0.85;
$iva = 0.75;
$precio_con_iva;
$total;
$total2;
$propina = 0.16;

$total = 2*$hamburguesa + $chocolatada + $coca;
$total2 = $total *$iva;
$precio_con_iva = $total + $total2; 
$total2 = $precio_con_iva * $propina;
$total = $total2 + $precio_con_iva;

echo $total;

//WHILE

$contador = 1;
while($contador <= 12){
    echo "$contador 2 veces es ". ($contador*2)."<br>";
    $contador++;
}

//DOWHILE

$numero1 = 1; 

do {
    echo "el numero es $numero1 <br>";
    $numero1++;

} while (($numero1 > 200) && ($numero1 < 400));

echo "<br>";
echo "<br>";

//FOR con break

$cuenta = -4;

for (; $cuenta <=10; $cuenta++){
    if ($cuenta == 0){
    break;
    } else {
        echo $cuenta. "<br>";
    }
}
echo "<br>";
echo "<br>";
//FOR con continue

$cuenta = -4;

for (; $cuenta <=10; $cuenta++){
    if ($cuenta == 0){
    continue;
    } else {
        echo $cuenta. "<br>";
    }
}


//FOR anidado

    
$valor=1;
    echo "<table border='1' align = 'center'><br>"; // la tabla se abre y cierra por afuera del for
    for($y=1; $y<=12;$y++){
        echo "<tr>";
        for ($x=1;$x<12;$x++){
            echo "<td>";
            echo $valor++; // imprime primero el 1 xq el valor anterior xq el ++ esta a la derecha de la variable
            echo "</td>";
        }
        echo "</tr>";
    }
echo "</table>";

?>