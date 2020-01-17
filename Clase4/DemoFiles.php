<?php

/* $page = file_get_contents('page1.html'); // traigo la pagina
$page = str_replace('{page_title}', 'Bienvenidos', $page); // le cambio variables globales 
//entre llaves por un valor
$page = str_replace('{color}', 'red', $page); //el $page del final es la pagina q le paso para
//cambiar los datos, en este caso es la misma pero puede ser otra
$page = str_replace('{name}', 'Alejandro', $page);

echo $page; */
    
function verDerechos($file){
    Global $page;
    if(is_readable($file)){
        $page = file_get_contents($file);
        print "Se puede leer el archivo $page";
        $page = str_replace('{page_title}', 'Bienvenidos', $page);
        $page = str_replace('{color}', 'red', $page);
        $page = str_replace('{name}', 'Alejandro', $page);

        print $page;
        $page = $page;
        file_put_contents("page2.html", $page);

    } else{
        "NO se puede leer el archivo $page";
    }
}
verDerechos('page1.html');
?>