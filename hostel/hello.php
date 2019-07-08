<?php
session_start();
include('connection.php'); 
include('header.php');
include('sidebar.php');
include('securedata.php');
?>
<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
$userid	= $_SESSION['id'];
$usern = $_SESSION['user_n'];
$pass=$_SESSION['passd'];

$conn = new mysqli($servername,$username,$password,$db);
$sql = "select * from registration where usern='$usern'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
if ($result->num_rows > 0) {
    // output data of each row
			$uid = $row['id'];
			$fname = $row['fname'];
			$lname = $row["lname"];
			$usern	 = $row['usern'];
			$regno = $row["regno"];
			$gender = $row["gender"];
			$contact = $row["contact"];
			$email = $row["email"];
			$pass = $row["pass"];

			$_SESSION['id'] = $uid;

}
?>


<h3 class=header>YOUR PROFILE</h3>

<form method="POST" >
	<div class="error">* fields cannot be changed</div></p>
	First Name: <input type="text" name="fname" disabled="disabled" value="<?php echo $fname;?>" >
	<br><br>
	Last Name: <input type="text" name="lname" disabled="disabled" value="<?php echo $lname;?>" >
	<br><br>
	Username: <input type="text" name="usern" disabled="disabled" value="<?php echo $usern;?>" >
	<br><br>
	Registration Number: <input type="text" name="regno" disabled="disabled" value="<?php echo $regno;?>" >
	<br><br>
	Gender: <input type="text" name="gender" disabled="disabled" value="<?php echo $gender;?>">
    <br><br>
    Contact: <input type="text" name="contact" disabled="disabled" value="<?php echo $contact;?>">
    <br><br>
	E-mail: <input type="email" name="email" disabled="disabled" value="<?php echo $email;?>">
    <br><br>
    <p>
  		Do you want to change your Profile? <a href="profile.php?userid=<?php echo $uid;?>">EDIT</a>
  	</p>
  	</form>
</body>

</html>
