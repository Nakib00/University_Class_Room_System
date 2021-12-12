<?php
//make connection variable
$servername = "localhost";
$username = "root";
// $pas = "";
$database = "webapp";

// creat connection
$conn = mysqli_connect($servername, $username, "", $database);

$sql = "SELECT SUM(id) FROM users;";

$result = $conn->query($sql);

while ($row = mysqli_fetch_array($result)) {
    echo " Total ID SUM: " . $row['SUM(id)'];
    echo "<br>";
}


//close the connection

$conn->close();
