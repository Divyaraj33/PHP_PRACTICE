<?php
echo "welcome to the world of dates";

$d = date(" dS F Y , g:i A");
 // D - Mon , d - 01,02 it contains 0 in date , j - not contain 0 in date
echo "Today date is $d <br>";

// Quick Quiz - 3 example of dates in php
echo date(' l jS \of F Y h:i:s A');

$year = date("Y");
echo "<br>";
echo "copyright $year All rights reserved <br>";
?>