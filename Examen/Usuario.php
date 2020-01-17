<?php

class Usuario {

private $nombre;
private $apellido;

function setNombre($nombre){
    $this->nombre = $nombre;
}

function getNombre(){
    return $this->nombre;
}



function setApellido($apellido){
    $this->apellido = $apellido;
}

function getApellido(){
    return $this->apellido;
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Info del usuario</title>
</head>
<body>
    <form action="Usuario.php" method="POST"></form>
    <label for="nom">Nombre: </label>
    <input type="text" name="nom" id="">
    <br><br>
    <label for="ap">Apellido: </label>
    <input type="text" name="ap" id="">
    <br><br>
    <input type="submit" name="enviar">
</body>
</html>

<?php
$usuario = new Usuario();

if(!isset($_REQUEST['nom'])){
    echo 'Ingrese su nombre';
} else{
    $usuario->setNombre($_REQUEST['nom']);
}

if(!isset($_REQUEST['ap'])){
    echo 'Ingrese su apellido';
} else{
    $usuario->setApellido($_REQUEST['ap']);
}

function guardarUsuario($usuario){
    $file=fopen('Usuario.txt', 'w');
   if (isset($_REQUEST['enviar'])){
        $file = $usuario->getNombre().$usuario->getApellido();
   }
}

