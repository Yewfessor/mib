<?php
//path
$path_basemodel = "models/BaseModel.php";
$path_input     = "models/newsmodel/newsinput.php";
$path_delete    = "models/newsmodel/newsdelete.php";
$path_edit      = "views/newsedit.php";
$path_images    = "../assets/images/news/";
?>

<form action="<?php echo $path_input; ?>" id="productinput" enctype="multipart/form-data" name="newsinput" method="post">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr bgcolor="#FFFFFF">
            <td>Image</td>
            <td><input type="file" name="news_image" id="news_image" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Topic</td>
            <td><input type="text" name="news_name" id="news_name" value="" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Detail</td>
            <td><textarea name="news_detail_th" id="news_detail_th"></textarea></td>
        </tr>
        <tr align="right" bgcolor="#FFFFFF">
            <td colspan="2"><input type="submit" name="newssubmit" value="Upload"></td>
        </tr>
    </table>
</form>

<br>

<form name="newssearch" method="get" action="">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr align="center" bgcolor="#FFFFFF">
            <th> Search
                <input name="newsall" id="newsall" type="text" value="">
                <input type="submit" value="Search">
                <a href="index.php">Refresh</a>
            </th>
        </tr>
    </table>
</form>

<?php
if (isset($_GET["newsall"]) != "") {
    $i = 1;
    include $path_basemodel;
    $sql = "SELECT * FROM tb_news WHERE news_id = '" . $_GET["newsall"] . "' ";
    $result = mysqli_query($connection, $sql);
?>
    <div style=" width:550px; height:425px; overflow: auto;">
        <form>
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr align="center" bgcolor="#FFFFFF">
                    <td>ID</td>
                    <td>Image</td>
                    <td>Topic</td>
                    <td>Detail</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr align="center" bgcolor="#FFFFFF">
                        <td><?php echo $row["news_id"] ?></td>
                        <td><img height="100" src="<?php echo $path_images . $row["news_image"]; ?>"></td>
                        <td><?php echo $row["news_name"]; ?></td>
                        <td><?php echo $row["news_detail_th"]; ?><br><?php echo "วันที่ :".$row["adddate"]." แก้ไข : ".$row["lastupdate"]; ?></td>
                        <td><a href="<?php echo $path_edit . "?edit_id=" . $row["news_id"]; ?>">แก้ไข </a></td>
                        <td><a href="<?php echo $path_delete . "?delete_id=" . $row["news_id"]; ?>&delete_img=<?php echo $row["news_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a></td>
                    </tr>
                <?php
                    $i++;
                }
                mysqli_close($connection);
                ?>
            </table>
        </form>
    </div>
<?php
} else if (isset($_GET["productall"]) == "") {
    $i = 1;
    include $path_basemodel;
    $sql = "SELECT * FROM tb_news ";
    $result = mysqli_query($connection, $sql);
?>
    <div style=" width:1500px; height:425px; overflow: auto;">
        <form>
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr align="center" bgcolor="#FFFFFF">
                    <td>ID</td>
                    <td>Image</td>
                    <td>Topic</td>
                    <td>Detail</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr align="center" bgcolor="#FFFFFF">
                        <td><?php echo $row["news_id"] ?></td>
                        <td><img height="100" src="<?php echo $path_images . $row["news_image"]; ?>"></td>
                        <td><?php echo $row["news_name"]; ?></td>
                        <td><?php echo $row["news_detail_th"]; ?><br><?php echo "วันที่ :".$row["adddate"]." แก้ไข : ".$row["lastupdate"]; ?></td>
                        <td><a href="<?php echo $path_edit . "?edit_id=" . $row["news_id"]; ?>">แก้ไข </a></td>
                        <td><a href="<?php echo $path_delete . "?delete_id=" . $row["news_id"]; ?>&delete_img=<?php echo $row["news_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a></td>
                    </tr>
            <?php
                    $i++;
                }
                mysqli_close($connection);
            }
            ?>
            </table>
        </form>
    </div>