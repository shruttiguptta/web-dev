<?php 
session_start();
include('logo.php');
include('connection.php') ;
include('securedata.php');
include('sidebar.php');
?>
<!DOCTYPE HTML>  
<html>

<head>
	  <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    
    </style>
</head>
<body class = "bg">  
  <div  class="header">
  <h2>EDIT</h2>
  </div>
<?php
// define variables and set to empty values
$user_name = $pass = "";
?>
<form  method="post" action="editstudent.php"> 
<?php include("errors.php");

?> 
  Registration Number: <input type="text" name="regno" required>
  <br><br>
  <input class="button" type="submit" name="search" value="SEARCH"> <br><br> 
  	
</form>

</body>
</html>