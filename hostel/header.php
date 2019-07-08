<?php
include('logo.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    opacity: 0.9;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.logout{
  float: right;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="welcome.php">Home</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="vision.php">vision</a></li>
  <li class = "logout"><a  href="logout.php">logout</a></li>

</ul>

</body>
</html>
