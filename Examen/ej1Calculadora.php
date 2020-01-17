<?php

function calcular($operador, $array){

    $num2=0;
    $primerNumero=0;
    $resultado=0;
    $arrayInterno = $array;

    if ($operador != '+' && $operador!='-'&& $operador !='*' && $operador !='/'){
        echo 'Operador incorrecto, no se puede ejecutar el calculo';
    } else{

        switch($operador){
            case '+':
               $resultado = array_sum($arrayInterno);
                echo $resultado;
            break;
            case '-':
                for($i=1; $i<=sizeof($arrayInterno); $i++){
                   $primerNumero=$i[0];
                   $num2 = $i[1];
                   if ($num2 > $primerNumero){
                         $resultado-=[$i];
                   } else {
                       continue;
                   }
                }
                echo $resultado;
            break;
            case '*':
                for($i=1; $i<=sizeof($arrayInterno); $i++){
                    $primerNumero=$i[0];
                    $num2 = $i[1];
                    if ($num2 > $primerNumero){
                        $resultado*=[$i];
                  } else {
                      continue;
                  }
                 }
                echo $resultado;
            break;
            case '/':
                for($i=1; $i<=sizeof($arrayInterno); $i++){
                    $primerNumero=$i[0];
                    $num2 = $i[1];
                    if ($primerNumero == 0){
                            echo "No se puede dividir por cero";
                        break;
                    } if ($num2 > $primerNumero){
                        $resultado/=[$i];
                  } else {
                      continue;
                  }
                    break;
                       

          
                }
                }
               
        }
    }



//test

$miArray =  array(2,4,6,8,10);

calcular('-',$miArray);





?>

