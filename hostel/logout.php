<?php
session_start();
unset($_SESSION['user_n']);
session_destroy();
header('Location: userlogin.php');
?>
