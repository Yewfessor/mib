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

	<table width="200" border="1">
		<tr>
			<th width="50">
				<div align="center">Files ID </div>
			</th>
			<th width="150">
				<div align="center">Files Name </div>
			</th>
		</tr>

		<?php
		while ($row = mysqli_fetch_array($result)) {
		?>
			<tr>
				<td>
					<div align="center"><?php echo $row["slide1_id"]; ?></div>
				</td>
				<td>
					<center><img src="assets/images/slide1/<?php echo $row["slide1_pict_location"]; ?>"></center>
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