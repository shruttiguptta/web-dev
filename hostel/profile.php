<?php 
//ini_set('display_errors', 'Off');
//error_reporting(E_ALL);
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
$uid = $_GET["userid"];

$user_id1 = $_SESSION['id'];

if($user_id1 == $uid){

$sql = "SELECT * from registration where id='$uid'";
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

}
} else{

	unset($_SESSION['user_n']);
	session_destroy();
	header('Location: userlogin.php');
}
?>
<h3 class=header>EDIT YOUR PROFILE HERE</h3>


<form name = "myForm"  onsubmit="return check()" method="POST" >
<?php include('errors.php');
$errors = array(); 
 ?>
	First Name: <input type="text" name="fname" value="<?php echo $fname;?>" >
	<br><br>
	Last Name: <input type="text" name="lname" value="<?php echo $lname;?>" >
	<br><br>
	Registration number: <input type="text" name="regno" disabled="disabled" value="<?php echo $regno;?>" >
	<br><br>
	Username: <input type="text" name="usern" disabled="disabled" value="<?php echo $usern;?>" >
	<br><br>
	E-mail: <input type="email" name="email" disabled="disabled" value="<?php echo $email;?>">
    <br><br>
    Contact: <input type="text" name="contact" value="<?php echo $contact;?>">
    <br><br>
    
	password: <input id = "pass" type="password" name="pass" required >*
	<br><br>
	confirm Password: <input id ="confirmpass" type="password" name="confirmpass" required>*
	<br><br>

    <input class = "button" type="submit" name="submit" value="UPDATE">  

    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>


 $("#confirmpass").on('change', function(){
  var confirm = $('#pass').val();
  if(confirm == $(this).val()){

  }else{

    alert("Passwords do not match");
  }
 })
$("#confirmpass").on('change', function(){
	 var x = document.forms["myForm"]['confirmpass'].value;
	 	if(x.length < 6)
	{
		alert("Password length must be more than 6");
	}
})
 </script>
</html>

<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$pass = $_POST['pass'];

if((isset($_POST['submit'])))
{
		//check password length
		if(strlen($pass)>5)
		{
			$id = $_GET["userid"];
			$sql = "UPDATE registration SET fname='$fname',lname='$lname',contact='$contact',pass = '$pass' WHERE id='$id'";
			   if (mysqli_query($conn, $sql)) {  ?>
			   <script type="text/javascript">
			   alert("Profile Updated");
			   window.location = "http://localhost/php/hello.php";
			   </script>
					<?php
				//	header("Location: welcome.php");
				} 
				else 
				{
					array_push($errors, "Error updating record");
				}
		}
		else{
			array_push($errors, "Minimum length of the password must be 6");
			}

}

?>

