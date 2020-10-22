<html>

<head>
	<title></title>
	<style></style>
</head>

<body>

	<div>
		<form action="models/iomodel/upload.php" method="post" enctype="multipart/form-data" name="upload_hero">
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
		<table width="500" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
			<form name="show_hero" method="post" action="models/iomodel/delete.php">
				
				<tr>
					<td align="center" bgcolor="#FFFFFF" colspan="3"><strong>ลบครั้งละหลายเรคคอด</strong></td>
				</tr>

				<tr>
					<td align="center" bgcolor="#FFFFFF">เลือกข้อมูลที่ต้องการลบ</td>
					<td align="center" bgcolor="#FFFFFF"><strong>Photo</td>
					<td align="center" bgcolor="#FFFFFF" width="150px"><strong>Date</strong></td>
				</tr>

				<?php
				include("../admin/models/BaseModel.php");
				$sql = "SELECT * FROM tb_hero";
				$result = mysqli_query($connection, $sql);
				while ($row = mysqli_fetch_array($result)) {
				?>
					<tr>
						<td align="center" bgcolor="#FFFFFF">
							<input id="pict<?php echo $row["hero_images"]; ?>" name="checkbox[]" type="checkbox" value="<?php echo $row["hero_images"]; ?>">
						</td>
						<td align="center" bgcolor="#FFFFFF">
							<label for="pict<?php echo $row["hero_images"]; ?>"><img width="200" src="../assets/images/hero/<?php echo $row["hero_images"]; ?>"></label>
						</td>
						
						<td align="center" bgcolor="#FFFFFF">
							<?php echo $row["adddate"]; ?>
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