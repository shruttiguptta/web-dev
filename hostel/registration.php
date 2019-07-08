<?php
//user registration
session_start();
include('logo.php');
include('regdata.php');
include('connection.php'); 

// Turn off all error reporting
error_reporting(0);
?>
<!DOCTYPE HTML>  
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="style.css">
     <style>
    body,html {
    font-family: "Lato", sans-serif;
    height: 100%;
    margin: 0;
    overflow: auto;
    

}
.bg {

    /* The image used */
    background-image: url("college.jpg")!important;

    /* Full height */
    height: 100%; 


    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
</head>
<body class = "bg">  
  <div class="header">
  <h2>User Registration</h2>
  </div>
</p>
<form method="post" action=""> 
	<?php include('errors.php'); ?> 
  First Name: <input type="text" name="fname" required>
  <br><br>
  Last Name: <input type="text" name="lname" required>
  <br><br>
  Username: <input type="text" name="usern" required>
  <br><br>
  Registration Number: <input type="text" name="regno" required>
  <br><br>
  E-mail: <input type="email" name="email" required>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  Conatact: <input type="text" name="contact" required>
  <br><br>
  Password: <input type="password" name="pass" required>
  <br><br>
  confirm Password: <input type="password" name="confirmpass" required>
  <br><br>
  
    <input class = "button" type="submit" name="submit" value="Submit"> <br><br> 
  	<p >
  		Already Registered? <a style="text-decoration: none; " href="userlogin.php" >Login Here</a>
  	</p>
</form>
</body>
</html>
