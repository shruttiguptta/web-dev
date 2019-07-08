<?php
session_start();
include('connection.php'); 
include('header.php');
include('sidebar.php');
//include('securedata.php');
?>
<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
$usern = $_SESSION['user_n'];
$sql = "SELECT * from roomreg where usern='$usern'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($result->num_rows > 0) {
    // output data of each row
			$uid = $row['id'];
			$fname = $row['fname'];
			$lname = $row["lname"];
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
				alert("You have not yet booked a room");
				window.location = "roomreg.php";
			</script>

	<?php
}
?>


<h3 class=header>Booked Room Details</h3>

<form method="POST" action="securedata.php" >
	<div class="error">* fields cannot be changed</div></p>
	First Name: <input type="text" name="fname" disabled="disabled" value="<?php echo $fname;?>" >
	<br><br>
	Last Name: <input type="text" name="lname" disabled="disabled" value="<?php echo $lname;?>" >
	<br><br>
	Registration Number: <input type="text" name="regno" disabled="disabled" value="<?php echo $regno;?>" >
	<br><br>
	Contact: <input type="text" name="contact" disabled="disabled" value="<?php echo $contact;?>">
    <br><br>
    Hostel Block:  <input type="text" name="block" disabled="disabled" value="<?php echo $block;?>" >
	<br><br>
	Room No: <input type="text" name="roomno" disabled="disabled" value="<?php echo $roomno;?>">
    <br><br>
	Stay From: <input type="date" name="stayfrom" disabled="disabled" value="<?php echo $stayfrom;?>">
    <br><br>
	Duration: <input type="text" name="duration" disabled="disabled" value="<?php echo $duration;?>">
	<br><br>
	Emergency Contact: <input type="text" name="egycontact" disabled="disabled" value="<?php echo $egycontact;?>">
    <br><br>
	Guardian Name : <input type="text" name="guardianName" disabled="disabled" value="<?php echo $guardianName;?>">
    <br><br>
	Guardian Relation : <input type="text" name="guardianRelation" disabled="disabled" value="<?php echo $guardianRelation;?>">
    <br><br>
	Guardian Contact : <input type="text" name="guardianContact" disabled="disabled" value="<?php echo $guardianContact;?>">
    <br><br>
	Address: <input type="text" name="address" disabled="disabled" value="<?php echo $address;?>">
    <br><br>
	City: <input type="text" name="city" disabled="disabled" value="<?php echo $city;?>">
    <br><br>
	State: <input type="text" name="state" disabled="disabled" value="<?php echo $state;?>">
    <br><br>
	Pincode: <input type="text" name="pincode" disabled="disabled" value="<?php echo $pincode;?>">
    <br><br>
</form>
</body>

</html>
