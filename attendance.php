<?php 
$servername = "localhost";
$username = "root";
$password = "somesh2811";
$dbname = "test";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$id = $row["ID"]
$query1 = "SELECT * FROM users WHERE id = '$id'";
$result1 = mysql_query ($query1);
while ($row = mysql_fetch_array($result1)) {
    $ab = $row ["ATTANDACE"];
}
if ($ab== 'A') {
    $ab = 'P';
} else {
    $ab = 'A';
}
echo $ab;
    $query1 = "UPDATE registeration SET ATTANDACE = '$ab'
                WHERE id = '$id'";              
    mysql_query ($query1);
}



?>







