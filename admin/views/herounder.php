<div>
		<form action="models/heroundermodel/herounderupload.php" method="post" enctype="multipart/form-data" name="upload_herounder">
			<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
				<tr align="center" bgcolor="#FFFFFF">
					<td align="center" colspan="2" bgcolor="#FFFFFF">
						<p>Input Herounder</p>
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
		<form name="show_herounder" method="post" action="models/heroundermodel/herounderdelete.php">
			<table width="500" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
				<tr>
					<td align="center" bgcolor="#FFFFFF" colspan="3"><strong>Herounder-Image</strong></td>
				</tr>

				<tr>
					<td align="center" bgcolor="#FFFFFF">Select</td>
					<td align="center" bgcolor="#FFFFFF"><strong>Images</td>
					<td align="center" bgcolor="#FFFFFF" width="150px"><strong>Add-Date</strong></td>
				</tr>

				<?php
				include("models/BaseModel.php");
				$sql = "SELECT * FROM tb_herounder";
				$result = mysqli_query($connection, $sql);
				while ($row = mysqli_fetch_array($result)) {
				?>
					<tr>
						<td align="center" bgcolor="#FFFFFF">
							<input id="pict<?php echo $row["herounder_images"]; ?>" name="checkbox[]" type="checkbox" value="<?php echo $row["herounder_images"]; ?>">
						</td>
						<td align="center" bgcolor="#FFFFFF">
							<label for="pict<?php echo $row["herounder_images"]; ?>"><img width="200" src="../assets/images/herounder/<?php echo $row["herounder_images"]; ?>"></label>
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