<?php
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

//create a connection 
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not  successsful
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
echo "Connection was successful<br>";
}

//create a db
$sql = "CREATE DATABASE dbDivya";
$result = mysqli_query($conn, $sql);

//check for the database creation success
if($result){
    echo "the db was created successfully!";
}
else{
    echo "the db was not created successfully because of this error ---> " . mysqli_error($conn);
}
// echo "The result is ";
// echo var_dump($result);
// echo "<br>";


