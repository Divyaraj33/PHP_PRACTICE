<?php

//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbDivya";

//create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not  successsful
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
echo "Connection was successful<br>";
}

//variables to be inserted into the table
$name = "adil";
$destination = "jaipur";
//sql query to be executed
$sql = "INSERT INTO `phptour` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

//add a new trip to the trip table in the database
if($result){
    echo "the record has been inserted successfully!";
}
else{
    echo "the record was not inserted successfully because of this error ---> " . mysqli_error($conn);
}
