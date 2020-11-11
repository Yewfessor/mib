<form action="models/newsmodel/newsinput.php" id="productinput" enctype="multipart/form-data" name="newsinput" method="post">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr bgcolor="#FFFFFF">
            <td>News Image : </td>
            <td><input type="file" name="news_image" id="news_image" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>News Topic : </td>
            <td><input type="text" name="news_name" id="news_name" value="" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>News Description : </td>
            <td><input type="text" name="news_description_th" id="news_description_th" value=""></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>News Detail : </td>
            <td><textarea name="news_detail_th" id="news_detail_th" required></textarea></td>
        </tr>
        <tr align="right" bgcolor="#FFFFFF">
            <td></td>
            <td><input type="submit" name="newssubmit" value="Upload"></td>
        </tr>
    </table>
</form>

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
    $path = "../assets/images/news/";
    $sql = "SELECT * FROM tb_news WHERE news_id = '" . $_GET["newsall"] . "' ";
    $result = mysqli_query($connection, $sql);
?>
    <form>
        <div style=" width:550px; height:425px; overflow: auto;">

            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr align="center" bgcolor="#FFFFFF">
                    <td>No</td>
                    <td>News Image</td>
                    <td>News Topic</td>
                    <td>News Description</td>
                    <td>News Detail</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr align="center" bgcolor="#FFFFFF">
                        <td hidden><?php echo $row["news_id"] ?></td>
                        <td><?php echo $i; ?></td>
                        <td><img height="100" src="<?php echo $path . $row["news_image"]; ?>"></td>
                        <td><?php echo $row["news_name"]; ?></td>
                        <td><?php echo $row["news_description_th"]; ?></td>
                        <td><?php echo $row["news_detail_th"]; ?></td>
                        <td><a href="views/newsedit.php?edit_id=<?php echo $row["news_id"]; ?>">แก้ไข </a></td>
                        <td><a href="models/newsmodel/newsdelete.php?delete_id=<?php echo $row["news_id"]; ?>&delete_img=<?php echo $row["news_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </table>
        </div>
    </form>
<?php
} else if (isset($_GET["productall"]) == "") {
    $i = 1;
    $path = "../assets/images/news/";
    include("models/BaseModel.php");
    $sql = "SELECT * FROM tb_news ";
    $result = mysqli_query($connection, $sql);
?>
    <form>
        <div style=" width:550px; height:425px; overflow: auto;">
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr align="center" bgcolor="#FFFFFF">
                    <td>No</td>
                    <td>News Image</td>
                    <td>News Topic</td>
                    <td>News Description</td>
                    <td>News Detail</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr align="center" bgcolor="#FFFFFF">
                    <td hidden><?php echo $row["news_id"] ?></td>
                        <td><?php echo $i; ?></td>
                        <td><img height="100" src="<?php echo $path . $row["news_image"]; ?>"></td>
                        <td><?php echo $row["news_name"]; ?></td>
                        <td><?php echo $row["news_description_th"]; ?></td>
                        <td><?php echo $row["news_detail_th"]; ?></td>
                        <td><a href="views/newsedit.php?edit_id=<?php echo $row["news_id"]; ?>">แก้ไข </a></td>
                        <td><a href="models/newsmodel/newsdelete.php?delete_id=<?php echo $row["news_id"]; ?>&delete_img=<?php echo $row["news_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a></td>
                    </tr>
            <?php
                    $i++;
                }
            }
            ?>
            </table>
        </div>
    </form>