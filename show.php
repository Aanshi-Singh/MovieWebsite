<?php session_start();?>
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
	<style>
	* {box-sizing: border-box}

.img-block {
  position: relative;
  width: 50%;
  max-width: 300px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  background: rgb(1, 0, 8);
  background: rgba(0, 0, 0, 0.7);
  color: #f1f1f1;
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-weight: bold;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.img-block:hover .overlay {
  opacity: 1;
}</style>

  </head>
  <body style="padding:0px; margin: 0px; background-color:black; color:aliceblue">
<!-- <div class="container-fluid"> -->
        <nav class="navbar fixed-top navbar-light bg-dark" style="margin-bottom:5px";>
          <div class="container-fluid">
            <a class="navbar-brand" href="show.php">
              <img src="log.png" alt="logo" width="220" height="30">
            </a>
            <form action="search.php">
            <button type="submit" class="btn btn-outline-secondary" style="width: 300px; height: 35px">Search a movie</button></form>
           
            <form  style="padding-bottom: 6.50836px;padding-left: 21.6794px;padding-right: 21.6794px;padding-top:6.50836px; color: white; text-decoration:none ;">	
			<?php 
      
      if(!isset($_SESSION['username'])){
        echo "<script>alert('Please Login First...')</script>";
        echo "<script>window.open('login.php', '_self')</script>";
      }else{
  echo "<a href='logout.php' style='padding-bottom: 6.50836px;padding-left: 21.6794px;padding-right: 21.6794px;padding-top:6.50836px; color: white; text-decoration:none ;'>Logout</a>";
  // future scope of making a profile page #form.php#
  echo "<a href='#' style='padding-bottom: 6.50836px;padding-left: 21.6794px;padding-right: 21.6794px;padding-top:6.50836px; color: white; text-decoration:none ;'>".$_SESSION['username']."</a>";
      }
?>
</form >
          </div>
        </nav>
		<div class="container-fluid " style=" margin-left: 0; padding:0px;">      
  		<div id="section1" class="container-fluid" >
    	<div class="img-box" style="height: 400px;padding-top: 100px;width: 100%; float:left;">
			<?php

			include "connection.php";
      $sql = "SELECT * FROM image";


			$result = mysqli_connect($servername,$username,$password);
			mysqli_select_db($result,$dbname);
			$image_query = mysqli_query($result,"select id,image_url,url,movie_name from image");
			while($rows = mysqli_fetch_array($image_query))
			{
				$image_url = $rows['image_url'];
				$movie_name = $rows['movie_name'];
				$id = $rows['id'];
			?>

			<div class="img-block" style="text-align: -webkit-center;float: left; border:2.5px solid white; height: 260px; width:200px; ">
			<a href="temp.php?id=<?php echo $id; ?>">
			<img src="<?php echo $image_url; ?>"height="200px" width="190px" alt="dhhd" style="border-bottom: 1px solid grey;margin-bottom: 13px;" >
			<div class="overlay" ><?php echo $movie_name; ?></div></a>
			<a href="temp.php?id=<?php echo $id; ?>" style="color: white; text-decoration:none ; border: 2px solid #6f6994;background-color: #2c2c4c;padding: 5px;">Watch Now</a>
		</div>
			
			<?php
			}
?>
