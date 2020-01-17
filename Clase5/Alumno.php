<?

class Alumno extends Persona{

    private $curso;

    public function Alumno($nombre, $apellido, $curso){
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCurso($curso);
    }

    public function imprimirNombreCompleto(){
        echo "Nombre: ".parent::getNombre()." Apellido: ".parent::getApellido()." Curso: ".$this->getCurso();
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


?>