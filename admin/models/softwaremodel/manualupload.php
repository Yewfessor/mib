<!--Show On Index-->
<?php
include("../BaseModel.php");
$date = date("Y-m-d H:i:s");

$path  = "../../../assets/software/";
$tmp  = $_FILES["manualupload"]["tmp_name"];
$name = $_FILES["manualupload"]["name"];

$software_id   = $_POST['software_id'];

// if (strlen($name)) {
        move_uploaded_file($tmp, $path . $name);

        $sql = "INSERT INTO tb_software WHERE software_id='".$software_id."'
        (
            software_manual
        ) 
        VALUES 
        (
            '" . $name . "'
        )";
    $result = mysqli_query($connection, $sql) or die("error : " . mysqli_error($connection));

    if ($result) {
        echo "<script type='text/javascript'>alert('บันทึกข้อมูลแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=../../index.php'>";
    } else {
        echo "<script type='text/javascript'>alert('ไม่สามารถบันทึกข้อมูลได้');window.history.go(-1);</script>";
    }

//}
?>