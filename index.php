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
                <a href="index.php" class="logo">
                    <img src="./assets/images/Logo/mib-logo-icon.png" alt="">
                </a>
                <div class="hamburger-menu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
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
        <div class="hero">
            <div class="swiper-container hero-slide">
                <div class="swiper-wrapper">
                    <?php
                    include("admin/models/BaseModel.php");
                    $sql = "SELECT * FROM tb_hero WHERE list_no ='1' ORDER BY adddate DESC";
                    $result = mysqli_query($connection, $sql);
                    $num = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="swiper-slide" style="background: url(./assets/images/hero/<?php echo $row["hero_images"]; ?>);background-size: cover;background-position: center;">
                        </div>
                    <?php
                        }
                    ?>
                    <?php if($num > 1){ ?>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    <?php } else { ?>
                        
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="underhero">
            <div class="swiper-container underhero-slide1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: url(./assets/images/slide_img1.jpg);background-size: cover;background-position: center;">
                    </div>
                    <div class="swiper-slide" style="background: url(./assets/images/slide_img2.jpg);background-size: cover;background-position: center;">
                    </div>
                    <div class="swiper-slide" style="background: url(./assets/images/slide_img3.jpg);background-size: cover;background-position: center;">
                    </div>
                </div>
            </div>
            <div class="swiper-container underhero-slide2vdo">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <video width="100%" height="100%" loop autoplay>
                            <source src="./banner.webm" type="video/webm">
                        </video>
                    </div>
                </div>
            </div>
            <div class="swiper-container underhero-slide3vdo">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?controls=0&autoplay=1&mute=1&amp;list=PLSpi5Z-cqKs27A8JMw66uEkmDsC339q7J" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Type Section -->
        <section class="product" id="product">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">Product</span>
                    <span class="sub-heading">check out our product</span>
                </h5>
                <div class="grid product-type-items">
                    <div class="grid-item product-type" onclick="window.location.href='product.php'">
                        <img src="https://videstream.com/wp-content/uploads/2020/05/kairos_platform.jpeg" alt="" class="product-type-image">
                        <h5 class="product-type-name">IT/IP Platform</h5>
                    </div>
                    <div class="grid-item product-type">
                        <img src="https://www.fullcompass.com/common/products/lgr/281819.jpg" alt="" class="product-type-image">
                        <h5 class="product-type-name">PTZ Camera Systems</h5>
                    </div>
                    <div class="grid-item product-type">
                        <img src="https://pro-av.panasonic.net/en/products/img/lineup/system_cameras/lineup_ak_uc4000.png" alt="" class="product-type-image">
                        <h5 class="product-type-name">System Cameras</h5>
                    </div>
                    <div class="grid-item product-type">
                        <img src="https://pro-av.panasonic.net/en/products/img/lineup/live_switchers/lineup_av_uhs500.png" alt="" class="product-type-image">
                        <h5 class="product-type-name">Live Switchers</h5>
                    </div>
                    <div class="grid-item product-type">
                        <img src="https://pro-av.panasonic.net/en/products/img/lineup/cinema_cameras/lineup_varicam_35.png" alt="" class="product-type-image">
                        <h5 class="product-type-name">Cinema Cameras</h5>
                    </div>
                    <div class="grid-item product-type">
                        <img src="https://pro-av.panasonic.net/en/products/img/lineup/professional_camera_recorders/lineup_ag_cx350.png" alt="" class="product-type-image">
                        <h5 class="product-type-name">Professional Camera Recorders</h5>
                    </div>
                    <div class="grid-item product-type">
                        <img src="https://pro-av.panasonic.net/en/products/img/accessories/cable.png" alt="" class="product-type-image">
                        <h5 class="product-type-name">Accessories</h5>
                    </div>
                </div>
            </div>


            <!-- Modal Product  -->
            <!-- <div class="product-modal">
                <div class="modal-header">
                    <div class="modal-title-box">
                        <h2 class="modal-title">Modal Title Here</h2>
                    </div>
                </div>
                <button>
                    <svg class="modal-close" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496.096 496.096"
                        style="enable-background:new 0 0 496.096 496.096;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M259.41,247.998L493.754,13.654c3.123-3.124,3.123-8.188,0-11.312c-3.124-3.123-8.188-3.123-11.312,0L248.098,236.686
			L13.754,2.342C10.576-0.727,5.512-0.639,2.442,2.539c-2.994,3.1-2.994,8.015,0,11.115l234.344,234.344L2.442,482.342
			c-3.178,3.07-3.266,8.134-0.196,11.312s8.134,3.266,11.312,0.196c0.067-0.064,0.132-0.13,0.196-0.196L248.098,259.31
			l234.344,234.344c3.178,3.07,8.242,2.982,11.312-0.196c2.995-3.1,2.995-8.016,0-11.116L259.41,247.998z" />
                            </g>
                    </svg>
                </button>

        

                <div class="modal-content">
                    <div class="product-item">
                        <img src="https://pro-av.panasonic.net/en/products/img/lineup/system_cameras/lineup_ak_uc4000.png" alt="">
                        <h5 class="product-name">Product Name</h5>
                        <p class="product-price">ราคา: <span>8,900 บาท</span></p>
                    </div>
                    <div class="product-item">
                        <img src="https://pro-av.panasonic.net/en/products/img/lineup/system_cameras/lineup_ak_uc4000.png" alt="">
                        <h5 class="product-name">Product Name</h5>
                        <p class="product-price">ราคา: <span>8,900 บาท</span></p>
                    </div>
                    <div class="product-item">
                        <img src="https://pro-av.panasonic.net/en/products/img/lineup/system_cameras/lineup_ak_uc4000.png" alt="">
                        <h5 class="product-name">Product Name</h5>
                        <p class="product-price">ราคา: <span>8,900 บาท</span></p>
                    </div>
                    <div class="product-item">
                        <img src="https://pro-av.panasonic.net/en/products/img/lineup/system_cameras/lineup_ak_uc4000.png" alt="">
                        <h5 class="product-name">Product Name</h5>
                        <p class="product-price">ราคา: <span>8,900 บาท</span></p>
                    </div>
                    <div class="product-item">
                        <img src="https://pro-av.panasonic.net/en/products/img/lineup/system_cameras/lineup_ak_uc4000.png" alt="">
                        <h5 class="product-name">Product Name</h5>
                        <p class="product-price">ราคา: <span>8,900 บาท</span></p>
                    </div>
                </div>
            </div> -->
            <!-- / Modal Product  -->

        </section>

        <section class="about" id="about">
            <div class="container">
                <div class="about-content">
                    <h5 class="business-name">Multi Innovation Broadcast</h5>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error est quasi esse porro magnam asperiores nisi nostrum at adipisci blanditiis.
                    </p>
                </div>
            </div>
        </section>

        <section class="news" id="news">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">What's New</span>
                    <span class="sub-heading">all news here</span>
                </h5>
                <div class="grid news">
                    <div class="grid-item news-card">
                        <div class="news-img">
                            <img src="./assets/images/slide_img7.jpg" alt="">
                        </div>
                        <div class="news-info">
                            <div class="news-date">
                                <span>Thursday</span>
                                <span>October 22 2019</span>
                            </div>
                            <h1 class="news-title">Title Here</h1>
                            <p class="news-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                    <div class="grid-item news-card">
                        <div class="news-img">
                            <img src="https://via.placeholder.com/1920x1080?text=News+Image" alt="">
                        </div>
                        <div class="news-info">
                            <div class="news-date">
                                <span>Thursday</span>
                                <span>October 22 2019</span>
                            </div>
                            <h1 class="news-title">Title Here</h1>
                            <p class="news-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                    <div class="grid-item news-card">
                        <div class="news-img">
                            <img src="https://via.placeholder.com/1920x1080?text=News+Image" alt="">
                        </div>
                        <div class="news-info">
                            <div class="news-date">
                                <span>Thursday</span>
                                <span>October 22 2019</span>
                            </div>
                            <h1 class="news-title">Title Here</h1>
                            <p class="news-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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