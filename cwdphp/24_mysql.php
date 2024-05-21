 <?php
echo "welcome to the stage where we are ready to get connected to database<br>";
/*ways to connect to a MySQL Database
1.MYSQLi extension-object oriented(uses classes and objects), procedural(uses functions directly)
2.PDO - php data objects
*/
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 