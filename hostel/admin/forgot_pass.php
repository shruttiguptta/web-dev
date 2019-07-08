<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include('connection.php') ;
include('logo.php');
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
    background-image: url("image.jpg")!important;

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
  <h4>FORGOT PASSWORD</h4>
  </div>

<form method="post" action="">  
<?php include('msg.php');?>
  Email: <input type="email" name="email" required>
  <br><br>
 
  <input class="button" type="submit" name="submit" value="SUBMIT"> <br><br> 
  <a href="index.php"> LOGIN HERE</a>
</form>

</body>
</html>
