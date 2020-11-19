<?php
include("../BaseModel.php");
$product_type_id = $_GET['delete_id'];

$sql="DELETE FROM tb_product_type WHERE product_type_id='$product_type_id'";
$result = mysqli_query($connection,$sql);

mysqli_close($connection);
if($result){
    echo"<script type='text/javascript'>alert('ลบข้อมูลสำเร็จ')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=../../index.php'>";
} else {
    echo"<script type='text/javascript'>alert('ลบข้อมูลไม่สำเร็จ');window.history.go(-1);</script>";
}
