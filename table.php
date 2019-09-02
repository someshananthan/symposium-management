<?php

$servername = "localhost";
$username = "root";
$password = "somesh2811";
$dbname = "test";
// define variables and set to empty values
$sname = $semail = $sgender = $clgename = $sdob = $scity = "";
$studentname = $regno = $email = $gender = $collegename = $dob = $city = "";  
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//get data from db
$sql ="SELECT STUDENT_NAME,REGISTRATION_NUMBER,ATTANDANCE FROM registeration";
$result = $conn->query($sql);   

//start a table
echo '<form name="form1" method="post" action="">
<table width="292" border="0" cellspacing="1" cellpadding="0">';

//start header of table
echo '<tr>
<th>&nbsp;</th>
<th>NAME</th>
<th>ATTANDANCE</th>
</tr>';

//loop through all results
while($row = $result->fetch_assoc()){

//print out table contents and add id into an array and email into an array
echo '<tr>
<td><input type="hidden" name="id[]" value='.$row["REGISTRATION_NUMBER"].' readonly></td>
<td>'.$row["STUDENT_NAME"].'</td>
<td><input name="ATTANDANCE[]" type="text" id="price" value="'.$row["ATTANDANCE"].'"></td>
</tr>';
}

//submit button
echo'<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Submit" onclick="update()"></td>
</tr>
</table>
</form>';

<script >
function update(){
update1();}
</script>

function update1() {
	
// if form has been submitted, process it
if($_POST["Submit"])
{
       // get data from form
       $name = $_POST['STUDENT_NAME'];
       // loop through all array items
   foreach($_POST['REGISTRATION_NUMBER'] as $value)
       {
       // minus value by 1 since arrays start at 0
               $item = $value-1;
               //update table
       $sql1 = mysql_query("UPDATE table SET ATTANDANCE='$ATTANDANCE[$item]' WHERE =REGISTRATION_NUMBER'$value'") or die(mysql_error());
   }
}

// redirect user
$_SESSION['success'] = 'Updated';
header("location:complete/php/table.php");
}
?>