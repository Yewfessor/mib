<?php
$product_id =$_GET['delete_id'];


$sql1 = "SELECT * FROM tb_product WHERE product_image";
$result1 = mysqli_query($connection, $sql1);

while($row = mysqli_fetch_array($result1)){
	 @unlink ("../../../assets/images/hero/$row[product_image]");
}

include("../BaseModel.php");
//$sql="DELETE FROM tb_product WHERE product_id='$product_id'";
$result = mysqli_query($connection,$sql);

mysqli_close($connection);
if($result){
    echo"<script type='text/javascript'>alert('ลบข้อมูลสำเร็จ')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL==../../index.php'>";
} else {
    echo"<script type='text/javascript'>alert('ลบข้อมูลไม่สำเร็จ');window.history.go(-1);</script>";
}  
?>