<?php
    $server     = "localhost";
	$username   = "root";
	$password   = "";
	$database   = "mib";
	
	$connection = mysqli_connect($server,$username,$password,$database) or die("Error: ".mysqli_error($connection));
	mysqli_query($connection,"SET NAMES 'utf8'");

?>