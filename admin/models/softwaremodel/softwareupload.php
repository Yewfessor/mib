<!--Show On Index-->
<?php
$path_basemodel = "../BaseModel.php";
$path_software  = "../../../assets/software/";

$date = date("Y-m-d H:i:s");
/*
ini_set('upload_max_filesize', '16G');
ini_set('post_max_size', '16G');
ini_set('max_input_time', 3600);
ini_set('max_execution_time', 3600);
*/

$name = $_FILES["fileupload"]["name"];
$tmp  = $_FILES["fileupload"]["tmp_name"];

if (strlen($name)) {
    move_uploaded_file($tmp, $path_software . $name);
    include("../BaseModel.php");
    $sql = "INSERT INTO tb_software 
        (
            software_name,
            software_file,
            software_type_id,
            product_type_id,
            adddate
        ) 
        VALUES 
        (
            '" . $_POST["software_name"] . "',
            '" . $name . "',
            '" . $_POST["software_type_id"] . "',
            '" . $_POST["product_type_id"] . "',
            '" . $date . "'
        )";
    $result = mysqli_query($connection, $sql);
    mysqli_close($connection);
    Header("Location: ../../index.php");
}
mysqli_close($connection);
