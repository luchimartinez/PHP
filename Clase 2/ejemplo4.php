<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php

function granSaludo(){
    echo "<h1>HOLA MANOLA</H1> ";
}

granSaludo();

function granSaludo2($txt){
    echo "<h1>HOLA MANOLA. $txt </H1> ";
}

granSaludo2("wachin");

function granSaludo3($nombre, $hora ){
    echo "<h1>HOLA MANOLA" .$nombre. "Buenas " . $hora."</h1> ";
}

granSaludo3("lupe", "dias"); // no aparece los parametros

function sumar ($a, $b){
    $rta = $a + $b;
    return $rta;
}

$edad = 33;

function verEdad(){
    global $edad;
    echo $edad;
}

verEdad();

function agrego5 ($nro){
    $nro+=5;
}

$valorOrigen = 10;

agrego5($valorOrigen); //pasaje por valor

echo $valorOrigen;

function agrego5_bis (&$nro){ //pasaje por referencia, donde esta en la memoria
    $nro+=5;
}

agrego5_bis($valorOrigen);
echo $valorOrigen;



?>

</body>
</html>