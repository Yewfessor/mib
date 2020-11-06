
<?php
$date = date("Y-m-d H:i:s");
$time = date("dmyHis");

$path = "../../../assets/images/news/";
$tmp  = $_FILES["news_image"]["tmp_name"];
$name = $_FILES["news_image"]["name"];

if (strlen($name)) {

    list($txt, $ext) = explode(".", $name);
    $new_file_name = uniqid($time) . "." . $ext;
    move_uploaded_file($tmp, $path . $new_file_name);
    include("../BaseModel.php");
    $sql = "INSERT INTO tb_news
    (
        news_image,
        news_name,
        news_description_th,
        news_detail_th,
        adddate
    ) 
    VALUES 
    (
        '" . $new_file_name . "',
        '" . $_POST["news_name"] . "',
        '" . $_POST["news_description_th"] . "',
        '" . $_POST["news_detail_th"] . "',
        '" . $date . "'
    )";
    $result = mysqli_query($connection, $sql) or die("error : " . mysqli_error($connection));
    if ($result) {
        echo "<script type='text/javascript'>alert('บันทึกข้อมูลแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=../../index.php'>";
    } else {
        echo "<script type='text/javascript'>alert('ไม่สามารถบันทึกข้อมูลได้');window.history.go(-1);</script>";
    }
}

?>