<?php
$path_basemodel = "../BaseModel.php";
$path_software  = "../../../assets/software/";
include $path_basemodel;

$software_id = $_GET['download_id'];

$sql = "SELECT * FROM tb_software WHERE software_id=$software_id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

$filename = $row['software_file'];

