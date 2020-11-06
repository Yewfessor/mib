<?php

$date = date("Y-m-d H:i:s");
$time = date("dmyHis");

$path = "../../../assets/images/news/";
$tmp  = $_FILES["news_image"]["tmp_name"];
$name = $_FILES["news_image"]["name"];

if (strlen($name)) {

    if (!empty($name)){
        
        include("../BaseModel.php");
        $sql = "UPDATE tb_news SET
        news_name = '" . $_POST['news_name'] . "',
        news_description_th = '" . $_POST['news_description_th'] . "',
        news_detail_th = '" . $_POST['news_detail_th'] . "'
        WHERE news_id = '" . $_POST['news_id'] . "'";
        $result = mysqli_query($connection, $sql) or die("Error in query: $sql " . mysqli_error($connection));


    } else {
        list($txt, $ext) = explode(".", $name);
        $new_file_name = uniqid($time) . "." . $ext;
        move_uploaded_file($tmp, $path . $new_file_name);
        
        include("../BaseModel.php");
        $sql = "UPDATE tb_news SET
        news_image = '" . $_POST['news_image'] . "',
        news_name = '" . $_POST['news_name'] . "',
        news_description_th = '" . $_POST['news_description_th'] . "',
        news_detail_th = '" . $_POST['news_detail_th'] . "'
        WHERE news_id = '" . $_POST['news_id'] . "'";
        $result = mysqli_query($connection, $sql) or die("Error in query: $sql " . mysqli_error($connection));

    }

    if ($result) {
        echo "<script type='text/javascript'>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=index.php'>";
    } else {
        echo "<script type='text/javascript'>alert('ไม่สามารถแก้ไขข้อมูลได้');window.history.go(-1);</script>";
    }
}
