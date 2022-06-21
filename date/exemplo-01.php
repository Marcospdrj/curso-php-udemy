<?php	
$today = date("F J, Y, g:I a");

echo date("d/m/Y H:i:s", 1655830151);

echo "<br>";

echo "April 3, 1999 was on a ". date("l", mktime(0,0,0,4,3,1999));

echo "<br>";

echo date(DATE_ATOM, mktime(0,0,0,4,3,1999));

echo "<br>";

echo $today;

echo "<br>";

echo time();
?>