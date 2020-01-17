<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php

    echo "hola Lucia";
    echo ("esta es una frase simple <br> y vemos el salto ");
    
    $frase = "esto es una abreviatura"; //inicializar la variable
    echo $frase; 
    echo "<br>";

    echo gettype($frase); // devuelve el tipo de dato primitivo
    echo "<br>";
    
    settype ($var, 'int'); // para setear de manera formal una variable
    print $var; //otro tipo de comando para imprimir
    echo "<br>";

    // casteo de variables
    $nro = 3.14;
    $contenedor = (double) $nro;
    echo "nro es $contenedor <br>"; // con comillas simples imprime tal cual sin interpretar la variable
    $contenedor1 = (string) $nro;
    echo gettype($contenedor1);
    echo "<br>";

    $number = 666;
    printf ("Decimal; %d <br>", $number); //salida con formato, funciona en java
    printf ("Binario; %b <br>", $number);
    printf ("Double; %f <br>", $number);
    printf ("Octal; %o <br>", $number);
    printf ("String; %s <br>", $number);
    printf ("Hex (lower) %x <br>", $number);
    printf ("Hex (upper); %X <br>", $number);
    echo "<br>";

    $red = 204;
    $green = 204;
    $blue = 204;
    printf ("#%02X%02X%02X<br>" , $red, $green, $blue);
    echo "<br>";

    printf ("%04d<br>" , 36); // el 4 la cantidad de cifras, el 0 q rellene lo q le falta SIEMPRE a la izquierda
    printf ("% 4d<br>" , 36); // el 4 la cantidad de cifras, el " " q NO rellene nada
    printf ("%x4d<br>" , 36); // el 4 la cantidad de cifras, la x q rellene lo q le falta con "x" SIEMPRE a la izquierda
    printf ("%.2f<br>" , 5.343434343); // el . que trunque el 2 cuanto
    echo "<br>";
    
    $test3 = sprintf ("%.2f<br>" , 5.343434343); // para guardar el formateo si no lo quiero imprimir
    echo $test3;


    
?>


</body>
</html>