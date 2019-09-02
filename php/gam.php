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
   
    
$sql = "SELECT * FROM registeration where EVENT1='Gamming' OR EVENT2='Gamming'";    
$result = $conn->query($sql);   
?>    
<html> 
    <head><title>REGISTERED STUDENTS(ALL EVENTS)</title>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato"> <link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <link rel="stylesheet" type="text/css" href="main.css"/>

                
        <link rel="stylesheet" href="main.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>

               

        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        
    <link rel="stylesheet" type="text/css" href="css/lis.css"></head>
    <body>  <div id='cssmenu' >
<ul>
   <li ><a href='listing.php'>Home</a></li>
   <li ><a href='pp.php' >Paper Presentation</a></li>
   <li><a href='web.php'>Web Designing</a></li>
    <li><a href='cc.php'>Connections</a></li>

   <li class='active'><a href='gam.php'>Gamming</a></li>

 

</ul>
</div><br>
        <br>
          <h1 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;color:#272e3a;">REGISTERED CANDIDATES</h1><br>
          <form name="f2" method="POST" action="attendanceGAM.php" target="_parent" >
        <table class="zui-table" width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    <thead>
            <tr>    
                <th>STUDENT NAME</th>    
                <th>REGISTRATION NUMBER</th>    
                <th>EMAIL</th>    
                <th>COLLEGE NAME</th>    
               <th>ATTANDENCE</th> 
               	<th>P/A</th>		
                   
            </tr>     </thead> 


<?php    
if ($result->num_rows > 0){
   
while($row = $result->fetch_assoc()){    
    
    
?>  <tbody>
    <tr>  
        <td>  
            <?php echo "". $row["STUDENT_NAME"]."";?>  
        </td>  
        <td>  
            <?php echo "". $row["REGISTRATION_NUMBER"]."";?>  
        </td>  
        <td>  
            <?php echo "". $row["EMAIL"]."";?>  
        </td>  
        <td>  
            <?php echo "". $row["COLLEGE_NAME"]."";?>  
        </td>  
        
		 <td>  
            <?php echo "". $row["ATTANDANCE"]."";?>  
        </td>  
		<td> 
        
            
        <button type="Submit" name="ident"    value="<?php echo $row["ID"] ?>" > Absent/Present</button>
        </td>  
        
        
            </tr></tbody>

            
            
<?php } 
            
}
            ?>  
            
        </table> </form>
        <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large"> 
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="http://www.srmvalliammai.ac.in/"target="_blank" class="w3-hover-text-green">VEC</a></p>
</footer>
  
        
        

        
        

            </body>    
</html>   