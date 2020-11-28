<?php
//get
$news_id = $_GET['news_id'];

//date
function changeDate($date)
{
    $get_date = explode("-", $date);
    $month = array("01" => "January", "02" => "February", "03" => "March", "04" => "April", "05" => "May", "06" => "June", "07" => "July", "08" => "August", "09" => "September", "10" => "October", "11" => "November", "12" => "December");
    $get_month = $get_date["1"];
    $year = $get_date["0"];
    return $get_date["2"] . " " . $month[$get_month] . " " . $year;
}
function dateTime($date_time)
{
    $get_date_time = explode(' ', $date_time);
    $date = changeDate($get_date_time['0']);
    $time = substr($get_date_time['1'], 0, -3);
    return $date . " | " . $time;
}

//path
$path_basemodel     = "admin/models/BaseModel.php";
$path_images        = "assets/images/news/";

include $path_basemodel;
$sql    = "SELECT * FROM tb_news WHERE news_id = '" . $news_id . "'";
$result = mysqli_query($connection, $sql);
$row    = mysqli_fetch_assoc($result);

//row
$news_id                = $row["news_id"];
$news_image             = $row["news_image"];
$news_name              = $row["news_name"];
$news_detail_th         = $row["news_detail_th"];
$news_lastupdate        = dateTime($row["lastupdate"]);


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

    <div class="news-container">
        <div class="news-content">
            <h1 class="news-heading"><?php echo $news_name; ?></h1>
            <span class="news-date"><?php echo $news_lastupdate; ?></span>
            <div class="news-more">
                <img src="<?php echo $path_images . $news_image; ?>" alt="" class="news-img">
                <p class="news-text"><?php echo $news_detail_th; ?></p>
            </div>
            <div class="news-more">
                <h3 class="news-more-heading">อ่านข่าวอื่นๆ</h3>
                <ul class="news-more-lists">
                    <?php
                    $sql_more = "SELECT * FROM tb_news ORDER BY lastupdate DESC LIMIT 3";
                    $result_more = mysqli_query($connection, $sql_more);
                    while ($row_more = mysqli_fetch_array($result_more)) {
                    ?>
                        <li><a href="news.php<?php echo "?news_id=" . $row_more["news_id"]; ?>"><?php echo $row_more["news_name"]; ?></a></li>
                    <?php
                    }
                    mysqli_close($connection);
                    ?>
                </ul>
            </div>
        </div>
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