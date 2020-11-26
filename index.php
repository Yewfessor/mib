<?php

//path
$path_basemodel = "admin/models/BaseModel.php";
$path = "assets/images/product/";


function changeDate($date)
{
    $get_date = explode("-", $date);
    $month = array("01" => "ม.ค.", "02" => "ก.พ", "03" => "มี.ค.", "04" => "เม.ย.", "05" => "พ.ค.", "06" => "มิ.ย.", "07" => "ก.ค.", "08" => "ส.ค.", "09" => "ก.ย.", "10" => "ต.ค.", "11" => "พ.ย.", "12" => "ธ.ค.");
    $get_month = $get_date["1"];
    $year = $get_date["0"] + 543;
    return $get_date["2"] . " " . $month[$get_month] . " " . $year;
}
function dateTime($date_time)
{
    $get_date_time = explode(' ', $date_time);
    $date = changeDate($get_date_time['0']);
    $time = substr($get_date_time['1'], 0, -3);
    return $date . " เวลา " . $time;
}
?>
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
                        <a href="software.php" class="nav-link">Software</a>
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
                    include $path_basemodel;
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

                    <?php if ($num > 1) { ?>
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
                    <?php
                    include("admin/models/BaseModel.php");
                    $sql = "SELECT * FROM tb_hero WHERE list_no_2 ='1' ORDER BY adddate DESC";
                    $result = mysqli_query($connection, $sql);
                    $num = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="swiper-slide" style="background: url(./assets/images/hero/<?php echo $row["hero_images"]; ?>);background-size: cover;background-position: center;">
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="swiper-container underhero-slide2vdo">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                        include $path_basemodel;
                        $sql = "SELECT * FROM tb_link WHERE list_no_2 ='1' ORDER BY adddate DESC";
                        $result = mysqli_query($connection, $sql);
                        $num = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <iframe width="100%" height="100%" src="<?php echo $row["link_name"]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="swiper-container underhero-slide3vdo">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                        include $path_basemodel;
                        $sql = "SELECT * FROM tb_link WHERE list_no ='1' ORDER BY adddate DESC";
                        $result = mysqli_query($connection, $sql);
                        $num = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <iframe width="100%" height="100%" src="<?php echo $row["link_name"]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php
                        }
                        ?>
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
                <div class="grid grid-item">
                    <div class="grid-product-items">
                        <?php
                        include $path_basemodel;
                        $sql_pnew = "SELECT * FROM tb_product ORDER BY lastupdate DESC limit 6";
                        $result_pnew = mysqli_query($connection, $sql_pnew);
                        while ($row_pnew = mysqli_fetch_array($result_pnew)) { ?>
                            <div class="product-item">
                                <div class="img-box">
                                    <img src="<?php echo $path . $row_pnew["product_image"]; ?>" class="product-img" alt="">
                                </div>
                                <h5 class="product-name"><?php echo $row_pnew["product_name_en"]; ?></h5>
                                <span class="sub-product-name"><?php echo $row_pnew["product_description_en"]; ?></span>
                                <span class="price"><?php echo number_format($row_pnew["product_price"]); ?> THB</span>
                                <a href="productinfo.php?product_id=<?php echo $row_pnew["product_id"]; ?>">
                                    <div class="view-info">View Info</div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </div>

            <div class="read-all-container">
                <a href="product.php?product_type_id=0&product_linebar_id=0" class="read-all-text">
                    See more products <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>

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
            <div class="container news-container">
                <h5 class="section-head">
                    <span class="heading">What's New</span>
                    <span class="sub-heading">all news here</span>
                </h5>
                    <div class="grid news">
                        <?php
                        $path_imagenews = "assets/images/news/";
                        include("admin/models/BaseModel.php");
                        $sql = "SELECT news_id, CONCAT(SUBSTRING(news_name, 1, 30),'') as news_name, news_image, news_description_th, CONCAT(SUBSTRING(news_detail_th, 1, 70),' . . .') as news_detail_th, adddate 
                    FROM tb_news ORDER BY adddate DESC LIMIT 3";
                        $result = mysqli_query($connection, $sql);
                        $num = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <div class="grid-item news-card">
                                <div class="news-card-img">
                                    <img src="<?php echo $path_imagenews . $row["news_image"]; ?>" alt="">
                                </div>
                                <div class="news-card-info">
                                    <div class="news-card-date">
                                        <span><?php echo dateTime($row["adddate"]); ?></span>
                                    </div>
                                    <!-- หัวข้อข่าวควรไม่เกิน 30 ตัวอักษร จะได้ 1 บรรทัดสวยๆพอดี -->
                                    <h1 class="news-card-title"><?php echo $row["news_name"]; ?></h1>
                                    <p class="news-card-text">
                                        <?php echo $row["news_detail_th"]; ?>
                                    </p>
                                    <a href="news.php<?php echo "?news_id=" . $row["news_id"]; ?>" class="read-more">Read more</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- <div class="grid-item news-card">
                        <div class="news-card-img">
                            <img src="https://via.placeholder.com/1920x1080?text=News+Image" alt="">
                        </div>
                        <div class="news-card-info">
                            <div class="news-card-date">
                                <span>Thursday</span>
                                <span>October 22 2019</span>
                            </div>
                            <h1 class="news-card-title">Title Here</h1>
                            <p class="news-card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div> -->
                    </div>
                <div class="read-all-container">
                    <a href="newsAll.php">
                        <h1 class="read-all-text">See more news <i class="fa fa-arrow-right" aria-hidden="true"></i></h1>
                    </a>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-brand">
                    <div class="logo-container">
                        <a href="index.php">
                            <img src="./assets/images/Logo/mib-logo-icon-white.png" alt="" class="logo-image">
                        </a>
                    </div>
                    <div class="paragraph">
                        Multi Innovation Broadcast (MIB.) provided support, service and supply the right products to the television industry in the Thailand </div>
                </div>
                <div class="social-media-wrap">
                    <h4 class="footer-heading">Contact Us</h4>
                    <div class="contact-detail">
                        <p class="contact-email"><i class="fa fa-envelope" aria-hidden="true"></i>online@mib-thailand.com</p>
                        <p class="contact-phone"><i class="fa fa-phone" aria-hidden="true"></i>099-8765432</p>
                    </div>
                    <div class="social-media">
                        <a href="https://www.facebook.com/MultiInnovationBroadcast/" class="sm-link" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://line.me/R/ti/p/%40zwm2906e" class="sm-link" target="_blank"><i class="fab fa-line"></i></a>
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