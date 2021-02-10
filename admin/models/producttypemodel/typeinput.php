
<?php

include("../BaseModel.php");
$sql = "INSERT INTO tb_product_type
(
    product_type_name,
    list_no
) 
VALUES 
(
    '" . $_POST["product_type_name"] . "',
    '" . $_POST["list_no"] . "'
)";
$result = mysqli_query($connection, $sql) or die("error : " . mysqli_error($connection));
if ($result) {
    echo "<script type='text/javascript'>alert('บันทึกข้อมูลแล้ว')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=../../index.php'>";
} else {
    echo "<script type='text/javascript'>alert('ไม่สามารถบันทึกข้อมูลได้');window.history.go(-1);</script>";
}

?>