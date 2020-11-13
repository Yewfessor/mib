<?php
//get
$news_id = $_GET['edit_id'];

//path
$path_basemodel     = "../models/BaseModel.php";
$path_edit          = "../models/newsmodel/newsedit.php";
$path_images        = "../../assets/images/news/";

//sql
include $path_basemodel;
$sql    = "SELECT * FROM tb_news WHERE news_id = '" . $news_id . "'";
$result = mysqli_query($connection, $sql);
$row    = mysqli_fetch_assoc($result);

//row
$news_id                = $row["news_id"];
$news_image             = $row["news_image"];
$news_name              = $row["news_name"];
$news_detail_th         = $row["news_detail_th"];
?>

<form action="<?php echo $path_edit; ?>" id="newsedit" enctype="multipart/form-data" name="newsedit" method="post">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr bgcolor="#FFFFFF">
            <td>Image</td>
            <td>
                <img width="200" src="<?php echo $path_images . $news_image; ?>"><br>
                <input type="file" name="news_image_new" id="news_image_new" value="">
                
                <!-- hidden -->
                <input type="text" name="news_id" id="news_id" value="<?php echo $news_id; ?>" hidden>
                <input type="text" name="news_image" id="news_image" value="<?php echo $news_image; ?>" hidden>
            </td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Topic</td>
            <td><input type="text" name="news_name" id="news_name" value="<?php echo $news_name; ?>" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Detail</td>
            <td><textarea name="news_detail_th" id="news_detail_th"><?php echo $news_detail_th; ?></textarea></td>
        </tr>
        <tr align="right" bgcolor="#FFFFFF">
            <td colspan="2"><input type="button" onclick="history.back();" name="newssubmit" value="Cancel"> <input type="submit" name="newssubmit" value="Done"></td>
        </tr>
    </table>
</form>