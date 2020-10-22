<?php
session_start();
include("models/BaseModel.php");
if (isset($_SESSION['user_username']) == false) 
{
    echo "<script type = 'text/javascript'>";
    echo "window.location = 'login.php';";
    echo "</script>";
}
?>