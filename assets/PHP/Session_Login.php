<?php
ob_start();
session_start();
    if (isset($_POST['account_username'])) {
        include("connection.php");
        $account_username = $_POST['account_username'];
        $account_password = $_POST['account_password'];
        $sql = "SELECT * FROM mib_account Where account_username='".$account_username."' and account_password='".$account_password."'";
        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION["account_id"] = $row["account_id"];
            $_SESSION["account_username"] = $row["account_username"];
            Header("Location: ../../admin.php");
 
        } else {
            session_destroy();  
            echo "<script>";
                echo "alert(\" ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง\");";
                echo "window.history.back()";
            echo "</script>";
        }
    } else {
        Header("Location: login.php"); //user & password incorrect back to login again
        
    }
    ob_end_flush();
    ?>