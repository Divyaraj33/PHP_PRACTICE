<?php
$fptr = fopen("myfile.txt", "r");   //php.net/manual/en/function.fopen.php
// echo $fptr;
// echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file.Please enter a valid filename");
}
$content = fread($fptr, filesize("myfile.txt"));
fclose($fptr);
echo $content;

?>

