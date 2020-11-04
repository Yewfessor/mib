<?php

$date = date("Y-m-d H:i:s");
$time = date("dmyHis");

$path = "../../../assets/images/product/";
$tmp  = $_FILES["product_image"]["tmp_name"];
$name = $_FILES["product_image"]["name"];

if (strlen($name)) {


    if (!empty($name)){

        list($txt, $ext) = explode(".", $name);
        $new_file_name = uniqid($time) . "." . $ext;
        move_uploaded_file($tmp, $path . $new_file_name);
        
        include("BaseModel.php");
        $sql = "UPDATE tb_product SET
        product_image = '" . $_POST['product_image'] . "',
        product_name_en = '" . $_POST['product_name_en'] . "',
        product_description_en = '" . $_POST['product_description_en'] . "',
        product_detail_en = '" . $_POST['product_detail_en'] . "',
        product_price = '" . $_POST['product_price'] . "',
        product_type_id = '" . $_POST['product_type_id'] . "'
        WHERE product_id = '" . $_POST['product_id'] . "'";
    } else {

    }

    $result = mysqli_query($connection, $sql) or die("Error in query: $sql " . mysqli_error($connection));

    if ($result) {
        echo "<script type='text/javascript'>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=index.php'>";
    } else {
        echo "<script type='text/javascript'>alert('ไม่สามารถแก้ไขข้อมูลได้');window.history.go(-1);</script>";
    }
}
?>

if( ! empty($_FILES['strategy_file']['name']))
$updateSQL = sprintf("UPDATE strategy SET strategy_img=%s, strategy_cap=%s, strategy_file=%s, strategy_link=%s WHERE id=%s",
GetSQLValueString(Upload($_FILES['strategy_img']), "text"),
GetSQLValueString($_POST['strategy_cap'], "text"),
GetSQLValueString(Uploadfile($_FILES['strategy_file']), "text"),
GetSQLValueString($_POST['strategy_link'], "text"),
GetSQLValueString($_POST['id'], "int"));
} else {
$updateSQL = sprintf("UPDATE strategy SET strategy_img=%s, strategy_cap=%s, strategy_link=%s WHERE id=%s",
GetSQLValueString(Upload($_FILES['strategy_img']), "text"),
GetSQLValueString($_POST['strategy_cap'], "text"),
GetSQLValueString($_POST['strategy_link'], "text"),
GetSQLValueString($_POST['id'], "int"));
}