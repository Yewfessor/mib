<!--Show On Index-->
<?php
    $path_basemodel = "../BaseModel.php";

if (isset($_GET['download_id'])) {
    $software_id = $_GET['download_id'];
    $path_software  = "../../../assets/software/";

    include $path_basemodel;
    $sql = "SELECT * FROM tb_software WHERE software_id=$software_id";
    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);
    $filepath = $path_software . $row['software_file'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $row['software_file']));
        readfile('uploads/' . $row['software_file']);
        exit;
    }
}
?>