<?php
$product_id = $_GET['delete_id'];
$product_image = $_GET['delete_img'];

include("../BaseModel.php");
$sql="DELETE FROM tb_product WHERE product_id='$product_id'";
@unlink ("../../../assets/images/product/$product_image");
$result = mysqli_query($connection,$sql);

mysqli_close($connection);
if($result){
    echo"<script type='text/javascript'>alert('ลบข้อมูลสำเร็จ')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=../../index.php'>";
} else {
    echo"<script type='text/javascript'>alert('ลบข้อมูลไม่สำเร็จ');window.history.go(-1);</script>";
}
