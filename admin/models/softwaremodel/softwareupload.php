<?php
$countfiles = count($_FILES['fileupload']['name']);
for ($i = 0; $i < $countfiles; $i++) {

    $date = date("Y-m-d H:i:s");
    $path = "../../../assets/software/";

    $name = $_FILES["fileupload"]["name"][$i];
    $tmp  = $_FILES["fileupload"]["tmp_name"][$i];

    if (strlen($name)) {
        move_uploaded_file($tmp, $path . $name);
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
}
