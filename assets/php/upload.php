
<?php
	$date = date("Y-m-d");
	$time = date("dmyHis");
	$path = "../images/slide1/";
	$name = $_FILES["fileUpload"]["name"]; 
	$tmp  = $_FILES["fileUpload"]["tmp_name"];

	if (strlen($name)) {
		list($txt, $ext) = explode(".", $name);
		$new_file_name = $time . "." . $ext;
		move_uploaded_file($tmp, $path . $new_file_name);
		include("connection.php");
		$sql = "INSERT INTO mib_slide1 (slide1_pict_location,slide1_date) 
		VALUES ('" . $new_file_name . "','" . $date . "')";
		$result = mysqli_query($connection, $sql);
		Header("Location: ../../admin.php");
	}
?>