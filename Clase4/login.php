<?php
//usuario (input), contrasenia(input), dos botones (submit y reset)
$contraseña;
$mensaje1;
$mensaje2;

if (!isset($_REQUEST['us'])){
  $mensaje1 = 'Complete su usuario';
} else {
    $mensaje1 ='Bienvenido '.$_REQUEST['us'];
}

if (isset($_REQUEST['con'])){
    $contraseña = md5($_REQUEST['con']);
   $mensaje2 = $contraseña;
} else{
   $mensaje2 = 'Complete la contraseña';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
</head>
<body>

<form action="login.php" method="POST">
    
<label for="us">Usuario:</label>
<input type="text" name="us">
<br>
<label for="con">Contraseña:</label>
<input type="password" name="con">
<br>
<br>
<input type="submit" name="btn1" value="Enviar">
<input type="reset" name="btn2" value="Borrar">
<br><br><br>
<?php
echo $mensaje1.'<br>';
echo $mensaje2
?>

</form>
</body>
</html>