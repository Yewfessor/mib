<html>

<head>
	<title></title>
</head>

<body>
	<?php
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"assets/images/slide1/".$_FILES["fileUpload"]["name"])) // Upload/Copy
		{
			echo "Copy/Upload Complete.";
			include("connection.php");
			$sql = "INSERT INTO mib_slide1 (slide1_pict_location) VALUES ('".$_FILES["fileUpload"]["name"]."')";
			$result = mysqli_query($connection,$sql);
			Header("Location: ../../admin.php");
		}
	?>
</body>
