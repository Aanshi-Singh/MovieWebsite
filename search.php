<?php session_start();?>
<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "photos";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM image";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM image WHERE movie_name ='$name'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>seek or peek</title>
<link rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body style="background-color:black; color:aliceblue">
<nav class="navbar navbar-light bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="show.php">
              <img src="log.png" alt="logo" width="220" height="30">
            </a>
           
            <form class="d-flex" style="padding-bottom: 6.50836px;padding-left: 21.6794px;padding-right: 21.6794px;padding-top:6.50836px; color: white; text-decoration:none ;">	
			<?php 
  echo "<a href='logout.php' style='padding-bottom: 6.50836px;padding-left: 21.6794px;padding-right: 21.6794px;padding-top:6.50836px; color: white; text-decoration:none ;'>Logout</a>";
 // future scope of making a profile page #form.php#
  echo "<a href='#' style='padding-bottom: 6.50836px;padding-left: 21.6794px;padding-right: 21.6794px;padding-top:6.50836px; color: white; text-decoration:none ;'>".$_SESSION['username']."</a>";
?>
</form >
          </div>
        </nav>

<div class="container-fluid">
<label>Search</label>
<form action="" method="GET">
<input type="text" placeholder="Type the movie name" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>


<?php
while($row = $result->fetch_assoc()){
	echo "<iframe width='100%x' height='500px' style='border: 2px solid white;' src='https://www.youtube.com/embed/".$row['url']."'></iframe><br>";
	echo "<h2>Movie name: ".$row['movie_name']."</h2><br><br>";
	
	echo "<h4>Genre: ".$row['genre']."</h4><br><br>";
	echo "<h4>Cast: ".$row['cast']."</h4><br><br>";
	echo "<h4>Description: ".$row['description']."</h4><br>";

		//echo "".$row['url']."<br><br>";
	}

?>
</table>
</div>
</body>
</html>