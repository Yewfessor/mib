<?php
   $server     = "localhost";
	$username   = "root";
	$password   = "";
	$database   = "mib";
	
    /* $server     = "localhost";
	$username   = "id15331195_mibthailand";
	$password   = "j^S)O|5-@>QuJ^1l";
	$database   = "id15331195_mib"; */
	
	$connection = mysqli_connect($server,$username,$password,$database) or die("Error: ".mysqli_error($connection));
	mysqli_query($connection,"SET NAMES 'utf8'");

?>