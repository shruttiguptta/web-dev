<?php 
//include('logo.php');
include('admin-profile.php');
include('connection.php') ;?>
<!DOCTYPE HTML>  
<html>

<head>
	  <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    
    </style>
</head>
<body class = "bg">  
  <div  class="header">
  <h2>ADMIN LOGIN</h2>
  </div>
<?php
// define variables and set to empty values
$user_name = $pass = "";
?>
<form  method="post" action=""> 
<?php include("errors.php");

?> 
  Username: <input type="text" name="usern" required>
  <br><br>
  Password: <input type="password" name="pass" required>
  <br><br>
  <input class="button" type="submit" name="submit" value="LOGIN"> <br><br>
  <a href="forgot_pass.php">FORGOT PASSWORD</a> 
  	
</form>

</body>
</html>