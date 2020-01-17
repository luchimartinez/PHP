<?php
echo "Bienvenido".$_POST['nombre']."<br>";
echo "Su direccion es ".$_POST['adress']."<br>";

echo "Sus marcas favoritas son: <br>";
if (!empty($_REQUEST['products'])) { //es indistinto si viene por get o post
    echo "<ul>";
    foreach ($_REQUEST['products'] as $value){
        echo "<li> $value </li>";
    }
    echo "</ul>";
}    


?>