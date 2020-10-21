<html>

<head>
	<title></title>
	<style></style>
</head>

<body>

	<div>
		<form action="assets/php/upload.php" method="post" enctype="multipart/form-data" name="upload_slide1">
			<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
				<tr align="center" bgcolor="#FFFFFF">
					<td align="center" colspan="2" bgcolor="#FFFFFF">
						<p>Input Slide 1</p>
					</td>
				</tr>
				<tr>
					<td align="center" bgcolor="#FFFFFF"><input type="file" name="fileUpload"></td>
					<td align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="Upload"></td>
				</tr>
			</table>
		</form>
	</div>

	<div>
		<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
			<form name="form1" method="post" action="assets/php/delete.php">
				
				<tr>
					<td align="center" bgcolor="#FFFFFF" colspan="3"><strong>ลบครั้งละหลายเรคคอด</strong></td>
				</tr>

				<tr>
					<td align="center" bgcolor="#FFFFFF">เลือกข้อมูลที่ต้องการลบ</td>
					<td align="center" bgcolor="#FFFFFF"><strong>Photo</td>
					<td align="center" bgcolor="#FFFFFF" width="80px"><strong>Date</strong></td>
				</tr>

				<?php
				include("assets/php/connection.php");
				$sql = "SELECT * FROM mib_slide1";
				$result = mysqli_query($connection, $sql);
				while ($row = mysqli_fetch_array($result)) {
				?>
					<tr>
						<td align="center" bgcolor="#FFFFFF">
							<input id="pict<?php echo $row["slide1_pict_location"]; ?>" name="checkbox[]" type="checkbox" value="<?php echo $row["slide1_pict_location"]; ?>">
						</td>
						<td align="center" bgcolor="#FFFFFF">
							<label for="pict<?php echo $row["slide1_pict_location"]; ?>"><img width="200" src="assets/images/slide1/<?php echo $row["slide1_pict_location"]; ?>"></label>
						</td>
						
						<td align="center" bgcolor="#FFFFFF">
							<?php echo $row["slide1_date"]; ?>
						</td>
					</tr>
				<?php
				}
				?>

				<tr>
					<td align="center" bgcolor="#FFFFFF" colspan="3"><input type="submit" value=" - ลบข้อมูล "></td>
				</tr>
				
			</form>
		</table>
	</div>
</body>

</html>