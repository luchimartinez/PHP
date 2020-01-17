<?

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

?>