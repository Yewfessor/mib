<!DOCTYPE html>
<?php
include_once("models/accountmodel/checklogin.php");
date_default_timezone_set("Asia/Bangkok");
?>

<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Multi Innovation Broadcast</title>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;500;600;700;800&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>


<body>
	<header class="header">
		<div class="container">
			<nav class="nav">
				<a href="index.html" class="logo">
					<img src="./assets/images/Logo/mib-logo-icon.png" alt="">
				</a>
				<div class="hamburger-menu">
					<i class="fas fa-bars"></i>
					<i class="fas fa-times"></i>
				</div>
				<ul class="nav-list">
					<li class="nav-item">
						<a href="index.php" class="nav-link">admin</a>
					</li>
					<li class="nav-item">
						<a href="#hero" class="nav-link">Hero</a>
					</li>
					<li class="nav-item">
						<a href="#hero-under" class="nav-link">Hero Under</a>
					</li>
					<li class="nav-item">
						<a href="#youtube" class="nav-link">Youtube</a>
					</li>
					<li class="nav-item">
						<a href="#product" class="nav-link">Product</a>
					</li>
					<li class="nav-item">
						<a href="#news" class="nav-link">News</a>
					</li>
					<li class="nav-item">
						<a href="#software" class="nav-link">Software</a>
					</li>

					<li class="nav-item">
						<a href="models/accountmodel/logout.php" class="nav-link">Log out</a>
					</li>

				</ul>
			</nav>
		</div>
	</header>


	<main>
		<div class="product-hero">
			<div class="swiper-container hero-slide">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background: url(../assets/images/hero01.jpg);background-size: cover;background-position: center;">
					</div>
				</div>
			</div>
			<div class="heading-box">
				<h1 class="heading">MIB Controler</h1>
			</div>
		</div>
		<div id="hero">
			<h1>Hero</h1>
			<?php include("views/hero.php"); ?>
		</div>
		<div id="hero-under">
			<h1>Hero Under</h1>
			<?php include("views/herounder.php"); ?>
		</div>
		<div id="link">
			<h1>link</h1>
			<?php include("views/link.php"); ?>
		</div>
		<div id="product">
			<h1>Product</h1>
			<?php include("views/product.php"); ?>
		</div>


	</main>

</body>

</html>