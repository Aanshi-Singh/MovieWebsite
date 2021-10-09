<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>seekorpeek</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  </head>
  <body style="padding:0px; margin: 0px; background-color:black;">
<!-- <div class="container-fluid"> -->
        <nav class="navbar navbar-light bg-dark" style="margin-bottom:10px";>
          <div class="container-fluid">
            <a class="navbar-brand" href="show.php">
              <img src="log.png" alt="" width="230" height="40">
            </a>
			
	<a href='logout.php' style='padding-bottom: 6.50836px;padding-left: 21.6794px;padding-right: 21.6794px;padding-top:6.50836px; color: white; text-decoration:none ;'>Logout</a>";

        </nav>
<div class="box" >
	<div class="container">
    <?php

			include "connection.php";

			$result = mysqli_connect($servername,$username,$password) or die("Could not connect to database." .mysqli_error());
			mysqli_select_db($result,$dbname) or die("Could not select the databse." .mysqli_error());
			$image_query = mysqli_query($result,"select image_url,url,movie_name from image");
			while($rows = mysqli_fetch_array($image_query))
			{
		
				$url = $rows['url'];
				$movie_name = $rows['movie_name'];
				?>

<!-- <div class="img-block" style="float: left; border:2px solid white; height: 300px; width:300px ">
	<iframe width="420" height="315" style="border: 2px solid white;"
	src="<?php echo $url;?>">
</iframe><br>
<h1 class="fw-bolder" style="font-size: 20px;color: antiquewhite; font-weight: bold;">Go ahead, make your day</h1>
<a href="index.php?url=<?php echo $url; ?>">movie</a>
</div> -->
</div>

<?php
			}
			?>
<div class="container" style=" color: white; font-size:large;font-weight:bold;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
	<?php 
$id = $_GET['id'];

$sql = "SELECT * FROM image WHERE id = '".$id."'";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo "<iframe width='100%x' height='500px' style='border: 2px solid white;' src='https://www.youtube.com/embed/".$row['url']."'></iframe><br>";
		echo "<h2>Movie name: ".$row['movie_name']."</h2><br><br>";
		
		echo "<h4>Genre: ".$row['genre']."</h4><br><br>";
		echo "<h4>Cast: ".$row['cast']."</h4><br><br>";
		echo "<h4>Description: ".$row['description']."</h4><br>";

			//echo "".$row['url']."<br><br>";
		}
	}
	?></div>
</div>
      
	</body>
	</html>
