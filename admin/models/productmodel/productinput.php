<?php

include("../BaseModel.php");

$date = date("Y-m-d H:i:s");
$time = date("dmyHis");

$path = "../../../assets/images/product/";
$tmp  = $_FILES["product_image"]["tmp_name"];
$name = $_FILES["product_image"]["name"];

$product_name_en = $_POST['product_name_en'];
$product_description_en = $_POST['product_description_en'];
$product_detail_en = $_POST['product_detail_en'];
$product_price = $_POST['product_price'];
$product_type_id = $_POST['product_type_id'];
$product_line_up_id = $_POST["product_line_up_id"];

$product_name_en_str = mysqli_real_escape_string($connection, $product_name_en);
$product_description_en_str = mysqli_real_escape_string($connection, $product_description_en);
$product_detail_en_str = mysqli_real_escape_string($connection, $product_detail_en);


    list($txt, $ext) = explode(".", $name);
    $new_file_name = uniqid($time) . "." . $ext;
    move_uploaded_file($tmp, $path . $new_file_name);

    $sql = "INSERT INTO tb_product 
    (
        product_image,
        product_name_en,
        product_description_en,
        product_detail_en,
        product_price,
        product_type_id,
        product_line_up_id,
        adddate,
        lastupdate
    ) 
    VALUES 
    (
        '" . $new_file_name . "',
        '" . $product_name_en_str . "',
        '" . $product_description_en_str . "',
        '" . $product_detail_en_str . "',
        '" . $product_price . "',
        '" . $product_type_id . "',
        '" . $product_line_up_id . "',
        '" . $date . "',
        '" . $date . "'
    )";
    $result = mysqli_query($connection, $sql) or die("error : " . mysqli_error($connection));
    
    if ($result) {
        echo "<script type='text/javascript'>alert('บันทึกข้อมูลแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=../../index.php'>";
    } else {
        echo "<script type='text/javascript'>alert('ไม่สามารถบันทึกข้อมูลได้');window.history.go(-1);</script>";
    }

?>