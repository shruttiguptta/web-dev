<?php
session_start();
include('connection.php'); 
include('errors.php');
$errors = array();
ini_set('display_errors', 'On');
error_reporting(E_ALL);
/*echo "<pre>";
print_r($_POST);
print_r($_SESSION);
die;*/
$fname = $_POST['fname'];
$lname = $_POST["lname"];
$roomno = $_POST["roomno"];
$contact = $_POST["contact"];
$block = $_POST["block"];
$stayfrom = $_POST["stayfrom"];
$duration = $_POST["duration"];
$egycontact = $_POST["egycontact"];
$guardianName = $_POST["guardianName"];
$guardianContact = $_POST["guardianContact"];
$guardianRelation = $_POST["guardianRelation"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$pincode = $_POST["pincode"];

$reg = $_SESSION['regno'];
$username = $_SESSION['username'];

if((isset($_POST['update'])))
{

			$sql = "UPDATE roomreg SET fname='$fname',lname='$lname',roomno='$roomno',contact='$contact',block='$block',stayfrom='$stayfrom',duration='$duration',egycontact='$egycontact',guardianName='$guardianName',guardianContact='$guardianContact',guardianRelation='$guardianRelation',address='$address',city='$city',state='$state',pincode='$pincode' WHERE regno='$reg'";
			//print_r($sql);die;
			$sql1 = "UPDATE registration SET fname='$fname',lname='$lname',contact='$contact' WHERE usern='$username'";
			//echo "<br>";
			//print_r($sql1);die;
			   if (mysqli_query($conn,$sql) && (mysqli_query($conn,$sql1))) {  ?>
			   <script type="text/javascript">
			   alert("Profile Updated");
			   window.location = "http://localhost/php/admin/welcomeadmin.php";
			   </script>
					<?php
				//	header("Location: welcome.php");
				} 
				else 
				{
					array_push($errors, "Error updating record");
				}
		}
		



if((isset($_POST['delete'])))
{

			$sql = "DELETE FROM roomreg WHERE regno='$reg'";
			   if (mysqli_query($conn,$sql)) {  ?>
			   <script type="text/javascript">
			   alert("Profile Deleted");
			   window.location = "http://localhost/php/admin/welcomeadmin.php";
			   </script>
					<?php
				//	header("Location: welcome.php");
				} 
				else 
				{
					array_push($errors, "Error Deleting record");
				}
		}
		


?>
