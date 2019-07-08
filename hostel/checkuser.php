<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
<body>
<?php
$usern = $_SESSION["user_n"];
$sql = "SELECT * from roomreg where usern='$usern'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
if ($result->num_rows > 0) {
	//header('location: hosteldetails.php');?>
	<script type="text/javascript">
		alert("HOSTEL ALREADY BOOKED");
		window.location = 'hosteldetails.php';
	</script>
	<?php
	}	
?>
</body>
</html>


