<?php session_start();
unset($_SESSION['username']);
echo "<script>window.open('login.php')</script>";
?>