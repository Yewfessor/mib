<?php
$path_basemodel = "models/BaseModel.php";


?>
<div>
    <form action="models/linkmodel/linkupload.php" method="post" enctype="multipart/form-data" name="upload_link">
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
                <td align="center" bgcolor="#FFFFFF" colspan="6"><strong>Slide 1 & 2</strong></td>
            </tr>
            <tr>
                <td align="center" bgcolor="#FFFFFF"><strong>Images</td>
                <td align="center" bgcolor="#FFFFFF" width="150px">image 1</td>
                <td align="center" bgcolor="#FFFFFF" width="150px">image 2</td>
                <td align="center" bgcolor="#FFFFFF" width="150px"><strong>Delete</strong></td>



            </tr>

            <?php
            include $path_basemodel;
            $sql = "SELECT * FROM tb_hero ORDER BY adddate DESC";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $hide = $row["list_no"];
                $hide_2 = $row["list_no_2"];
            ?>

                <tr>
                    <td align="center" bgcolor="#FFFFFF">
                        <img width="200" src="../assets/images/hero/<?php echo $row["hero_images"]; ?>">
                        <?php echo $row["adddate"]; ?>
                    </td>
                    <?php
                    if ($hide >= 1) { ?>
                        <td align="center" bgcolor="#FFFFFF">
                            <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&hidden_list=0">hidden</a>
                        </td>
                    <?php
                    } elseif ($hide == 0) {
                    ?>
                        <td align="center" bgcolor="#FFFFFF">
                            <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&show_list=1">show</a>
                        </td>
                    <?php
                    }
                    ?>
                    <?php
                    if ($hide_2 >= 1) { ?>
                        <td align="center" bgcolor="#FFFFFF">
                            <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&hidden_list_2=0">hidden</a>
                        </td>
                    <?php
                    } elseif ($hide_2 == 0) {
                    ?>
                        <td align="center" bgcolor="#FFFFFF">
                            <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&show_list_2=1">show</a>
                        </td>
                    <?php
                    }
                    ?>
                    <td align="center" bgcolor="#FFFFFF">
                        <a href="models/heromodel/herodelete.php?delete_id=<?php echo $row["hero_id"]; ?>&delete_img=<?php echo $row["hero_images"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a>
                    </td>
                <?php
            }
                ?>
                </tr>
        </table>
    </div>
</form>