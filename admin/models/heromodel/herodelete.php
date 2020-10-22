<?php
include("../BaseModel.php");
$checks = implode("','", $_POST['checkbox']);

$sql = "SELECT * FROM tb_hero WHERE hero_images in ('$checks')";
$result = mysqli_query($connection, $sql);

while($row = mysqli_fetch_array($result)){
	 @unlink ("../../../assets/images/hero/$row[hero_images]");
}

$sql1 = "DELETE FROM tb_hero WHERE hero_images in ('$checks') ";
$result1 = mysqli_query($connection, $sql1);

mysqli_close($connection);

if ($result1) {
	echo "<script type='text/javascript'> ";
	echo "alert('delete Successfully'); ";
	echo "window.location='../../index.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'> ";
	echo "alert('delete ERROR!!! '); ";
	echo "window.location='../../index.php'; ";
	echo "</script>";
}

?>
