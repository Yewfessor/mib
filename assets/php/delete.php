<?php
include("connection.php");
$checks = implode(" ', ' ", $_POST['checkbox']);

$sql = "DELETE FROM mib_slide1 WHERE slide1_pict_location in ('$checks') ";
$result = mysqli_query($connection, $sql);



mysqli_close($connection);

if($result){
	echo "<script type='text/javascript'> ";
	echo "alert('delete Successfully'); ";
	echo "window.location='../../admin.php'; ";
	echo "</script>";
} else {
echo "<script type='text/javascript'> ";
	echo "alert('delete ERROR!!! '); ";
	echo "window.location='../../admin.php'; ";
	echo "</script>";
}
?>