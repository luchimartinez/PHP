<?php

date_default_timezone_set("America/Buenos_Aires");
echo 'strftime() en vacio';
echo "<br>";
echo strftime ('Hoy es %m/ %d/ %y y la hora es %H: %M: %S'); //formato 24hs
echo "<br>";
echo 'date() dice: ';
echo "<br>";
echo "Hoy es ".date('m/d/y').'y la hora es '.date('h:i:s'); // formato 12hs
echo "<br>";
echo "<hr>";

//$userDate = gmmktime($_POST['hour'], $_POST['minute'], 0, $_POST['month'], $_POST['day'], $_POST['year']);
$userDate = gmmktime(16,41,35,1,13,20);
print $userDate;
echo "<hr>";
$now = time();
$today = unixtojd($now);
echo $now."es " .$today;
?>