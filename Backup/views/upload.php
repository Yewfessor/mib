<form method="post" name="form1" enctype="multipart/form-data">
    <input type="file" name="file" id="">
    <input type="submit" value="upload now" name="submit">
</form>

<?php
if ($_POST["submit"]) {

    set_time_limit(3000);

    $ftp_server = "182.50.151.92";
    $ftp_user_name = "ph17385860351";
    $ftp_user_pass = "Mib2017!";

    $destination_file   = $_FILES["file"]["name"];
    $source_file        = $_FILES["file"]["tmp_name"];
    $size_file          = $_FILES['file']['size'];

    $ftp_conn           = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
    $login_result       = ftp_login($ftp_conn, $ftp_user_name, $ftp_user_pass);
    ftp_chdir($ftp_conn, "httpdocs");

    ftp_pasv($ftp_conn, true);

    if ((!$ftp_conn) || (!$login_result)) {
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user $ftp_user_name";
    } else {
        echo "Connected to $ftp_server, for user $ftp_user_name<br/>";
    }

    $upload = ftp_put($ftp_conn, $destination_file, $source_file, FTP_BINARY);

    if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "FTP upload Success $destination_file";
    }

    ftp_close($ftp_conn);
}
?>