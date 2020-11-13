<?php
//path
$path_basemodel = "admin/models/BaseModel.php";
$path_images    = "assets/images/news/";

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
                        <a href="software.html" class="nav-link">Software</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#footer" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="news-all-hero" style="background: url(./assets/images/slide_img1.jpg);background-size: cover;background-position: center;">
    </div>


    <div class="news-all-content">
        <h1 class="news-all-heading">All News</h1>

        <?php
            include $path_basemodel;
            $sql = "SELECT DISTINCT lastupdate FROM tb_news";
            $result_y = mysqli_query($connection, $sql);
            while ($row_y = mysqli_fetch_array($result)) {
                $ddate = $row_y["lastupdate"];
                list($y, $m, $d) = explode('-', $ddate);
        ?>

        <table class="news-all-table">
            <tr>
                <th colspan="2"><?php echo $ddate; ?></th>
            </tr>
            <?php
                $sql = "SELECT * FROM tb_news ORDER BY adddate DESC";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo dateTime($row["adddate"]); ?></td>
                <td><a href="news.php<?php echo "?news_id=" . $row["news_id"]; ?>"><?php echo $row["news_name"]; ?></a></td>
            </tr>
            <?php 
                }
            }
                mysqli_close($connection);
            ?>
            <tr>
                <th colspan="2">2019</th>
            </tr>
            <tr>
                <td>October 30, 2019</td>
                <td><a href="#">Live Switcher AV-UHS500 Product Information was updated.</a></td>
            </tr>
            <tr>
                <td>October 30, 2019</td>
                <td><a href="#">Firmware for the Live Switcher AV-UHS500 was updated to ver. 1.20.</a></td>
            </tr>
            <tr>
                <td>October 29, 2019</td>
                <td><a href="#">The P2 Viewer Plus software was updated to Ver.2.3.29.</a></td>
            </tr>
  
        </table>
    </div>










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