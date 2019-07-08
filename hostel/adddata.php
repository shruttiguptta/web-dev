<?php 
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
session_start();
include('connection.php'); 
include('header.php');
include('sidebar.php');
include('securedata.php');
include('logo.php');
include('errors.php');
$errors = array();

if(isset($_POST['submit']))
{

$fname = $_POST['fname'];
$lname = $_POST["lname"];
$usern   = $_POST['usern'];
$regno = $_POST["regno"];
$gender = $_POST["gender"];
$contact = $_POST["contact"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$confirmpass = $_POST["confirmpass"];
$block = $_POST['block'];
$roomno=$_POST['roomno'];
$stayfrom=$_POST['stayfrom'];
$duration=$_POST['duration'];
$egycontact=$_POST['egycontact'];
$guardianName=$_POST['guardianName'];
$guardianRelation=$_POST['guardianRelation'];
$guardianContact=$_POST['guardianContact'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];


$c = 0;
$f = 0;
$r = 0;

//check if password is diffrent
if($pass != $confirmpass)
{
      array_push($errors, "Password did not match");
	}
//check password length
if(strlen($pass)<6)
{
	array_push($errors, "Minimum length of the password must be 6");
}

$sql = "SELECT usern, email, regno FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc())
                        {
                            if((($row['usern'])==$usern) )
                            {
                                $c=$c+1;
                            }
                            if((($row['regno'])==$regno) )
                            {
                                $r=$r+1;
                            }
                            if((($row['email'])==$email))
                            {
                                $f=$f+1;
                            }
                        }
                        if($c>0 or $f>0 or $r>0)
                        { 
                            if($c>0){
                            array_push($errors, "Username already exists");
                            }
                            if($f>0)
                            {
                            array_push($errors, "Email already exists");
                            }
                            if($r>0)
                            {
                            array_push($errors, "Registration Number already exists");
                            }
						}
					}
					
else if (count($errors) == 0) 
{
 		 $sql = "INSERT INTO roomreg(fname,lname,usern,regno,email,contact,gender,block,roomno,stayfrom,duration,egycontact,guardianName,guardianRelation,guardianContact,address,city,state,pincode)
         VALUES('$fname','$lname','$usern','$regno','$email','$contact','$gender','$block','$roomno','$stayfrom','$duration','$egycontact','$guardianName','$guardianRelation','$guardianContact','$address','$city','$state','$pincode')";   

        $sql1 = "INSERT INTO registration(fname,lname,usern,regno,email,pass,contact,gender)
         VALUES('$fname','$lname','$usern','$regno','$email','$pass','$contact','$gender')";   


		if (mysqli_query($conn,$sql) && (mysqli_query($conn,$sql1))) 
			{  ?>
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

$conn->close();

}
?>


