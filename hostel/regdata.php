<?php
//session_start();
include('connection.php');
$errors = array(); 

$fname = $_POST['fname'];
$lname = $_POST["lname"];
$usern   = $_POST['usern'];
$regno = $_POST["regno"];
$gender = $_POST["gender"];
$contact = $_POST["contact"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$confirmpass = $_POST["confirmpass"];
//connect
if((isset($_POST['submit'])))
{

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

if (count($errors) == 0) 
{
        //$passs = md5($pass);
        $sql = "INSERT INTO registration(fname,lname,usern,regno,email,pass,contact,gender)
         VALUES('$fname','$lname','$usern','$regno','$email','$pass','$contact','$gender')";   
if($conn->query($sql) == TRUE){
        $_SESSION['user_n'] = $usern;
    echo "You are now a registered user..Click below to Login";

}
else
{        echo "Error :".$sql."<br>".$conn->error;
 }
}




$conn->close();
}

?>



