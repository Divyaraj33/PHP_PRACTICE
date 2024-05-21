<?php
echo "while loops in php"; echo"<br>";
// echo 1;
// echo 2;
// echo 3;
// echo 4;
// echo 5;

/* while (condition){
    some line of code here;
}
*/

// $i = 0;
// while($i<5){
//     echo $i+1;
//     echo "<br>";
//     $i++;
// }

// $i = 0;
// while($i<500){
//     echo "The value of i is ";
//     echo $i+1;
//     echo "<br>";
//     $i+=3;
// }

$i = 0;
$x = 9;
while($i<5000 && $x<60){
    echo "The value of i is ";
    echo $i+1;
    echo "<br>";
    $i+=3;
    $x+=4;
}
?>
