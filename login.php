<?php session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";


$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['login'])){
    
    $uname=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $_SESSION['username'] = $uname;

    
    
    $sql =" SELECT * FROM loginform WHERE username='".$uname."' AND Email='".$email."' AND password='".$password."' ";
    
    $result = $conn->query($sql);
    
    if($result->num_rows>0){
        echo "<script>window.open('show.php', '_self')</script>";
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>seek or peek</title>
    <style>
        body{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
	height:100vh;
	min-height:550px;
	background-image: url(log.png);
	background-repeat: no-repeat;
	background-size:cover;
	background-position:center;
	position:relative;
    overflow-y: hidden;
}
a{
  text-decoration:none;
  color:#444444;
}
.login-reg-panel{
    position: relative;
    top: 54%;
    transform: translateY(-50%);
    text-align: center;
    width: 70%;
	right:0;left:0;
    margin:auto;
    height:300px;
    background-color: rgba(211, 86, 67, 0.39);
}
.white-panel{
    background-color: rgb(255, 255, 255);
    height: 449px;
    position: absolute;
    top: -84px;
    width:50%;
    right:calc(50% - 50px);
    transition:.3s ease-in-out;
    z-index:0;
    box-shadow: 0 0 15px 9px #00000096;
}
.login-reg-panel input[type="radio"]{
    position:relative;
    display:none;
}
.login-reg-panel{
    color:#B8B8B8;
}
.login-reg-panel #label-login, 
.login-reg-panel #label-register{
    border:1px solid #9E9E9E;
    padding:5px 5px;
    width:150px;
    display:block;
    text-align:center;
    border-radius:10px;
    cursor:pointer;
    font-weight: 600;
    font-size: 18px;
}
.login-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    left:0;
    position:absolute;
    text-align:left;
}
.register-info-box{
    width:38%;
    padding:0 50px;
    top:20%;
    right:0;
    position:absolute;
    text-align:left;
    
}
.right-log{right:50px !important;}

.login-show, 
.register-show{
    z-index: 1;
    display:none;
    opacity:0;
    transition:0.3s ease-in-out;
    color:#242424;
    text-align:left;
    padding:50px;
}
.show-log-panel{
    display:block;
    opacity:0.9;
}
.login-show input[type="text"], .login-show input[type="password"],.login-show input[type="email"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.login-show input[type="button"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.login-show a{
    display:inline-block;
    padding:10px 0;
}

.register-show input[type="text"],.register-show input[type="email"], .register-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.btn {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.credit {
    position:absolute;
    bottom:10px;
    left:10px;
    color: #3B3B25;
    margin: 0;
    padding: 0;
    font-family: Arial,sans-serif;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    z-index: 99;
}
a{
  text-decoration:none;
  color:#2c7715;
}
    
    </style>
  </head>
  <body>
    <h1></h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    <video autoplay loop id="myVideo" style="position: fixed;right: 0;bottom: 0;min-width: 100%;min-height: 100%;">
        <source src="party.mp4" type="video/mp4">
      </video>
      <audio src="spitfire-klayton-musicbed.mp3" autoplay loop>
        <p>If you are reading this, it is because your browser does not support the audio element.     </p>
        <embed src="spitfire-klayton-musicbed.mp3" width="180" height="90" hidden="true" >
        </audio>
      <!-- <audio src="winter.mp3" autoplay loop>
        <p>If you are reading this, it is because your browser does not support the audio element.     </p>
        <embed src="winter.mp3" width="180" height="90" hidden="true" >
        </audio> -->

        <nav class="navbar fixed-top navbar-light bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="log.png" alt="" width="150" height="30">
              </a>
            </div>
          </nav>

    <div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
				<h2>LOGIN</h2>
				<form method="POST" action="">
                <input type="text" name="username" placeholder="User name">
				<input type="email" name="email" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
                <input type="submit" name="login" value="Login">
                </form>
				
			
			</div>
			<div class="register-show">
				<h2>REGISTER</h2>
                <form method="POST" action="">
                <input type="text" name="r_username"  placeholder="Username" required="required">
                <input type="email" name="r_email"  placeholder="Email" required="required">
				<input type="password" name="r_password" placeholder="Password" required="required" >
				<!-- <input type="password" placeholder="Confirm Password"> -->
				<input type="submit" name="register" value="register"></form>
                <?php 
if(isset($_POST['register'])){
    $r_username = $_POST['r_username'];
    $r_email = $_POST['r_email'];
    $r_password = $_POST['r_password'];

    $sql = "INSERT INTO loginform(username, Email, password)
    VALUES('".$r_username."', '".$r_email."', '".$r_password."')";
    if(mysqli_query($conn, $sql)){
        $_SESSION['username'] = $r_username;
        echo "<script>window.open('show.php')</script>";
    }else{
        echo "<br><br><br><br><br>Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
        
			</div>
		</div>
	</div>
  </body>
  <script>
    {
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
};


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
  

  </script>
</html>