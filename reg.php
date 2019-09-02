<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
        
        
        <script type="text/javascript">
function chkcontrol(j) {
    var arr=document.getElementsByName("event2[]");
    var k=arr.length;
var total=0;
for(var i=0; i<k;i++){
if(arr[i].checked){
total =total +1;}
if(total > 2){
alert("Please Select only two") 
arr[j].checked = false ;
    return false;

}
}
} 
        
        

</script>
        
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" type="text/css" href="css/main.css"/><script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>

               


        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        
        
	</head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    
    
    
        
    
    
    
        

    
    
	<body>
        <div style=" position: relative;
    margin: 5px; border: 1px solid black;"class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1 style="color: #CEF0D4; font-family: 'Rouge Script', cursive; font-size: 50px; font-weight: normal; line-height: 48px; margin: 0 0 25px; text-align: center; text-shadow: 1px 1px 2px #082b34;line-height: 170px;">We are creative</h1>        
            <h3 >Get start to explore awesome event2s </h3>
        </hgroup>
       
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1 style="color: #CEF0D4; font-family: 'Rouge Script', cursive; font-size: 50px; font-weight: normal; line-height: 48px; margin: 0 0 25px; text-align: center; text-shadow: 1px 1px 2px #082b34;line-height: 170px;">We are smart</h1>        
            <h3>Enjoy Your New Experience</h3>
        </hgroup>       
        
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1 style="color: #CEF0D4; font-family: 'Rouge Script', cursive; font-size: 50px; font-weight: normal; line-height: 48px; margin: 0 0 25px; text-align: center; text-shadow: 1px 1px 2px #082b34;line-height: 170px;">We are amazing</h1>        
            <h3>Make Yourself Feel Braver</h3>
        </hgroup>
       
      </div>
    </div>
  </div> 
</div>
        
        <div id='cssmenu' >
<ul>
   <li class='active'><a href='reg.php'>Home</a></li>
   <li><a href='events.html' >Events</a></li>
   <li><a href='admin.html'>Admin</a></li>
    <li><a href='onspot.html'>Onsite</a></li>
   <li><a href='contacts.html'>Contact</a></li>
</ul>
</div>

        
        
        
        


        
        
        
        
        
        
        
        
        
        
        

        
        <div class="container" style="background-color: gainsboro;background-repeat: repeat-x;width: 100% ;">
           
            
             <form name="f1"  action="php/connection.php" method="POST" 
                   class="form-horizontal" role="form" style="background-color:gainsboro;background-repeat: repeat-x;text-align: left;">
                <h2 class="btn btn-hero btn-lg" style="text-align: center;font-family:  Impact, Charcoal, sans-serif;letter-spacing: 2px;">Registration Form</h2>
                <div class="form-group" >
                    <label for="firstName" class="col-sm-3 control-label">Student Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Full Name" class="form-control" name="studentname" required  autofocus>  
                        
                </div>
                </div>
                <div class="form-group">
                    <label for="regno" class="col-sm-3 control-label">Registration Number</label>
                    <div class="col-sm-9">
                        <input type="text" id="regno" placeholder="Registration Number(AU*)" class="form-control" name="regno" required autofocus>
                        
                </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name="email" required> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="collegename" class="col-sm-3 control-label">College Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="collegename" placeholder="College Name" class="form-control" name="collegename" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control" name="dob" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="city" required>
                            <option>Chennai</option>
                            <option>Coimbatore</option>
                            <option>Madurai</option>
                            <option>Tiruchirappali</option>
                            <option>Salem</option>
                            <option>Tiruppur</option>
                            <option>Erode</option>
                            <option>Vellore</option>
                            <option>Tirunelveli</option>
                            <option>Thoothukudi</option>
                            <option>Nagarkoil</option>
                            <option>Thanjavur</option>
                            <option>Dindigul</option>
                            <option>Cuddalore</option>
                            <option>Kanchipuram</option>
                            <option>Thiruvanamalai</option>
                            <option>Kumbakonam</option>
                            <option>Rajapalayam</option>
                            <option>Pudukottai</option>
                            <option>Hosur</option>
                            <option>Ambur</option>
                            <option>Karaikudi</option>
                            <option>Neyveli</option>
                            <option>Nagapattinam</option>
                                                
                            
                        </select>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female" name="gender" required>Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male" name="gender" required>Male
                                     
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Event1</label>
                    <div class="col-sm-9">
                        <div class="radio-inline">
                            <label>
                                <input type="radio" id="1" value="Paper Presentation" name="event1" onclick='chkcontrol(0)' >Paper Presentation
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="2" value="Web Desigining" name="event1"onclick='chkcontrol(1)' >Web Desigining
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="3" value="Connextions" name="event1"onclick='chkcontrol(2)' >Connextions
                            </label>
                        </div>
                        
                        <div class="radio">
                            <label>
                                <input type="radio" id="5" value="Gamming" name="event1"onclick='chkcontrol(4)'>Gamming
                            </label>
                        </div>
                      
                        
						<div class="form-group">
                    <label class="control-label col-sm-3">Event2</label>
                    <div class="col-sm-9">
                        <div class="radio-inline">
                            <label>
                                <input type="radio" id="1" value="Paper Presentation" name="event2" onclick='chkcontrol(0)' >Paper Presentation
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="2" value="Web Desigining" name="event2"onclick='chkcontrol(1)' >Web Desigining
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="3" value="Connextions" name="event2"onclick='chkcontrol(2)' >Connextions
                            </label>
                        </div>
                       
                        <div class="radio">
                            <label>
                                <input type="radio" id="5" value="Gamming" name="event2"onclick='chkcontrol(4)'>Gamming
                            </label>
                        </div>
                        
                    
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio" value="" >I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" class="btn btn-primary btn-block" value="Register" onclick="if(!this.form.radio.checked){alert('You must agree to the terms first.');return false}">
                    </div>
                        </div></div></div></div></div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
            
            
            
           <!-- Footer -->
        <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large"> 
  <i class="fa fa-facebook-official w3-hover-opacity" ></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="http://www.srmvalliammai.ac.in/"target="_blank" class="w3-hover-text-green">VEC</a></p>
</footer>

                    </body>
            </html>
            
            
            
            
            
            
            
           