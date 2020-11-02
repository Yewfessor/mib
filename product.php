<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Innovation Broadcast</title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;500;600;700;800&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="./assets/css/styles.css">
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
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#product" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#news" class="nav-link">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Software</a>
                    </li>
                    <li class="nav-item">
                        <a href="#footer" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="product-hero">
            <div class="swiper-container hero-slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: url(./assets/images/hero01.jpg);background-size: cover;background-position: center;">
                    </div>
                </div>
            </div>
            <div class="heading-box">
                <h1 class="heading">IT/IP Platform</h1>
            </div>
        </div>

        <div class="product-items">
            <h5 class="product-subtype-heading">sub-type-heading</h5>
            <div class="grid">

                <?php
                include("admin/models/BaseModel.php");
                $sql = "SELECT * FROM tb_product LEFT JOIN tb_product_type ON tb_product.product_type_id = tb_product_type.product_type_id where tb_product.product_type_id = '1'";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>

                    <div class="grid-item product-item">
                        <div class="img-box">
                            <img src="./assets/images/Product/<?php echo $row["product_image"]; ?>" class="product-img" alt="">
                        </div>
                        <h5 class="product-name"><?php echo $row["product_name_en"]; ?></h5>
                        <span class="sub-product-name"><?php echo $row["product_description_en"]; ?></span>
                        <span class="details-product"><?php echo $row["product_detail_en"]; ?></span>
                        <p class="price">35,000 THB</p>
                        <div class="view-info">View Info</div>
                    </div>

                <?php } ?>

                <div class="grid-item product-item">
                    <div class="img-box">
                        <img src="./assets/images/Product/005.jpg" class="product-img" alt="">
                    </div>
                    <h5 class="product-name">God Camera</h5>
                    <span class="sub-product-name">L142H3</span>
                    <p class="price">35,000 THB</p>
                    <div class="view-info">View Info</div>
                </div>
                <div class="grid-item product-item">
                    <div class="img-box">
                        <img src="./assets/images/Product/001.jpg" class="product-img" alt="">
                    </div>
                    <h5 class="product-name">God Camera</h5>
                    <span class="sub-product-name">L142H3</span>
                    <p class="price">35,000 THB</p>
                    <div class="view-info">View Info</div>
                </div>
            </div>
        </div>


    </main>

    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-brand">
                    <a href="index.html" class="logo">
                        <img src="./assets/images/Logo/mib-logo-landscape-white.png" alt="" class="logo-image">
                    </a>
                    <div class="paragraph">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio quaerat voluptatum incidunt aperiam iusto! Commodi, corporis nesciunt. Repellendus, sed rem?
                    </div>
                </div>
                <div class="social-media-wrap">
                    <h4 class="footer-heading">Follow us</h4>
                    <div class="social-media">
                        <a href="#" class="sm-link"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-line"></i></a>
                        <a href="#" class="sm-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/modal.js"></script>
</body>

</html>