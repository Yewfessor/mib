<?php
$path_basemodel = "admin/models/BaseModel.php";
$product_type_id = $_GET["product_type_id"];
$product_linebar_id = $_GET["product_linebar_id"];

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
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#product" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#news" class="nav-link">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="software.php" class="nav-link">Software</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#footer" class="nav-link">Contact</a>
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
                <?php
                include  $path_basemodel;
                $sql_type = "SELECT * FROM tb_product_type where product_type_id = '" . $product_type_id . "' ";
                $result_type = mysqli_query($connection, $sql_type);
                while ($row_type = mysqli_fetch_array($result_type)) {
                    $product_type_name = $row_type["product_type_name"];
                ?>
                    <h1 class="heading"><?php echo $product_type_name; ?></h1>
                <?php
                }
                ?>
            </div>
        </div>

        <div class="product-content">
            <div class="catogory-container">
                <li class="catagory-item">
                    <?php
                    $sql_typebar = "SELECT * FROM tb_product_type ";
                    $result_typebar = mysqli_query($connection, $sql_typebar);
                    while ($row_typebar = mysqli_fetch_array($result_typebar)) {
                        $product_type_bar = $row_typebar["product_type_id"];
                    ?>
                        <a href="#/" class="btn-list"><?php echo $row_typebar["product_type_name"]; ?></a>
                            <ul class="catagory-item-sub">
                                <?php
                                $sql_linebar = "SELECT * FROM tb_product_line_up WHERE product_type_id='".$product_type_bar."'";
                                $result_linebar = mysqli_query($connection, $sql_linebar);
                                while ($row_linebar = mysqli_fetch_array($result_linebar)) {
                                    
                                ?>
                                    <li><a href="product.php?product_type_id=<?php echo $row_linebar["product_type_id"]; ?>&product_linebar_id=<?php echo  $row_linebar["product_line_up_id"]; ?>"><?php echo $row_linebar["product_line_up_name"]; ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                    <?php
                    }
                    ?>
                </li>
            </div>


            <div class="product-items">
                <?php
                include  $path_basemodel;
                $sql2 = "SELECT * FROM 
                        tb_product_line_up
                        LEFT JOIN tb_product_type 
                        ON tb_product_line_up.product_type_id = tb_product_type.product_type_id
                        where tb_product_line_up.product_type_id = '" . $product_type_id . "' AND tb_product_line_up.product_line_up_id = '" . $product_linebar_id . "'";
                $result2 = mysqli_query($connection, $sql2);
                while ($row2 = mysqli_fetch_array($result2)) {
                    $product_line_up_id = $row2["product_line_up_id"];
                    $product_line_up_name = $row2["product_line_up_name"];

                ?>

                    <h5 class="product-subtype-heading"><?php echo $product_line_up_name; ?></h5>

                    <?php }
        ?>
                    <div class="grid product-grid">
                        <?php
                        $sql = "SELECT * FROM 
                        tb_product 

                        LEFT JOIN tb_product_type 
                        ON tb_product.product_type_id = tb_product_type.product_type_id

                        LEFT JOIN tb_product_line_up 
                        ON tb_product.product_line_up_id = tb_product_line_up.product_line_up_id
                        WHERE tb_product.product_line_up_id = '" . $product_line_up_id . "' 
                        AND tb_product.product_type_id = '" . $product_type_id . "'
                        
                       
                        ";
                        $result = mysqli_query($connection, $sql);
                        $path = "assets/images/product/";
                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <div class="grid-item product-item">
                                <div class="img-box">
                                    <img src="<?php echo $path . $row["product_image"]; ?>" class="product-img" alt="">
                                </div>
                                <h5 class="product-name"><?php echo $row["product_name_en"]; ?></h5>
                                <span class="sub-product-name"><?php echo $row["product_description_en"]; ?></span>
                                <span class="price"><?php echo $row["product_price"]; ?> THB</span>
                                <div class="view-info">View Info</div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
            </div>
   


        </div>


    </main>

    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-brand">
                    <div class="logo-container">
                        <a href="index.html">
                            <img src="./assets/images/Logo/mib-logo-icon-white.png" alt="" class="logo-image">
                        </a>
                    </div>
                    <div class="paragraph">
                        Multi Innovation Broadcast (MIB.) provided support, service and supply the right products to the
                        television industry in the Thailand </div>
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
                        <a href="#/" class="sm-link"><i class="fab fa-instagram"></i></a>
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