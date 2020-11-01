<div>
    <form action="models/heromodel/heroupload.php" method="post" enctype="multipart/form-data" name="upload_hero">
        <table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr align="center" bgcolor="#FFFFFF">
                <td align="center" colspan="2" bgcolor="#FFFFFF">
                    <p>Input Hero</p>
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#FFFFFF"><input type="file" name="fileupload[]" id="fileupload" multiple></td>
                <td align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="Upload"></td>
            </tr>
        </table>
    </form>
</div>






<form name="show_hero" method="post" action="models/heromodel/heroshow.php">
    <div style=" width:550px; height:425px; overflow: auto;">

        <table width="500" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
                <td align="center" bgcolor="#FFFFFF" colspan="4"><strong>Hero-Image</strong></td>
            </tr>
            <tr>
                <td align="center" bgcolor="#FFFFFF"><strong>Show/Hidden</td>
                <td align="center" bgcolor="#FFFFFF"><strong>Images</td>
                <td align="center" bgcolor="#FFFFFF" width="150px"><strong>Add-Date</strong></td>
                <td align="center" bgcolor="#FFFFFF" width="150px"><strong>Delete</strong></td>
                <td align="center" bgcolor="#FFFFFF">Show</td>
                <td align="center" bgcolor="#FFFFFF">hidden</td>
            </tr>

            <?php
            include("models/BaseModel.php");
            $sql = "SELECT * FROM tb_hero";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>

                <tr>

                    <td align="center" bgcolor="#FFFFFF">
                        <?php echo $row["list_no"]; ?>
                    </td>
                    <td align="center" bgcolor="#FFFFFF">
                        <img width="200" src="../assets/images/hero/<?php echo $row["hero_images"]; ?>">
                    </td>
                    <td align="center" bgcolor="#FFFFFF">
                        <?php echo $row["adddate"]; ?>
                    </td>
                    <td align="center" bgcolor="#FFFFFF">
                        <a href="models/heromodel/herodelete.php?delete_id=<?php echo $row["hero_id"]; ?>&delete_img=<?php echo $row["hero_images"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a>
                    </td>
                    <td align="center" bgcolor="#FFFFFF">
                        <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&show_list=1">show</a>
                    </td>
                    <td align="center" bgcolor="#FFFFFF">
                        <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&hidden_list=0">hidden</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</form>