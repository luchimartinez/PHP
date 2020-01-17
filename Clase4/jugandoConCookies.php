<?php
date_default_timezone_set("America/Buenos_Aires");
if (!isset($count)){
    $count = 1;
    $start =time();
    setcookie("inicio", $start,time()+6000000000, "/","", 0);

}else{
    $count++;
}

setcookie("cantidad",$count,time()+6000000000, "/","",0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
    <p>
        <b>Esta pagina tiene galletitaaas!</b>
        <br> count = <?php echo $count ?> 
        <br> start = <?php echo $start ?> 
    </p>
    Esta sesion duro <?php $duracion = time() - $start;
    echo $duracion;
    ?>
    <p>


    </p>

</body>
</html>