<!DOCTYPE html>
<?php include("connection.php"); ?>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet"
		type="text/css"
		href="style.css" />
</head>

<body style=>
	


	<div class="register-show"  >
		<form method="POST" action="" >
		<input style="padding: 6px;" type="text" name="url"  placeholder="movie_url" required="required"><br>
		<input style="padding: 6px;" type="text" name="image_url"  placeholder="image_url" required="required"><br>
		<input style="padding: 6px;" type="text" name="movie_name" placeholder="movi_name" required="required" ><br>
		<input style="padding: 6px;" type="text" name="genre" placeholder="genre" required="required" ><br>
		<input style="padding: 6px;" type="text" name="cast" placeholder="cast" required="required" ><br>
		<textarea name="description" rows="5" cols="40"></textarea><br>
		<input style="padding: 6px;" type="submit" name="register" value="register"></form>
		<?php 
if(isset($_POST['register'])){
$url = $_POST['url'];
$image_url = $_POST['image_url'];
$movie_name = $_POST['movie_name'];
$genre= $_POST['genre'];
$cast= $_POST['cast'];
$description = $_POST['description'];

$sql = "INSERT INTO image( url, image_url, movie_name,genre,cast, description)
VALUES('".$url."', '".$image_url."', '".$movie_name."' ,'".$genre."','".$cast."', '".$description."')";
if(mysqli_query($conn, $sql)){
$_SESSION['url'] = $url;
echo "sucessfully added";
}else{
echo "<br><br><br><br><br>Error: " . $sql . "<br>" . $conn->error;
}
}
?>

	</div>
</body>

</html>
