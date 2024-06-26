<?php 
$name = "Harry";
$income = 200;

/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

// String - sequence of characters
$name = "Harry";
$friend = 'Rohan';
echo "$name ka friend is $friend";

// Integer - non decimal number
$income = 455;
$debts = -655;
echo $income;
echo '<br>';
echo $debts;

//Float = Decimal point number
$income = 344.5;
$debts = -45.5;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Boolean - can be either true or false
$x = true;
$is_friend = false;
echo $x;
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

//object - Instances of classes
//Employee is a class ---> harry can be one object

// Array - Used to store muliple values in a single variable
$friends = array("rohan", "shubham", "skillf", "Larry");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";

//echo $friends[3]; // will throw an error as the size of array is 4

// NULL 
$name = NULL;
echo var_dump($name);
?>