<?php
//get
$product_id = $_GET["product_id"];

//path
$path_basemodel = "admin/models/BaseModel.php";
$path = "assets/images/product/";

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
    return $date;
}
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
    <div class="info-container">

        <div class="info-content">
            <?php
            include $path_basemodel;
            $sql = "SELECT * FROM tb_product WHERE product_id = '" . $product_id . "'";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="info-name"><?php echo $row["product_name_en"]; ?></div>
                <div class="info-box">
                    <div class="info-img-container">
                        <img src="<?php echo $path . $row["product_image"]; ?>" alt="">
                    </div>
                    <div class="info-detail">
                        <table class="info-detail-table">
                            <tr>
                                <td>หมวดหมู่</td>
                                <td><?php echo $row["product_description_en"]; ?></td>
                            </tr>
                            <tr>
                                <td>ราคา</td>
                                <td><span class="info-price"><?php echo number_format($row["product_price"]); ?></span> บาท</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="breakline"></td>
                            </tr>
                            <tr>
                                <td>Vat</td>
                                <td>ราคาสินค้ายังไม่รวมภาษีมูลค่าเพิ่ม 7%</td>
                            </tr>
                            <tr>
                                <td>สถานะสินค้า</td>
                                <?php if ($row["list_no"] == 0) {
                                ?>
                                    <td>พร้อมส่ง</td>
                                <?php
                                } elseif ($row["list_no"] == 1) {
                                ?>
                                    <td>สินค้าหมด</td>
                                <?php
                                }
                                ?>


                            </tr>
                            <tr>
                                <td>ลงสินค้า</td>
                                <td><?php echo dateTime($row["adddate"]); ?></td>
                            </tr>
                            <tr>
                                <td>แก้ไขสินค้า</td>
                                <td><?php echo dateTime($row["lastupdate"]); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="#payment"><button>สนใจสั่งซื้อ</button></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- [END] INFO BOX -->


                <div class="full-detail-container">
                    <div class="full-detail-heading">รายละเอียดสินค้า</div>
                    <p class="full-detail-text ">
                        <div class="info-img-container"><?php echo $row["product_detail_en"]; ?></div>
                    </p>
                </div>
                <!-- [END] full-detail -->

            <?php
            }
            ?>


            <div id="payment" class="payment-container" >
                <div class="payment-heading">วิธีการชำระเงิน</div>
                <div class="payment-detail" style="text-align: center;">
                    <p>ชำระผ่านธนาคาร</p>
                    <img src="https://upload.wikimedia.org/wikipedia/th/thumb/4/4a/Logo_GSB_Thailand.svg/800px-Logo_GSB_Thailand.svg.png" alt="">
                    <p> ธนาคารออมสิน<br>
                        1.กรุณาสั่งจ่ายเช็คขีดคร่อมในนาม บริษัท มัลติ อินโนเวชั่น บรอดคาสต์ จำกัด<br>
                        2.กรณีโอนเงินให้โอนเข้าบัญชี บริษัท มัลติ อินโนเวชั่น บรอดคาสต์ จำกัด ธนาคารออมสิน<br>
                        สาขา รามคำแหง ภายใน ม.รามคำแหง เลขที่ 000 000 665 117<br>
                        ติดต่อโทร: 099-876-5432
                    </p>
                </div>
            </div>

        </div>

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
                        <a href="#" class="sm-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>