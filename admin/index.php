<?php
include_once("models/accountmodel/checklogin.php");
date_default_timezone_set("Asia/Bangkok");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>M.I.B ADMIN</title>
	<link rel="stylesheet" href="../assets/css/admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<!--bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--bootstrap -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- ckeditor-->
	<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	<!-- jquery-->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<!-- Slide-->
	<script>
		const openSlideMenu = () => {
			document.getElementById('menu').style.width = '250px';
			document.getElementById('content').style.marginLeft = '250px';
		}
		const closeSlideMenu = () => {
			document.getElementById('menu').style.width = '0';
			document.getElementById('content').style.marginLeft = '0';
		}
	</script>
</head>


<body>
	<div id="content">
		<span class="slide">
			<a href="#" onclick="openSlideMenu()">
				<i class="fas fa-bars"></i>
			</a>

		</span>



		<div class="nav" id="menu">
			<div class="logo-container">
				<img width="100px" src="../assets/images/Logo/mib-logo-icon-white.png" alt="" class="logo-image">
			</div>
			<a href="#" class="close" onclick="closeSlideMenu()">
				<i class="fas fa-times"></i>
			</a>
			<a href="#images" class="menu-link">Slide</a>
			<div class="sub-menu">
				<a href="#images" class="menu-link">Big Slide</a>
				<a href="#links" class="menu-link">Youtube Links</a>
			</div>
			<a href="#product" class="menu-link">Product</a>
			<div class="sub-menu">
				<a href="#product" class="menu-link">Product List</a>
				<a href="#product-type" class="menu-link">Product Type</a>
				<a href="#product-category" class="menu-link">Product Sub-Type</a>
			</div>
			<a href="#software" class="menu-link">Download</a>
			<div class="sub-menu">
				<a href="#software" class="menu-link">Software</a>
				<a href="#" class="menu-link">Manual</a>
			</div>
			<a href="#news" class="menu-link">News</a>
			<a href="models/accountmodel/logout.php" class="nav-link">Log out</a>

		</div>

		<div id="main-content">

			<div class="section-container">

				<div id="images">
					<?php include("views/hero.php"); ?>
				</div>
				<div id="links">
					<?php include("views/link.php"); ?>
				</div>
				<div>
					<?php include("views/product.php"); ?>
				</div><br>
				<div>
					<?php include("views/producttype.php"); ?>
				</div><br>
				<div>
					<?php include("views/productline.php"); ?>
				</div><br>
				<div >
					<?php include("views/software.php"); ?>
				</div><br>
				<div >
					<?php include("views/news.php"); ?>
				</div><br>

			</div>

		</div>
</body>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="../assets/js/main.js"></script>
<script type="text/javascript">
	const mediaQuery = window.matchMedia('(max-width: 1000px)')
	if (mediaQuery.matches) {
		$('.menu-link').on("click", function() {
			console.log('menu-link is clicked')
			document.getElementById('menu').style.width = '0';
			document.getElementById('content').style.marginLeft = '0';
			document.getElementById('main-content').style.opacity = '1';
			document.getElementById('main-content').style.pointerEvents = 'auto';
		});
	}
	// Fake file upload
	document.getElementById('fake-file-button-browse').addEventListener('click', function() {
		document.getElementById('files-input-upload').click();
	});

	document.getElementById('files-input-upload').addEventListener('change', function() {
		document.getElementById('fake-file-input-name').value = this.value;
		document.getElementById('fake-file-button-upload').removeAttribute('disabled');
	});
</script>

<script type="text/javascript">
	$(function() {
		$("#btnSearchnews").click(function() {
			$.ajax({
				url: "models/newsmodel/newssearch.php",
				type: "post",
				data: {
					newsall: $("#newsall").val()
				},
				success: function(data) {
					$("#list-datanews").html(data);
				}
			});
		});
		$("#searchformnews").on("keyup keypress", function(e) {
			var code = e.keycode || e.which;
			if (code == 13) {
				$("#btnSearchnews").click();
				return false;
			}
		});
	});
</script>
<script type="text/javascript">
	$(function() {
		$("#btnSearchproduct").click(function() {
			$.ajax({
				url: "models/productmodel/productsearch.php",
				type: "post",
				data: {
					productall: $("#productall").val()
				},
				success: function(data) {
					$("#list-dataproduct").html(data);
				}
			});
		});
		$("#searchformproduct").on("keyup keypress", function(e) {
			var code = e.keycode || e.which;
			if (code == 13) {
				$("#btnSearchproduct").click();
				return false;
			}
		});
	});
</script>

</html>