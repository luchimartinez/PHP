<?php

require 'Animal.php';
require 'I_Flyer.php';

class Bird extends Animal implements Flyer {

    private $ramita =0;
    private $volar = false;

    function takeOff(){

    }

    function land(){
        if ($this->volar == true){
            $this->volar == false;
        }
    }

    function fly(){
         if ($this->volar == false){
            $this->volar == true;
         }
    }

    function buildNest($num){
        if ($this->ramita ==10){
            echo "Nido construido";
        }
    }

    function layEggs(){

    }

    function eat(){

    }

    function getRamita (){
        return $this->ramita;
    }

    function setRamita($num){
        $this->ramita +=$num;
    }
    function levantarRamita($objPajaro){

        while ($this->ramita <11){
            $objPajaro->fly();
            $objPajaro->getRamita();
            $objPajaro->setRamita(1);
            $objPajaro->buildNest();

        }
            return true;

    }



}

//test

$pajarito = new Bird();
$pajarito->levantarRamita($pajarito);

?>