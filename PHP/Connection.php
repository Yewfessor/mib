<?php
    $server     = "localhost";
	$username   = "root";
	$password   = "";
	$database   = "MIB";
	
	$connection = mysqli_connect($server,$username,$password,$database) or die("Error Connection Database");
	mysqli_query($connection,"SET NAMES UTF8");
	echo "Connection";
?>