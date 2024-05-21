<?php 

//writing to a file in php
echo "Welcome to write files in php";
$fptr = fopen("myfile2.txt", "w");
fwrite($fptr, "This is the best file on this planet.please dont 
argue with me.");
fwrite($fptr, "This is another content")

//appending to a file in php
$fptr = fopen("myfile.txt", "a");
fwrite($fptr, "This is being appended to the file/n");
fclose($fptr);
?>