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

//create a table in the db
$sql = "CREATE TABLE `phptour` (`sno` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";

$result = mysqli_query($conn, $sql);

//check for the table creation success
if($result){
    echo "the table was created successfully!";
}
else{
    echo "the table was not created successfully because of this error ---> " . mysqli_error($conn);
}
