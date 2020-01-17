<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paquete paquetito</title>
</head>
<body>
    <form action="repasoEj.php" method="POST">

    <label for="de">Direccion de envio</label>
    <input type="text" name="de" id="">
    <label for="cp">Codigo Postal</label>
    <input type="text" name="cp" style = "width: 30px">
    <br><br><br>
    <label for="largo">Largo</label>
    <input type="text" name="largo" style = "width: 30px">
    <label for="ancho">Ancho</label>
    <input type="text" name="ancho" style = "width: 30px">
    <label for="alt">Altura</label>
    <input type="text" name="alt" style = "width: 30px">
    <br><br>
    <label for="peso">Peso del paquete</label>
    <input type="text" name="alt" style = "width: 30px">
    <br>
    <br>
    <input type="submit" name="Enviar">
    </form>
</body>
</html>

<?php

/* Escriba un script que cargue, valide, y procese un form para ingresar la información sobre un paquete a ser embalado 
por correo. El form deberia contener para la direccion, dimensiones, y peso del paquete. La validacion deberia chequear
(al menos) que el paquete no pese mas de 30 kilos, y que la dimension no sea superior a 60 cm. Puede ser direcciones 
donde el código postal es de 2 letras y 4 nros, valide esto. Su script debera imprimir la informacion del paquete de 
manera esteticamente agradable */

$peso;

 //echo "Codigo posta: ".preg_match("/[0-9]{4}", $_POST['cp'])."<br>";
?>