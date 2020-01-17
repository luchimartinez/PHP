<?php
global $totalPoblacion;
$arrayPoblacion = array('New York'=> '8008278' , 'Los Angeles'=> '3694820', 'Chicago'=> '2896016', 'Houston'=>'1953631', 'Philadelphia'=>'1517550', 'Phoenix'=>'1321045','San Diego'=>'1223400','Dallas'=>'1188580', 'San Antonio,'=> '1144646', 'Detroit'=> '951270');
var_dump($arrayPoblacion);
ksort($arrayPoblacion);
echo "<br>";
echo "<br>";

echo "<table border=1>";
foreach($arrayPoblacion as $key=>$value){ 
    global $totalPoblacion;
    $totalPoblacion+=$value;
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "<td>";
    echo $value;
    echo "</tr>";
    echo "</td>";
}
    echo "<tr>";
    echo "<td>";
    echo "Total de la poblacion";
    echo "<td>";
    echo $totalPoblacion;
    echo "</tr>";
    echo "</td>";
echo "</table>";
?>