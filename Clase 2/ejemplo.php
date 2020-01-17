<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VECTORES</title>
</head>
<body>
    
<?php


//1er forma

$arcoiris1 = array ("rojo", "amarillo", "violeta", "azul");

//2da forma

$arcoiris2 [] = "blanco";
$arcoiris2 [] = "gris";
$arcoiris2 [] = "negro";
$arcoiris2 [] = "ambar";

//3er forma

$arcoiris3 [0] = "blanco";
$arcoiris3 [1] = "verde";
$arcoiris3 [2] = "marron";
$arcoiris3 [3] = "turquesa";

$arcoiris2[] = "naranja"; // si se me olvido aregar uno en el segundo se agrega asi y va al final automaticamente

//4ta forma

$personajes = array (
array (
    "nombre" => "Pepe",
    "ocupacion" => "superheroe",
    "edad" => "33",
    "poderEspecial" => "vision de rayos laser"
),
array(
    "nombre" => "Carlos",
    "ocupacion" => "carpintero",
    "edad" => "45",
    "poderEspecial" => "brazo super fuerte"
));

foreach ($personajes as $clave => $valor){
    echo "{$clave} => {$valor}";
    print_r ($personajes);
}

// ejercicio 9 del pdf
 $contador = 1;

while ($contador <= 49 && $contador > 0){
    if ($contador % 2 == 0){
        
    } else {
        echo $contador."<br>";
    }
    $contador++;
}

for($i=1; $i<=49; $i+=2){ 
    echo $i."<br>";
}


?>

</body>
</html>