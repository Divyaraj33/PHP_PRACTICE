<?php

echo "Welcome to scope and local/global vars in php <br>";

$a = 98; //Global Variable
$b = 9;
function printValue(){
    //$a = 97; //Local Variable
    global $a, $b;  //Give me the access of this Global variable
    $a = 100;
    $b = 1000;
    echo "The value of your variable is $a and b is $b";
}

echo $a;
printValue();
echo "<br> The value of your variable is $a and b is $b";
echo "<br>";
// echo var_dump($GLOBALS); //print all the global variables
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>