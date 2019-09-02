<?php 
$servername = "localhost";
$username = "root";
$password = "somesh2811";
$dbname = "test";

$id="";
$ab="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["attend"])) {
    $id = "";
  } else {
    $id = test_input($_POST["attend"]);
  }
}

    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


 
    
    
  $sql1 = "SELECT * FROM registeration WHERE ID = '$id'";
$result1 = $conn->query($sql1);
if($row1 = $result1->fetch_assoc()) {
    $ab = $row1["RESULT"];
    
}
if ($ab== 'Loser') {
    $ab = 'Winner';
} else {
    $ab = 'Loser';
}



    $sql2 = "UPDATE registeration SET RESULT = '$ab'
                WHERE ID = '$id'";              
   $conn->query($sql2);
  
    $conn->close();
  header('Location:listing.php');
    




?>







