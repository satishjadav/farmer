<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Image </title>
	<style>
		#errorMs { color: #a00; }
		.gallery img{  width: 300px; }
	</style>
</head>
<body>

	<p id="errorMs"></p>
	<form id="form" method="post" enctype="multipart/form-data">
		<input type="file" id="myImage">
		<input type="submit" id="submit" value="Upload">
	</form><br>

	<div class="gallery">
		<img src="uploads/default-image.jpg" id="preImg">
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
   
      
	</script>
</body>
</html>