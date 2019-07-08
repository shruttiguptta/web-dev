<?php
session_start();
unset($_SESSION['usern']);
session_destroy();
header('Location: index.php');
?>
