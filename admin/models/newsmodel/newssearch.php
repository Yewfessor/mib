<?php
//path
$path_basemodel = "../BaseModel.php";
$path_images    = "../assets/images/news/";
$path_input     = "newsinput.php";
$path_delete    = "newsdelete.php";
$path_edit      = "views/newsedit.php";


include $path_basemodel;

$sql = "SELECT * FROM tb_news WHERE news_id Like '%{$_POST['newsall']}%' ORDER BY news_id ASC limit 10";
$result = mysqli_query($connection, $sql);
?>
<div class="thumbnail" style="height:270px; width:100%; overflow: auto;">
    <table border="0" cellpadding="3" cellspacing="1" width="100%">

        <tr align="center">
            <td align="center"><strong>News ID</strong></td>
            <td align="center"><strong>Image</strong></td>
            <td align="center"><strong>Topic</strong></td>
            <td align="center"><strong>Detail</strong></td>
            <td align="center" colspan="2"><strong>Option</strong></td>
        </tr>
        <?php $i = 1;
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr align="center" height="150px">
                <td><?php echo $row["news_id"] ?></td>
                <td><img height="100" src="<?php echo $path_images . $row["news_image"]; ?>"></td>
                <td><?php echo $row["news_name"]; ?></td>
                <td><?php echo $row["news_detail_th"]; ?><br><?php echo "วันที่ :" . $row["adddate"] . " แก้ไข : " . $row["lastupdate"]; ?></td>
                <td><a href="<?php echo $path_edit . "?edit_id=" . $row["news_id"]; ?>"><i class="fas fa-edit"></i></a></td>

                <td><a href="<?php echo $path_delete . "?delete_id=" . $row["news_id"]; ?>&delete_img=<?php echo $row["news_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
        <?php
        } 
        ?>

    </table>
</div>