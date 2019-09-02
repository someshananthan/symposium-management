function validate()
{
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "onsiteadmin" && password == "onsitesympo"){
alert ("Login successfully");
window.location = "onreg.php"; // Redirecting to other page.
return false;
}
else{
alert("your username and password is wrong");
}
}