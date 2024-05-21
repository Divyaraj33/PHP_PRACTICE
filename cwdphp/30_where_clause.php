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

$sql = "SELECT * FROM `phptour` WHERE `dest`='up'";
$result = mysqli_query($conn, $sql);

// Usage of where clause to fetch data from the database
$num = mysqli_num_rows($result);
echo $num . " record found in the Database<br>";
$no=1;
if($num> 0){
    while($row = mysqli_fetch_assoc($result)){ 
        echo $no . " Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo "<br>";
        $no = $no + 1;
    }
}

// Usage of WHERE clause to update data
$sql = "UPDATA `phptour` SET `name` = 'frombihar' WHERE `dest` = 'bihar'";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";
if($result){
    echo "We updated the record successfully";
}
else{
    echo "We could not update the record successfully";
}