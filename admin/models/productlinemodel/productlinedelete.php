<?php
$product_line_id = $_GET['delete_id'];

include("../BaseModel.php");
$sql="DELETE FROM tb_product_line_up WHERE product_line_up_id='$product_line_id'";
$result = mysqli_query($connection,$sql);

mysqli_close($connection);
if($result){
    echo"<script type='text/javascript'>alert('ลบข้อมูลสำเร็จ')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=../../index.php'>";
} else {
    echo"<script type='text/javascript'>alert('ลบข้อมูลไม่สำเร็จ');window.history.go(-1);</script>";
}
