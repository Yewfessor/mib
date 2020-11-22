<?php
$path_basemodel = "../BaseModel.php";

if (isset($_GET['download_id'])) {
    $software_id = $_GET['download_id'];

    include $path_basemodel;
    $sql = "SELECT * FROM tb_software WHERE software_id=$software_id";
    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);
    $path_software  = "../../../assets/software/";
    $filepath = $row['software_file'];
    

    $filename = $filepath;
    $exp = explode('.', $filename);
    $filename_exp = $exp[count($exp) - 1];

    $titles_name = $filepath;
    $original_filename = "$path_software/$filepath";
    header("Content-Length: " . filesize($original_filename));
    header('Content-Disposition: attachment; filename="' . $titles_name . '"');
    readfile($original_filename);
}
?>