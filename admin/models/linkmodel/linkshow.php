<?php
include("../BaseModel.php");
$link_id = $_GET['list_no'];
$hidden_list = $_GET["hidden_list"];
$hidden_list_2 = $_GET["hidden_list_2"];
$show_list = $_GET["show_list"];
$show_list_2 = $_GET["show_list_2"];


$sql = "SELECT * FROM tb_link";
$result = mysqli_query($connection, $sql);

if ($show_list == '1') {
	$sql = "UPDATE tb_link set list_no = '$show_list' where link_id = '$link_id'";
	$result = mysqli_query($connection, $sql);
} elseif ($hidden_list == '0') {
	$sql = "UPDATE tb_link set list_no = '$hidden_list' where link_id = '$link_id'";
	$result = mysqli_query($connection, $sql);
} elseif ($show_list_2 == '1') {
	$sql = "UPDATE tb_link set list_no_2 = '$show_list_2' where link_id = '$link_id'";
	$result = mysqli_query($connection, $sql);
} elseif ($hidden_list_2 == '0') {
	$sql = "UPDATE tb_link set list_no_2 = '$hidden_list_2' where link_id = '$link_id'";
	$result = mysqli_query($connection, $sql);
}

mysqli_close($connection);
header("location: ../../index.php");
