<?php session_start();
include('connection.php');
include('header.php');
include('sidebar.php');
include('checkuser.php');
include('roomdata.php');
include('securedata.php');
//include('checkuser.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
$usern = $_SESSION["user_n"];
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

}
?>


<h3 class=header>HOSTEL REGISTRATION</h3>
	<div class = "form"> 

<form method="POST" >
	<div class="error">* fields cannot be changed</div></p>
	<label>PERSONAL INFORMATION</label><br><br>
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
    <label>HOSTEL SELECTION<label><br><br>
    Hostel Block:
	<select name="block">
	<option value="">Select Block</option>
	<option value="A">A</option>
	<option value="B">B</option>
	<option value="C">C</option>
	<option value="D">D</option>
	</select>
	<br><br>
	Room No: <select name="roomno">
	<option value="">Select Room</option>
	<option value="101">101</option>
	<option value="104">104</option>
	<option value="105">105</option>
	<option value="201">201</option>
	<option value="301">301</option>
	<option value="306">306</option>
	<option value="401">401</option>
	<option value="402">402</option>
	<option value="501">501</option>
	<option value="508">508</option>
	<option value="509">509</option>
	</select>
	<br><br>
	Stay From: <input type="date" name="stayfrom" required>
    <br><br>
	Duration:
	<select name="duration">
	<option value="">Select Duration in Month</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	</select>
	<br><br>
	<label>CONTACT INFORMATION</label><br><br>
	Emergency Contact: <input type="text" name="egycontact" required>
    <br><br>
	Guardian Name : <input type="text" name="guardianName" required>
    <br><br>
	Guardian Relation : <input type="text" name="guardianRelation" required>
    <br><br>
	Guardian Contact : <input type="text" name="guardianContact" required>
    <br><br>
	Address: <input type="text" name="address" required>
    <br><br>
	City: <input type="text" name="city" required>
    <br><br>
	State: <input type="text" name="state" required>
    <br><br>
	Pincode: <input type="text" name="pincode" required>
    <br><br>
	
	<input class = "button" type="submit" name="submit" value="BOOK HOSTEL">
	

</form>
</div>
</body>

</html>
