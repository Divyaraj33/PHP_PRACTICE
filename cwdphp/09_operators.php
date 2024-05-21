<?php
/* Operators in PHP
1. Arithmetic Operator
2. Assignment Operator
3. Comparision Operator
4. Logical Operator
*/

$a = 45;
$b = 8;

//  1. Arithmetic Operator
echo "For a + b, the result is ". ($a + $b) . "<br>";
echo "For a - b, the result is ". ($a - $b) . "<br>";
echo "For a * b, the result is ". ($a * $b) . "<br>";
echo "For a / b, the result is ". ($a / $b) . "<br>";
echo "For a % b, the result is ". ($a % $b) . "<br>";
echo "For a ** b, the result is ". ($a ** $b) . "<br>";

//2. Assignment Operator
// $x = $a;
// echo "For x,the value is ". $x . "<br>";

// $a += 6;
// echo "For a,the value is ". $a . "<br>";
// $a -= 6;
// echo "For a,the value is ". $a . "<br>";
// $a *= 6;
// echo "For a,the value is ". $a . "<br>";
//  $a /= 5;
// echo "For a,the value is ". $a . "<br>";

$a %= 5; // $a = $a % 5
echo "For a,the value is ". $a . "<br>";

//3. comparison Operator
// $x = 7;
// $y = 9;

// // echo "For $x == $y , the result is ". ($x == $y) . "<br";
// echo "For x == y, the result is ";
// echo var_dump($x == $y);
// echo "<br";

$x = 9;
$y = 9;

// echo "For x > y,the result is";
// echo var_dump($x > $y);

// echo "For x < y,the result is";
// echo var_dump($x < $y);

// echo "For x >= y,the result is";
// echo var_dump($x >= $y);

// echo "For x <= y,the result is";
// echo var_dump($x <= $y);

echo "For x <> y,the result is";
echo var_dump($x <> $y);
echo "<br>";

//4. logical operator
$m = true;
$n = true;

echo "For m and n,the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m or n,the result is ";
echo var_dump($m or $n);

echo "For m || n,the result is "; // || - or
echo var_dump($m || $n);
echo "<br>";

echo "For m && n,the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For !m,the result is ";
echo var_dump(!$m);
echo "<br>"





?>


