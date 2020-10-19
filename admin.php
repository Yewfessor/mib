<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
	<div id="details" class="basic-2">
		<div class="container">
			<div class="row">

				<div class="col-lg-6">
					<div class="text-contain">
						<a href="" class="solid popup">edit</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="details-lightbox-1" class="lightbox-basic zoom mfp-hide">
		<div class="row">
			<button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
			<div class="col-lg-6">
				<form action="assets/php/upload.php" method="post" enctype="multipart/form-data" name="upload_slide1">
					<input type="file" name="fileUpload">
					<input type="submit" name="Submit" value="Upload">
				</form>
			</div>
		</div>
	</div>




	<?php
	include("assets/php/connection.php");
	$sql = "SELECT * FROM mib_slide1";
	$result = mysqli_query($connection, $sql);
	while ($row = mysqli_fetch_array($result)) {
	?>
		<img width="200" src="assets/images/slide1/<?php echo $row["slide1_pict_location"]; ?>">
		<div><?php echo $row["slide1_date"]; ?></div>
		<!--div><a href="delete.php">Delete</a></div>-->
	<?php
	}
	mysqli_close($connection);
	?>
</body>

</html>