<?php
//path
    $path_basemodel = "../BaseModel.php";
    $path_images    = "../../../assets/images/product/";

//name & date
    $date = date("Y-m-d H:i:s");
    $time = date("dmyHis");

//sql
    include $path_basemodel;
    $product_id             = $_POST['product_id'];
    $product_image          = $_POST['product_image'];
    $product_name_en        = $_POST['product_name_en'];
    $product_description_en = $_POST['product_description_en'];
    $product_detail_en      = $_POST['product_detail_en'];
    $product_price          = $_POST['product_price'];
    $product_type_id        = $_POST['product_type_id'];
    $product_line_up_id     = $_POST["product_line_up_id"];

//text '' "" :: 
    $product_name_en_str        = mysqli_real_escape_string($connection, $product_name_en);
    $product_description_en_str = mysqli_real_escape_string($connection, $product_description_en);
    $product_detail_en_str      = mysqli_real_escape_string($connection, $product_detail_en);

//image
    $tmp  = $_FILES["product_image_new"]["tmp_name"];
    $name = $_FILES["product_image_new"]["name"];

    if ($name !=''){
        @unlink ("../../../assets/images/product/$product_image");
        list($txt, $ext) = explode(".", $name);
        $new_file_name = uniqid($time) . "." . $ext;
        move_uploaded_file($tmp, $path_images . $new_file_name); 
    } else {
        $new_file_name = $product_image;
    }

    $sql = "UPDATE tb_product SET
            product_image = '" . $new_file_name . "',
            product_name_en = '" . $product_name_en_str . "',
            product_description_en = '" . $product_description_en_str . "',
            product_detail_en = '" . $product_detail_en_str . "',
            product_price = '" . $product_price . "',
            product_type_id = '" . $product_type_id . "',
            product_line_up_id = '" . $product_line_up_id . "',
            lastupdate = '" . $date . "'
            WHERE product_id = '" . $product_id . "'";

    $result = mysqli_query($connection, $sql) or die("Error in query: $sql " . mysqli_error($connection));
    mysqli_close($connection);

    if ($result) {
        echo "<script type='text/javascript'>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=../../index.php'>";
    } else {
        echo "<script type='text/javascript'>alert('ไม่สามารถแก้ไขข้อมูลได้');window.history.go(-1);</script>";
    }
