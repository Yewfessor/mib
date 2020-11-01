<?php

$hero_id = $_GET['delete_id'];
$hero_image = $_GET['delete_img'];

include("../BaseModel.php");
$sql = "DELETE FROM tb_hero WHERE hero_id='$hero_id'";
@unlink ("../../../assets/images/hero/$hero_image");
$result = mysqli_query($connection,$sql);


mysqli_close($connection);
if ($result) {
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
