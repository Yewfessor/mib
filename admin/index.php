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
	<h1>Hero</h1>
	<?php include("views/hero.php"); ?>
	<h1>Hero Under</h1>
	<?php include("views/herounder.php"); ?>
	<h1>Product</h1>
	<?php include("views/product.php"); ?>

</body>

</html>