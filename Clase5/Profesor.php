<?php

class Profesor extends Persona {

    private $cargo;

    public function Profesor($nombre, $apellido, $cargo){
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCargo($cargo);
    }


     public function imprimirNombreCompleto(){
        echo "Nombre: ".parent::getNombre()." Apellido: ".parent::getApellido()." Cargo:".$this->getCargo();
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function setCargo($nombre){
        $this->cargo = $nombre;
    }
 
    public function setNombre($nombre){
        parent::setNombre($nombre);
    }

    public function getNombre(){
        return parent::getNombre();
    }

    public function setApellido($nombre){
        parent::setApellido($nombre);
    }

    public function geApellido(){
        return parent::getApellido();
    }

}

?>