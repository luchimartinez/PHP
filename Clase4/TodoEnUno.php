<?php

$num_to_guess = 42;
$message = "";

if (!isset($_POST['guess'])){ // si no esta seteado
    $message = "Bienvenido a la maquina de adivinacion";
} elseif ($_POST['guess']> $num_to_guess){
    $message = "$_POST[guess] es demasiado grande, intente nuevamente uno mas chico";
} elseif ($_POST['guess']< $num_to_guess){
    $message =  "$_POST[guess] es demasiado chico, intente nuevamente uno mas grande"; 
} else {
    $message = "Ud Adivino!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adivina adivinador</title>
</head>
<body>
    <?php echo $message ?>
    <form action="TodoEnUno.php" method="POST"> 
        <b>Tipee su numero aqui</b>
        <br>
        <input type="text" name = "guess">
        <input type="submit" name="Submit">

    </form>
</body>
</html>