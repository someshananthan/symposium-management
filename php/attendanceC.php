<?php 
$servername = "localhost";
$username = "root";
$password = "somesh2811";
$dbname = "test";

$id="";
$ab="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ident"])) {
    $id = "";
  } else {
    $id = test_input($_POST["ident"]);
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
    $ab = $row1["ATTANDANCE"];
   
}
if ($ab== 'A') {
    $ab = 'P';
} else {
    $ab = 'A';
}

    $sql2 = "UPDATE registeration SET ATTANDANCE = '$ab'
                WHERE ID = '$id'";              
   $conn->query($sql2);
    
    $conn->close();
  header('Location:cc.php');
    




?>







