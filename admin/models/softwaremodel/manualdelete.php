<?php
$path_basemodel = "../BaseModel.php";
$path_manual  = "../../../assets/manual/";

$software_id = $_GET['delete_id'];
$software_file = $_GET['delete_file'];

include("../BaseModel.php");
$sql = "DELETE FROM tb_software WHERE software_id='$software_id'";
@unlink ("../../../assets/manual/$software_file");
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
