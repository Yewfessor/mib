
<?php

$countfiles = count($_FILES['fileupload']['name']);


// Looping all files
for ($i = 0; $i < $countfiles; $i++) {

	$date = date("Y-m-d H:i:s");
	$time = date("dmyHis");
	$path = "../../../assets/images/hero/";

	$name = $_FILES["fileupload"]["name"][$i];
	$tmp  = $_FILES["fileupload"]["tmp_name"][$i];

	if (strlen($name)) {
		list($txt, $ext) = explode(".", $name);

		$new_file_name = uniqid($time) . "." . $ext;

		// Upload file
		move_uploaded_file($tmp, $path . $new_file_name);


		include("../BaseModel.php");

		$sql = "INSERT INTO tb_hero (hero_images,adddate) VALUES ('" . $new_file_name . "','" . $date . "')";

		$result = mysqli_query($connection, $sql);

		Header("Location: ../../index.php");
	}
}
?>