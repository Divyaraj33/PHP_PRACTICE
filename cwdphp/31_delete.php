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

$sql = "DELETE FROM `phptour` WHERE `phptour`.`dest` = 'jaipur' LIMIT 3";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";

if($result){
    echo "Deleted successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not delete successfully due to this error --> $err";
}
