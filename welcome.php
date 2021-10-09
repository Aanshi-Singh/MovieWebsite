<?php session_start(); ?>

<?php 
if(!isset($_SESSION['username'])){
	echo "<script>alert('Please Login First...')</script>";
	echo "<script>window.open('login.php', '_self')</script>";
}else{
	echo "Hello, ".$_SESSION['username']." <br>";
echo "Welcome To Our Website<br><br>";
echo "<a href='logout.php'>Logout</a>";
}

?>
