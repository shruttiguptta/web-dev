<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
include('connection.php') ;

if (isset($_POST['submit'])) {

    $email = $_POST["email"];
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
    $pass = substr(str_shuffle($chars), 0, 8);
 	$sql = "UPDATE registration SET pass='$pass' WHERE email = '$email'";

		if ($conn->query($sql) === TRUE) {
		    echo "Password updated successfully..Your New Password is given below. ";
		    echo "<br><br>";
		    echo $pass;
		    echo "<br><br>";
		    
		} else {
		    echo "Error updating record: " . $conn->error;
		}

$conn->close();
}
    
?>