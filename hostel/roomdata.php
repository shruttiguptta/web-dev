<?php session_start();
include('connection.php');
include('errors.php');
 ?>
<!DOCTYPE html>
<html>
<body>
<?php
$errors = array();
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
}
if(isset($_POST['submit']))
{
$block = $_POST['block'];
$roomno=$_POST['roomno'];
//$feespm=$_POST['fpm'];
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


        //$passs = md5($pass);
        $sql = "INSERT INTO roomreg(fname,lname,usern,regno,email,contact,gender,block,roomno,stayfrom,duration,egycontact,guardianName,guardianRelation,guardianContact,address,city,state,pincode)
         VALUES('$fname','$lname','$usern','$regno','$email','$contact','$gender','$block','$roomno','$stayfrom','$duration','$egycontact','$guardianName','$guardianRelation','$guardianContact','$address','$city','$state','$pincode')";   

if($conn->query($sql) == TRUE){
        $_SESSION['user_n'] = $usern;
    echo "<br><br>You have now registered for hostel";

}
else
{        echo "Error :".$sql."<br>".$conn->error;
 }

$conn->close();
}
?>
</body>
</html>


