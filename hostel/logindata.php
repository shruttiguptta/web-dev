<?php
session_start();

?>

<?php 
include('connection.php') 
?>

<!DOCTYPE html>

<html>
<body>
<?php

$usern = $_POST["usern"];
$pass = $_POST["pass"];
$count =0;
//connect
if((isset($_POST['submit'])))
{
$sql = "SELECT usern, pass FROM registration where usern = '$usern' and pass='$pass'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
if ($result->num_rows == 1) {
			echo "login successfull<br><br>";
			$_SESSION["user_n"] = $_POST["usern"];
			$_SESSION["passd"] = $_POST["pass"];
			header('location: welcome.php');
		}
		else{
				$_SESSION["error"] = $error;
    			header("location: userlogin.php");
			}
    
} 
?>
</body>
</html>