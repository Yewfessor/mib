<?php
//path
    $path_basemodel = "../BaseModel.php";
    $path_images    = "../../../assets/images/news/";

//name & date
    $date = date("Y-m-d H:i:s");
    $time = date("dmyHis");

//sql
    include $path_basemodel;
    $news_id                = $_POST['news_id'];
    $news_image             = $_POST['news_image'];
    $news_name              = $_POST['news_name'];
    $news_detail_th         = $_POST['news_detail_th'];

//text '' "" :: 
    $news_name_str          = mysqli_real_escape_string($connection, $news_name);
    $news_detail_th_str     = mysqli_real_escape_string($connection, $news_detail_th);

//images
    $tmp  = $_FILES["news_image_new"]["tmp_name"];
    $name = $_FILES["news_image_new"]["name"];


    if ($name !=''){
        @unlink ("../../../assets/images/news/$news_image");
        list($txt, $ext) = explode(".", $name);
        $new_file_name = uniqid($time) . "." . $ext;
        move_uploaded_file($tmp, $path_images . $new_file_name);
    } else {
        $new_file_name = $news_image;
    }

    $sql = "UPDATE tb_news SET
            news_image = '" . $new_file_name . "',
            news_name = '" . $news_name_str . "',
            news_detail_th = '" . $news_detail_th_str . "',
            lastupdate = '" . $date . "'
            WHERE news_id = '" . $news_id . "'";

    $result = mysqli_query($connection, $sql) or die("Error in query: $sql " . mysqli_error($connection));
    mysqli_close($connection);

    if ($result) {
        echo "<script type='text/javascript'>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=../../index.php'>";
    } else {
        echo "<script type='text/javascript'>alert('ไม่สามารถแก้ไขข้อมูลได้');window.history.go(-1);</script>";
    }

