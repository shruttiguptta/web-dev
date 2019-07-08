<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);

include('connection.php'); 
include('sidebar.php');
include('securedata.php');
include('logo.php');

?>
<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class = "bg">

<h3 class=header>ADD STUDENT</h3>

<form method="POST" action="" >
<?php include('adddata.php');
include('errors.php');
?>
	<div class="error"></div></p>
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
</body>

</html>
