<?php

$fo = fopen('people.txt', 'r');//r de read w de write
print '<table border = 1>';
for ($line = fgets($fo); !feof($fo); $line=fgets($fo)){ //fget lee la linea
        $line = trim($line);//Recorta los espacios en blanco
        $info = explode ('|' , $line); // explode saca lo q pases entre parentesis 
        echo '<li><a href= "mailto: '.$info[0].'">'.$info[1]."</li><br>"; // mailto para poner el mail de destino
}
print "</ul>";
fclose ($fo);
?>