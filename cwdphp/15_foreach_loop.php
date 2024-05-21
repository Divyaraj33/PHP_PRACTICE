<?php

echo "welcome to the world of foreach loops <br>";
$arr = array("bananas","apples","kiwi","bread");  //index arrar /numeric array

// for($i=0; $i < count($arr); $i++) {
//     echo $arr[$i];
//     echo "<br>";
// }

//beter way to do this - foreach loop
foreach ($arr as $value) {
    echo "$value <br>";
}
?>