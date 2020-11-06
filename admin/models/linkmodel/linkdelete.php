<?php

$link_id = $_GET['delete_id'];

include("../BaseModel.php");
$sql = "DELETE FROM tb_link WHERE link_id='$link_id'";
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