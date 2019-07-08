<?php 
include('connection.php') ;
include('logo.php');
//include('logindata.php');
 ?>
<!DOCTYPE HTML>  
<html>

<head>
	  <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body,html {
    font-family: "Lato", sans-serif;
    height: 100%;
    margin: 0;
    overflow: auto;
    

}
.bg {

    /* The image used */
    background-image: url("college.jpg")!important;

    /* Full height */
    height: 100%; 


    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
</head>
<body class = "bg">  
  <div class="header">
  <h2>USER LOGIN</h2>
  </div>
<?php
// define variables and set to empty values
$user_name = $pass = "";
?>

<form method="post" action="logindata.php">  
  Username: <input type="text" name="usern" required>
  <br><br>
  Password: <input type="password" name="pass" required>
  <br><br>
 
  <input class="button" type="submit" name="submit" value="LOGIN"> <br><br> 
   <p>
      <a style="font-size: 20px;" href="forgot_pass.php"?>Forgot Password</a><br>
    </p>
  	<p>
  		Not yet registered? <a href="registration.php"?>Register Here</a>
  	</p>
    <br>

                    <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo '<p>$error</p>';
                    }
                ?>

</form>

</body>
</html>


			