<html>

<head>
	<title></title>
</head>

<body>
	<form action="assets/php/upload.php" method="post" enctype="multipart/form-data" name="upload_slide1">
		<input type="file" name="fileUpload">
		<input type="submit" name="Submit" value="Submit">
	</form>

	<?php
	include("assets/php/connection.php");
	$sql = "SELECT * FROM mib_slide1";
	$result = mysqli_query($connection, $sql);
	?>

	<table border="1">
		<tr>
			<th>
				<div align="center">Images </div>
			</th>
			<th>
				<div align="center">Date </div>
			</th>
		</tr>

		<?php
		while ($row = mysqli_fetch_array($result)) {
		?>
			<tr>
				<td>
					<center><img width="200" src="assets/images/slide1/<?php echo $row["slide1_pict_location"]; ?>"></center>
				</td>
				<td>
					<div><?php echo $row["slide1_date"]; ?></div>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
	<?php
	mysqli_close($connection);
	?>
</body>

</html>