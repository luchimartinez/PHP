<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>

<form method="POST" action="repasoEj1.php">Braised Noodles with: <select name="noodle">
<option>crab meat</option>
<option>mushroom</option>
<option>barbecued pork</option>
<option>shredded ginger and green onion</option>
</select>
<br/>
<br/>
<br/>
<br/>
<br/>
Sweet: <select name="sweet[ ]" multiple>
<option value="puff"> Sesame Seed Puff
<option value="square"> Coconut Milk Gelatin Square
<option value="cake"> Brown Sugar Cake
<option value="ricemeat"> Sweet Rice and Meat
</select>
<br/>
<br/>
Sweet Quantity: <input type="text" name="sweet_q">
<br/>
<br/>
<input type="submit" name="submit" value="Order"> </form>
</body>
</html>





<?php

function process_form(){

echo "Usted eligio: ".$_POST['noodle'];
if (!isset($_POST['sweet'])){
    echo "Sin seleccion de sweet";
}else{
    foreach($_POST['sweet'] as $value){
        echo "<ul>";
        echo "<br>";
        echo $value;
        echo "</ul>";
    }
}
echo $_POST['sweet_q'];
}



?>