function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "cyborgadmin" && password == "sympocyborg"){
alert ("Login successfully");
window.location = "php/listing.php"; // Redirecting to other page.
return false;
}
else{
alert("your username and password is wrong");
}
}