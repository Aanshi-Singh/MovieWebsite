<?php session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form action="" method="POST">
    	<input type="text" name="username" placeholder="username"><br><br>
    	<input type="text" name="email" placeholder="email"><br><br>
    	<input type="text" name="password" placeholder="password"><br><br>
    	<input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php 
if(isset($_POST['submit'])){
	$username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO loginform(username, email, password)
    VALUES('".$username."', '".$email."', '".$password."')";
    if(mysqli_query($conn, $sql)){
    	$_SESSION['username'] = $username;
	    echo "<script>window.open('welcome.php')</script>";
    }else{
	    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>