<?php
ob_start();
session_start();
    if (isset($_POST['user_username'])) {
        include("../BaseModel.php");
        $user_username = $_POST['user_username'];
        $user_password = $_POST['user_password'];
        $sql = "SELECT * FROM tb_user Where user_username='".$user_username."' and user_password='".$user_password."'";
        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["user_username"] = $row["user_username"];
            Header("Location: ../../index.php");
        } else {
            session_destroy();  
            echo "<script>";
                echo "alert(\" ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง\");";
                echo "window.history.back()";
            echo "</script>";
        }
    } else {
        Header("Location: ../../login.php"); //user & password incorrect back to login again
        
    }
    ?>