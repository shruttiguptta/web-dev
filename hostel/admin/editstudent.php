<?php
session_start();
include('connection.php'); 
include('header.php');
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
<?php

$regno = $_POST['regno'];
$_SESSION['regno'] = $_POST['regno'];

if(isset($_POST['search'])){

$sql = "SELECT * from roomreg where regno='$regno'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($result->num_rows > 0) {
    // output data of each row
			$uid = $row['id'];
			$fname = $row['fname'];
			$lname = $row["lname"];
			$usern = $row["usern"];
			$regno = $row["regno"];
			$roomno = $row["roomno"];
			$contact = $row["contact"];
			$block = $row["block"];
			$stayfrom = $row["stayfrom"];
			$duration = $row["duration"];
			$egycontact = $row["egycontact"];
			$guardianName = $row["guardianName"];
			$guardianContact = $row["guardianContact"];
			$guardianRelation = $row["guardianRelation"];
			$address = $row["address"];
			$city = $row["city"];
			$state = $row["state"];
			$pincode = $row["pincode"];

}
else
{
	?>
			<script type="text/javascript">
				alert("Incorrect Registration Number");
				window.location = "edit.php";
			</script>
	<?php
}
}
$_SESSION['username'] = $usern;
?>


<h3 class=header>Booked Room Details</h3>

<form method="POST" action="update.php" >
	<div class="error"></div></p>
	First Name: <input type="text" name="fname" value="<?php echo $fname;?>" >
	<br><br>
	Last Name: <input type="text" name="lname"  value="<?php echo $lname;?>" >
	<br><br>
	User Name: <input type="text" name="usern" disabled="disabled" value="<?php echo $usern;?>" >
	<br><br>
	Registration Number: <input type="text" name="regno" disabled="disabled" value="<?php echo $regno;?>" >
	<br><br>
	Contact: <input type="text" name="contact" value="<?php echo $contact;?>">
    <br><br>
    Hostel Block:  <input type="text" name="block" value="<?php echo $block;?>" >
	<br><br>
	Room No: <input type="text" name="roomno" value="<?php echo $roomno;?>">
    <br><br>
	Stay From: <input type="date" name="stayfrom" value="<?php echo $stayfrom;?>">
    <br><br>
	Duration: <input type="text" name="duration" value="<?php echo $duration;?>">
	<br><br>
	Emergency Contact: <input type="text" name="egycontact" value="<?php echo $egycontact;?>">
    <br><br>
	Guardian Name : <input type="text" name="guardianName" value="<?php echo $guardianName;?>">
    <br><br>
	Guardian Relation : <input type="text" name="guardianRelation" value="<?php echo $guardianRelation;?>">
    <br><br>
	Guardian Contact : <input type="text" name="guardianContact" value="<?php echo $guardianContact;?>">
    <br><br>
	Address: <input type="text" name="address" value="<?php echo $address;?>">
    <br><br>
	City: <input type="text" name="city" value="<?php echo $city;?>">
    <br><br>
	State: <input type="text" name="state" value="<?php echo $state;?>">
    <br><br>
	Pincode: <input type="text" name="pincode" value="<?php echo $pincode;?>">
    <br><br>
    <input class="button" type="submit" name="update" value="UPDATE"> <br><br> 
    <input class="button" type="submit" name="delete" value="DELETE"> <br><br> 
</form>
</body>

</html>
