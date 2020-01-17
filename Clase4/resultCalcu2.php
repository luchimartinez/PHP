<?php

$valor = $_REQUEST['ta'];
$result = eval (" return $valor;"); //lee la expresion y la evalua, se pone return xq sino devuelve null
echo $result;

?>