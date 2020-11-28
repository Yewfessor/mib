<!--Show On Index-->
<?php
$path_basemodel = "admin/models/BaseModel.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Innovation Broadcast</title>
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
    <div class="software-hero" >
        <div class="swiper-container hero-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background: url(./assets/images/banner/server.jpg);background-size: cover;background-position: center;">
                </div>
            </div>
        </div>
    </div>
    <div class="software-content" >
        <h1 class="software-heading">Software Download</h1>
        <?php
        include $path_basemodel;
        $sql2 = "SELECT DISTINCT product_type_name,tb_software.product_type_id  FROM 
        tb_software 
        LEFT JOIN tb_product_type 
        ON tb_software.product_type_id = tb_product_type.product_type_id 
        LEFT JOIN tb_software_type
        ON tb_software.software_type_id = tb_software_type.software_type_id";
        $result2 = mysqli_query($connection, $sql2);
        while ($row2 = mysqli_fetch_array($result2)) {
        $product_type_id = $row2["product_type_id"];
        ?>
            <div class="software-container">
                <h3 class="software-product-heading">For <?php echo $row2["product_type_name"]; ?></h3>
                <table class="software-table">
                    <thead>
                        <tr>
                            <th>Software</th>
                            <th>Type</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM 
                        tb_software 
                        LEFT JOIN tb_product_type 
                        ON tb_software.product_type_id = tb_product_type.product_type_id 
                        LEFT JOIN tb_software_type
                        ON tb_software.software_type_id = tb_software_type.software_type_id
                        WHERE tb_software.product_type_id = '" . $product_type_id . "' 
                        ";
                        $result = mysqli_query($connection, $sql);
                        $numrow = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["software_name"]; ?></td>
                                <td><?php echo $row["software_type_name"]; ?></td>
                                <td><a href="admin/models/softwaremodel/softwaredownload.php?download_id=<?php echo $row["software_id"]; ?>" class="btn-download"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        <?php
        }
        mysqli_close($connection);
        ?>
    </div>


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