<?php

$fo = fopen('platos.csv', 'r');
print "<table border = 1>";
for($info = fgetcsv($fo, 1024); !feof($fo); $info = fgetcsv($fo, 1024)){ //como es csv lo corta automaticamente en la coma, no hace falta hacer un explode
    print "<tr><td>$info[0]</td><td>$info[1]</td><td>$info[2]</td></tr>";
}
print "</table>";
fclose ($fo); // cierro el archivo q abri
    

?>