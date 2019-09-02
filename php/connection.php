<?php 
$servername = "localhost";
$username = "root";
$password = "somesh2811";
$dbname = "test";
// define variables and set to empty values
$sname = $semail = $sgender = $clgename = $sdob = $scity = "";
$studentname = $regno = $email = $gender = $collegename = $dob = $city =$event1=$event2= ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["studentname"])) {
    $sname = "Name is required";
  } else {
    $studentname = test_input($_POST["studentname"]);
  }
    
  if (empty($_POST["regno"])) {
    $regno = "";
  } else {
    $regno = test_input($_POST["regno"]);
  }

  
  if (empty($_POST["email"])) {
    $semail = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["collegename"])) {
    $collegename = "";
  } else {
    $collegename = test_input($_POST["collegename"]);
  }

  if (empty($_POST["city"])) {
    $city = "";
  } else {
    $city = test_input($_POST["city"]);
  }

  if (empty($_POST["gender"])) {
    $sgender = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
    
  if (empty($_POST["dob"])) {
    $dob = "";
  } else {
    $dob = test_input($_POST["dob"]);
  }
   if (empty($_POST["event1"])) {
    $event1 = "";
  } else {
    $event1 = test_input($_POST["event1"]);
  }
  if (empty($_POST["event2"])) {
    $event2 = "";
  } else {
    $event2 = test_input($_POST["event2"]);
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

$sql = "INSERT INTO registeration(STUDENT_NAME,REGISTRATION_NUMBER,EMAIL,COLLEGE_NAME,DATE_OF_BIRTH,CITY,GENDER,EVENT1,EVENT2)
VALUES ('$studentname','$regno','$email','$collegename','$dob','$city','$gender','$event1','$event2')";

if (mysqli_query($conn, $sql)) {
    echo "Registered successfully";
} else {
    echo "Error: ". mysqli_error($conn)."please enter correct data!";
   
}

mysqli_close($conn);


?>