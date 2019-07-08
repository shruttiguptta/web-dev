<?php
//user registration
session_start();
include('logo.php');
include('connection.php'); 
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
.custom-form{
	width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  text-align: center;
  opacity: 0.7;
  margin-top: 160px;
  border-radius: 10px 10px 10px 10px;

}
.button{
   background-color: #e7e7e7; color: black;
padding: 12px 28px;
border-radius: 5px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    opacity: 0.9;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body class = "bg">

<ul>
  <li><a href="registration.php">Signup</a></li>
  <li><a href="userlogin.php">Log In</a></li>
  <li><a  href="admin/index.php">Admin Login</a></li>

</ul>
<form style="margin-top: 50px; border-radius: 10px 10px 10px 10px; width: 80%;">
<p>
SRM Institute of Science and Technology, or Sri Ramaswamy Memorial Institute of Science and Technology, formerly SRM University, is a deemed university located in Chennai, Tamil Nadu, India. It was founded in 1985 as SRM Engineering College in Kattankulathur, under University of Madras. It has 8 campuses, 4 in Tamil Nadu — Kattankulathur, Ramapuram, Vadapalani, Tiruchchirappalli and others in Delhi NCR, Sonepat, Gangtok and Amaravati.<br><br>
The institute gained deemed status during the 2003-2004 academic year and was renamed SRM Institute of Science and Technology. It became SRM University in 2006 following the permission by the UGC for Deemed to be Universities to be called as Universities. In 2017 it was renamed back as SRM Institute of Science and Technology following the UGC request to drop the "University" from the name.<br><br>
SRM Institute of Science and Technology is approved by the University Grants Commission and is accredited by the National Assessment and Accreditation Council (NAAC).It has been given an overall A Grade by NAAC. Some programs in SRM Institute of Science and Technology are accredited by Accreditation Board for Engineering and Technology.
</p>
</body>
</html>