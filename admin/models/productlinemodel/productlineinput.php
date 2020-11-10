
<?php

    include("../BaseModel.php");
    $sql = "INSERT INTO tb_product_line_up
    (
        product_line_up_name,
        product_type_id
    ) 
    VALUES 
    (
        '" . $_POST["product_line_up_name"] . "',
        '" . $_POST["product_type_id"] . "'
    )";
    $result = mysqli_query($connection, $sql) or die("error : " . mysqli_error($connection));
    if ($result) {
        echo "<script type='text/javascript'>alert('บันทึกข้อมูลแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=../../index.php'>";
    } else {
        echo "<script type='text/javascript'>alert('ไม่สามารถบันทึกข้อมูลได้');window.history.go(-1);</script>";
    }

?>