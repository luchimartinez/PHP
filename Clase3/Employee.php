<?php

class Employee {

    var $id;
    var $nombre;
    static public $NextId = 1; // NO se alteran con las instancias

    public function Employee(){
        $this->id = self:: $NextId++;
    }

    public function Employee1($id){
        $this->id = $id;
        $this->id = self:: $NextId++;
    }

    public function Employee2 ($id, $nombre){
        $this->id = $id;
        $this->name = $nombre;
        $this->id = self:: $NextId++;
    }

    public function getNextId(){
        return self::$NextId;  // xq es estatico, es igual q el this
    }
}

$ana = new Employee();
$pepe = new Employee();
$juan = new Employee();

echo $ana->id."<br>";
echo $pepe->id."<br>";
echo $juan->id."<br>";



?>