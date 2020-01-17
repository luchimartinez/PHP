<?php

abstract class Persona{
    
    protected $nombre;
    protected $apellido;

    protected function imprimirNombreCompleto(){
        echo $this->nombre." ".$this->apellido;
    }

    protected function setNombre($nombre){
        $this->nombre = $nombre;
    }

    protected function getNombre(){
        return $this->nombre;
    }

    protected function setApellido($nombre){
        $this->apellido = $nombre;
    }

    protected function getApellido(){
        return $this->apellido;
    }
}

class Profesor extends Persona {

    private $cargo;

    public function Profesor($nombre, $apellido, $cargo){
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCargo($cargo);
    }


     public function imprimirNombreCompleto(){
        if (parent::getNombre() =='' && parent::getApellido()==''){
            echo "No hay datos cargados";
        } else{
            echo "Nombre: ".parent::getNombre()." Apellido: ".parent::getApellido()." Cargo: ".$this->getCargo()."<br>";
        }
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

class Alumno extends Persona{

    private $curso;

    public function Alumno($nombre, $apellido, $curso){
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCurso($curso);
    }

    public function imprimirNombreCompleto(){
        if (parent::getNombre() =='' && parent::getApellido()==''){
            echo "No hay datos cargados";
        } else{
            echo "Nombre: ".parent::getNombre()." Apellido: ".parent::getApellido()." Curso: ".$this->getCurso()."<br>";
        }
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

    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function getCurso(){
        return $this->curso;
    }

}

//TEST

$profe1 = new Profesor('Sergio','Lujan Mora', 'Profesor');
$profe2 = new Profesor('Pedro','Palomino', 'Director');

$alum1 = new Alumno('Perico', 'De los Palotes', 2);
$alum2 = new Alumno('Juan', 'Perez', 4);
$alum3 = new Alumno('', '', '');

$profe1->imprimirNombreCompleto();
$profe2->imprimirNombreCompleto();
$alum1->imprimirNombreCompleto();
$alum2->imprimirNombreCompleto();
$alum3->imprimirNombreCompleto();


?>