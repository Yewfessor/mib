<html>

<head>
	<title></title>
</head>

<body>

<div>
	<form action="assets/php/upload.php" method="post" enctype="multipart/form-data" name="upload_slide1">
		<input type="file" name="fileUpload">
		<input type="submit" name="Submit" value="Upload">
	</form>

	<?php
	include("assets/php/connection.php");
	$sql = "SELECT * FROM mib_slide1";
	$result = mysqli_query($connection, $sql);
	while ($row = mysqli_fetch_array($result)) {
	?>

		<img width="200" src="assets/images/slide1/<?php echo $row["slide1_pict_location"]; ?>">
		<div><?php echo $row["slide1_date"]; ?></div>
		<a href="" class="solid popup">Edit</a> <a href="" class="solid popup">Delete</a><br>

	<?php

	}
	mysqli_close($connection);

	?>
</div>

<div>

</div>

</body>

</html>