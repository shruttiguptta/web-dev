<?php 
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
include('connection.php');
include('logo.php');
include('sidebar.php');
include('securedata.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="style.css">
<style>
table{
	overflow: scroll;
	border-collapse: collapse;
	width : 100%;
}
td{
	width:100px;
}
table, th, td {
    border: 1px solid black;

}
</style>

</head>
<body>
<form style="width :80%; height: 260px; margin-left: 210px;margin-top: 100px; border-radius: 10px;">
<div style="overflow-x: auto;overflow-y: auto;">
<?php 
$usern = $_SESSION["usern"];
$sql = "select * from roomreg ";
$result = $conn->query($sql);
echo "<table>";
echo"<tr><th>"."ID"."</th><th>"."First Name"."</th><th>"."Last Name"."</th><th>"."Username"."</th><th>"."Register Number"."</th><th>"."Gender"."</th><th>"."Contact"."</th><th>"."Email"."</th><th>"."Block"."</th><th>"."Room Number"."</th><th>"."Stay From"."</th><th>"."Duration"."</th><th>"."Emergency Contact"."</th><th>"."Guardian Name"."</th><th>"."Guardian Relation"."</th><th>"."Guardian Contact"."</th><th>"."address"."</th><th>"."city"."</th><th>"."state"."</th><th>"."pincode"."</th></tr>" ;
while($row = $result->fetch_assoc())
	{
    // output data of each row
			echo "<tr><td>" . $row['id'] ."</td><td>" . $row['fname'] ."</td><td>" . $row['lname']. "</td><td>" . $row['usern'] . "</td><td>" . $row['regno']. "</td><td>" . $row['gender'] ."</td><td>" . $row['contact'] ."</td><td>" . $row['email'] ."</td><td>" . $row['block'] ."</td><td>" . $row['roomno'] ."</td><td>" . $row['stayfrom'] ."</td><td>" . $row['duration'] ."</td><td>" . $row['egycontact'] ."</td><td>" . $row['guardianName'] ."</td><td>" . $row['guardianRelation'] ."</td><td>" . $row['guardianContact'] ."</td><td>" . $row['address'] ."</td><td>" . $row['city'] ."</td><td>" . $row['state'] ."</td><td>" . $row['pincode'] ."</td></tr>"; 
	}
echo "</table>";
?>
</div>
</form>
</body>
</html>
