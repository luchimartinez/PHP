<?php

//IF

$humor = "contento";
if ($humor == "contento"){
    echo "yeeeei :)";
} elseif {
    echo "ooooooooh :(";
} else{
    echo "mmmm :/";
}

//SWITCH , NO compara objetos

switch ($humor){
    case "contento":
        echo "yeeeei :)";
        break;
    case "triste": 
        echo "ooooooooh :(";
        break;
    case "cansado":
        echo "siestita time!";
        break;
    case "enojado":
        echo ":@";
        break;
    default:
        echo "mi no entender :/";
        break; // no es obligatorio
}

//IF REDUCIDO se usa cuando tengo q guardar en una variable ekl resultado del if

$humor = "aburrido";
$rta = ($humor == "aburrido")? "yo estoy aburrida" : "yo estoy re UP"; // ?= entonces := else
echo $rta; 





?>