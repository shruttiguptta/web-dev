<?php 
session_start();
include('connection.php');
 $errors = array();
 ?>
<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
$usern = $_POST["usern"];
$pass = $_POST["pass"];
if((isset($_POST['submit'])))
{
$sql = "select * from admin where usern='$usern'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
if ($result->num_rows > 0) {

	$pass1 = $row['pass'];
	if($pass1 == $pass)
	{
	$_SESSION['usern'] = $usern;
	header("location: welcomeadmin.php");
}
	else{
		array_push($errors, "Incorrect Password...Try Again");
	}
}
else{
		array_push($errors, "Incorrect Credentials...Try Again");
	}
}
?>