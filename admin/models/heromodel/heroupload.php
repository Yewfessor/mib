
<?php
	$date = date("Y-m-d H:i:s");
	$time = date("dmyHis");
	$path = "../../../assets/images/hero/";
	$name = $_FILES["fileUpload"]["name"]; 
	$tmp  = $_FILES["fileUpload"]["tmp_name"];

	if (strlen($name)) {
		list($txt, $ext) = explode(".", $name);
		$new_file_name = $time . "." . $ext;
		move_uploaded_file($tmp, $path . $new_file_name);
		include("../BaseModel.php");
		$sql = "INSERT INTO tb_hero (hero_images,adddate) 
		VALUES ('" . $new_file_name . "','" . $date . "')";
		$result = mysqli_query($connection, $sql);
		Header("Location: ../../index.php");
	}
?>