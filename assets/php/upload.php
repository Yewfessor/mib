<html>

<head>
	<title></title>
</head>

<body>
	<?php
	$date = date("Y-m-d");
	$time = date("dmyHis");
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"../images/slide1/".$_FILES[$time]["name"])) // Upload/Copy
		{
			echo "Copy/Upload Complete.";
			include("connection.php");
			$sql = "INSERT INTO mib_slide1 (slide1_pict_location,slide1_date) VALUES ('".$_FILES[$time]["name"]."','".$date."')";
			$result = mysqli_query($connection,$sql);
			Header("Location: ../../admin.php");
		}
	?>
</body>
