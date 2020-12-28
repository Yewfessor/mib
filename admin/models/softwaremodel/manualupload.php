<!--Show On Index-->
<?php
include("../BaseModel.php");
$date = date("Y-m-d H:i:s");

$path  = "../../../assets/manual/";
$tmp  = $_FILES["manualupload"]["tmp_name"];
$name = $_FILES["manualupload"]["name"];

$software_id   = $_POST["softwareid"];

// if (strlen($name)) {
        move_uploaded_file($tmp, $path . $name);

        $sql = "UPDATE tb_software SET
        software_manual = '" . $name . "'
        WHERE software_id = '" . $software_id . "'";
        $result = mysqli_query($connection, $sql) or die("error : " . mysqli_error($connection));

        if ($result) {
            echo "<script type='text/javascript'>alert('บันทึกข้อมูลแล้ว')</script>";
            echo "<meta http-equiv ='refresh'content='0;URL=../../index.php'>";
        } else {
            echo "<script type='text/javascript'>alert('ไม่สามารถบันทึกข้อมูลได้');window.history.go(-1);</script>";
        }

//}
?>