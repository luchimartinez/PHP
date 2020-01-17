<?php

$password = "1234";
$token = md5($password); //clave de 32 bits, es chico y violable
echo "veo la password!!!!".$password."encriptada con MD5".$token;
echo"<br>";

$password = " 1234";
$token = md5($password);
echo "veo la password!!!!".$password."encriptada con MD5".$token;


?>