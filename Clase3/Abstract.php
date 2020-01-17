<?php

abstract class ClaseAbs {
    public function imprimir (){
        echo "Hola clase abstracta <br>";
    }

    abstract protected function getValor(); //definicion, fuerzo a hacer un getValor

}

class ClaseConcreta extends ClaseAbs { // tiene q hacerse una clase hije q herede de la clase abstracta para poder utilizar la funcion
    
    function getValor()
    {
        echo "NCADSjBFDSJk:nds";
    }
    
    public function imprimir (){
        parent::imprimir();
    }
}
//test
 $pruebita = new ClaseConcreta();
 $pruebita->imprimir();
 $pruebita->getValor();

?>