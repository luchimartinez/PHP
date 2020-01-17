<?php

$resultado;
if (!isset ($_REQUEST['num1']) || !isset ($_REQUEST['num2'])){
    echo "Ingrese los valores para realizar la operacion";
} else {
switch ($_REQUEST['op']) {
    case '+':
      $resultado = ($_REQUEST['num1'])+($_REQUEST['num2']);
      echo "La suma es igual a ".$resultado;
    break;
    case '-':
     $resultado = ($_REQUEST['num1'])-($_REQUEST['num2']);
     echo "La resta es igual a " .$resultado;
    break;
    case '*':
       $resultado = ($_REQUEST['num1'])*($_REQUEST['num2']);
       echo "La multiplicacion es igual a". $resultado;
    break;
    case '/':
        if($_REQUEST['num1'] == 0|| $_REQUEST['num2']==0){
            echo "No se puede dividir por cero";
        }else{
        $resultado = ($_REQUEST['num1'])/($_REQUEST['num2']);
        echo "La division es igual a " .$resultado;
    } 
    break;
    default: echo "ERROOOOOOR";
}
}


?>