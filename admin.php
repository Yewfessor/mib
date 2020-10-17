<html>

<head>
	<title></title>
</head>

<body>
	<form name="upload_slide1" method="post" action="upload.php" enctype="multipart/form-data">
		<input type="file" name="filUpload"><br>
		<input name="btnSubmit" type="submit" value="Submit">
	</form>

<?
	include("connection.php");
	$sql = "SELECT * FROM mib_slide1";
	$result = mysqli_query($connection,$sql);
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

<?
	while($row = mysqli_fetch_array($result))
	{
?>
		<tr>
			<td>
				<div align="center"><? $row["slide1_id"]; ?></div>
			</td>
			<td>
				<center><img src="assets/images/slide1/<? $row["slide1_pict_location"];?>"></center>
			</td>
		</tr>
		<?
	}
?>
	</table>
	<?
mysql_close($connection);
?>
</body>

</html>