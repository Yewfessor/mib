<!DOCTYPE html>
<?php
include_once("models/accountmodel/checklogin.php");
date_default_timezone_set("Asia/Bangkok");
?>

<html>

<head>
	<title></title>
	<style></style>
</head>

<body>
	<a href="models/accountmodel/logout.php">Log out</a><br>
	<?php //include("views/hero.php"); ?>
	<?php //include("views/herounder.php"); ?>
	<?php //include("views/product.php"); ?>
	<?php include("views/product.php"); ?>
</body>

</html>