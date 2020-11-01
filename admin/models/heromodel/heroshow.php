<?php
include("../BaseModel.php");
$hero_id = $_GET['list_no'];
$hidden_list = $_GET["hidden_list"];
$show_list = $_GET["show_list"];

	$sql = "SELECT * FROM tb_hero";
	$result = mysqli_query($connection, $sql);

if ($show_list == '1') {
	$sql = "UPDATE tb_hero set list_no = '$show_list' where hero_id = '$hero_id'";
	$result = mysqli_query($connection, $sql);
} elseif ($hidden_list == '0') {
	$sql = "UPDATE tb_hero set list_no = '$hidden_list' where hero_id = '$hero_id'";
	$result = mysqli_query($connection, $sql);
}

mysqli_close($connection);

header("location: ../../index.php");
