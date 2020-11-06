<?php
$news_id = $_GET['edit_id'];
$path_newsmodel = "../models/newsmodel/";

include("../models/BaseModel.php");
$sql = "SELECT * FROM tb_news WHERE news_id='" . $news_id . "'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

?>

<form action="<?php echo $path_newsmodel; ?>newsedit.php" id="newsedit" enctype="multipart/form-data" name="newsedit" method="post">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr bgcolor="#FFFFFF">
            <td>News Image : </td>
            <td>
                <img width="200" src="../../assets/images/news/<?php echo "$row[news_image]"; ?>"><br>
                <input type="file" name="news_image" id="news_image" value="<?php echo "$row[news_image]"; ?>">
            </td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>News Topic : </td>
            <td><input type="text" name="news_name" id="news_name" value="<?php echo "$row[news_name]"; ?>" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>News Description : </td>
            <td><input type="text" name="news_description_th" id="news_description_th" value="<?php echo "$row[news_description_th]"; ?>" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>News Detail : </td>
            <td><textarea name="news_detail_th" id="news_detail_th" required><?php echo "$row[news_detail_th]"; ?></textarea></td>
        </tr>
        <tr align="right" bgcolor="#FFFFFF">
            <td></td>
            <td><input type="submit" name="newssubmit" value="Save"> <input type="button" onclick="history.back();" name="newssubmit" value="Cancel"></td>
           

        </tr>
    </table>         
</form>