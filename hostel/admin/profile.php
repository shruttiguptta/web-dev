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
</head>
<body>
<?php 
$usern = $_SESSION["usern"];

$sql = "SELECT * from admin where usern = '$usern'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
if ($result->num_rows > 0) {
    // output data of each row
			$uid = $row['id'];
			$usern	 = $row['usern'];
			$pass = $row['pass'];
}
else{

	unset($_SESSION['usern']);
	session_destroy();
	header('Location: index.php');
}
?>
<h3 class=header>EDIT YOUR PROFILE HERE</h3>


<form name = "myForm"  method="POST" >
<?php //include('errors.php');

 ?>
	
	Username: <input type="text" name="usern" disabled="disabled" value="<?php echo $usern;?>" >
	<br><br>
	Old Password: <input id = "opass" type="password" name="opass" required >*
	<br><br>
	New Password: <input id = "npass" type="password" name="npass" required >*
	<br><br>
	confirm Password: <input id ="confirmpass" type="password" name="confirmpass" required>*
	<br><br>

    <input class = "button" type="submit" name="submit" value="UPDATE">  

    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>


 $("#confirmpass").on('change', function(){
  var confirm = $('#npass').val();
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
include('errors.php');
$errors = array(); 
if((isset($_POST['submit'])))
{	$opass = $_POST['opass'];
	$npass = $_POST['npass'];
	$confirmpass = $_POST['confirmpass'];
		//check password length
		if(strlen($pass)>5)
		{
			if(($opass == $pass) &&($npass == $confirmpass)){
			$sql = "UPDATE admin SET pass = '$npass' WHERE usern='$usern'";
			   if (mysqli_query($conn, $sql)) {
			   	?>
			   <script type="text/javascript">
			   	alert("Password Updated");
			   	window.location = "welcomeadmin.php";
			   </script>
			   <?php
					//header("Location: welcomeadmin.php");
				} 
			}
				else 
				{
						?>
			   <script type="text/javascript">
			   	alert("Old Password did not match");
			   	//window.location = "welcomeadmin.php";
			   </script>
			   <?php
				}
		}
		else{
			array_push($errors, "Minimum length of the password must be 6");
			}

}

?>

