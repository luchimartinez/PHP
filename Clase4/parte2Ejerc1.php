<?php

$page = file_get_contents('parte2Ejerc1.html');
$page = str_replace('{title}', 'Bienvenidos', $page);
$page = str_replace('{headline}', 'La vida en Pehuajo', $page);
$page = str_replace('{line}', 'Manuelita', $page);
$page = str_replace('{date}',date('l, F j, Y'), $page);

print $page;
$page = $page;
file_put_contents("parte2Ejerc1.html", $page);
?>