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

$sql = "SELECT * FROM `phptour` ";
$result = mysqli_query($conn, $sql);

//find the number of records returned
// echo mysqli_num_rows($result);
$num = mysqli_num_rows($result);
echo $num;
echo " record found in the Database<br>";

//Display the rows returned by the sql query
if($num> 0){
    // $row = mysqli_fetch_assoc($result); //it gives the record by fetching the data until the records are finished in db.
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result); //assocative array , it retured next row.
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result); 
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result); 
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result); 
    // echo var_dump($row);
    // echo "<br>";

    //we can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){ 
        // echo var_dump($row);
        echo $row['sno'] . " Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo "<br>";
    }

}